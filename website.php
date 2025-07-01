
<?php include("./background.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Development Services | Ocentra Technologies</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Raleway:wght@800;900&display=swap');
        
        :root {
            --primary: #3b82f6;
            --secondary: #8b5cf6;
            --accent: #ec4899;
            --dark: #0f172a;
            --darker: #0a0f1d;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, var(--darker) 0%, var(--dark) 100%);
            color: #f1f5f9;
            overflow-x: hidden;
            min-height: 100vh;
        }
        
        .hero-bg {
            background: radial-gradient(circle at 80% 20%, rgba(59, 130, 246, 0.15) 0%, rgba(17, 24, 39, 0) 70%);
        }
        
       .gradient-text {
      background: linear-gradient(90deg, #38bdf8, #818cf8);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
        
        .section-card {
            background: rgba(30, 41, 59, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 16px;
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
        
        .glow {
            box-shadow: 0 0 20px rgba(59, 130, 246, 0.7);
        }
        
        .tech-icon {
            transition: all 0.4s ease;
            filter: grayscale(0.8);
        }
        
        .tech-icon:hover {
            transform: translateY(-10px);
            filter: grayscale(0);
        }
        
        .service-card {
            transition: all 0.4s ease;
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            border-color: var(--primary);
            background: rgba(59, 130, 246, 0.1);
        }
        
        .process-step {
            position: relative;
            z-index: 1;
        }
        
        .process-step::before {
            content: '';
            position: absolute;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--primary);
            top: -20px;
            left: -20px;
            z-index: -1;
            opacity: 0.3;
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
        
        .portfolio-item {
            transition: all 0.4s ease;
            transform: perspective(1000px) rotateX(0) rotateY(0);
        }
        
        .portfolio-item:hover {
            transform: perspective(1000px) rotateX(5deg) rotateY(-5deg);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        }
        
        .testimonial-card {
            transition: all 0.4s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .testimonial-card:hover {
            transform: translateY(-10px);
            border-color: var(--primary);
        }
        
        .faq-item {
            transition: all 0.3s ease;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .faq-item:last-child {
            border-bottom: none;
        }
        
        .faq-question {
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .faq-question:hover {
            color: var(--primary);
        }
        
        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }
        
        .faq-item.active .faq-answer {
            max-height: 500px;
        }
        
        .gradient-border {
            position: relative;
            border-radius: 16px;
        }
        
        .gradient-border::before {
            content: '';
            position: absolute;
            top: -1px;
            left: -1px;
            right: -1px;
            bottom: -1px;
            background: linear-gradient(45deg, var(--primary), var(--secondary), var(--accent));
            border-radius: 16px;
            z-index: -1;
        }
    </style>
</head>
<body class="min-h-screen">
    <!-- Navigation -->
<?php include ('./components/header.php') ?>
    <!-- Hero Section -->
    <section class="min-h-screen flex items-center justify-center overflow-hidden hero-bg">
        <div class="container mx-auto px-4 py-16 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <div class="inline-block bg-blue-900/30 px-4 py-1 rounded-full text-blue-300 mb-6">
                        <i class="fas fa-rocket mr-2"></i> Transform Your Digital Presence
                    </div>
                    <h1 class="text-4xl md:text-6xl font-bold mb-6">
                        Premium <span class="gradient-text">Web Development</span> Services
                    </h1>
                    <p class="text-xl text-slate-300 mb-10">
                        We build high-performance websites and web applications that drive business growth, enhance user experiences, and deliver measurable results.
                    </p>
                    
                    <div class="flex flex-wrap gap-4">
                        <a href="#services" class="px-8 py-3 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full font-bold text-lg shadow-lg hover:shadow-xl transition-all transform hover:scale-105">
                            Explore Services
                        </a>
                        <a href="#contact" class="px-8 py-3 bg-transparent border-2 border-white text-white rounded-full font-bold text-lg hover:bg-white hover:text-gray-900 transition-all">
                            Get a Quote
                        </a>
                    </div>
                </div>
                
                <div class="relative">
                    <div class="floating">
                        <div class="gradient-border">
                            <div class="bg-gray-900 rounded-xl p-8">
                                <div class="flex justify-between mb-8">
                                    <div>
                                        <div class="text-lg font-bold">Modern Web Solutions</div>
                                        <div class="text-slate-400">Custom-built for your business</div>
                                    </div>
                                    <div class="bg-blue-500/20 p-2 rounded-lg">
                                        <i class="fas fa-code text-2xl text-blue-400"></i>
                                    </div>
                                </div>
                                <div class="grid grid-cols-3 gap-4 mb-8">
                                    <div class="tech-icon bg-gray-800 rounded-lg p-4 flex items-center justify-center">
                                        <i class="fab fa-react text-3xl text-cyan-400"></i>
                                    </div>
                                    <div class="tech-icon bg-gray-800 rounded-lg p-4 flex items-center justify-center">
                                        <i class="fab fa-vuejs text-3xl text-green-400"></i>
                                    </div>
                                    <div class="tech-icon bg-gray-800 rounded-lg p-4 flex items-center justify-center">
                                        <i class="fab fa-angular text-3xl text-red-400"></i>
                                    </div>
                                    <div class="tech-icon bg-gray-800 rounded-lg p-4 flex items-center justify-center">
                                        <i class="fab fa-node-js text-3xl text-green-500"></i>
                                    </div>
                                    <div class="tech-icon bg-gray-800 rounded-lg p-4 flex items-center justify-center">
                                        <i class="fab fa-python text-3xl text-blue-400"></i>
                                    </div>
                                    <div class="tech-icon bg-gray-800 rounded-lg p-4 flex items-center justify-center">
                                        <i class="fab fa-aws text-3xl text-amber-400"></i>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <div class="text-2xl font-bold gradient-text mb-2">100+ Projects</div>
                                    <div class="text-slate-400">Delivered to satisfied clients worldwide</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-16 relative z-10">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    Our <span class="gradient-text">Web Development</span> Services
                </h2>
                <p class="text-xl text-slate-300 max-w-3xl mx-auto">
                    Comprehensive solutions to build, enhance, and maintain your digital presence
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Service 1 -->
                <div class="service-card section-card animate-in p-8">
                    <div class="bg-blue-500/20 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-laptop-code text-3xl text-blue-400"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-center">Custom Web Development</h3>
                    <p class="text-slate-300 mb-4">
                        Bespoke websites and web applications built from scratch to meet your specific business requirements.
                    </p>
                    <ul class="space-y-2 text-slate-300 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Responsive design
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Modern frameworks
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            API integrations
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Performance optimization
                        </li>
                    </ul>
                    <button class="w-full py-3 bg-gradient-to-r from-blue-600 to-blue-800 rounded-lg font-medium">
                        Learn More
                    </button>
                </div>
                
                <!-- Service 2 -->
                <div class="service-card section-card animate-in p-8">
                    <div class="bg-purple-500/20 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-shopping-cart text-3xl text-purple-400"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-center">E-commerce Solutions</h3>
                    <p class="text-slate-300 mb-4">
                        Powerful online stores with seamless checkout, inventory management, and payment integrations.
                    </p>
                    <ul class="space-y-2 text-slate-300 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Shopping cart systems
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Payment gateway integration
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Product management
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Order tracking
                        </li>
                    </ul>
                    <button class="w-full py-3 bg-gradient-to-r from-purple-600 to-purple-800 rounded-lg font-medium">
                        Learn More
                    </button>
                </div>
                
                <!-- Service 3 -->
                <div class="service-card section-card animate-in p-8">
                    <div class="bg-cyan-500/20 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-mobile-alt text-3xl text-cyan-400"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-center">Progressive Web Apps</h3>
                    <p class="text-slate-300 mb-4">
                        App-like experiences with offline capabilities, push notifications, and home screen installation.
                    </p>
                    <ul class="space-y-2 text-slate-300 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Offline functionality
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Push notifications
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Fast loading
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Cross-platform
                        </li>
                    </ul>
                    <button class="w-full py-3 bg-gradient-to-r from-cyan-600 to-cyan-800 rounded-lg font-medium">
                        Learn More
                    </button>
                </div>
                
                <!-- Service 4 -->
                <div class="service-card section-card animate-in p-8">
                    <div class="bg-amber-500/20 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-cogs text-3xl text-amber-400"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-center">API Development</h3>
                    <p class="text-slate-300 mb-4">
                        Robust RESTful and GraphQL APIs to connect your applications and services.
                    </p>
                    <ul class="space-y-2 text-slate-300 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            REST & GraphQL APIs
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Secure authentication
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Third-party integrations
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Webhooks
                        </li>
                    </ul>
                    <button class="w-full py-3 bg-gradient-to-r from-amber-600 to-amber-800 rounded-lg font-medium">
                        Learn More
                    </button>
                </div>
                
                <!-- Service 5 -->
                <div class="service-card section-card animate-in p-8">
                    <div class="bg-pink-500/20 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-tools text-3xl text-pink-400"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-center">Maintenance & Support</h3>
                    <p class="text-slate-300 mb-4">
                        Ongoing website maintenance, security updates, and technical support.
                    </p>
                    <ul class="space-y-2 text-slate-300 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Regular updates
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Security monitoring
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Performance optimization
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            24/7 support
                        </li>
                    </ul>
                    <button class="w-full py-3 bg-gradient-to-r from-pink-600 to-pink-800 rounded-lg font-medium">
                        Learn More
                    </button>
                </div>
                
                <!-- Service 6 -->
                <div class="service-card section-card animate-in p-8">
                    <div class="bg-green-500/20 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-search-dollar text-3xl text-green-400"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-center">SEO Optimization</h3>
                    <p class="text-slate-300 mb-4">
                        Technical SEO implementation to improve search rankings and organic traffic.
                    </p>
                    <ul class="space-y-2 text-slate-300 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            On-page optimization
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Technical SEO audit
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Schema markup
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Performance improvements
                        </li>
                    </ul>
                    <button class="w-full py-3 bg-gradient-to-r from-green-600 to-green-800 rounded-lg font-medium">
                        Learn More
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section id="process" class="py-16 relative z-10 bg-gradient-to-br from-slate-900 to-slate-800">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    Our <span class="gradient-text">Development Process</span>
                </h2>
                <p class="text-xl text-slate-300 max-w-3xl mx-auto">
                    Transparent, collaborative, and results-driven approach to web development
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">
                <!-- Step 1 -->
                <div class="process-step section-card animate-in p-6">
                    <div class="text-4xl font-bold text-blue-400 mb-4">01</div>
                    <h3 class="text-xl font-bold mb-3">Discovery & Planning</h3>
                    <p class="text-slate-300">
                        We dive deep into your business goals, target audience, and requirements to create a strategic plan.
                    </p>
                </div>
                
                <!-- Step 2 -->
                <div class="process-step section-card animate-in p-6">
                    <div class="text-4xl font-bold text-purple-400 mb-4">02</div>
                    <h3 class="text-xl font-bold mb-3">Design & Prototyping</h3>
                    <p class="text-slate-300">
                        Our designers create wireframes and prototypes for your review and approval.
                    </p>
                </div>
                
                <!-- Step 3 -->
                <div class="process-step section-card animate-in p-6">
                    <div class="text-4xl font-bold text-cyan-400 mb-4">03</div>
                    <h3 class="text-xl font-bold mb-3">Development</h3>
                    <p class="text-slate-300">
                        Our developers build your solution using modern technologies and best practices.
                    </p>
                </div>
                
                <!-- Step 4 -->
                <div class="process-step section-card animate-in p-6">
                    <div class="text-4xl font-bold text-green-400 mb-4">04</div>
                    <h3 class="text-xl font-bold mb-3">Testing & Launch</h3>
                    <p class="text-slate-300">
                        We rigorously test your solution and deploy it to your live environment.
                    </p>
                </div>
            </div>
            
            <div class="mt-16 text-center">
                <a href="#contact" class="inline-block px-8 py-4 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full font-bold text-lg shadow-lg hover:shadow-xl transition-all transform hover:scale-105">
                    Start Your Project
                </a>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="py-16 relative z-10">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    Our <span class="gradient-text">Portfolio</span>
                </h2>
                <p class="text-xl text-slate-300 max-w-3xl mx-auto">
                    Explore some of our recent web development projects
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Portfolio 1 -->
                <div class="portfolio-item section-card animate-in overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" alt="E-commerce Platform" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <div class="text-blue-400 text-sm mb-2">E-commerce</div>
                        <h3 class="text-xl font-bold mb-3">Luxury Fashion Store</h3>
                        <p class="text-slate-300 mb-4">
                            High-performance e-commerce platform with custom product configurator.
                        </p>
                        <div class="flex justify-between items-center">
                            <div class="text-sm text-slate-400">React, Node.js, Stripe</div>
                            <a href="#" class="text-blue-400 hover:text-blue-300">
                                View Project <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Portfolio 2 -->
                <div class="portfolio-item section-card animate-in overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1115&q=80" alt="Fintech Dashboard" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <div class="text-purple-400 text-sm mb-2">Fintech</div>
                        <h3 class="text-xl font-bold mb-3">Investment Dashboard</h3>
                        <p class="text-slate-300 mb-4">
                            Real-time financial dashboard with data visualization and reporting.
                        </p>
                        <div class="flex justify-between items-center">
                            <div class="text-sm text-slate-400">Vue.js, D3.js, Firebase</div>
                            <a href="#" class="text-purple-400 hover:text-purple-300">
                                View Project <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Portfolio 3 -->
                <div class="portfolio-item section-card animate-in overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Healthcare Platform" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <div class="text-green-400 text-sm mb-2">Healthcare</div>
                        <h3 class="text-xl font-bold mb-3">Telemedicine Platform</h3>
                        <p class="text-slate-300 mb-4">
                            HIPAA-compliant platform connecting patients with healthcare providers.
                        </p>
                        <div class="flex justify-between items-center">
                            <div class="text-sm text-slate-400">Angular, Node.js, WebRTC</div>
                            <a href="#" class="text-green-400 hover:text-green-300">
                                View Project <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-12 text-center">
                <a href="#" class="inline-block px-6 py-3 border-2 border-white text-white rounded-full font-medium hover:bg-white hover:text-gray-900 transition-all">
                    View All Projects
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-purple-500/10 z-0"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">Ready to Build Your Web Solution?</h2>
                <p class="text-xl text-slate-300 mb-10 max-w-2xl mx-auto">
                    Let's discuss how we can create a custom web solution for your business
                </p>
                <a href="#contact" class="inline-block px-8 py-4 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full font-bold text-lg shadow-lg hover:shadow-xl transition-all transform hover:scale-105 pulse">
                    Get a Free Consultation
                </a>
            </div>
        </div>
    </section>


<?php include ('./components/footer.php') ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize GSAP and ScrollTrigger
            gsap.registerPlugin(ScrollTrigger);
            
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
            
            // Tech icon animations
            const techIcons = document.querySelectorAll('.tech-icon');
            techIcons.forEach(icon => {
                icon.addEventListener('mouseenter', () => {
                    gsap.to(icon, {
                        y: -10,
                        duration: 0.3
                    });
                });
                
                icon.addEventListener('mouseleave', () => {
                    gsap.to(icon, {
                        y: 0,
                        duration: 0.3
                    });
                });
            });
            
            // Service card animations
            const serviceCards = document.querySelectorAll('.service-card');
            serviceCards.forEach(card => {
                card.addEventListener('mouseenter', () => {
                    gsap.to(card, {
                        y: -10,
                        duration: 0.3
                    });
                });
                
                card.addEventListener('mouseleave', () => {
                    gsap.to(card, {
                        y: 0,
                        duration: 0.3
                    });
                });
            });
        });
    </script>
</body>
</html>