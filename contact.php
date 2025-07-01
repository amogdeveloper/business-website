<?php 
session_start(); // Add this at the very top
include('./components/header.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load PHPMailer
require 'PHPMailer-master/PHPMailer/PHPMailer.php';
require 'PHPMailer-master/PHPMailer/SMTP.php';
require 'PHPMailer-master/PHPMailer/Exception.php';

// Initialize variables
$success = null;
$errors = [];

// Generate CSRF token if not exists
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate CSRF token
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        $errors[] = "Invalid form submission. Please try again.";
    }

    // Rate limiting (1 submission per minute)
    if (isset($_SESSION['last_submit']) && (time() - $_SESSION['last_submit'] < 60)) {
        $errors[] = "Please wait a moment before submitting another message.";
    }

    // Honeypot check
    if (!empty($_POST['website'])) {
        die(); // Silent failure for bots
    }

    // Validate inputs
    $name = trim($_POST["name"] ?? '');
    $email = filter_var($_POST["email"] ?? '', FILTER_SANITIZE_EMAIL);
    $service = $_POST["service"] ?? '';
    $message = trim($_POST["message"] ?? '');

    if (empty($name)) {
        $errors[] = "Name is required.";
    } elseif (strlen($name) > 100) {
        $errors[] = "Name is too long.";
    }

    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (empty($service)) {
        $errors[] = "Please select a service.";
    }

    if (empty($message)) {
        $errors[] = "Message is required.";
    } elseif (strlen($message) > 2000) {
        $errors[] = "Message is too long.";
    }

    // If no errors, process the form
    if (empty($errors)) {
        $mail = new PHPMailer(true);
        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'jamshaidoscar@gmail.com';
            $mail->Password   = 'jexjjjualynpbgpn';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            // Enable debugging (remove in production)
            $mail->SMTPDebug = SMTP::DEBUG_OFF; // Disable debug output // Add this for debugging

            // Recipients
            $mail->setFrom('noreply@ocentragroup.org', 'Ocentra Group Contact Form');
            $mail->addAddress('jamshaidoscar@gmail.com', 'Ocentra Group');
            $mail->addReplyTo($email, $name);

            // Content
            $mail->isHTML(true);
            $mail->Subject = "New Contact Message: $service";
            $mail->Body    = "
                <h2>New Contact Form Submission</h2>
                <p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>
                <p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>
                <p><strong>Service:</strong> " . htmlspecialchars($service) . "</p>
                <p><strong>Message:</strong><br>" . nl2br(htmlspecialchars($message)) . "</p>
                <p><small>Sent from IP: " . $_SERVER['REMOTE_ADDR'] . "</small></p>
            ";
            $mail->AltBody = "Name: $name\nEmail: $email\nService: $service\nMessage:\n$message";

            if ($mail->send()) {
                $success = "Your message has been sent successfully! We'll get back to you soon.";
                $_SESSION['last_submit'] = time();
            } else {
                $errors[] = "Message could not be sent. Please try again later.";
            }
        } catch (Exception $e) {
            $errors[] = "Message could not be sent. Error: " . $e->getMessage();
            // Log the error for debugging
            error_log('Mailer Error: ' . $e->getMessage());
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Ocentra Technologies</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Raleway:wght@800;900&display=swap');
        
        :root {
            --primary: #3b82f6;
            --secondary: #8b5cf6;
            --accent: #ec4899;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            color: #f1f5f9;
            overflow-x: hidden;
            min-height: 100vh;
        }
        
        .hero-bg {
            background: radial-gradient(circle at center, rgba(59, 130, 246, 0.2) 0%, rgba(17, 24, 39, 0) 70%);
        }
        
         .gradient-text {
      background: linear-gradient(90deg, #38bdf8,rgba(126, 10, 101, 0.47));
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
        .section-card {
            background: rgba(30, 41, 59, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.4s ease;
        }
        
        .floating {
            animation: floating 6s ease-in-out infinite;
        }
        
        @keyframes floating {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
        
        .particle {
            position: absolute;
            border-radius: 50%;
            background: rgba(59, 130, 246, 0.5);
            box-shadow: 0 0 10px rgba(59, 130, 246, 0.5);
        }
        
        .glow {
            box-shadow: 0 0 20px rgba(59, 130, 246, 0.7);
        }
        
        .hologram {
            position: relative;
            overflow: hidden;
        }
        
        .hologram::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, 
                rgba(59, 130, 246, 0) 0%, 
                rgba(59, 130, 246, 0.2) 25%, 
                rgba(139, 92, 246, 0.4) 50%, 
                rgba(236, 72, 153, 0.2) 75%, 
                rgba(59, 130, 246, 0) 100%);
            transform: rotate(45deg);
            animation: hologram-effect 4s linear infinite;
            z-index: 1;
        }
        
        @keyframes hologram-effect {
            0% { transform: rotate(45deg) translateX(-50%); }
            100% { transform: rotate(45deg) translateX(50%); }
        }
        
        .hologram-content {
            position: relative;
            z-index: 2;
        }
        
        .input-glow:focus {
            box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.5);
            border-color: var(--primary);
        }
        
        .btn-glow {
            transition: all 0.3s ease;
        }
        
        .btn-glow:hover {
            box-shadow: 0 0 20px rgba(59, 130, 246, 0.7);
            transform: translateY(-3px);
        }
        
        .contact-icon {
            transition: all 0.3s ease;
        }
        
        .contact-icon:hover {
            transform: scale(1.2);
            filter: drop-shadow(0 0 8px rgba(59, 130, 246, 0.7));
        }
        
        .map-container {
            border-radius: 20px;
            overflow: hidden;
            transform: perspective(1000px) rotateX(5deg) rotateY(-5deg);
            transition: all 0.5s ease;
        }
        
        .map-container:hover {
            transform: perspective(1000px) rotateX(0) rotateY(0);
        }
        
        .animate-in {
            opacity: 0;
            transform: translateY(30px);
        }
        
        .pulse {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        .glitch {
            position: relative;
        }
        
        .glitch::before,
        .glitch::after {
            content: attr(data-text);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        
        .glitch::before {
            left: 2px;
            text-shadow: -2px 0 #ff00c1;
            clip: rect(44px, 450px, 56px, 0);
            animation: glitch-anim 5s infinite linear alternate-reverse;
        }
        
        .glitch::after {
            left: -2px;
            text-shadow: -2px 0 #00fff9, 2px 2px #ff00c1;
            clip: rect(44px, 450px, 56px, 0);
            animation: glitch-anim2 5s infinite linear alternate-reverse;
        }
        
        @keyframes glitch-anim {
            0% { clip: rect(42px, 9999px, 44px, 0); }
            5% { clip: rect(12px, 9999px, 59px, 0); }
            10% { clip: rect(48px, 9999px, 29px, 0); }
            15% { clip: rect(42px, 9999px, 73px, 0); }
            20% { clip: rect(63px, 9999px, 27px, 0); }
            25% { clip: rect(34px, 9999px, 55px, 0); }
            30% { clip: rect(86px, 9999px, 73px, 0); }
            35% { clip: rect(20px, 9999px, 20px, 0); }
            40% { clip: rect(26px, 9999px, 60px, 0); }
            45% { clip: rect(25px, 9999px, 66px, 0); }
            50% { clip: rect(57px, 9999px, 98px, 0); }
            55% { clip: rect(5px, 9999px, 46px, 0); }
            60% { clip: rect(82px, 9999px, 31px, 0); }
            65% { clip: rect(54px, 9999px, 27px, 0); }
            70% { clip: rect(28px, 9999px, 99px, 0); }
            75% { clip: rect(45px, 9999px, 69px, 0); }
            80% { clip: rect(23px, 9999px, 85px, 0); }
            85% { clip: rect(54px, 9999px, 84px, 0); }
            90% { clip: rect(45px, 9999px, 47px, 0); }
            95% { clip: rect(37px, 9999px, 20px, 0); }
            100% { clip: rect(73px, 9999px, 99px, 0); }
        }
        
        @keyframes glitch-anim2 {
            0% { clip: rect(65px, 9999px, 100px, 0); }
            5% { clip: rect(52px, 9999px, 74px, 0); }
            10% { clip: rect(79px, 9999px, 85px, 0); }
            15% { clip: rect(75px, 9999px, 5px, 0); }
            20% { clip: rect(67px, 9999px, 61px, 0); }
            25% { clip: rect(14px, 9999px, 79px, 0); }
            30% { clip: rect(1px, 9999px, 66px, 0); }
            35% { clip: rect(86px, 9999px, 30px, 0); }
            40% { clip: rect(23px, 9999px, 98px, 0); }
            45% { clip: rect(85px, 9999px, 72px, 0); }
            50% { clip: rect(71px, 9999px, 75px, 0); }
            55% { clip: rect(2px, 9999px, 48px, 0); }
            60% { clip: rect(30px, 9999px, 16px, 0); }
            65% { clip: rect(59px, 9999px, 50px, 0); }
            70% { clip: rect(41px, 9999px, 62px, 0); }
            75% { clip: rect(2px, 9999px, 82px, 0); }
            80% { clip: rect(47px, 9999px, 73px, 0); }
            85% { clip: rect(3px, 9999px, 27px, 0); }
            90% { clip: rect(26px, 9999px, 55px, 0); }
            95% { clip: rect(42px, 9999px, 97px, 0); }
            100% { clip: rect(38px, 9999px, 49px, 0); }
        }
    </style>
</head>
<body class="min-h-screen">
    <!-- Particles Background -->
    <div id="particles" class="fixed inset-0 z-0"></div>
    
    <!-- Hero Section -->
    <section class="relative min-h-[70vh] flex items-center justify-center overflow-hidden hero-bg">
      
        <div class="container mx-auto px-4 py-16 relative z-10">
            <div class="text-center max-w-4xl mx-auto">
                <h1 class="text-5xl md:text-7xl font-bold mb-6 glitch" data-text="CONTACT US">
                    <span class="gradient-text">CONTACT US</span>
                </h1>
                <p class="text-xl md:text-2xl text-slate-300 mb-10 max-w-2xl mx-auto">
                    Reach out to our team and let's build something amazing together
                </p>
                
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="#contact-form" class="px-8 py-3 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full font-bold text-lg shadow-lg hover:shadow-xl transition-all transform hover:scale-105 btn-glow">
                        Send a Message
                    </a>
                    <a href="tel:+1234567890" class="px-8 py-3 bg-transparent border-2 border-white text-white rounded-full font-bold text-lg hover:bg-white hover:text-gray-900 transition-all">
                        <i class="fas fa-phone mr-2"></i> Call Now
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Information -->
    <section class="py-16 relative z-10">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Contact Card 1 -->
                <div class="section-card animate-in p-8 text-center">
                    <div class="bg-gradient-to-r from-blue-500 to-purple-500 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6 glow contact-icon">
                        <i class="fas fa-map-marker-alt text-3xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Our Location</h3>
                    <p class="text-slate-300 mb-4">
                        123 Tech Avenue<br>
                        Silicon Valley, CA 94043<br>
                        United States
                    </p>
                    <a href="#" class="text-blue-400 hover:text-blue-300 transition">
                        Get Directions <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
                
                <!-- Contact Card 2 -->
                <div class="section-card animate-in p-8 text-center">
                    <div class="bg-gradient-to-r from-purple-500 to-pink-500 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6 glow contact-icon">
                        <i class="fas fa-phone-alt text-3xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Call Us</h3>
                    <p class="text-slate-300 mb-4">
                        +1 (555) 123-4567<br>
                        Mon-Fri: 9am - 6pm<br>
                        Sat: 10am - 4pm
                    </p>
                    <a href="tel:+15551234567" class="text-purple-400 hover:text-purple-300 transition">
                        Call Now <i class="fas fa-phone ml-1"></i>
                    </a>
                </div>
                
                <!-- Contact Card 3 -->
                <div class="section-card animate-in p-8 text-center">
                    <div class="bg-gradient-to-r from-cyan-500 to-blue-500 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6 glow contact-icon">
                        <i class="fas fa-envelope text-3xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Email Us</h3>
                    <p class="text-slate-300 mb-4">
                        info@ocentra.tech<br>
                        support@ocentra.tech<br>
                        careers@ocentra.tech
                    </p>
                    <a href="mailto:info@ocentra.tech" class="text-cyan-400 hover:text-cyan-300 transition">
                        Send Email <i class="fas fa-paper-plane ml-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form & Map -->
    <section id="contact-form" class="py-16 relative z-10">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="section-card animate-in p-8">
                    <h2 class="text-3xl font-bold mb-2 gradient-text">Send Us a Message</h2>
                    <p class="text-slate-400 mb-8">We'll get back to you as soon as possible</p>
                   <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" class="space-y-6">
        <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
        
        <!-- Honeypot field -->
        <div class="hidden">
          <label for="website">Website</label>
          <input type="text" name="website" id="website">
        </div>

        <!-- Name -->
        <div>
          <label for="name" class="block text-sm font-medium text-white mb-1">Your Name *</label>
          <input type="text" name="name" id="name" required value="<?= isset($name) ? htmlspecialchars($name) : '' ?>"
            class="w-full px-4 py-3 text-black rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-400 focus:outline-none transition"
            minlength="2" maxlength="100">
        </div>

        <!-- Email -->
        <div>
          <label for="email" class="block text-sm font-medium text-white mb-1">Your Email *</label>
          <input type="email" name="email" id="email" required value="<?= isset($email) ? htmlspecialchars($email) : '' ?>"
            class="w-full px-4 py-3 text-black rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-400 focus:outline-none transition"
            maxlength="100">
        </div>

        <!-- Service -->
        <div>
          <label for="service" class="block text-sm font-medium text-white mb-1">Query Related To *</label>
          <select name="service" id="service" required
            class="w-full text-black px-4 py-3 rounded-lg border border-gray-300 bg-white focus:ring-2 focus:ring-blue-400 focus:outline-none transition">
            <option value="" disabled selected>Select a Service</option>
            <option value="Renewable Services (Electrical Engineering)" <?= (isset($service) && $service === 'Renewable Services (Electrical Engineering)') ? 'selected' : '' ?>>Renewable Services (Electrical Engineering)</option>
            <option value="Travel and Study Visa" <?= (isset($service) && $service === 'Travel and Study Visa') ? 'selected' : '' ?>>Travel and Study Visa</option>
            <option value="IT Solutions" <?= (isset($service) && $service === 'IT Solutions') ? 'selected' : '' ?>>IT Solutions</option>
            <option value="Professional Trainings" <?= (isset($service) && $service === 'Professional Trainings') ? 'selected' : '' ?>>Professional Trainings</option>
            <option value="Abdullah Traders" <?= (isset($service) && $service === 'Abdullah Traders') ? 'selected' : '' ?>>Abdullah Traders</option>
          </select>
        </div>

        <!-- Message -->
        <div>
          <label for="message" class="block text-sm font-medium text-white mb-1">Your Message *</label>
          <textarea name="message" id="message" rows="5" required
            class="w-full px-4 py-3 rounded-lg border text-black border-gray-300 focus:ring-2 focus:ring-blue-400 focus:outline-none transition resize-none"
            minlength="10" maxlength="2000"><?= isset($message) ? htmlspecialchars($message) : '' ?></textarea>
        </div>

        <!-- Submit Button -->
        <div>
          <button type="submit"
            class="w-full py-3 px-6 rounded-lg bg-blue-900 text-white font-semibold hover:bg-blue-800 transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2">
            <i class="fas fa-paper-plane mr-2"></i> Send Message
          </button>
        </div>
      </form>
                </div>
                
                <!-- Map -->
                <div class="section-card animate-in overflow-hidden p-0">
                    <div class="map-container h-full">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d101453.17164994384!2d-122.15020499999999!3d37.413299999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb7495bec0189%3A0x7c17d44a466baf9b!2sMountain%20View%2C%20CA%2C%20USA!5e0!3m2!1sen!2s!4v1690834321231!5m2!1sen!2s" 
                            class="w-full h-full border-0" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 relative z-10">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    Frequently <span class="gradient-text">Asked Questions</span>
                </h2>
                <p class="text-xl text-slate-300 max-w-3xl mx-auto">
                    Find answers to common questions about our services and processes
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto">
                <!-- FAQ 1 -->
                <div class="section-card animate-in p-6">
                    <h3 class="text-xl font-bold mb-3 flex items-center">
                        <i class="fas fa-question-circle text-blue-400 mr-3"></i>
                        How quickly do you respond to inquiries?
                    </h3>
                    <p class="text-slate-300">
                        We typically respond to all inquiries within 24 hours during business days. For urgent matters, please call our support line directly.
                    </p>
                </div>
                
                <!-- FAQ 2 -->
                <div class="section-card animate-in p-6">
                    <h3 class="text-xl font-bold mb-3 flex items-center">
                        <i class="fas fa-question-circle text-purple-400 mr-3"></i>
                        What industries do you specialize in?
                    </h3>
                    <p class="text-slate-300">
                        We have expertise across multiple sectors including FinTech, HealthTech, E-commerce, AI & Machine Learning, and IoT solutions.
                    </p>
                </div>
                
                <!-- FAQ 3 -->
                <div class="section-card animate-in p-6">
                    <h3 class="text-xl font-bold mb-3 flex items-center">
                        <i class="fas fa-question-circle text-cyan-400 mr-3"></i>
                        Do you offer custom development services?
                    </h3>
                    <p class="text-slate-300">
                        Yes, we specialize in custom software development tailored to your specific business needs and requirements.
                    </p>
                </div>
                
                <!-- FAQ 4 -->
                <div class="section-card animate-in p-6">
                    <h3 class="text-xl font-bold mb-3 flex items-center">
                        <i class="fas fa-question-circle text-pink-400 mr-3"></i>
                        What are your working hours?
                    </h3>
                    <p class="text-slate-300">
                        Our standard office hours are 9:00 AM to 6:00 PM PST, Monday through Friday. Support is available 24/7 for critical issues.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-purple-500/10 z-0"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">Ready to Start Your Project?</h2>
                <p class="text-xl text-slate-300 mb-10 max-w-2xl mx-auto">
                    Let's discuss how we can help you achieve your business goals with our technology solutions.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="#contact-form" class="px-8 py-4 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full font-bold text-lg shadow-lg hover:shadow-xl transition-all transform hover:scale-105 btn-glow pulse">
                        Get in Touch
                    </a>
                    <a href="tel:+15551234567" class="px-8 py-4 bg-transparent border-2 border-white text-white rounded-full font-bold text-lg hover:bg-white hover:text-gray-900 transition-all">
                        <i class="fas fa-phone mr-2"></i> Call Us Now
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-900 border-t border-slate-800 py-12 relative z-10">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="md:col-span-2">
                    <h2 class="text-2xl font-bold gradient-text mb-4">Ocentra Technologies</h2>
                    <p class="text-slate-400 mb-6">Innovating the future, today. We create cutting-edge technology solutions that transform businesses and empower people.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-slate-400 hover:text-white transition">
                            <i class="fab fa-facebook text-xl"></i>
                        </a>
                        <a href="#" class="text-slate-400 hover:text-white transition">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="#" class="text-slate-400 hover:text-white transition">
                            <i class="fab fa-linkedin text-xl"></i>
                        </a>
                        <a href="#" class="text-slate-400 hover:text-white transition">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="#" class="text-slate-400 hover:text-white transition">
                            <i class="fab fa-github text-xl"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-lg font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-slate-400 hover:text-white transition">Home</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-white transition">About Us</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-white transition">Services</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-white transition">Projects</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-white transition">Careers</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-bold mb-4">Contact</h3>
                    <ul class="space-y-2">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt text-blue-400 mt-1 mr-3"></i>
                            <span class="text-slate-400">123 Tech Avenue, Silicon Valley, CA</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-phone text-purple-400 mt-1 mr-3"></i>
                            <span class="text-slate-400">+1 (555) 123-4567</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-envelope text-cyan-400 mt-1 mr-3"></i>
                            <span class="text-slate-400">info@ocentra.tech</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-slate-800 mt-8 pt-8 text-center text-slate-500">
                <p>© 2023 Ocentra Technologies. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Create particles
            const particlesContainer = document.getElementById('particles');
            const particleCount = 50;
            
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.classList.add('particle');
                
                // Random size, position and color
                const size = Math.random() * 5 + 2;
                const posX = Math.random() * 100;
                const posY = Math.random() * 100;
                const hue = 200 + Math.random() * 60;
                const opacity = Math.random() * 0.5 + 0.1;
                
                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                particle.style.left = `${posX}%`;
                particle.style.top = `${posY}%`;
                particle.style.background = `rgba(59, 130, 246, ${opacity})`;
                particle.style.animationDelay = `${Math.random() * 5}s`;
                
                particlesContainer.appendChild(particle);
                
                // Animate particles
                gsap.to(particle, {
                    x: Math.random() * 100 - 50,
                    y: Math.random() * 100 - 50,
                    duration: Math.random() * 20 + 10,
                    repeat: -1,
                    yoyo: true,
                    ease: "sine.inOut"
                });
            }
            
            // Animate elements on scroll
            gsap.utils.toArray('.animate-in').forEach((el, index) => {
                gsap.to(el, {
                    scrollTrigger: {
                        trigger: el,
                        start: 'top 90%',
                        toggleActions: 'play none none none'
                    },
                    y: 0,
                    opacity: 1,
                    duration: 0.8,
                    delay: index * 0.1,
                    ease: "back.out(1.7)"
                });
            });
            
            // Form animation
            const inputs = document.querySelectorAll('input, textarea');
            inputs.forEach(input => {
                input.addEventListener('focus', () => {
                    gsap.to(input, {
                        scale: 1.02,
                        duration: 0.3
                    });
                });
                
                input.addEventListener('blur', () => {
                    gsap.to(input, {
                        scale: 1,
                        duration: 0.3
                    });
                });
            });
            
            // Button animations
            const buttons = document.querySelectorAll('.btn-glow');
            buttons.forEach(btn => {
                btn.addEventListener('mouseenter', () => {
                    gsap.to(btn, {
                        boxShadow: '0 0 20px rgba(59, 130, 246, 0.7)',
                        duration: 0.3
                    });
                });
                
                btn.addEventListener('mouseleave', () => {
                    gsap.to(btn, {
                        boxShadow: '0 0 10px rgba(59, 130, 246, 0.3)',
                        duration: 0.3
                    });
                });
            });
        });
    </script>
</body>
</html>