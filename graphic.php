<?php include("./background.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Graphic Design Services | Creative Solutions</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Raleway:wght@800;900&display=swap');
        
        :root {
            --primary: #6366f1;
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
        
        .glow {
            box-shadow: 0 0 20px rgba(99, 102, 241, 0.7);
        }
        
        .btn-glow {
            transition: all 0.3s ease;
        }
        
        .btn-glow:hover {
            box-shadow: 0 0 20px rgba(99, 102, 241, 0.7);
            transform: translateY(-3px);
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
        
        .service-card {
            transition: all 0.4s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            border-color: var(--accent);
            box-shadow: 0 10px 25px rgba(236, 72, 153, 0.3);
        }
        
        .design-process {
            position: relative;
        }
        
        .design-process::before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(to bottom, var(--primary), var(--secondary), var(--accent));
            left: 20px;
        }
        
        .process-step {
            position: relative;
            padding-left: 50px;
            margin-bottom: 30px;
        }
        
        .process-step::before {
            content: '';
            position: absolute;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: var(--primary);
            left: 12px;
            top: 5px;
            z-index: 1;
        }
        
        .portfolio-item {
            border-radius: 15px;
            overflow: hidden;
            position: relative;
            transition: all 0.4s ease;
        }
        
        .portfolio-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(236, 72, 153, 0.3);
        }
        
        .portfolio-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.8);
            padding: 20px;
            transform: translateY(100%);
            transition: transform 0.4s ease;
        }
        
        .portfolio-item:hover .portfolio-overlay {
            transform: translateY(0);
        }
        
        .testimonial-card {
            transition: all 0.4s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
            overflow: hidden;
            position: relative;
        }
        
        .testimonial-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(236, 72, 153, 0.3);
            border-color: var(--accent);
        }
        
        .client-image {
            border: 3px solid rgba(99, 102, 241, 0.5);
            transition: all 0.3s ease;
            border-radius: 50%;
            width: 70px;
            height: 70px;
            object-fit: cover;
        }
        
        .testimonial-card:hover .client-image {
            transform: scale(1.1);
            border-color: var(--accent);
        }
        
        .quote-icon {
            position: absolute;
            top: -15px;
            right: 20px;
            font-size: 80px;
            opacity: 0.1;
            color: var(--primary);
        }
        
        .rating-star {
            color: #fbbf24;
        }
        
        .package-card {
            transition: all 0.4s ease;
            border: 2px solid rgba(255, 255, 255, 0.1);
        }
        
        .package-card:hover {
            transform: translateY(-10px);
            border-color: var(--primary);
            box-shadow: 0 10px 25px rgba(99, 102, 241, 0.3);
        }
        
        .featured-package {
            border-color: var(--accent);
            position: relative;
            overflow: hidden;
        }
        
        .featured-package::before {
            content: 'MOST POPULAR';
            position: absolute;
            top: 15px;
            right: -30px;
            background: var(--accent);
            color: white;
            padding: 3px 30px;
            font-size: 12px;
            font-weight: bold;
            transform: rotate(45deg);
        }
        
        .design-icon {
            transition: all 0.4s ease;
        }
        
        .service-card:hover .design-icon {
            transform: scale(1.1);
            background: var(--accent);
        }
        
        .portfolio-filter-btn {
            transition: all 0.3s ease;
        }
        
        .portfolio-filter-btn.active, .portfolio-filter-btn:hover {
            background: var(--primary);
            color: white;
        }
        
        .contact-input {
            background: rgba(30, 41, 59, 0.7);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: white;
            transition: all 0.3s ease;
        }
        
        .contact-input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 2px rgba(99, 102, 241, 0.5);
        }
    </style>
