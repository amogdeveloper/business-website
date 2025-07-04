<?php include("background.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium SEO Services | Boost Your Online Visibility</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Raleway:wght@800;900&display=swap');
        
         :root {
            --primary: #3b82f6;
            --secondary: #8b5cf6;
            --dark: #0f172a;
            --darker: #0a0f1d;
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
            box-shadow: 0 0 20px rgba(59, 130, 246, 0.7);
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
            box-shadow: 0 10px 25px rgba(16, 185, 129, 0.3);
        }
        
        .benefit-card {
            transition: all 0.4s ease;
        }
        
        .benefit-card:hover {
            transform: scale(1.05);
            background: rgba(59, 130, 246, 0.1);
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
            box-shadow: 0 10px 25px rgba(59, 130, 246, 0.3);
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
        
        /* New styles for testimonials */
        .testimonial-card {
            transition: all 0.4s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
            overflow: hidden;
            position: relative;
        }
        
        .testimonial-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(16, 185, 129, 0.3);
            border-color: var(--accent);
        }
        
        .client-image {
            border: 3px solid rgba(59, 130, 246, 0.5);
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
            box-shadow: 0 10px 25px rgba(59, 130, 246, 0.3);
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
    </style>
</head>
<body class="min-h-screen">
    <!-- Hero Section -->
     <?php include ('./components/header.php') ?>
    <section class=" mt-9 relative min-h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute top-20 left-10 w-60 h-60 bg-purple-600 rounded-full filter blur-[100px] opacity-20"></div>
            <div class="absolute bottom-10 right-10 w-80 h-80 bg-blue-600 rounded-full filter blur-[120px] opacity-20"></div>
            <div class="absolute top-1/3 right-1/4 w-40 h-40 bg-cyan-500 rounded-full filter blur-[80px] opacity-20"></div>
        </div>
        
        <div class="container mx-auto px-4 py-16 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-block bg-blue-900/30 px-4 py-1 rounded-full text-blue-300 mb-6">
                        <i class="fas fa-chart-line mr-2"></i> Rank Higher, Grow Faster
                    </div>
                    <h1 class="text-4xl md:text-6xl font-bold mb-6">
                        Premium <span class="gradient-text">SEO Services</span> That Drive Results
                    </h1>
                    <p class="text-xl text-slate-300 mb-10">
                        Transform your online presence with our data-driven SEO strategies. We help businesses dominate search rankings and attract high-quality traffic that converts.
                    </p>
                    
                     <div class="flex flex-wrap gap-4">
                        <a href="about.php" class="px-8 py-3 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full font-bold text-lg shadow-lg hover:shadow-xl transition-all transform hover:scale-105">
                          More know
                        </a>
                        <a href="contact.php" class="px-8 py-3 bg-transparent border-2 border-white text-white rounded-full font-bold text-lg hover:bg-white hover:text-gray-900 transition-all">
                            Get a Quote
                        </a>
                    </div>
                    
                    <div class="flex flex-wrap gap-8 mt-12">
                        <div class="flex items-center">
                            <div class="text-4xl font-bold gradient-text mr-3">95%</div>
                            <div class="text-slate-300">Client Retention Rate</div>
                        </div>
                        <div class="flex items-center">
                            <div class="text-4xl font-bold gradient-text mr-3">250+</div>
                            <div class="text-slate-300">Websites Optimized</div>
                        </div>
                    </div>
                </div>
                
                <div class="flex justify-center floating">
                    <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full blur-3xl opacity-30 animate-pulse"></div>
                        <div class="relative bg-gray-900 border border-gray-700 rounded-xl p-8 max-w-lg">
                            <div class="text-center mb-6">
                                <div class="text-5xl font-bold gradient-text mb-2">#1</div>
                                <div class="text-xl">Search Rankings Achieved</div>
                            </div>
                            <div class="analytics-chart">
                                <div class="chart-bar" data-value="+240%" style="height: 60%;"></div>
                                <div class="chart-bar" data-value="+170%" style="height: 45%;"></div>
                                <div class="chart-bar" data-value="+320%" style="height: 80%;"></div>
                                <div class="chart-bar" data-value="+150%" style="height: 40%;"></div>
                                <div class="chart-bar" data-value="+280%" style="height: 70%;"></div>
                                <div class="chart-bar" data-value="+200%" style="height: 50%;"></div>
                            </div>
                            <p class="text-center text-slate-400 mt-6">Average traffic growth for our clients</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SEO Services -->
    <section id="services" class="py-16 relative z-10">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    Comprehensive <span class="gradient-text">SEO Solutions</span>
                </h2>
                <p class="text-xl text-slate-300 max-w-3xl mx-auto">
                    Our full-service SEO packages are designed to maximize your visibility and conversions
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Service 1 -->
                <div class="service-card section-card animate-in p-8">
                    <div class="bg-blue-500/20 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-search text-3xl text-blue-400"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-center">Technical SEO</h3>
                    <ul class="space-y-3 text-slate-300 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Website speed optimization
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Mobile responsiveness audit
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            XML sitemap creation
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Structured data implementation
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Core Web Vitals optimization
                        </li>
                    </ul>
                    <a href="contact.php"> <button class="w-full py-3 bg-blue-500/20 text-blue-400 rounded-lg font-medium mt-4 hover:bg-blue-500/30 transition">
                      Apply Now
                    </button></a>
                   
                </div>
                
                <!-- Service 2 -->
                <div class="service-card section-card animate-in p-8">
                    <div class="bg-purple-500/20 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-keyboard text-3xl text-purple-400"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-center">Content Optimization</h3>
                    <ul class="space-y-3 text-slate-300 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Keyword research & strategy
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            On-page SEO optimization
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Content creation & planning
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            SEO copywriting services
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Content gap analysis
                        </li>
                    </ul>
                  <a href=" contact.php">
                      <button class="w-full py-3 bg-purple-500/20 text-purple-400 rounded-lg font-medium mt-4 hover:bg-purple-500/30 transition">
                     Apply Now
                    </button>
                  </a>
                </div>
                
                <!-- Service 3 -->
                <div class="service-card section-card animate-in p-8">
                    <div class="bg-green-500/20 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-link text-3xl text-green-400"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-center">Link Building</h3>
                    <ul class="space-y-3 text-slate-300 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Authority backlink acquisition
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Guest posting outreach
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Broken link building
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Competitor backlink analysis
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Link profile monitoring
                        </li>
                    </ul>
                   <a href="contact.php">
                  <button class="w-full py-3 bg-green-500/20 text-green-400 rounded-lg font-medium mt-4 hover:bg-green-500/30 transition">
                        |Apply Now
                    </button>
                   </a>
                </div>
                
                <!-- Service 4 -->
                <div class="service-card section-card animate-in p-8">
                    <div class="bg-amber-500/20 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-shopping-cart text-3xl text-amber-400"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-center">E-commerce SEO</h3>
                    <ul class="space-y-3 text-slate-300 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Product page optimization
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Category structure strategy
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Shopping feed optimization
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Faceted navigation solutions
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Conversion rate optimization
                        </li>
                    </ul>
                   <a href="contact.php">
                     <button class="w-full py-3 bg-amber-500/20 text-amber-400 rounded-lg font-medium mt-4 hover:bg-amber-500/30 transition">
                    Apply Now
                    </button>
                   </a>
                </div>
                
                <!-- Service 5 -->
                <div class="service-card section-card animate-in p-8">
                    <div class="bg-cyan-500/20 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-globe text-3xl text-cyan-400"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-center">Local SEO</h3>
                    <ul class="space-y-3 text-slate-300 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Google Business Profile optimization
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Local citation building
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Localized content strategy
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Review management
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Map pack domination
                        </li>
                    </ul>
                   <a href="contact.php">
                     <button class="w-full py-3 bg-cyan-500/20 text-cyan-400 rounded-lg font-medium mt-4 hover:bg-cyan-500/30 transition">
                       Apply Now
                    </button>
                   </a>
                </div>
                
                <!-- Service 6 -->
                <div class="service-card section-card animate-in p-8">
                    <div class="bg-pink-500/20 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-chart-bar text-3xl text-pink-400"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-center">Analytics & Reporting</h3>
                    <ul class="space-y-3 text-slate-300 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Custom dashboard setup
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Performance tracking
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Conversion analysis
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Competitor benchmarking
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            Monthly performance reports
                        </li>
                    </ul>
                <a href="contact.php">
                        <button class="w-full py-3 bg-pink-500/20 text-pink-400 rounded-lg font-medium mt-4 hover:bg-pink-500/30 transition">
                        Apply Now
                    </button>
                </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Process -->
    <section id="process" class="py-16 bg-gradient-to-br from-slate-900/50 to-indigo-900/30 relative overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute top-1/4 left-1/4 w-80 h-80 bg-blue-600 rounded-full filter blur-[120px] opacity-10"></div>
            <div class="absolute bottom-1/3 right-1/3 w-60 h-60 bg-purple-600 rounded-full filter blur-[100px] opacity-10"></div>
        </div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    Our Proven <span class="gradient-text">SEO Process</span>
                </h2>
                <p class="text-xl text-slate-300 max-w-3xl mx-auto">
                    A strategic approach to ensure your SEO success
                </p>
            </div>
            
            <div class="timeline max-w-4xl mx-auto">
                <!-- Step 1 -->
                <div class="timeline-item process-step animate-in">
                    <div class="section-card p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-blue-500/20 p-3 rounded-full mr-4">
                                <i class="fas fa-search text-2xl text-blue-400"></i>
                            </div>
                            <h3 class="text-2xl font-bold">Discovery & Analysis</h3>
                        </div>
                        <p class="text-slate-300 mb-4">
                            We conduct a comprehensive audit of your website, analyze competitors, and identify opportunities for growth.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-blue-900/30 text-blue-300 px-3 py-1 rounded-full text-sm">Keyword Research</span>
                            <span class="bg-blue-900/30 text-blue-300 px-3 py-1 rounded-full text-sm">Technical Audit</span>
                            <span class="bg-blue-900/30 text-blue-300 px-3 py-1 rounded-full text-sm">Competitor Analysis</span>
                        </div>
                    </div>
                </div>
                
                <!-- Step 2 -->
                <div class="timeline-item process-step animate-in">
                    <div class="section-card p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-purple-500/20 p-3 rounded-full mr-4">
                                <i class="fas fa-chess text-2xl text-purple-400"></i>
                            </div>
                            <h3 class="text-2xl font-bold">Strategy Development</h3>
                        </div>
                        <p class="text-slate-300 mb-4">
                            Based on our findings, we create a customized SEO roadmap with clear objectives and KPIs.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-purple-900/30 text-purple-300 px-3 py-1 rounded-full text-sm">Content Plan</span>
                            <span class="bg-purple-900/30 text-purple-300 px-3 py-1 rounded-full text-sm">Technical Solutions</span>
                            <span class="bg-purple-900/30 text-purple-300 px-3 py-1 rounded-full text-sm">Link Building</span>
                        </div>
                    </div>
                </div>
                
                <!-- Step 3 -->
                <div class="timeline-item process-step animate-in">
                    <div class="section-card p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-green-500/20 p-3 rounded-full mr-4">
                                <i class="fas fa-cogs text-2xl text-green-400"></i>
                            </div>
                            <h3 class="text-2xl font-bold">Implementation</h3>
                        </div>
                        <p class="text-slate-300 mb-4">
                            Our team executes the strategy with precision, optimizing every aspect of your online presence.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-green-900/30 text-green-300 px-3 py-1 rounded-full text-sm">On-Page Optimization</span>
                            <span class="bg-green-900/30 text-green-300 px-3 py-1 rounded-full text-sm">Technical Fixes</span>
                            <span class="bg-green-900/30 text-green-300 px-3 py-1 rounded-full text-sm">Content Creation</span>
                        </div>
                    </div>
                </div>
                
                <!-- Step 4 -->
                <div class="timeline-item process-step animate-in">
                    <div class="section-card p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-yellow-500/20 p-3 rounded-full mr-4">
                                <i class="fas fa-chart-line text-2xl text-yellow-400"></i>
                            </div>
                            <h3 class="text-2xl font-bold">Monitoring & Reporting</h3>
                        </div>
                        <p class="text-slate-300 mb-4">
                            We track performance, analyze results, and refine our approach to maximize your ROI.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-yellow-900/30 text-yellow-300 px-3 py-1 rounded-full text-sm">Performance Reports</span>
                            <span class="bg-yellow-900/30 text-yellow-300 px-3 py-1 rounded-full text-sm">KPI Tracking</span>
                            <span class="bg-yellow-900/30 text-yellow-300 px-3 py-1 rounded-full text-sm">Strategy Refinement</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section id="benefits" class="py-16 relative overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-blue-900/20 to-transparent"></div>
            <div class="absolute bottom-0 left-0 w-80 h-80 bg-purple-600 rounded-full filter blur-[120px] opacity-10"></div>
        </div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    Key <span class="gradient-text">Benefits</span> of Our SEO Services
                </h2>
                <p class="text-xl text-slate-300 max-w-3xl mx-auto">
                    Why businesses choose our SEO solutions for sustainable growth
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Benefit 1 -->
                <div class="benefit-card section-card animate-in p-8">
                    <div class="bg-blue-500/20 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6 benefit-icon">
                        <i class="fas fa-rocket text-3xl text-blue-400"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-center">Increased Visibility</h3>
                    <p class="text-slate-300 text-center">
                        Dominate search results and reach more potential customers searching for your products or services.
                    </p>
                </div>
                
                <!-- Benefit 2 -->
                <div class="benefit-card section-card animate-in p-8">
                    <div class="bg-purple-500/20 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6 benefit-icon">
                        <i class="fas fa-money-bill-wave text-3xl text-purple-400"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-center">Higher ROI</h3>
                    <p class="text-slate-300 text-center">
                        SEO delivers the highest ROI of any marketing channel, generating 5x more leads than PPC.
                    </p>
                </div>
                
                <!-- Benefit 3 -->
                <div class="benefit-card section-card animate-in p-8">
                    <div class="bg-green-500/20 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6 benefit-icon">
                        <i class="fas fa-users text-3xl text-green-400"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-center">Targeted Traffic</h3>
                    <p class="text-slate-300 text-center">
                        Attract qualified visitors who are actively searching for what you offer, leading to higher conversions.
                    </p>
                </div>
                
                <!-- Benefit 4 -->
                <div class="benefit-card section-card animate-in p-8">
                    <div class="bg-yellow-500/20 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6 benefit-icon">
                        <i class="fas fa-shield-alt text-3xl text-yellow-400"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-center">Sustainable Results</h3>
                    <p class="text-slate-300 text-center">
                        Unlike paid ads, SEO builds lasting value that continues to drive traffic long after our work is done.
                    </p>
                </div>
                
                <!-- Benefit 5 -->
                <div class="benefit-card section-card animate-in p-8">
                    <div class="bg-cyan-500/20 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6 benefit-icon">
                        <i class="fas fa-chart-pie text-3xl text-cyan-400"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-center">Competitive Edge</h3>
                    <p class="text-slate-300 text-center">
                        Outrank competitors and establish your brand as an authority in your industry.
                    </p>
                </div>
                
                <!-- Benefit 6 -->
                <div class="benefit-card section-card animate-in p-8">
                    <div class="bg-pink-500/20 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6 benefit-icon">
                        <i class="fas fa-mobile-alt text-3xl text-pink-400"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-center">Mobile Optimization</h3>
                    <p class="text-slate-300 text-center">
                        Reach users across all devices with websites optimized for superior mobile experiences.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Packages -->
    <section id="pricing" class="py-16 bg-gradient-to-br from-slate-900/50 to-purple-900/30 relative overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute top-1/3 left-1/4 w-60 h-60 bg-blue-600 rounded-full filter blur-[100px] opacity-10"></div>
            <div class="absolute bottom-1/4 right-1/3 w-80 h-80 bg-purple-600 rounded-full filter blur-[120px] opacity-10"></div>
        </div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    Flexible <span class="gradient-text">Pricing Packages</span>
                </h2>
                <p class="text-xl text-slate-300 max-w-3xl mx-auto">
                    Choose the SEO solution that best fits your business goals
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Package 1 -->
                <div class="package-card section-card animate-in p-8 flex flex-col">
                    <h3 class="text-2xl font-bold mb-4 text-center">Starter</h3>
                    <div class="text-4xl font-bold mb-6 text-center">
                        $999<span class="text-xl text-slate-400">/month</span>
                    </div>
                    <ul class="space-y-4 text-slate-300 mb-8 flex-grow">
                        <li class="package-feature">Keyword Research (up to 30 keywords)</li>
                        <li class="package-feature">Technical SEO Audit</li>
                        <li class="package-feature">On-Page Optimization (15 pages)</li>
                        <li class="package-feature">Content Optimization (5 articles)</li>
                        <li class="package-feature">Basic Link Building (5 links/month)</li>
                        <li class="package-feature">Monthly Performance Reports</li>
                    </ul>
                   <a href="contact.php">
                     <button class="w-full py-3 bg-blue-500/20 text-blue-400 rounded-lg font-medium hover:bg-blue-500/30 transition mt-auto">
                        Get Started
                    </button>
                   </a>
                </div>
                
                <!-- Package 2 -->
                <div class="featured-package package-card section-card animate-in p-8 flex flex-col">
                    <h3 class="text-2xl font-bold mb-4 text-center">Growth</h3>
                    <div class="text-4xl font-bold mb-6 text-center">
                        $1,999<span class="text-xl text-slate-400">/month</span>
                    </div>
                    <ul class="space-y-4 text-slate-300 mb-8 flex-grow">
                        <li class="package-feature">Keyword Research (up to 60 keywords)</li>
                        <li class="package-feature">Comprehensive Technical Audit</li>
                        <li class="package-feature">On-Page Optimization (30 pages)</li>
                        <li class="package-feature">Content Creation (8 articles/month)</li>
                        <li class="package-feature">Advanced Link Building (15 links/month)</li>
                        <li class="package-feature">Local SEO Optimization</li>
                        <li class="package-feature">Competitor Analysis</li>
                        <li class="package-feature">Bi-weekly Performance Reports</li>
                    </ul>
                  <a href="contact.php">
                      <button class="w-full py-3 bg-gradient-to-r from-green-500 to-cyan-500 text-white rounded-lg font-bold hover:opacity-90 transition mt-auto">
                        Choose Growth
                    </button>
                  </a>
                </div>
                
                <!-- Package 3 -->
                <div class="package-card section-card animate-in p-8 flex flex-col">
                    <h3 class="text-2xl font-bold mb-4 text-center">Enterprise</h3>
                    <div class="text-4xl font-bold mb-6 text-center">
                        $3,999<span class="text-xl text-slate-400">/month</span>
                    </div>
                    <ul class="space-y-4 text-slate-300 mb-8 flex-grow">
                        <li class="package-feature">Unlimited Keyword Research</li>
                        <li class="package-feature">Full Technical SEO Overhaul</li>
                        <li class="package-feature">Website-wide Optimization</li>
                        <li class="package-feature">Content Strategy & Creation (15+ articles)</li>
                        <li class="package-feature">Premium Link Building (30+ links/month)</li>
                        <li class="package-feature">E-commerce SEO</li>
                        <li class="package-feature">International SEO</li>
                        <li class="package-feature">Competitor Analysis & Benchmarking</li>
                        <li class="package-feature">Weekly Performance Reports</li>
                        <li class="package-feature">Dedicated Account Manager</li>
                    </ul>
                    <a href="contact.php">
                        <button class="w-full py-3 bg-blue-500/20 text-blue-400 rounded-lg font-medium hover:bg-blue-500/30 transition mt-auto">
                        Contact Sales
                    </button>
                    </a>
                </div>
            </div>
            
            <div class="max-w-3xl mx-auto mt-16 text-center">
                <p class="text-slate-300 mb-8">
                    All packages include:
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <span class="bg-blue-900/30 text-blue-300 px-4 py-2 rounded-full">
                        <i class="fas fa-check-circle mr-2"></i>Google Analytics Setup
                    </span>
                    <span class="bg-blue-900/30 text-blue-300 px-4 py-2 rounded-full">
                        <i class="fas fa-check-circle mr-2"></i>Search Console Monitoring
                    </span>
                    <span class="bg-blue-900/30 text-blue-300 px-4 py-2 rounded-full">
                        <i class="fas fa-check-circle mr-2"></i>Monthly Strategy Calls
                    </span>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section id="testimonials" class="py-16 relative overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute top-0 left-0 w-1/2 h-full bg-gradient-to-r from-indigo-900/20 to-transparent"></div>
            <div class="absolute bottom-0 right-0 w-80 h-80 bg-cyan-600 rounded-full filter blur-[120px] opacity-10"></div>
        </div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    What Our <span class="gradient-text">Clients Say</span>
                </h2>
                <p class="text-xl text-slate-300 max-w-3xl mx-auto">
                    Success stories from businesses we've transformed with SEO
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
                        "Working with this SEO team transformed our online presence. In just 6 months, our organic traffic increased by 280% and leads grew by 150%. Their strategic approach and attention to detail are unmatched."
                    </p>
                    <div class="result-bar">
                        <div class="result-fill" style="width: 92%;"></div>
                    </div>
                    <div class="flex justify-between mt-2 text-sm text-slate-400">
                        <span>Before</span>
                        <span>Traffic: +280%</span>
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
                        "The SEO strategy they implemented for our e-commerce store has been game-changing. Our sales from organic search have tripled, and we're ranking #1 for all our main product categories. Worth every penny!"
                    </p>
                    <div class="result-bar">
                        <div class="result-fill" style="width: 87%;"></div>
                    </div>
                    <div class="flex justify-between mt-2 text-sm text-slate-400">
                        <span>Before</span>
                        <span>Sales: +200%</span>
                        <span>After</span>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="testimonial-card section-card animate-in p-8">
                    <i class="fas fa-quote-right quote-icon"></i>
                    <div class="flex items-center mb-6">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=128&h=128&q=80" alt="Client" class="client-image">
                        <div class="ml-4">
                            <h4 class="text-xl font-bold">David Chen</h4>
                            <p class="text-slate-400">Owner, Local Dining Group</p>
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
                        "Their local SEO expertise helped our restaurant group dominate the map pack listings. We now appear in the top 3 for all our locations, and our reservations have increased by 65% from Google searches alone."
                    </p>
                    <div class="result-bar">
                        <div class="result-fill" style="width: 95%;"></div>
                    </div>
                    <div class="flex justify-between mt-2 text-sm text-slate-400">
                        <span>Before</span>
                        <span>Reservations: +65%</span>
                        <span>After</span>
                    </div>
                </div>
                
                <!-- Testimonial 4 -->
                <div class="testimonial-card section-card animate-in p-8">
                    <i class="fas fa-quote-right quote-icon"></i>
                    <div class="flex items-center mb-6">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=128&h=128&q=80" alt="Client" class="client-image">
                        <div class="ml-4">
                            <h4 class="text-xl font-bold">Emma Rodriguez</h4>
                            <p class="text-slate-400">Marketing Manager, Global Tech</p>
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
                        "The technical SEO improvements they made to our enterprise website solved critical issues we didn't even know we had. Our crawl budget efficiency improved by 40% and we're now ranking for thousands of new keywords."
                    </p>
                    <div class="result-bar">
                        <div class="result-fill" style="width: 90%;"></div>
                    </div>
                    <div class="flex justify-between mt-2 text-sm text-slate-400">
                        <span>Before</span>
                        <span>Keywords: +420%</span>
                        <span>After</span>
                    </div>
                </div>
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
            
            // Animate chart bars
            gsap.to('.chart-bar', {
                scrollTrigger: {
                    trigger: '.analytics-chart',
                    start: 'top 80%',
                    toggleActions: 'play none none none'
                },
                height: "0%",
                duration: 0.5,
                stagger: 0.1,
                ease: "power2.out",
                onComplete: function() {
                    gsap.to('.chart-bar', {
                        height: (i) => [60, 45, 80, 40, 70, 50][i] + "%",
                        duration: 1,
                        stagger: 0.2,
                        ease: "elastic.out(1, 0.5)"
                    });
                }
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
        });
    </script>
</body>
</html>