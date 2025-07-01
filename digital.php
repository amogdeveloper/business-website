<?php include("./background.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Digital Marketing Services | Grow Your Business Online</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Raleway:wght@800;900&display=swap');
        
        :root {
            --primary: #6366f1;
            --secondary:rgba(124, 123, 230, 0.57);
            --accent: #14b8a6;
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
        
        .input-glow:focus {
            box-shadow: 0 0 0 2px rgba(99, 102, 241, 0.5);
            border-color: var(--primary);
        }
        
        .btn-glow {
            transition: all 0.3s ease;
        }
        
        .btn-glow:hover {
            box-shadow: 0 0 20px rgba(99, 102, 241, 0.7);
            transform: translateY(-3px);
        }
        
        .timeline {
            position: relative;
        }
        
        .timeline::before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(to bottom, var(--primary), var(--secondary), var(--accent));
            left: 20px;
        }
        
        .timeline-item {
            position: relative;
            padding-left: 50px;
            margin-bottom: 30px;
        }
        
        .timeline-item::before {
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
            box-shadow: 0 10px 25px rgba(20, 184, 166, 0.3);
        }
        
        .benefit-card {
            transition: all 0.4s ease;
        }
        
        .benefit-card:hover {
            transform: scale(1.05);
            background: rgba(99, 102, 241, 0.1);
        }
        
        .result-bar {
            height: 8px;
            border-radius: 4px;
            background: rgba(255, 255, 255, 0.1);
            overflow: hidden;
            position: relative;
        }
        
        .result-fill {
            height: 100%;
            border-radius: 4px;
            position: absolute;
            left: 0;
            top: 0;
            background: linear-gradient(90deg, var(--accent), var(--primary));
        }
        
        .analytics-chart {
            position: relative;
            height: 300px;
            display: flex;
            align-items: flex-end;
            justify-content: space-around;
            padding: 0 20px;
        }
        
        .chart-bar {
            width: 40px;
            background: linear-gradient(to top, var(--primary), var(--secondary));
            border-radius: 5px 5px 0 0;
            position: relative;
            transition: height 1s ease;
        }
        
        .chart-bar::after {
            content: attr(data-value);
            position: absolute;
            top: -25px;
            left: 50%;
            transform: translateX(-50%);
            color: white;
            font-size: 12px;
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
        
        .testimonial-card {
            transition: all 0.4s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
            overflow: hidden;
            position: relative;
        }
        
        .testimonial-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(20, 184, 166, 0.3);
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
        
        .company-logo {
            filter: grayscale(100%) brightness(150%);
            opacity: 0.7;
            transition: all 0.3s ease;
            width: 80px;
            height: 30px;
            object-fit: contain;
        }
        
        .process-step {
            transition: all 0.4s ease;
        }
        
        .process-step:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(99, 102, 241, 0.3);
        }
        
        .benefit-icon {
            transition: all 0.4s ease;
        }
        
        .benefit-card:hover .benefit-icon {
            transform: scale(1.1);
            background: var(--accent);
        }
        
        .package-feature {
            position: relative;
            padding-left: 30px;
        }
        
        .package-feature::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--accent);
            font-weight: bold;
        }
        
        .stat-card {
            background: rgba(99, 102, 241, 0.1);
            border: 1px solid rgba(99, 102, 241, 0.3);
            border-radius: 16px;
            padding: 20px;
            transition: all 0.3s ease;
        }
        
        .stat-card:hover {
            background: rgba(99, 102, 241, 0.2);
            transform: translateY(-5px);
        }
        
        .platform-card {
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .platform-card:hover {
            transform: translateY(-5px);
            border-color: var(--accent);
            box-shadow: 0 10px 20px rgba(20, 184, 166, 0.2);
        }
        
        .service-icon {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }
        
        .service-icon i {
            font-size: 32px;
            color: white;
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
    </style>
</head>
<body class="min-h-screen">
    <?php include("./components/header.php")?>
    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute top-20 left-10 w-60 h-60 bg-indigo-600 rounded-full filter blur-[100px] opacity-20"></div>
            <div class="absolute bottom-10 right-10 w-80 h-80 bg-pink-600 rounded-full filter blur-[120px] opacity-20"></div>
            <div class="absolute top-1/3 right-1/4 w-40 h-40 bg-teal-500 rounded-full filter blur-[80px] opacity-20"></div>
        </div>
        
        <div class="container mx-auto px-4 py-16 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-block bg-indigo-900/30 px-4 py-1 rounded-full text-indigo-300 mb-6">
                        <i class="fas fa-rocket mr-2"></i> Transform Your Digital Presence
                    </div>
                    <h1 class="text-4xl md:text-6xl font-bold mb-6">
                        Comprehensive <span class="gradient-text">Digital Marketing</span> Solutions
                    </h1>
                    <p class="text-xl text-slate-300 mb-10">
                        Accelerate your business growth with our data-driven digital marketing strategies. We help brands dominate their markets through integrated online marketing solutions.
                    </p>
                    
                    <div class="flex flex-wrap gap-4">
                        <a href="#services" class="px-8 py-3 bg-gradient-to-r from-indigo-500 to-pink-500 rounded-full font-bold text-lg shadow-lg hover:shadow-xl transition-all transform hover:scale-105 btn-glow">
                            Explore Services
                        </a>
                        <a href="#contact" class="px-8 py-3 bg-transparent border-2 border-white text-white rounded-full font-bold text-lg hover:bg-white hover:text-gray-900 transition-all">
                            Get a Free Strategy Session
                        </a>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-6 mt-12">
                        <div class="stat-card">
                            <div class="text-4xl font-bold gradient-text mb-2">78%</div>
                            <div class="text-slate-300">Average Traffic Growth</div>
                        </div>
                        <div class="stat-card">
                            <div class="text-4xl font-bold gradient-text mb-2">250+</div>
                            <div class="text-slate-300">Successful Campaigns</div>
                        </div>
                        <div class="stat-card">
                            <div class="text-4xl font-bold gradient-text mb-2">95%</div>
                            <div class="text-slate-300">Client Retention Rate</div>
                        </div>
                        <div class="stat-card">
                            <div class="text-4xl font-bold gradient-text mb-2">3.2M</div>
                            <div class="text-slate-300">Monthly Leads Generated</div>
                        </div>
                    </div>
                </div>
                
                <div class="flex justify-center floating">
                    <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-indigo-500 to-pink-500 rounded-full blur-3xl opacity-30 animate-pulse"></div>
                        <div class="relative bg-gray-900 border border-gray-700 rounded-2xl p-8 max-w-lg">
                            <div class="text-center mb-6">
                                <div class="text-5xl font-bold gradient-text mb-2">360°</div>
                                <div class="text-xl">Digital Marketing Approach</div>
                            </div>
                            <div class="grid grid-cols-3 gap-4">
                                <div class="bg-indigo-900/30 p-4 rounded-xl text-center">
                                    <i class="fas fa-search text-3xl text-indigo-400 mb-3"></i>
                                    <h4 class="font-bold">SEO</h4>
                                </div>
                                <div class="bg-pink-900/30 p-4 rounded-xl text-center">
                                    <i class="fas fa-ad text-3xl text-pink-400 mb-3"></i>
                                    <h4 class="font-bold">PPC</h4>
                                </div>
                                <div class="bg-teal-900/30 p-4 rounded-xl text-center">
                                    <i class="fas fa-hashtag text-3xl text-teal-400 mb-3"></i>
                                    <h4 class="font-bold">Social</h4>
                                </div>
                                <div class="bg-indigo-900/30 p-4 rounded-xl text-center">
                                    <i class="fas fa-envelope-open-text text-3xl text-indigo-400 mb-3"></i>
                                    <h4 class="font-bold">Email</h4>
                                </div>
                                <div class="bg-pink-900/30 p-4 rounded-xl text-center">
                                    <i class="fas fa-pen-fancy text-3xl text-pink-400 mb-3"></i>
                                    <h4 class="font-bold">Content</h4>
                                </div>
                                <div class="bg-teal-900/30 p-4 rounded-xl text-center">
                                    <i class="fas fa-chart-line text-3xl text-teal-400 mb-3"></i>
                                    <h4 class="font-bold">Analytics</h4>
                                </div>
                            </div>
                            <p class="text-center text-slate-400 mt-6">Integrated solutions for maximum impact</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Digital Marketing Services -->
    <section id="services" class="py-16 relative z-10">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    Our <span class="gradient-text">Digital Marketing</span> Services
                </h2>
                <p class="text-xl text-slate-300 max-w-3xl mx-auto">
                    Comprehensive solutions to grow your business in the digital landscape
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Service 1 -->
                <div class="service-card section-card animate-in p-8">
                    <div class="service-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-center">Search Engine Optimization</h3>
                    <p class="text-slate-300 mb-6 text-center">
                        Dominate search rankings and drive organic traffic to your website
                    </p>
                    <ul class="space-y-3 text-slate-300 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Comprehensive keyword research
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Technical SEO optimization
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Content strategy & creation
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Local SEO implementation
                        </li>
                    </ul>
                    <button class="w-full py-3 bg-indigo-500/20 text-indigo-400 rounded-lg font-medium mt-4 hover:bg-indigo-500/30 transition">
                        Learn More
                    </button>
                </div>
                
                <!-- Service 2 -->
                <div class="service-card section-card animate-in p-8">
                    <div class="service-icon">
                        <i class="fas fa-ad"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-center">Pay-Per-Click Advertising</h3>
                    <p class="text-slate-300 mb-6 text-center">
                        Drive targeted traffic and conversions with strategic paid campaigns
                    </p>
                    <ul class="space-y-3 text-slate-300 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Google Ads management
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Social media advertising
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Retargeting campaigns
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Conversion rate optimization
                        </li>
                    </ul>
                    <button class="w-full py-3 bg-pink-500/20 text-pink-400 rounded-lg font-medium mt-4 hover:bg-pink-500/30 transition">
                        Learn More
                    </button>
                </div>
                
                <!-- Service 3 -->
                <div class="service-card section-card animate-in p-8">
                    <div class="service-icon">
                        <i class="fas fa-hashtag"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-center">Social Media Marketing</h3>
                    <p class="text-slate-300 mb-6 text-center">
                        Build brand awareness and engagement across social platforms
                    </p>
                    <ul class="space-y-3 text-slate-300 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Content strategy & creation
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Community management
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Influencer partnerships
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Performance analytics
                        </li>
                    </ul>
                    <button class="w-full py-3 bg-teal-500/20 text-teal-400 rounded-lg font-medium mt-4 hover:bg-teal-500/30 transition">
                        Learn More
                    </button>
                </div>
                
                <!-- Service 4 -->
                <div class="service-card section-card animate-in p-8">
                    <div class="service-icon">
                        <i class="fas fa-envelope-open-text"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-center">Email Marketing</h3>
                    <p class="text-slate-300 mb-6 text-center">
                        Nurture leads and drive repeat business with targeted campaigns
                    </p>
                    <ul class="space-y-3 text-slate-300 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Newsletter development
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Automation workflows
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            List segmentation
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Performance optimization
                        </li>
                    </ul>
                    <button class="w-full py-3 bg-indigo-500/20 text-indigo-400 rounded-lg font-medium mt-4 hover:bg-indigo-500/30 transition">
                        Learn More
                    </button>
                </div>
                
                <!-- Service 5 -->
                <div class="service-card section-card animate-in p-8">
                    <div class="service-icon">
                        <i class="fas fa-pen-fancy"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-center">Content Marketing</h3>
                    <p class="text-slate-300 mb-6 text-center">
                        Attract and engage your audience with valuable content
                    </p>
                    <ul class="space-y-3 text-slate-300 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Blog content creation
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Video production
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Infographic design
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Content distribution
                        </li>
                    </ul>
                    <button class="w-full py-3 bg-pink-500/20 text-pink-400 rounded-lg font-medium mt-4 hover:bg-pink-500/30 transition">
                        Learn More
                    </button>
                </div>
                
                <!-- Service 6 -->
                <div class="service-card section-card animate-in p-8">
                    <div class="service-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-center">Analytics & Reporting</h3>
                    <p class="text-slate-300 mb-6 text-center">
                        Measure performance and make data-driven decisions
                    </p>
                    <ul class="space-y-3 text-slate-300 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            KPI tracking
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Conversion analysis
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            ROI measurement
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Strategic recommendations
                        </li>
                    </ul>
                    <button class="w-full py-3 bg-teal-500/20 text-teal-400 rounded-lg font-medium mt-4 hover:bg-teal-500/30 transition">
                        Learn More
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Marketing Platforms -->
    <section class="py-16 bg-gradient-to-br from-slate-900/50 to-indigo-900/30 relative overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute top-1/4 left-1/4 w-80 h-80 bg-indigo-600 rounded-full filter blur-[120px] opacity-10"></div>
            <div class="absolute bottom-1/3 right-1/3 w-60 h-60 bg-pink-600 rounded-full filter blur-[100px] opacity-10"></div>
        </div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    Platform <span class="gradient-text">Expertise</span>
                </h2>
                <p class="text-xl text-slate-300 max-w-3xl mx-auto">
                    We specialize in the leading digital marketing platforms
                </p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 max-w-6xl mx-auto">
                <div class="platform-card section-card p-6 text-center">
                    <i class="fab fa-google text-4xl text-blue-400 mb-4"></i>
                    <h3 class="font-bold">Google</h3>
                    <p class="text-sm text-slate-400 mt-1">Ads & Analytics</p>
                </div>
                
                <div class="platform-card section-card p-6 text-center">
                    <i class="fab fa-facebook text-4xl text-blue-500 mb-4"></i>
                    <h3 class="font-bold">Facebook</h3>
                    <p class="text-sm text-slate-400 mt-1">Ads & Pages</p>
                </div>
                
                <div class="platform-card section-card p-6 text-center">
                    <i class="fab fa-instagram text-4xl text-pink-500 mb-4"></i>
                    <h3 class="font-bold">Instagram</h3>
                    <p class="text-sm text-slate-400 mt-1">Marketing</p>
                </div>
                
                <div class="platform-card section-card p-6 text-center">
                    <i class="fab fa-linkedin text-4xl text-blue-300 mb-4"></i>
                    <h3 class="font-bold">LinkedIn</h3>
                    <p class="text-sm text-slate-400 mt-1">B2B Solutions</p>
                </div>
                
                <div class="platform-card section-card p-6 text-center">
                    <i class="fab fa-tiktok text-4xl text-black dark:text-white mb-4"></i>
                    <h3 class="font-bold">TikTok</h3>
                    <p class="text-sm text-slate-400 mt-1">Viral Campaigns</p>
                </div>
                
                <div class="platform-card section-card p-6 text-center">
                    <i class="fab fa-youtube text-4xl text-red-500 mb-4"></i>
                    <h3 class="font-bold">YouTube</h3>
                    <p class="text-sm text-slate-400 mt-1">Video Marketing</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Process -->
    <section id="process" class="py-16 relative overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-indigo-900/20 to-transparent"></div>
            <div class="absolute bottom-0 left-0 w-80 h-80 bg-pink-600 rounded-full filter blur-[120px] opacity-10"></div>
        </div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    Our <span class="gradient-text">Marketing Process</span>
                </h2>
                <p class="text-xl text-slate-300 max-w-3xl mx-auto">
                    A strategic approach to ensure your marketing success
                </p>
            </div>
            
            <div class="timeline max-w-4xl mx-auto">
                <!-- Step 1 -->
                <div class="timeline-item process-step animate-in">
                    <div class="section-card p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-indigo-500/20 p-3 rounded-full mr-4">
                                <i class="fas fa-search text-2xl text-indigo-400"></i>
                            </div>
                            <h3 class="text-2xl font-bold">Discovery & Research</h3>
                        </div>
                        <p class="text-slate-300 mb-4">
                            We conduct comprehensive analysis of your business, audience, and competitors to identify growth opportunities.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-indigo-900/30 text-indigo-300 px-3 py-1 rounded-full text-sm">Market Analysis</span>
                            <span class="bg-indigo-900/30 text-indigo-300 px-3 py-1 rounded-full text-sm">Audience Research</span>
                            <span class="bg-indigo-900/30 text-indigo-300 px-3 py-1 rounded-full text-sm">Competitor Audit</span>
                        </div>
                    </div>
                </div>
                
                <!-- Step 2 -->
                <div class="timeline-item process-step animate-in">
                    <div class="section-card p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-pink-500/20 p-3 rounded-full mr-4">
                                <i class="fas fa-chess text-2xl text-pink-400"></i>
                            </div>
                            <h3 class="text-2xl font-bold">Strategy Development</h3>
                        </div>
                        <p class="text-slate-300 mb-4">
                            We create a customized marketing roadmap with clear objectives, channels, and KPIs tailored to your business.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-pink-900/30 text-pink-300 px-3 py-1 rounded-full text-sm">Channel Selection</span>
                            <span class="bg-pink-900/30 text-pink-300 px-3 py-1 rounded-full text-sm">Content Planning</span>
                            <span class="bg-pink-900/30 text-pink-300 px-3 py-1 rounded-full text-sm">KPI Setting</span>
                        </div>
                    </div>
                </div>
                
                <!-- Step 3 -->
                <div class="timeline-item process-step animate-in">
                    <div class="section-card p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-teal-500/20 p-3 rounded-full mr-4">
                                <i class="fas fa-cogs text-2xl text-teal-400"></i>
                            </div>
                            <h3 class="text-2xl font-bold">Implementation</h3>
                        </div>
                        <p class="text-slate-300 mb-4">
                            Our expert team executes the strategy across all selected channels with precision and creativity.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-teal-900/30 text-teal-300 px-3 py-1 rounded-full text-sm">Content Creation</span>
                            <span class="bg-teal-900/30 text-teal-300 px-3 py-1 rounded-full text-sm">Campaign Setup</span>
                            <span class="bg-teal-900/30 text-teal-300 px-3 py-1 rounded-full text-sm">Technical Integration</span>
                        </div>
                    </div>
                </div>
                
                <!-- Step 4 -->
                <div class="timeline-item process-step animate-in">
                    <div class="section-card p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-indigo-500/20 p-3 rounded-full mr-4">
                                <i class="fas fa-chart-line text-2xl text-indigo-400"></i>
                            </div>
                            <h3 class="text-2xl font-bold">Optimization</h3>
                        </div>
                        <p class="text-slate-300 mb-4">
                            We continuously analyze performance and refine our approach to maximize your ROI.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-indigo-900/30 text-indigo-300 px-3 py-1 rounded-full text-sm">A/B Testing</span>
                            <span class="bg-indigo-900/30 text-indigo-300 px-3 py-1 rounded-full text-sm">Performance Analysis</span>
                            <span class="bg-indigo-900/30 text-indigo-300 px-3 py-1 rounded-full text-sm">Strategy Refinement</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Packages -->
    <section id="pricing" class="py-16  relative overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute top-1/3 left-1/4 w-60 h-60 bg-indigo-600 rounded-full filter blur-[100px] opacity-10"></div>
            <div class="absolute bottom-1/4 right-1/3 w-80 h-80 bg-pink-600 rounded-full filter blur-[120px] opacity-10"></div>
        </div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    Results-Driven <span class="gradient-text">Pricing</span>
                </h2>
                <p class="text-xl text-slate-300 max-w-3xl mx-auto">
                    Choose the marketing solution that fits your business needs
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Package 1 -->
                <div class="package-card section-card animate-in p-8 flex flex-col">
                    <h3 class="text-2xl font-bold mb-4 text-center">Starter Plan</h3>
                    <div class="text-4xl font-bold mb-6 text-center">
                        $1,299<span class="text-xl text-slate-400">/month</span>
                    </div>
                    <ul class="space-y-4 text-slate-300 mb-8 flex-grow">
                        <li class="package-feature">1-2 Marketing Channels</li>
                        <li class="package-feature">Basic SEO Optimization</li>
                        <li class="package-feature">Social Media Management (2 platforms)</li>
                        <li class="package-feature">Monthly Performance Reports</li>
                        <li class="package-feature">Email Support</li>
                    </ul>
                    <button class="w-full py-3 bg-indigo-500/20 text-indigo-400 rounded-lg font-medium hover:bg-indigo-500/30 transition mt-auto">
                        Get Started
                    </button>
                </div>
                
                <!-- Package 2 -->
                <div class="featured-package package-card section-card animate-in p-8 flex flex-col">
                    <h3 class="text-2xl font-bold mb-4 text-center">Growth Plan</h3>
                    <div class="text-4xl font-bold mb-6 text-center">
                        $2,499<span class="text-xl text-slate-400">/month</span>
                    </div>
                    <ul class="space-y-4 text-slate-300 mb-8 flex-grow">
                        <li class="package-feature">3-4 Marketing Channels</li>
                        <li class="package-feature">Advanced SEO & Content Strategy</li>
                        <li class="package-feature">Social Media Management (4 platforms)</li>
                        <li class="package-feature">PPC Campaign Management</li>
                        <li class="package-feature">Email Marketing Automation</li>
                        <li class="package-feature">Bi-weekly Performance Reports</li>
                        <li class="package-feature">Priority Support</li>
                    </ul>
                    <button class="w-full py-3 bg-gradient-to-r from-pink-500 to-indigo-500 text-white rounded-lg font-bold hover:opacity-90 transition mt-auto">
                        Choose Growth
                    </button>
                </div>
                
                <!-- Package 3 -->
                <div class="package-card section-card animate-in p-8 flex flex-col">
                    <h3 class="text-2xl font-bold mb-4 text-center">Enterprise Plan</h3>
                    <div class="text-4xl font-bold mb-6 text-center">
                        $4,499<span class="text-xl text-slate-400">/month</span>
                    </div>
                    <ul class="space-y-4 text-slate-300 mb-8 flex-grow">
                        <li class="package-feature">Full Marketing Stack</li>
                        <li class="package-feature">Comprehensive Digital Strategy</li>
                        <li class="package-feature">Omnichannel Campaign Management</li>
                        <li class="package-feature">Advanced Analytics & Reporting</li>
                        <li class="package-feature">Custom Content Production</li>
                        <li class="package-feature">Conversion Rate Optimization</li>
                        <li class="package-feature">Weekly Strategy Sessions</li>
                        <li class="package-feature">Dedicated Account Manager</li>
                    </ul>
                    <button class="w-full py-3 bg-indigo-500/20 text-indigo-400 rounded-lg font-medium hover:bg-indigo-500/30 transition mt-auto">
                        Contact Sales
                    </button>
                </div>
            </div>
            
            <div class="max-w-3xl mx-auto mt-16 text-center">
                <p class="text-slate-300 mb-8">
                    All packages include:
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <span class="bg-indigo-900/30 text-indigo-300 px-4 py-2 rounded-full">
                        <i class="fas fa-check-circle mr-2"></i>Strategy Development
                    </span>
                    <span class="bg-indigo-900/30 text-indigo-300 px-4 py-2 rounded-full">
                        <i class="fas fa-check-circle mr-2"></i>Performance Tracking
                    </span>
                    <span class="bg-indigo-900/30 text-indigo-300 px-4 py-2 rounded-full">
                        <i class="fas fa-check-circle mr-2"></i>Monthly Review Calls
                    </span>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section id="testimonials" class="py-16 relative overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute top-0 left-0 w-1/2 h-full bg-gradient-to-r from-indigo-900/20 to-transparent"></div>
            <div class="absolute bottom-0 right-0 w-80 h-80 bg-teal-600 rounded-full filter blur-[120px] opacity-10"></div>
        </div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    Client <span class="gradient-text">Success Stories</span>
                </h2>
                <p class="text-xl text-slate-300 max-w-3xl mx-auto">
                    See how we've transformed businesses with our digital marketing expertise
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
                            <p class="text-slate-400">Marketing Director, TechSolutions Inc.</p>
                            <div class="flex mt-1">
                                <i class="fas fa-star rating-star"></i>
                                <i class="fas fa-star rating-star"></i>
                                <i class="fas fa-star rating-star"></i>
                                <i class="fas fa-star rating-star"></i>
                                <i class="fas fa-star rating-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-slate-300 italic mb-6">
                        "The digital marketing strategy implemented by this team transformed our online presence. In 6 months, our leads increased by 150% and our conversion rate doubled. Their integrated approach delivers real results."
                    </p>
                    <div class="result-bar">
                        <div class="result-fill" style="width: 92%;"></div>
                    </div>
                    <div class="flex justify-between mt-2 text-sm text-slate-400">
                        <span>Before</span>
                        <span>Leads: +150%</span>
                        <span>After</span>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="testimonial-card section-card animate-in p-8">
                    <i class="fas fa-quote-right quote-icon"></i>
                    <div class="flex items-center mb-6">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=128&h=128&q=80" alt="Client" class="client-image">
                        <div class="ml-4">
                            <h4 class="text-xl font-bold">Sarah Johnson</h4>
                            <p class="text-slate-400">CEO, Wellness Essentials</p>
                            <div class="flex mt-1">
                                <i class="fas fa-star rating-star"></i>
                                <i class="fas fa-star rating-star"></i>
                                <i class="fas fa-star rating-star"></i>
                                <i class="fas fa-star rating-star"></i>
                                <i class="fas fa-star rating-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-slate-300 italic mb-6">
                        "Working with this team has been transformative for our e-commerce business. Our social media engagement increased by 300% and our email marketing ROI is now 45:1. They truly understand how to integrate channels for maximum impact."
                    </p>
                    <div class="result-bar">
                        <div class="result-fill" style="width: 87%;"></div>
                    </div>
                    <div class="flex justify-between mt-2 text-sm text-slate-400">
                        <span>Before</span>
                        <span>ROI: 45:1</span>
                        <span>After</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA -->
  <section class="py-20 relative overflow-hidden logo-bg-section ">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-purple-500/10 z-0"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">Ready to Transform Your Business?</h2>
                <p class="text-xl text-slate-300 mb-10 max-w-2xl mx-auto">
                    Join hundreds of satisfied clients who have revolutionized their operations with our cutting-edge solutions.
                </p>
                <button class="px-8 py-4 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full font-bold text-xl shadow-lg hover:shadow-xl transition-all transform hover:scale-105 glow">
                    Schedule a Demo
                </button>
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
            
            // Animate timeline items sequentially
            gsap.utils.toArray('.timeline-item').forEach((item, i) => {
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
            
            // Animate stat cards
            gsap.utils.toArray('.stat-card').forEach((card, i) => {
                gsap.from(card, {
                    scrollTrigger: {
                        trigger: card,
                        start: 'top 90%',
                        toggleActions: 'play none none none'
                    },
                    opacity: 0,
                    y: 30,
                    duration: 0.6,
                    delay: i * 0.1,
                    ease: "power2.out"
                });
            });
        });
    </script>
</body>
</html>