</head>
<body class="min-h-screen">
    <?php include("./components/header.php")?>
    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute top-20 left-10 w-60 h-60 bg-purple-600 rounded-full filter blur-[100px] opacity-20"></div>
            <div class="absolute bottom-10 right-10 w-80 h-80 bg-indigo-600 rounded-full filter blur-[120px] opacity-20"></div>
            <div class="absolute top-1/3 right-1/4 w-40 h-40 bg-pink-500 rounded-full filter blur-[80px] opacity-20"></div>
        </div>
        
        <div class="container mx-auto px-4 py-16 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-block bg-indigo-900/30 px-4 py-1 rounded-full text-indigo-300 mb-6">
                        <i class="fas fa-palette mr-2"></i> Design That Inspires
                    </div>
                    <h1 class="text-4xl md:text-6xl font-bold mb-6">
                        Transform Your Brand with <span class="gradient-text">Creative Design</span>
                    </h1>
                    <p class="text-xl text-slate-300 mb-10">
                        Professional graphic design solutions that elevate your brand, engage your audience, and drive results. We turn ideas into visual masterpieces.
                    </p>
                    
                    <div class="flex flex-wrap gap-4">
                        <a href="#services" class="px-8 py-3 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-full font-bold text-lg shadow-lg hover:shadow-xl transition-all transform hover:scale-105 btn-glow">
                            Explore Services
                        </a>
                        <a href="#portfolio" class="px-8 py-3 bg-transparent border-2 border-white text-white rounded-full font-bold text-lg hover:bg-white hover:text-gray-900 transition-all">
                            View Portfolio
                        </a>
                    </div>
                    
                    <div class="flex flex-wrap gap-8 mt-12">
                        <div class="flex items-center">
                            <div class="text-4xl font-bold gradient-text mr-3">500+</div>
                            <div class="text-slate-300">Projects Completed</div>
                        </div>
                        <div class="flex items-center">
                            <div class="text-4xl font-bold gradient-text mr-3">98%</div>
                            <div class="text-slate-300">Client Satisfaction</div>
                        </div>
                    </div>
                </div>
                
                <div class="flex justify-center floating">
                    <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-full blur-3xl opacity-30 animate-pulse"></div>
                        <div class="relative bg-gray-900 border border-gray-700 rounded-2xl p-8 max-w-lg overflow-hidden">
                            <div class="absolute -top-10 -right-10 w-40 h-40 bg-pink-500 rounded-full filter blur-[80px] opacity-20"></div>
                            <div class="flex flex-wrap gap-4 mb-8">
                                <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-500 rounded-lg"></div>
                                <div class="w-16 h-16 bg-gradient-to-br from-pink-500 to-rose-500 rounded-lg"></div>
                                <div class="w-16 h-16 bg-gradient-to-br from-cyan-400 to-blue-500 rounded-lg"></div>
                                <div class="w-16 h-16 bg-gradient-to-br from-amber-400 to-orange-500 rounded-lg"></div>
                            </div>
                            <div class="grid grid-cols-2 gap-4 mb-8">
                                <div class="bg-gradient-to-r from-slate-800 to-slate-900 p-6 rounded-xl">
                                    <i class="fas fa-brush text-3xl text-indigo-400 mb-3"></i>
                                    <h3 class="text-lg font-bold">Brand Identity</h3>
                                </div>
                                <div class="bg-gradient-to-r from-slate-800 to-slate-900 p-6 rounded-xl">
                                    <i class="fas fa-mobile-alt text-3xl text-pink-400 mb-3"></i>
                                    <h3 class="text-lg font-bold">UI/UX Design</h3>
                                </div>
                            </div>
                            <div class="bg-gradient-to-r from-slate-800 to-slate-900 p-6 rounded-xl">
                                <div class="flex items-center">
                                    <div class="h-2 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-full flex-grow mr-4"></div>
                                    <div class="text-sm font-bold">Creative Process</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Design Services -->
    <section id="services" class="py-16 relative z-10">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    Professional <span class="gradient-text">Design Services</span>
                </h2>
                <p class="text-xl text-slate-300 max-w-3xl mx-auto">
                    Comprehensive design solutions tailored to your brand's unique needs
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Service 1 -->
                <div class="service-card section-card animate-in p-8">
                    <div class="bg-indigo-500/20 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6 design-icon">
                        <i class="fas fa-palette text-3xl text-indigo-400"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-center">Brand Identity</h3>
                    <p class="text-slate-300 text-center mb-6">
                        Crafting memorable brand experiences through cohesive visual identities
                    </p>
                    <ul class="space-y-3 text-slate-300 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Logo Design & Brand Guidelines
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Business Card & Stationery
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Brand Style Guides
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Brand Strategy Development
                        </li>
                    </ul>
                    <button class="w-full py-3 bg-indigo-500/20 text-indigo-400 rounded-lg font-medium mt-4 hover:bg-indigo-500/30 transition">
                        Learn More
                    </button>
                </div>
                
                <!-- Service 2 -->
                <div class="service-card section-card animate-in p-8">
                    <div class="bg-purple-500/20 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6 design-icon">
                        <i class="fas fa-book-open text-3xl text-purple-400"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-center">Print Design</h3>
                    <p class="text-slate-300 text-center mb-6">
                        Beautiful printed materials that make a lasting impression
                    </p>
                    <ul class="space-y-3 text-slate-300 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Brochures & Catalogs
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Posters & Flyers
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Packaging Design
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Annual Reports
                        </li>
                    </ul>
                    <button class="w-full py-3 bg-purple-500/20 text-purple-400 rounded-lg font-medium mt-4 hover:bg-purple-500/30 transition">
                        Learn More
                    </button>
                </div>
                
                <!-- Service 3 -->
                <div class="service-card section-card animate-in p-8">
                    <div class="bg-pink-500/20 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6 design-icon">
                        <i class="fas fa-mobile-alt text-3xl text-pink-400"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-center">UI/UX Design</h3>
                    <p class="text-slate-300 text-center mb-6">
                        Intuitive digital experiences that delight users
                    </p>
                    <ul class="space-y-3 text-slate-300 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Website & App Design
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            User Interface Prototyping
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Wireframing & User Flows
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Design Systems
                        </li>
                    </ul>
                    <button class="w-full py-3 bg-pink-500/20 text-pink-400 rounded-lg font-medium mt-4 hover:bg-pink-500/30 transition">
                        Learn More
                    </button>
                </div>
                
                <!-- Service 4 -->
                <div class="service-card section-card animate-in p-8">
                    <div class="bg-cyan-500/20 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6 design-icon">
                        <i class="fas fa-icons text-3xl text-cyan-400"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-center">Illustration</h3>
                    <p class="text-slate-300 text-center mb-6">
                        Custom artwork that brings your ideas to life
                    </p>
                    <ul class="space-y-3 text-slate-300 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Character Design
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Digital Artwork
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Infographics
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Icon Sets
                        </li>
                    </ul>
                    <button class="w-full py-3 bg-cyan-500/20 text-cyan-400 rounded-lg font-medium mt-4 hover:bg-cyan-500/30 transition">
                        Learn More
                    </button>
                </div>
                
                <!-- Service 5 -->
                <div class="service-card section-card animate-in p-8">
                    <div class="bg-amber-500/20 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6 design-icon">
                        <i class="fas fa-ad text-3xl text-amber-400"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-center">Marketing Design</h3>
                    <p class="text-slate-300 text-center mb-6">
                        Designs that convert and drive business growth
                    </p>
                    <ul class="space-y-3 text-slate-300 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Social Media Graphics
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Email Templates
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Digital Ads & Banners
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Presentation Design
                        </li>
                    </ul>
                    <button class="w-full py-3 bg-amber-500/20 text-amber-400 rounded-lg font-medium mt-4 hover:bg-amber-500/30 transition">
                        Learn More
                    </button>
                </div>
                
                <!-- Service 6 -->
                <div class="service-card section-card animate-in p-8">
                    <div class="bg-rose-500/20 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6 design-icon">
                        <i class="fas fa-tshirt text-3xl text-rose-400"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-center">Merchandise Design</h3>
                    <p class="text-slate-300 text-center mb-6">
                        Wearable art that promotes your brand
                    </p>
                    <ul class="space-y-3 text-slate-300 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            T-shirt & Apparel Design
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Mug & Drinkware
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Promotional Products
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Packaging & Labeling
                        </li>
                    </ul>
                    <button class="w-full py-3 bg-rose-500/20 text-rose-400 rounded-lg font-medium mt-4 hover:bg-rose-500/30 transition">
                        Learn More
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Design Process -->
    <section id="process" class="py-16 bg-gradient-to-br from-slate-900/50 to-indigo-900/30 relative overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute top-1/4 left-1/4 w-80 h-80 bg-indigo-600 rounded-full filter blur-[120px] opacity-10"></div>
            <div class="absolute bottom-1/3 right-1/3 w-60 h-60 bg-purple-600 rounded-full filter blur-[100px] opacity-10"></div>
        </div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    Our Creative <span class="gradient-text">Design Process</span>
                </h2>
                <p class="text-xl text-slate-300 max-w-3xl mx-auto">
                    A structured approach to delivering exceptional design solutions
                </p>
            </div>
            
            <div class="design-process max-w-4xl mx-auto">
                <!-- Step 1 -->
                <div class="process-step animate-in">
                    <div class="section-card p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-indigo-500/20 p-3 rounded-full mr-4">
                                <span class="text-2xl font-bold text-indigo-400">1</span>
                            </div>
                            <h3 class="text-2xl font-bold">Discovery & Research</h3>
                        </div>
                        <p class="text-slate-300 mb-4">
                            We begin by understanding your business, audience, and goals through in-depth research and discovery sessions.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-indigo-900/30 text-indigo-300 px-3 py-1 rounded-full text-sm">Brand Analysis</span>
                            <span class="bg-indigo-900/30 text-indigo-300 px-3 py-1 rounded-full text-sm">Competitor Research</span>
                            <span class="bg-indigo-900/30 text-indigo-300 px-3 py-1 rounded-full text-sm">Goal Setting</span>
                        </div>
                    </div>
                </div>
                
                <!-- Step 2 -->
                <div class="process-step animate-in">
                    <div class="section-card p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-purple-500/20 p-3 rounded-full mr-4">
                                <span class="text-2xl font-bold text-purple-400">2</span>
                            </div>
                            <h3 class="text-2xl font-bold">Concept Development</h3>
                        </div>
                        <p class="text-slate-300 mb-4">
                            Our team brainstorms ideas and develops creative concepts that align with your brand and objectives.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-purple-900/30 text-purple-300 px-3 py-1 rounded-full text-sm">Mood Boards</span>
                            <span class="bg-purple-900/30 text-purple-300 px-3 py-1 rounded-full text-sm">Sketching</span>
                            <span class="bg-purple-900/30 text-purple-300 px-3 py-1 rounded-full text-sm">Concept Selection</span>
                        </div>
                    </div>
                </div>
                
                <!-- Step 3 -->
                <div class="process-step animate-in">
                    <div class="section-card p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-pink-500/20 p-3 rounded-full mr-4">
                                <span class="text-2xl font-bold text-pink-400">3</span>
                            </div>
                            <h3 class="text-2xl font-bold">Design Execution</h3>
                        </div>
                        <p class="text-slate-300 mb-4">
                            We bring concepts to life with pixel-perfect designs, typography, and color schemes that resonate with your audience.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-pink-900/30 text-pink-300 px-3 py-1 rounded-full text-sm">Digital Creation</span>
                            <span class="bg-pink-900/30 text-pink-300 px-3 py-1 rounded-full text-sm">Typography</span>
                            <span class="bg-pink-900/30 text-pink-300 px-3 py-1 rounded-full text-sm">Color Theory</span>
                        </div>
                    </div>
                </div>
                
                <!-- Step 4 -->
                <div class="process-step animate-in">
                    <div class="section-card p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-cyan-500/20 p-3 rounded-full mr-4">
                                <span class="text-2xl font-bold text-cyan-400">4</span>
                            </div>
                            <h3 class="text-2xl font-bold">Refinement & Delivery</h3>
                        </div>
                        <p class="text-slate-300 mb-4">
                            We refine designs based on your feedback and deliver final files in all required formats with guidelines for usage.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-cyan-900/30 text-cyan-300 px-3 py-1 rounded-full text-sm">Revisions</span>
                            <span class="bg-cyan-900/30 text-cyan-300 px-3 py-1 rounded-full text-sm">Final Files</span>
                            <span class="bg-cyan-900/30 text-cyan-300 px-3 py-1 rounded-full text-sm">Brand Guidelines</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio -->
    <section id="portfolio" class="py-16 relative overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-indigo-900/20 to-transparent"></div>
            <div class="absolute bottom-0 left-0 w-80 h-80 bg-purple-600 rounded-full filter blur-[120px] opacity-10"></div>
        </div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    Our <span class="gradient-text">Design Portfolio</span>
                </h2>
                <p class="text-xl text-slate-300 max-w-3xl mx-auto">
                    Showcasing our recent work and creative solutions
                </p>
            </div>
            
            <div class="flex flex-wrap justify-center gap-4 mb-12">
                <button class="portfolio-filter-btn px-4 py-2 bg-slate-800 text-slate-300 rounded-full active">
                    All Projects
                </button>
                <button class="portfolio-filter-btn px-4 py-2 bg-slate-800 text-slate-300 rounded-full">
                    Branding
                </button>
                <button class="portfolio-filter-btn px-4 py-2 bg-slate-800 text-slate-300 rounded-full">
                    Print Design
                </button>
                <button class="portfolio-filter-btn px-4 py-2 bg-slate-800 text-slate-300 rounded-full">
                    UI/UX
                </button>
                <button class="portfolio-filter-btn px-4 py-2 bg-slate-800 text-slate-300 rounded-full">
                    Packaging
                </button>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Portfolio Item 1 -->
                <div class="portfolio-item animate-in">
                    <div class="bg-gradient-to-br from-indigo-500 to-purple-600 h-80 rounded-lg flex items-center justify-center">
                        <div class="text-center p-8">
                            <div class="text-5xl font-bold mb-2">NEXUS</div>
                            <div class="text-lg">Technology Brand Identity</div>
                        </div>
                    </div>
                    <div class="portfolio-overlay">
                        <h3 class="text-xl font-bold mb-2">NEXUS Brand Identity</h3>
                        <p class="text-slate-300 mb-4">Complete brand identity for a tech startup</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-indigo-500/20 text-indigo-300 px-3 py-1 rounded-full text-sm">Logo</span>
                            <span class="bg-indigo-500/20 text-indigo-300 px-3 py-1 rounded-full text-sm">Branding</span>
                            <span class="bg-indigo-500/20 text-indigo-300 px-3 py-1 rounded-full text-sm">Stationery</span>
                        </div>
                    </div>
                </div>
                
                <!-- Portfolio Item 2 -->
                <div class="portfolio-item animate-in">
                    <div class="bg-gradient-to-br from-pink-500 to-rose-600 h-80 rounded-lg flex items-center justify-center">
                        <div class="text-center p-8">
                            <div class="text-5xl font-bold mb-2">BLOOM</div>
                            <div class="text-lg">Cosmetics Packaging</div>
                        </div>
                    </div>
                    <div class="portfolio-overlay">
                        <h3 class="text-xl font-bold mb-2">BLOOM Cosmetics</h3>
                        <p class="text-slate-300 mb-4">Eco-friendly packaging design for skincare line</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-pink-500/20 text-pink-300 px-3 py-1 rounded-full text-sm">Packaging</span>
                            <span class="bg-pink-500/20 text-pink-300 px-3 py-1 rounded-full text-sm">Label Design</span>
                            <span class="bg-pink-500/20 text-pink-300 px-3 py-1 rounded-full text-sm">Illustration</span>
                        </div>
                    </div>
                </div>
                
                <!-- Portfolio Item 3 -->
                <div class="portfolio-item animate-in">
                    <div class="bg-gradient-to-br from-cyan-500 to-blue-600 h-80 rounded-lg flex items-center justify-center">
                        <div class="text-center p-8">
                            <div class="text-5xl font-bold mb-2">FINOVA</div>
                            <div class="text-lg">Financial App UI/UX</div>
                        </div>
                    </div>
                    <div class="portfolio-overlay">
                        <h3 class="text-xl font-bold mb-2">FINOVA Finance App</h3>
                        <p class="text-slate-300 mb-4">Mobile banking application interface design</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-cyan-500/20 text-cyan-300 px-3 py-1 rounded-full text-sm">UI/UX</span>
                            <span class="bg-cyan-500/20 text-cyan-300 px-3 py-1 rounded-full text-sm">App Design</span>
                            <span class="bg-cyan-500/20 text-cyan-300 px-3 py-1 rounded-full text-sm">Prototyping</span>
                        </div>
                    </div>
                </div>
                
                <!-- Portfolio Item 4 -->
                <div class="portfolio-item animate-in">
                    <div class="bg-gradient-to-br from-amber-500 to-orange-600 h-80 rounded-lg flex items-center justify-center">
                        <div class="text-center p-8">
                            <div class="text-5xl font-bold mb-2">URBAN</div>
                            <div class="text-lg">Fashion Brand Identity</div>
                        </div>
                    </div>
                    <div class="portfolio-overlay">
                        <h3 class="text-xl font-bold mb-2">URBAN Streetwear</h3>
                        <p class="text-slate-300 mb-4">Brand identity for contemporary fashion label</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-amber-500/20 text-amber-300 px-3 py-1 rounded-full text-sm">Branding</span>
                            <span class="bg-amber-500/20 text-amber-300 px-3 py-1 rounded-full text-sm">Apparel</span>
                            <span class="bg-amber-500/20 text-amber-300 px-3 py-1 rounded-full text-sm">Typography</span>
                        </div>
                    </div>
                </div>
                
                <!-- Portfolio Item 5 -->
                <div class="portfolio-item animate-in">
                    <div class="bg-gradient-to-br from-green-500 to-emerald-600 h-80 rounded-lg flex items-center justify-center">
                        <div class="text-center p-8">
                            <div class="text-5xl font-bold mb-2">ORGANIC</div>
                            <div class="text-lg">Food Packaging Design</div>
                        </div>
                    </div>
                    <div class="portfolio-overlay">
                        <h3 class="text-xl font-bold mb-2">ORGANIC Food Co.</h3>
                        <p class="text-slate-300 mb-4">Sustainable packaging for organic food products</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-green-500/20 text-green-300 px-3 py-1 rounded-full text-sm">Packaging</span>
                            <span class="bg-green-500/20 text-green-300 px-3 py-1 rounded-full text-sm">Label Design</span>
                            <span class="bg-green-500/20 text-green-300 px-3 py-1 rounded-full text-sm">Illustration</span>
                        </div>
                    </div>
                </div>
                
                <!-- Portfolio Item 6 -->
                <div class="portfolio-item animate-in">
                    <div class="bg-gradient-to-br from-rose-500 to-pink-600 h-80 rounded-lg flex items-center justify-center">
                        <div class="text-center p-8">
                            <div class="text-5xl font-bold mb-2">CAFÉ</div>
                            <div class="text-lg">Restaurant Branding</div>
                        </div>
                    </div>
                    <div class="portfolio-overlay">
                        <h3 class="text-xl font-bold mb-2">Artisan Café</h3>
                        <p class="text-slate-300 mb-4">Complete branding for specialty coffee shop</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-rose-500/20 text-rose-300 px-3 py-1 rounded-full text-sm">Brand Identity</span>
                            <span class="bg-rose-500/20 text-rose-300 px-3 py-1 rounded-full text-sm">Menu Design</span>
                            <span class="bg-rose-500/20 text-rose-300 px-3 py-1 rounded-full text-sm">Signage</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section id="testimonials" class="py-16 bg-gradient-to-br from-slate-900/50 to-purple-900/30 relative overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute top-1/3 left-1/4 w-60 h-60 bg-indigo-600 rounded-full filter blur-[100px] opacity-10"></div>
            <div class="absolute bottom-1/4 right-1/3 w-80 h-80 bg-purple-600 rounded-full filter blur-[120px] opacity-10"></div>
        </div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    Client <span class="gradient-text">Testimonials</span>
                </h2>
                <p class="text-xl text-slate-300 max-w-3xl mx-auto">
                    What our clients say about our design services
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-6xl mx-auto">
                <!-- Testimonial 1 -->
                <div class="testimonial-card section-card animate-in p-8">
                    <i class="fas fa-quote-right quote-icon"></i>
                    <div class="flex items-center mb-6">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=128&h=128&q=80" alt="Client" class="client-image">
                        <div class="ml-4">
                            <h4 class="text-xl font-bold">Michael Reynolds</h4>
                            <p class="text-slate-400">CEO, TechSolutions Inc.</p>
                            <div class="flex mt-1">
                                <i class="fas fa-star rating-star"></i>
                                <i class="fas fa-star rating-star"></i>
                                <i class="fas fa-star rating-star"></i>
                                <i class="fas fa-star rating-star"></i>
                                <i class="fas fa-star rating-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-slate-300 italic">
                        "The branding they created for our startup perfectly captured our vision. The logo and identity system have become core assets that differentiate us in a competitive market."
                    </p>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="testimonial-card section-card animate-in p-8">
                    <i class="fas fa-quote-right quote-icon"></i>
                    <div class="flex items-center mb-6">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=128&h=128&q=80" alt="Client" class="client-image">
                        <div class="ml-4">
                            <h4 class="text-xl font-bold">Sarah Johnson</h4>
                            <p class="text-slate-400">Marketing Director, Bloom Cosmetics</p>
                            <div class="flex mt-1">
                                <i class="fas fa-star rating-star"></i>
                                <i class="fas fa-star rating-star"></i>
                                <i class="fas fa-star rating-star"></i>
                                <i class="fas fa-star rating-star"></i>
                                <i class="fas fa-star rating-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-slate-300 italic">
                        "Our new packaging design increased sales by 40% in the first quarter. The team understood our brand values and created stunning designs that resonate with our eco-conscious customers."
                    </p>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="testimonial-card section-card animate-in p-8">
                    <i class="fas fa-quote-right quote-icon"></i>
                    <div class="flex items-center mb-6">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=128&h=128&q=80" alt="Client" class="client-image">
                        <div class="ml-4">
                            <h4 class="text-xl font-bold">David Chen</h4>
                            <p class="text-slate-400">Product Manager, Finova Finance</p>
                            <div class="flex mt-1">
                                <i class="fas fa-star rating-star"></i>
                                <i class="fas fa-star rating-star"></i>
                                <i class="fas fa-star rating-star"></i>
                                <i class="fas fa-star rating-star"></i>
                                <i class="fas fa-star rating-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-slate-300 italic">
                        "The UI/UX design for our financial app exceeded all expectations. User engagement increased by 65% after implementing their intuitive interface and user flows."
                    </p>
                </div>
                
                <!-- Testimonial 4 -->
                <div class="testimonial-card section-card animate-in p-8">
                    <i class="fas fa-quote-right quote-icon"></i>
                    <div class="flex items-center mb-6">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=128&h=128&q=80" alt="Client" class="client-image">
                        <div class="ml-4">
                            <h4 class="text-xl font-bold">Emma Rodriguez</h4>
                            <p class="text-slate-400">Owner, Artisan Café</p>
                            <div class="flex mt-1">
                                <i class="fas fa-star rating-star"></i>
                                <i class="fas fa-star rating-star"></i>
                                <i class="fas fa-star rating-star"></i>
                                <i class="fas fa-star rating-star"></i>
                                <i class="fas fa-star rating-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-slate-300 italic">
                        "The branding for my café transformed my business. Customers constantly compliment the design, and the cohesive identity across all touchpoints has elevated our brand perception."
                    </p>
                </div>
            </div>
        </div>
    </section>

 

    <?php include("./components/footer.php")?>

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
            
            // Portfolio filter buttons
            const filterButtons = document.querySelectorAll('.portfolio-filter-btn');
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                });
            });
            
            // Process step animations
            gsap.utils.toArray('.process-step').forEach((item, i) => {
                gsap.from(item, {
                    scrollTrigger: {
                        trigger: item,
                        start: 'top 90%',
                        toggleActions: 'play none none none'
                    },
                    opacity: 0,
                    y: 30,
                    duration: 0.8,
                    delay: i * 0.2,
                    ease: "power2.out"
                });
            });
        });
    </script>
</body>
</html>