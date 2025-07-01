<?php include("background.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ocentra technologies</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .hero-section {
            position: relative;
            height: 100vh;
            overflow: hidden;
        }
        .slider-container {
            position: absolute;
            width: 100%;
            height: 100%;
        }
        .slider-image {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0;
            transition: opacity 1s ease-in-out;
            z-index: 1;
        }
        .slider-image.active {
            opacity: 1;
            z-index: 2;
        }
        .hero-content {
            position: relative;
            z-index: 3;
        }
        .text-shadow {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        .slider-controls {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 4;
            display: flex;
            gap: 10px;
        }
        .slider-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .slider-dot.active {
            background-color: white;
            transform: scale(1.2);
        }
         .feature-card {
      background: linear-gradient(145deg, rgba(30, 41, 59, 0.7), rgba(15, 23, 42, 0.9));
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.08);
      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.1);
    }
    .feature-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 15px 30px rgba(56, 189, 248, 0.15);
      border-color: rgba(56, 189, 248, 0.3);
    }
    .gradient-text {
      background: linear-gradient(90deg, #38bdf8, #818cf8);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .pulse-animation {
      animation: pulse 3s infinite;
    }
    @keyframes pulse {
      0%, 100% { transform: scale(1); }
      50% { transform: scale(1.05); }
    }
    .counter-box {
      background: linear-gradient(135deg, rgba(56, 189, 248, 0.1), rgba(129, 140, 248, 0.1));
    }
    </style>
     <style>
        .header-glass {
            background: rgba(10, 10, 15, 0.85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }
        .nav-link {
            position: relative;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 0;
            background: linear-gradient(90deg, #38bdf8, #94a3b8);
            transition: width 0.3s ease;
        }
        .nav-link:hover::after {
            width: 100%;
        }
        .logo-container {
            transition: all 0.4s ease;
        }
        .logo-container:hover {
            transform: scale(1.05);
            filter: drop-shadow(0 0 8px rgba(56, 189, 248, 0.4));
        }
        .social-icon {
            transition: all 0.3s ease;
        }
        .social-icon:hover {
            transform: translateY(-3px) scale(1.1);
        }
           .service-card {
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      border: 1px solid rgba(255, 255, 255, 0.08);
      transition: all 0.4s ease;
    }
    .service-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 25px rgba(56, 189, 248, 0.2);
      border-color: rgba(56, 189, 248, 0.3);
    }
    .gradient-text {
      background: linear-gradient(90deg, #38bdf8, #818cf8);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .icon-box {
      background: linear-gradient(135deg, rgba(56, 189, 248, 0.1), rgba(129, 140, 248, 0.1));
    }
    .gradient-text {
      background: linear-gradient(90deg, #38bdf8, #818cf8);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .image-container {
      position: relative;
      overflow: hidden;
      border-radius: 1rem;
    }
    .image-container img {
      transition: transform 0.8s ease;
    }
    .image-container:hover img {
      transform: scale(1.05);
    }
    .image-container::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(45deg, rgba(56, 189, 248, 0.1), rgba(129, 140, 248, 0.1));
      z-index: 1;
      opacity: 0;
      transition: opacity 0.5s ease;
    }
    .image-container:hover::before {
      opacity: 1;
    }
    .review-card {
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      border: 1px solid rgba(255, 255, 255, 0.08);
      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.1);
    }
    .review-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 15px 30px rgba(56, 189, 248, 0.15);
      border-color: rgba(56, 189, 248, 0.3);
    }
    .gradient-text {
      background: linear-gradient(90deg, #38bdf8, #818cf8);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .quote-icon {
      opacity: 0.1;
      font-size: 5rem;
      position: absolute;
      top: -10px;
      right: 20px;
      z-index: 0;
    }
    .star-rating i {
      color: #fbbf24;
      text-shadow: 0 2px 4px rgba(251, 191, 36, 0.3);
    }
    .dynamic-bg {
      background: linear-gradient(-45deg, #1e3a8a, #1e40af, #1d4ed8, #3b82f6);
      background-size: 400% 400%;
      animation: gradientBG 15s ease infinite;
    }
    @keyframes gradientBG {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }
    .content-card {
      backdrop-filter: blur(12px);
      background: rgba(255, 255, 255, 0.08);
      border: 1px solid rgba(255, 255, 255, 0.1);
      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.1);
    }
    .content-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
      background: rgba(255, 255, 255, 0.12);
    }
    .image-container {
      clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
      transition: clip-path 0.6s cubic-bezier(0.77, 0, 0.175, 1);
    }
    .image-container:hover {
      clip-path: polygon(10% 0, 100% 0, 90% 100%, 0% 100%);
    }
    
        .logo-bg-section {
      background: linear-gradient(135deg, rgba(37, 187, 252, 0.404) 0%, rgba(76, 145, 243, 0.404) 100%);
      width: 90%;
      margin: 0 auto;
      border-left: 4px solid #38bdf8;
      border-right: 4px solid #94a3b8;
    }
    .logo-bg-section:hover {
      background: linear-gradient(135deg, rgba(56, 189, 248, 0.15) 0%, rgba(148, 163, 184, 0.15) 100%);
    }
     .footer-gradient {
      background: linear-gradient(135deg, rgba(15, 23, 42, 0.98) 0%, rgba(30, 41, 59, 0.98) 100%);
      border-top: 1px solid rgba(255, 255, 255, 0.08);
    }
    .footer-link:hover {
      color: #38bdf8;
      transform: translateX(4px);
    }
    .logo-text {
      background: linear-gradient(90deg, #38bdf8, #94a3b8);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }

  
        
        body {
            background: linear-gradient(135deg,rgba(5, 7, 14, 0.81) 0%, #121924 100%);
            color: #f1f5f9;
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
      
        .content {
            background: rgba(30, 41, 59, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 3rem;
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }
        
        h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            background: linear-gradient(90deg, #38bdf8, rgba(126, 10, 101, 0.47));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        
        p {
            font-size: 1.25rem;
            line-height: 1.6;
            margin-bottom: 2rem;
            color: #cbd5e1;
        }
        
        .btn {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            background: linear-gradient(to right, #3b82f6, #8b5cf6);
            color: white;
            font-weight: bold;
            border-radius: 50px;
            text-decoration: none;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            font-size: 1rem;
            margin: 0 0.5rem;
        }
        
        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        
        .btn-outline {
            background: transparent;
            border: 2px solid #3b82f6;
        }
        
        /* Particles container */
        #particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
        }
        
        .particle {
            position: absolute;
            border-radius: 50%;
            background: rgba(59, 130, 246, 0.5);
            box-shadow: 0 0 10px rgba(59, 130, 246, 0.5);
        }
        
        .instructions {
            position: absolute;
            bottom: 20px;
            left: 0;
            right: 0;
            text-align: center;
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
            padding: 0 2rem;
        }
        
        .code-block {
            background: rgba(0, 0, 0, 0.4);
            padding: 20px;
            border-radius: 10px;
            margin-top: 30px;
            text-align: left;
            font-family: monospace;
            font-size: 0.9rem;
            max-height: 200px;
            overflow: auto;
        }
    </style>
</head>
<body class="bg-gray-900 text-gray-100">
<?php include ('./components/header.php')?>
        <div id="particles" class="fixed inset-0 z-0"></div>
    <!-- Hero Section -->
    <section class="hero-section">
        <!-- Image Slider -->
        <div class="slider-container h-[80%]">
            <!-- Replace these with your actual images -->
            <img src="h1.webp" alt="Slide 1" class="slider-image active">
            <img src="h2.webp" alt="Slide 2" class="slider-image">
            <img src="h3.webp" alt="Slide 3" class="slider-image">
            <img src="h1.webp" alt="Slide 4" class="slider-image">
            
            <!-- Overlay for better text readability -->
            <div class="absolute inset-0 bg-black/20 z-2"></div>
        </div>

        <!-- Hero Content -->
        <div class="hero-content h-full flex flex-col items-center justify-center text-center px-6">
            <div class="max-w-4xl mx-auto">
                <h1 class="ml-3 text-6xl font-bold text-white ">
                    Transform Your Digital Presence
                </h1>
                <p class="text-xl md:text-2xl text-white mb-10 text-shadow animate-fade-in-delay">
                    We create stunning websites, powerful SEO strategies, and captivating digital experiences that drive results and elevate your brand.
                </p>
                <div class="flex gap-4 justify-center animate-fade-in-delay-more">
                    <a href="#" class="px-8 py-3 bg-sky-500 hover:bg-sky-600 rounded-full font-medium transition-all transform hover:scale-105">
                        Get Started
                    </a>
                    <a href="#" class="px-8 py-3 bg-transparent border-2 border-white hover:bg-white/10 rounded-full font-medium transition-all transform hover:scale-105">
                        Learn More
                    </a>
                </div>
            </div>
        </div>

        <!-- Slider Controls -->
        <div class="slider-controls">
            <div class="slider-dot active" data-index="0"></div>
            <div class="slider-dot" data-index="1"></div>
            <div class="slider-dot" data-index="2"></div>
            <div class="slider-dot" data-index="3"></div>
        </div>
    </section>

    <!-- Spacer for content below hero -->
   <section class="py-20 px-6 max-w-7xl mx-auto" id="services">
    <div class="text-center mb-16">
      <h2 class="text-4xl md:text-5xl font-bold mb-4">
        Our <span class="gradient-text">IT Services</span>
      </h2>
      <p class="text-xl text-gray-400 max-w-2xl mx-auto">
        Cutting-edge solutions to transform your digital presence and drive business growth.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3">
      <!-- Web Development -->
      <div class="service-card rounded-xl p-6 group">
        <div class="icon-box w-16 h-16 rounded-lg flex items-center justify-center mb-6">
          <i class="fas fa-code text-3xl text-sky-400"></i>
        </div>
        <h3 class="text-2xl font-bold mb-3">Web Development</h3>
        <p class="text-gray-400 mb-4">
          Custom, responsive websites built with modern frameworks for optimal performance.
        </p>
        <ul class="space-y-2 text-sm text-gray-300">
          <li class="flex items-center"><i class="fas fa-check-circle text-sky-400 mr-2"></i> React/Next.js</li>
          <li class="flex items-center"><i class="fas fa-check-circle text-sky-400 mr-2"></i> Node.js Backend</li>
          <li class="flex items-center"><i class="fas fa-check-circle text-sky-400 mr-2"></i> API Integration</li>
        </ul>
        <div class="mt-6 pt-4 border-t border-gray-800">
          <a href="#" class="inline-flex items-center text-sky-400 hover:text-sky-300">
            Learn More <i class="fas fa-arrow-right ml-2 text-sm"></i>
          </a>
        </div>
      </div>

      <!-- SEO Services -->
      <div class="service-card rounded-xl p-6 group">
        <div class="icon-box w-16 h-16 rounded-lg flex items-center justify-center mb-6">
          <i class="fas fa-search-dollar text-3xl text-sky-400"></i>
        </div>
        <h3 class="text-2xl font-bold mb-3">SEO Services</h3>
        <p class="text-gray-400 mb-4">
          Boost your search rankings with our data-driven SEO strategies.
        </p>
        <ul class="space-y-2 text-sm text-gray-300">
          <li class="flex items-center"><i class="fas fa-check-circle text-sky-400 mr-2"></i> Keyword Research</li>
          <li class="flex items-center"><i class="fas fa-check-circle text-sky-400 mr-2"></i> On-Page Optimization</li>
          <li class="flex items-center"><i class="fas fa-check-circle text-sky-400 mr-2"></i> Technical SEO</li>
        </ul>
        <div class="mt-6 pt-4 border-t border-gray-800">
          <a href="#" class="inline-flex items-center text-sky-400 hover:text-sky-300">
            Learn More <i class="fas fa-arrow-right ml-2 text-sm"></i>
          </a>
        </div>
      </div>

      <!-- Digital Marketing -->
      <div class="service-card rounded-xl p-6 group">
        <div class="icon-box w-16 h-16 rounded-lg flex items-center justify-center mb-6">
          <i class="fas fa-bullseye text-3xl text-sky-400"></i>
        </div>
        <h3 class="text-2xl font-bold mb-3">Digital Marketing</h3>
        <p class="text-gray-400 mb-4">
          Targeted campaigns that convert visitors into customers.
        </p>
        <ul class="space-y-2 text-sm text-gray-300">
          <li class="flex items-center"><i class="fas fa-check-circle text-sky-400 mr-2"></i> PPC Advertising</li>
          <li class="flex items-center"><i class="fas fa-check-circle text-sky-400 mr-2"></i> Social Media Marketing</li>
          <li class="flex items-center"><i class="fas fa-check-circle text-sky-400 mr-2"></i> Conversion Optimization</li>
        </ul>
        <div class="mt-6 pt-4 border-t border-gray-800">
          <a href="#" class="inline-flex items-center text-sky-400 hover:text-sky-300">
            Learn More <i class="fas fa-arrow-right ml-2 text-sm"></i>
          </a>
        </div>
      </div>

      <!-- Graphic Design -->
      <div class="service-card rounded-xl p-6 group">
        <div class="icon-box w-16 h-16 rounded-lg flex items-center justify-center mb-6">
          <i class="fas fa-paint-brush text-3xl text-sky-400"></i>
        </div>
        <h3 class="text-2xl font-bold mb-3">Graphic Design</h3>
        <p class="text-gray-400 mb-4">
          Visually stunning designs that communicate your brand identity.
        </p>
        <ul class="space-y-2 text-sm text-gray-300">
          <li class="flex items-center"><i class="fas fa-check-circle text-sky-400 mr-2"></i> Brand Identity</li>
          <li class="flex items-center"><i class="fas fa-check-circle text-sky-400 mr-2"></i> UI/UX Design</li>
          <li class="flex items-center"><i class="fas fa-check-circle text-sky-400 mr-2"></i> Marketing Materials</li>
        </ul>
        <div class="mt-6 pt-4 border-t border-gray-800">
          <a href="#" class="inline-flex items-center text-sky-400 hover:text-sky-300">
            Learn More <i class="fas fa-arrow-right ml-2 text-sm"></i>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 1: Left Content + Right Image -->
  <section class="py-20 px-6 max-w-7xl mx-auto">
    <div class="flex flex-col lg:flex-row items-center gap-12">
      <!-- Left Content -->
      <div class="lg:w-1/2">
        <span class="inline-block px-4 py-1 bg-sky-100 text-sky-600 rounded-full mb-4 text-sm font-medium">ABOUT US</span>
        <h2 class="text-4xl md:text-5xl font-bold mb-6 text-white">
          We Create <span class="gradient-text">Digital Experiences</span>
        </h2>
        <p class="text-lg text-white mb-8">
          Our team of experts delivers innovative solutions that drive real business growth. With over 10 years of experience, we've helped hundreds of clients achieve their digital goals.
        </p>
        <ul class="space-y-4 mb-8">
          <li class="flex items-start">
            <div class="bg-sky-100 p-2 rounded-lg mr-4">
              <svg class="w-5 h-5 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
            </div>
            <span class="text-white">Custom solutions tailored to your business needs</span>
          </li>
          <li class="flex items-start">
            <div class="bg-sky-100 p-2 rounded-lg mr-4">
              <svg class="w-5 h-5 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
            </div>
            <span class="text-white">Cutting-edge technology stack</span>
          </li>
          <li class="flex items-start">
            <div class="bg-sky-100 p-2 rounded-lg mr-4">
              <svg class="w-5 h-5 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
            </div>
            <span class="text-white">Dedicated support team</span>
          </li>
        </ul>
        <div class="flex gap-4">
          <a href="#" class="px-6 py-3 bg-gradient-to-r from-sky-500 to-blue-600 text-white rounded-lg font-medium hover:shadow-lg transition-all">
            Get Started
          </a>
          <a href="#" class="px-6 py-3 border border-gray-300 text-white rounded-lg font-medium hover:bg-gray-100 transition-all">
            Learn More
          </a>
        </div>
      </div>
      
      <!-- Right Image -->
      <div class="lg:w-1/2 image-container shadow-xl">
        <img src="h1.webp" 
             alt="Team working on digital project" 
             class="w-full h-auto rounded-lg">
      </div>
    </div>
  </section>

  <!-- Section 2: Right Content + Left Image -->
  <section class="py-20 px-6 max-w-7xl mx-auto bg-gray-100">
    <div class="flex flex-col lg:flex-row items-center gap-12">
      <!-- Left Image -->
      <div class="lg:w-1/2 image-container shadow-xl lg:order-1">
        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
             alt="Happy team meeting" 
             class="w-full h-auto rounded-lg">
      </div>
      
      <!-- Right Content -->
      <div class="lg:w-1/2 lg:order-2">
        <span class="inline-block px-4 py-1 bg-indigo-100 text-indigo-600 rounded-full mb-4 text-sm font-medium">OUR PROCESS</span>
        <h2 class="text-4xl md:text-5xl font-bold mb-6 text-gray-900">
          How We <span class="gradient-text">Work</span>
        </h2>
        <div class="space-y-6">
          <div class="flex gap-4">
            <div class="bg-white p-4 rounded-xl shadow-md flex-shrink-0 h-14 w-14 flex items-center justify-center text-indigo-600 font-bold border border-indigo-100">
              1
            </div>
            <div>
              <h3 class="text-xl font-semibold text-gray-800 mb-2">Discovery</h3>
              <p class="text-black">We analyze your business needs and goals to create a customized strategy.</p>
            </div>
          </div>
          <div class="flex gap-4">
            <div class="bg-white p-4 rounded-xl shadow-md flex-shrink-0 h-14 w-14 flex items-center justify-center text-indigo-600 font-bold border border-indigo-100">
              2
            </div>
            <div>
              <h3 class="text-xl font-semibold text-gray-800 mb-2">Design</h3>
              <p class="text-black">Our designers create stunning interfaces focused on user experience.</p>
            </div>
          </div>
          <div class="flex gap-4">
            <div class=" p-4 rounded-xl shadow-md flex-shrink-0 h-14 w-14 flex items-center justify-center text-indigo-600 font-bold border border-indigo-100">
              3
            </div>
            <div>
              <h3 class="text-xl font-semibold text-gray-800 mb-2">Development</h3>
              <p class="text-black">We build robust solutions using modern technologies and best practices.</p>
            </div>
          </div>
        </div>
        <a href="#" class="mt-8 inline-flex items-center text-indigo-600 font-medium hover:text-indigo-800">
          See full process <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
          </svg>
        </a>
      </div>
    </div>
  </section>
    <section class="py-20 px-6 max-w-7xl mx-auto relative overflow-hidden">
    <!-- Animated background elements -->
    <div class="absolute -top-20 -right-20 w-64 h-64 rounded-full bg-sky-900/20 blur-3xl"></div>
    <div class="absolute -bottom-20 -left-20 w-64 h-64 rounded-full bg-indigo-900/20 blur-3xl"></div>
    
    <div class="relative z-10">
      <div class="text-center mb-16">
        <span class="inline-block px-4 py-1 bg-sky-900/30 text-sky-400 rounded-full mb-4 text-sm font-medium">WHY CHOOSE US</span>
        <h2 class="text-4xl md:text-5xl font-bold mb-4">
          We Deliver <span class="gradient-text">Exceptional Value</span>
        </h2>
        <p class="text-xl text-gray-400 max-w-3xl mx-auto">
          Here's what sets us apart from the competition and makes us the ideal choice for your business.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
        <!-- Feature 1 -->
        <div class="feature-card rounded-xl p-8">
          <div class="w-14 h-14 rounded-lg bg-sky-900/30 flex items-center justify-center mb-6 text-sky-400 text-2xl">
            <i class="fas fa-medal"></i>
          </div>
          <h3 class="text-2xl font-bold mb-3">Award-Winning Quality</h3>
          <p class="text-gray-400">
            Recognized industry leaders with multiple awards for excellence in design and development.
          </p>
          <div class="mt-6 pt-6 border-t border-gray-800 flex items-center">
            <div class="counter-box rounded-lg w-16 h-16 flex items-center justify-center mr-4">
              <span class="text-2xl font-bold text-sky-400" data-count="15">0</span>
            </div>
            <div>
              <span class="block text-gray-400 text-sm">Industry</span>
              <span class="block font-bold">Awards Won</span>
            </div>
          </div>
        </div>

        <!-- Feature 2 -->
        <div class="feature-card rounded-xl p-8">
          <div class="w-14 h-14 rounded-lg bg-sky-900/30 flex items-center justify-center mb-6 text-sky-400 text-2xl">
            <i class="fas fa-users"></i>
          </div>
          <h3 class="text-2xl font-bold mb-3">Client-Centric Approach</h3>
          <p class="text-gray-400">
            Your success is our priority. We tailor solutions to your unique business needs.
          </p>
          <div class="mt-6 pt-6 border-t border-gray-800 flex items-center">
            <div class="counter-box rounded-lg w-16 h-16 flex items-center justify-center mr-4">
              <span class="text-2xl font-bold text-sky-400" data-count="98">0</span>%
            </div>
            <div>
              <span class="block text-gray-400 text-sm">Client</span>
              <span class="block font-bold">Satisfaction</span>
            </div>
          </div>
        </div>

        <!-- Feature 3 -->
        <div class="feature-card rounded-xl p-8">
          <div class="w-14 h-14 rounded-lg bg-sky-900/30 flex items-center justify-center mb-6 text-sky-400 text-2xl">
            <i class="fas fa-bolt"></i>
          </div>
          <h3 class="text-2xl font-bold mb-3">Rapid Implementation</h3>
          <p class="text-gray-400">
            Agile processes that deliver results faster without compromising quality.
          </p>
          <div class="mt-6 pt-6 border-t border-gray-800 flex items-center">
            <div class="counter-box rounded-lg w-16 h-16 flex items-center justify-center mr-4">
              <span class="text-2xl font-bold text-sky-400" data-count="40">0</span>%
            </div>
            <div>
              <span class="block text-gray-400 text-sm">Faster</span>
              <span class="block font-bold">Delivery</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Stats Section -->
      <div class="bg-gray-800/50 rounded-2xl p-8 md:p-12 border border-white/50 backdrop-blur-sm">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
          <div class="pulse-animation">
            <div class="text-4xl md:text-5xl font-bold text-sky-400 mb-2">
              <span class="counter" data-count="250">0</span>+
            </div>
            <div class="text-gray-400">Projects Completed</div>
          </div>
          <div class="pulse-animation">
            <div class="text-4xl md:text-5xl font-bold text-sky-400 mb-2">
              <span class="counter" data-count="15">0</span>+
            </div>
            <div class="text-gray-400">Years Experience</div>
          </div>
          <div class="pulse-animation">
            <div class="text-4xl md:text-5xl font-bold text-sky-400 mb-2">
              <span class="counter" data-count="120">0</span>+
            </div>
            <div class="text-gray-400">Happy Clients</div>
          </div>
          <div class="pulse-animation">
            <div class="text-4xl md:text-5xl font-bold text-sky-400 mb-2">
              <span class="counter" data-count="24">0</span>/7
            </div>
            <div class="text-gray-400">Support Available</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="text-sky-400  py-20 px-6">
    <div class="max-w-7xl mx-auto">

      <!-- Section 1: Image Left / Content Right -->
      <div class="flex flex-col lg:flex-row items-center logo-bg-section w-[99%] gap-12 mb-28">
        <!-- Image -->
        <div class="lg:w-1/2 image-container rounded-xl left-[-50px] overflow-hidden shadow-2xl">
          <img src="https://images.unsplash.com/photo-1579389083078-4e7018379f7e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
               alt="Creative workspace" 
               class="w-full h-auto object-cover relative  transition-transform duration-700 hover:scale-105">
        </div>
        
        <!-- Content -->
        <div class="lg:w-1/2 content-card p-8 md:p-12 rounded-xl">
          <span class="inline-block px-4 py-1 bg-white/10 rounded-full mb-4 text-sm font-medium">CREATIVE SOLUTIONS</span>
          <h2 class="text-4xl text-white  md:text-5xl font-bold mb-6">
            Innovative <span class="">Design Approach</span>
          </h2>
          <p class="text-lg text-white/80 mb-8">
            We combine cutting-edge technology with artistic vision to create digital experiences that captivate your audience and drive meaningful engagement.
          </p>
          <ul class="space-y-4 mb-8">
            <li class="flex items-start">
              <div class="bg-white/10 p-2 text-gray-300 rounded-lg mr-4 flex-shrink-0">
                <svg class="w-5 h-5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
              </div>
              <span className="text-gray-300">User-centered design philosophy</span>
            </li>
            <li class="flex items-start">
              <div class="bg-white/10 p-2 rounded-lg mr-4 flex-shrink-0">
                <svg class="w-5 h-5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
              </div>
              <span>Cross-platform compatibility</span>
            </li>
            <li class="flex items-start">
              <div class="bg-white/10 p-2 rounded-lg mr-4 flex-shrink-0">
                <svg class="w-5 h-5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
              </div>
              <span>Performance-optimized solutions</span>
            </li>
          </ul>
          <a href="#" class="inline-flex items-center px-6 py-3 border hover:text-white hover:bg-sky-600 rounded-lg font-medium transition-colors">
            Explore Our Work <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
            </svg>
          </a>
        </div>
      </div>

      <!-- Section 2: Content Left / Image Right -->
      <div class="flex flex-col  lg:flex-row items-center gap-12">
       
        <!-- Content -->
        <div class="lg:w-1/2 content-card p-8 md:p-12 rounded-xl lg:order-2">
            
          <span class="inline-block px-4 py-1 bg-white/10 rounded-full mb-4 text-sm font-medium">TECHNOLOGY</span>
          <h2 class="text-4xl md:text-5xl font-bold mb-6">
            Advanced <span class="text-white">Tech Stack</span>
          </h2>
          <p class="text-lg text-white/80 mb-8">
            Leveraging the latest frameworks and tools to build scalable, secure, and future-proof applications tailored to your business needs.
          </p>
          <div class="grid grid-cols-2 gap-4 mb-8">
            <div class="bg-white/5 p-4 rounded-lg flex items-center">
              <div class="w-10 h-10 bg-blue-500/20 rounded-lg flex items-center justify-center mr-3">
                <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
              </div>
              <span>React/Next.js</span>
            </div>
            <div class="bg-white/5 p-4 rounded-lg flex items-center">
              <div class="w-10 h-10 bg-green-500/20 rounded-lg flex items-center justify-center mr-3">
                <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
              </div>
              <span>Node.js</span>
            </div>
            <div class="bg-white/5 p-4 rounded-lg flex items-center">
              <div class="w-10 h-10 bg-purple-500/20 rounded-lg flex items-center justify-center mr-3">
                <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                </svg>
              </div>
              <span>Tailwind CSS</span>
            </div>
            <div class="bg-white/5 p-4 rounded-lg flex items-center">
              <div class="w-10 h-10 bg-red-500/20 rounded-lg flex items-center justify-center mr-3">
                <svg class="w-6 h-6 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                </svg>
              </div>
              <span>GraphQL</span>
            </div>
          </div>
          <a href="#" class="inline-flex items-center px-6 py-3 border border-white/20 hover:bg-white/10 rounded-lg font-medium transition-colors">
            Our Technologies <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
            </svg>
          </a>
        </div>
        
        <!-- Image -->
         <div class="lg:w-1/2 relative left-[50px] image-container rounded-xl overflow-hidden shadow-2xl lg:order-1">
          <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
               alt="Code on computer screen" 
               class="w-full h-auto object-cover transition-transform duration-700 hover:scale-105">
        </div>
      </div>
    </div>
  </section>
   <section class="py-20 px-6 max-w-7xl mx-auto">
    <div class="text-center mb-16">
      <span class="inline-block px-4 py-1 bg-sky-900/30 text-sky-400 rounded-full mb-4 text-sm font-medium">TESTIMONIALS</span>
      <h2 class="text-4xl md:text-5xl font-bold mb-4">
        What Our <span class="gradient-text">Clients Say</span>
      </h2>
      <p class="text-xl text-gray-400 max-w-3xl mx-auto">
        Don't just take our word for it. Here's what our clients have to say about working with us.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Review 1 -->
      <div class="review-card rounded-xl p-8 relative overflow-hidden">
        <i class="fas fa-quote-right quote-icon"></i>
        <div class="star-rating mb-4">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <p class="text-gray-300 mb-6 relative z-10">
          "Working with this team transformed our online presence. Our website traffic increased by 300% within 3 months of their SEO strategy implementation."
        </p>
        <div class="flex items-center">
          <img src="https://randomuser.me/api/portraits/women/43.jpg" alt="Sarah Johnson" class="w-12 h-12 rounded-full mr-4 border-2 border-sky-400">
          <div>
            <h4 class="font-bold">Sarah Johnson</h4>
            <p class="text-sm text-gray-400">CEO, TechSolutions</p>
          </div>
        </div>
      </div>

      <!-- Review 2 -->
      <div class="review-card rounded-xl p-8 relative overflow-hidden">
        <i class="fas fa-quote-right quote-icon"></i>
        <div class="star-rating mb-4">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <p class="text-gray-300 mb-6 relative z-10">
          "The web application they developed streamlined our operations and saved us over $50k annually in manual processes. Exceptional quality and support!"
        </p>
        <div class="flex items-center">
          <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Michael Chen" class="w-12 h-12 rounded-full mr-4 border-2 border-sky-400">
          <div>
            <h4 class="font-bold">Michael Chen</h4>
            <p class="text-sm text-gray-400">COO, FinTech Global</p>
          </div>
        </div>
      </div>

      <!-- Review 3 -->
      <div class="review-card rounded-xl p-8 relative overflow-hidden">
        <i class="fas fa-quote-right quote-icon"></i>
        <div class="star-rating mb-4">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <p class="text-gray-300 mb-6 relative z-10">
          "Their graphic design team created a stunning brand identity that perfectly represents our values. Our customer engagement has never been higher."
        </p>
        <div class="flex items-center">
          <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Priya Patel" class="w-12 h-12 rounded-full mr-4 border-2 border-sky-400">
          <div>
            <h4 class="font-bold">Priya Patel</h4>
            <p class="text-sm text-gray-400">Marketing Director, LuxeBrands</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Trust Badges -->
    <div class="mt-20 grid grid-cols-2 md:grid-cols-4 gap-8 items-center justify-center">
      <div class="text-center p-4">
        <div class="text-4xl font-bold text-sky-400 mb-2">150+</div>
        <div class="text-gray-400">Happy Clients</div>
      </div>
      <div class="text-center p-4">
        <div class="text-4xl font-bold text-sky-400 mb-2">4.9/5</div>
        <div class="text-gray-400">Average Rating</div>
      </div>
      <div class="text-center p-4">
        <div class="text-4xl font-bold text-sky-400 mb-2">98%</div>
        <div class="text-gray-400">Retention Rate</div>
      </div>
      <div class="text-center p-4">
        <div class="text-4xl font-bold text-sky-400 mb-2">24/7</div>
        <div class="text-gray-400">Support Available</div>
      </div>
    </div>
  </section>
    <section class="py-16 my-12 logo-bg-section rounded-xl transition-all duration-300">
    <div class="max-w-4xl mx-auto px-6 text-center">
      <!-- Heading -->
      <h2 class="text-3xl md:text-4xl font-bold mb-4 text-white">
        Transform Your <span style="background: linear-gradient(90deg, #38bdf8, #94a3b8); -webkit-background-clip: text; background-clip: text; color: transparent;">Digital Presence</span>
      </h2>
      
      <!-- Paragraph -->
      <p class="text-lg text-white mb-8 mx-auto max-w-2xl">
        We create stunning digital experiences tailored to your brand's unique identity using cutting-edge technologies and innovative design approaches.
      </p>
      
      <!-- Buttons -->
      <div class="flex flex-wrap justify-center gap-4">
        <a href="#" class="px-6 py-3 bg-gradient-to-r from-sky-400 to-gray-500 text-white rounded-lg font-medium hover:shadow-lg transition-all transform hover:-translate-y-1">
          Contact Us
        </a>
        <a href="#" class="px-6 py-3 border-2 border-gray-300 text-white rounded-lg font-medium hover:text-black hover:bg-gray-100 transition-all transform hover:-translate-y-1">
          More About
        </a>
      </div>
    </div>
  </section>
  <?php include ('./components/footer.php') ?>
<!-- our it servcies gsap js code -->
  
    <script>
      
        // Image Slider Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const images = document.querySelectorAll('.slider-image');
            const dots = document.querySelectorAll('.slider-dot');
            let currentIndex = 0;
            let interval;

            function showImage(index) {
                // Hide all images
                images.forEach(img => img.classList.remove('active'));
                dots.forEach(dot => dot.classList.remove('active'));
                
                // Show selected image
                images[index].classList.add('active');
                dots[index].classList.add('active');
                currentIndex = index;
            }

            function nextImage() {
                let nextIndex = (currentIndex + 1) % images.length;
                showImage(nextIndex);
            }

            // Auto-rotate images every 5 seconds
            function startSlider() {
                interval = setInterval(nextImage, 5000);
            }

            // Pause slider on hover
            const slider = document.querySelector('.slider-container');
            slider.addEventListener('mouseenter', () => clearInterval(interval));
            slider.addEventListener('mouseleave', startSlider);

            // Dot navigation
            dots.forEach(dot => {
                dot.addEventListener('click', function() {
                    clearInterval(interval);
                    showImage(parseInt(this.getAttribute('data-index')));
                    startSlider();
                });
            });

            // GSAP Animations for Hero Content
            gsap.from('.animate-fade-in', {
                opacity: 0,
                y: 20,
                duration: 1,
                ease: "power2.out"
            });

            gsap.from('.animate-fade-in-delay', {
                opacity: 0,
                y: 20,
                duration: 1,
                delay: 0.3,
                ease: "power2.out"
            });

            gsap.from('.animate-fade-in-delay-more', {
                opacity: 0,
                y: 20,
                duration: 1,
                delay: 0.6,
                ease: "power2.out"
            });

            // Start the slider
            startSlider();
        });
    </script>
     <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Create particles
            const particlesContainer = document.getElementById('particles');
            const particleCount = 100;
            
            function createParticle() {
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
                
                return particle;
            }
            
            // Create initial particles
            for (let i = 0; i < particleCount; i++) {
                createParticle();
            }
            
            // Add more particles on click
            document.addEventListener('click', function() {
                for (let i = 0; i < 5; i++) {
                    createParticle();
                }
            });
        });
    </script>
     <script>
    // GSAP Animations
    document.addEventListener('DOMContentLoaded', () => {
      // Register ScrollTrigger plugin
      gsap.registerPlugin(ScrollTrigger);

      // Animate service cards on scroll
      gsap.utils.toArray('.service-card').forEach((card, i) => {
        gsap.from(card, {
          opacity: 0,
          y: 50,
          duration: 0.8,
          ease: "power2.out",
          scrollTrigger: {
            trigger: card,
            start: "top 80%",
            toggleActions: "play none none none"
          },
          delay: i * 0.1
        });
      });

      // Animate section heading
      gsap.from("#services h2", {
        opacity: 0,
        y: 30,
        duration: 1,
        ease: "power3.out",
        scrollTrigger: {
          trigger: "#services",
          start: "top 70%",
          toggleActions: "play none none none"
        }
      });

      gsap.from("#services p", {
        opacity: 0,
        y: 20,
        duration: 1,
        delay: 0.3,
        ease: "power3.out",
        scrollTrigger: {
          trigger: "#services",
          start: "top 70%",
          toggleActions: "play none none none"
        }
      });
    });
     document.addEventListener('DOMContentLoaded', () => {
      gsap.registerPlugin(ScrollTrigger);

      // Animate feature cards
      gsap.utils.toArray('.feature-card').forEach((card, i) => {
        gsap.from(card, {
          opacity: 0,
          y: 50,
          duration: 0.8,
          ease: "power2.out",
          scrollTrigger: {
            trigger: card,
            start: "top 80%",
            toggleActions: "play none none none"
          },
          delay: i * 0.1
        });
      });

      // Animate counter numbers
      function animateCounters() {
        const counters = document.querySelectorAll('.counter, [data-count]');
        
        counters.forEach(counter => {
          const target = +counter.getAttribute('data-count');
          const duration = 2000;
          const start = 0;
          const increment = target / (duration / 16);
          
          let current = start;
          const updateCounter = () => {
            current += increment;
            if (current < target) {
              counter.textContent = Math.floor(current);
              requestAnimationFrame(updateCounter);
            } else {
              counter.textContent = target;
            }
          };
          
          ScrollTrigger.create({
            trigger: counter,
            start: "top 80%",
            onEnter: updateCounter,
            once: true
          });
        });
      }
      
      animateCounters();
    });

    // left contant and right image

      // GSAP Animations
    document.addEventListener('DOMContentLoaded', () => {
      gsap.registerPlugin(ScrollTrigger);
      
      // Animate images on scroll
      gsap.utils.toArray('.image-container').forEach((container, i) => {
        gsap.from(container, {
          opacity: 0,
          x: i % 2 === 0 ? 50 : -50,
          duration: 0.8,
          ease: "power2.out",
          scrollTrigger: {
            trigger: container,
            start: "top 70%",
            toggleActions: "play none none none"
          }
        });
      });
      
      // Animate content on scroll
      gsap.utils.toArray('section').forEach((section, i) => {
        const content = section.querySelector('div:not(.image-container)');
        gsap.from(content, {
          opacity: 0,
          x: i % 2 === 0 ? -50 : 50,
          duration: 0.8,
          delay: 0.2,
          ease: "power2.out",
          scrollTrigger: {
            trigger: section,
            start: "top 70%",
            toggleActions: "play none none none"
          }
        });
      });
    });
     document.addEventListener('DOMContentLoaded', () => {
      gsap.registerPlugin(ScrollTrigger);

      // Animate review cards
      gsap.utils.toArray('.review-card').forEach((card, i) => {
        gsap.from(card, {
          opacity: 0,
          y: 50,
          duration: 0.8,
          ease: "power2.out",
          scrollTrigger: {
            trigger: card,
            start: "top 80%",
            toggleActions: "play none none none"
          },
          delay: i * 0.15
        });
      });

      // Animate trust badges
      gsap.utils.toArray('.text-center p-4').forEach((badge, i) => {
        gsap.from(badge, {
          opacity: 0,
          scale: 0.8,
          duration: 0.6,
          ease: "back.out(1.7)",
          scrollTrigger: {
            trigger: ".mt-20",
            start: "top 70%",
            toggleActions: "play none none none"
          },
          delay: i * 0.1
        });
      });

      // Animate section heading
      gsap.from("section h2", {
        opacity: 0,
        y: 30,
        duration: 1,
        ease: "power3.out",
        scrollTrigger: {
          trigger: "section",
          start: "top 70%",
          toggleActions: "play none none none"
        }
      });

      gsap.from("section p", {
        opacity: 0,
        y: 20,
        duration: 1,
        delay: 0.3,
        ease: "power3.out",
        scrollTrigger: {
          trigger: "section",
          start: "top 70%",
          toggleActions: "play none none none"
        }
      });
    });
      document.addEventListener('DOMContentLoaded', () => {
      gsap.registerPlugin(ScrollTrigger);
      
      // Animate image containers
      gsap.utils.toArray('.image-container').forEach((container, i) => {
        gsap.from(container, {
          x: i % 2 === 0 ? -100 : 100,
          duration: 1,
          ease: "power3.out",
          scrollTrigger: {
            trigger: container,
            start: "top 70%",
            toggleActions: "play none none none"
          }
        });
      });
      
      // Animate content cards
      gsap.utils.toArray('.content-card').forEach((card, i) => {
        gsap.from(card, {
          y: 50,
          duration: 0.8,
          delay: i * 0.2,
          ease: "back.out(1.2)",
          scrollTrigger: {
            trigger: card,
            start: "top 70%",
            toggleActions: "play none none none"
          }
        });
      });
    });
  </script>
</body>
</html>