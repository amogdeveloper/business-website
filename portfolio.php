<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ocentra - Software Solutions</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');
        
        :root {
            --primary-dark: #0f172a;
            --primary-light: #1e293b;
            --gold-gradient: linear-gradient(90deg, #FFD700, #FFC300, #FFA500);
            --blue-gradient: linear-gradient(90deg, #3b82f6, #60a5fa);
            --green-gradient: linear-gradient(90deg, #10b981, #34d399);
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--primary-dark);
            color: #e2e8f0;
            overflow-x: hidden;
            scroll-behavior: smooth;
        }
        
        .gold-gradient-text {
            background: var(--gold-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .blue-gradient-text {
            background: var(--blue-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .blue-gradient-btn {
            background: var(--blue-gradient);
            transition: all 0.3s ease;
        }
        
        .blue-gradient-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(59, 130, 246, 0.3);
        }
        
        .gold-gradient-btn {
            background: var(--gold-gradient);
            color: #1e293b;
            transition: all 0.3s ease;
        }
        
        .gold-gradient-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(255, 195, 0, 0.3);
        }
        
        .card {
            background: linear-gradient(145deg, var(--primary-light), var(--primary-dark));
            border: 1px solid rgba(255, 215, 0, 0.1);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            overflow: hidden;
        }
        
        .card:hover {
            transform: translateY(-10px);
            border-color: rgba(255, 215, 0, 0.3);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
        }
        
        .service-card {
            background: linear-gradient(145deg, var(--primary-light), var(--primary-dark));
            border: 1px solid rgba(255, 215, 0, 0.1);
            transition: all 0.4s ease;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            border-color: rgba(255, 215, 0, 0.3);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
        }
        
        .hero-section {
            background: linear-gradient(rgba(15, 23, 42, 0.9), rgba(15, 23, 42, 0.7)), url('https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80');
            background-size: cover;
            background-position: center;
            position: relative;
        }
        
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0,0,0,0.7), rgba(0,0,0,0.4));
        }
        
        .section-title {
            position: relative;
            display: inline-block;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 4px;
            background: var(--gold-gradient);
            border-radius: 2px;
        }
        
        .tech-logo {
            width: 80px;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 16px;
            transition: all 0.3s ease;
        }
        
        .tech-logo:hover {
            transform: translateY(-5px);
            background: rgba(255, 215, 0, 0.1);
        }
        
        .stat-card {
            background: linear-gradient(145deg, var(--primary-light), var(--primary-dark));
            border: 1px solid rgba(255, 215, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .stat-card:hover {
            border-color: rgba(255, 215, 0, 0.3);
            transform: translateY(-5px);
        }
        
        .testimonial-card {
            background: linear-gradient(145deg, var(--primary-light), var(--primary-dark));
            border: 1px solid rgba(255, 215, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .testimonial-card:hover {
            border-color: rgba(255, 215, 0, 0.3);
            transform: translateY(-5px);
        }
        
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(30px);
        }
        
        .project-filter-btn {
            background: rgba(30, 41, 59, 0.5);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }
        
        .project-filter-btn.active, .project-filter-btn:hover {
            background: rgba(255, 215, 0, 0.1);
            border: 1px solid rgba(255, 215, 0, 0.3);
        }
        
        .contact-form input,
        .contact-form textarea {
            background: rgba(30, 41, 59, 0.5);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: white;
            transition: all 0.3s ease;
        }
        
        .contact-form input:focus,
        .contact-form textarea:focus {
            border-color: rgba(255, 215, 0, 0.5);
            outline: none;
            box-shadow: 0 0 0 3px rgba(255, 215, 0, 0.1);
        }
        
        .social-icon {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }
        
        .social-icon:hover {
            background: var(--gold-gradient);
            transform: translateY(-3px);
        }
        
        .nav-link.active {
            color: white;
            position: relative;
        }
        
        .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 2px;
            background: var(--gold-gradient);
        }
    </style>
</head>
<body class="w-full">
    <?php include("./components/header.php")?>
   
    <!-- Hero Section -->
    <section id="home" class="hero-section py-20 px-6 relative">
        <div class="hero-overlay"></div>
        <div class="max-w-6xl mx-auto relative z-10 py-20">
            <div class="max-w-2xl">
                <p class="text-blue-400 font-semibold mb-2">INNOVATIVE SOFTWARE SOLUTIONS</p>
                <h1 class="text-4xl md:text-6xl font-bold mb-6">Transforming Ideas into <span class="gold-gradient-text">Digital Reality</span></h1>
                <p class="text-xl text-gray-300 mb-8">
                    We build custom software solutions that drive growth, enhance productivity, 
                    and transform businesses for the digital age.
                </p>
                <div class="flex flex-wrap gap-4">
                    <button class="gold-gradient-btn text-gray-900 px-8 py-3 rounded-md font-semibold text-lg">
                        Explore Our Work
                    </button>
                    <button class="bg-transparent border-2 border-blue-500 text-white px-8 py-3 rounded-md font-semibold text-lg hover:bg-blue-500 transition">
                        Contact Us
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 px-6 bg-gradient-to-r from-gray-800 to-gray-900">
        <div class="max-w-6xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="stat-card p-6 rounded-xl text-center">
                <h3 class="text-4xl font-bold gold-gradient-text mb-2">150+</h3>
                <p class="text-gray-400">Projects Delivered</p>
            </div>
            <div class="stat-card p-6 rounded-xl text-center">
                <h3 class="text-4xl font-bold gold-gradient-text mb-2">50+</h3>
                <p class="text-gray-400">Happy Clients</p>
            </div>
            <div class="stat-card p-6 rounded-xl text-center">
                <h3 class="text-4xl font-bold gold-gradient-text mb-2">12+</h3>
                <p class="text-gray-400">Years Experience</p>
            </div>
            <div class="stat-card p-6 rounded-xl text-center">
                <h3 class="text-4xl font-bold gold-gradient-text mb-2">40+</h3>
                <p class="text-gray-400">Expert Team</p>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="section-title text-3xl font-bold inline-block">Our <span class="gold-gradient-text">Services</span></h2>
                <p class="text-gray-400 mt-6 max-w-2xl mx-auto">
                    We offer a comprehensive range of software development services to help your business thrive in the digital world.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="service-card p-8 rounded-2xl">
                    <div class="w-16 h-16 rounded-full bg-blue-500/10 flex items-center justify-center mb-6">
                        <i class="fas fa-laptop-code text-2xl text-blue-400"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Custom Software Development</h3>
                    <p class="text-gray-400 mb-4">
                        Tailor-made software solutions designed to address your unique business challenges and requirements.
                    </p>
                    <ul class="text-gray-400 space-y-2 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span>Enterprise applications</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span>CRM & ERP systems</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span>Workflow automation</span>
                        </li>
                    </ul>
                    <a href="#" class="text-blue-400 hover:text-blue-300 flex items-center">
                        Learn More <i class="fas fa-arrow-right ml-2 text-xs"></i>
                    </a>
                </div>
                
                <!-- Service 2 -->
                <div class="service-card p-8 rounded-2xl">
                    <div class="w-16 h-16 rounded-full bg-blue-500/10 flex items-center justify-center mb-6">
                        <i class="fas fa-mobile-alt text-2xl text-blue-400"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Mobile App Development</h3>
                    <p class="text-gray-400 mb-4">
                        Engaging mobile applications for iOS and Android that deliver exceptional user experiences.
                    </p>
                    <ul class="text-gray-400 space-y-2 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span>Native iOS & Android apps</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span>Cross-platform solutions</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span>Enterprise mobility</span>
                        </li>
                    </ul>
                    <a href="#" class="text-blue-400 hover:text-blue-300 flex items-center">
                        Learn More <i class="fas fa-arrow-right ml-2 text-xs"></i>
                    </a>
                </div>
                
                <!-- Service 3 -->
                <div class="service-card p-8 rounded-2xl">
                    <div class="w-16 h-16 rounded-full bg-blue-500/10 flex items-center justify-center mb-6">
                        <i class="fas fa-globe text-2xl text-blue-400"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Web Development</h3>
                    <p class="text-gray-400 mb-4">
                        Responsive, high-performance websites and web applications that drive engagement and conversions.
                    </p>
                    <ul class="text-gray-400 space-y-2 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span>E-commerce solutions</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span>Progressive web apps</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span>CMS development</span>
                        </li>
                    </ul>
                    <a href="#" class="text-blue-400 hover:text-blue-300 flex items-center">
                        Learn More <i class="fas fa-arrow-right ml-2 text-xs"></i>
                    </a>
                </div>
                
                <!-- Service 4 -->
                <div class="service-card p-8 rounded-2xl">
                    <div class="w-16 h-16 rounded-full bg-blue-500/10 flex items-center justify-center mb-6">
                        <i class="fas fa-cloud text-2xl text-blue-400"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Cloud Solutions</h3>
                    <p class="text-gray-400 mb-4">
                        Scalable cloud infrastructure and services to optimize your operations and reduce costs.
                    </p>
                    <ul class="text-gray-400 space-y-2 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span>AWS, Azure & GCP</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span>Cloud migration</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span>Serverless architecture</span>
                        </li>
                    </ul>
                    <a href="#" class="text-blue-400 hover:text-blue-300 flex items-center">
                        Learn More <i class="fas fa-arrow-right ml-2 text-xs"></i>
                    </a>
                </div>
                
                <!-- Service 5 -->
                <div class="service-card p-8 rounded-2xl">
                    <div class="w-16 h-16 rounded-full bg-blue-500/10 flex items-center justify-center mb-6">
                        <i class="fas fa-brain text-2xl text-blue-400"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">AI & Machine Learning</h3>
                    <p class="text-gray-400 mb-4">
                        Intelligent solutions that leverage AI and ML to automate processes and uncover valuable insights.
                    </p>
                    <ul class="text-gray-400 space-y-2 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span>Predictive analytics</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span>Natural language processing</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span>Computer vision</span>
                        </li>
                    </ul>
                    <a href="#" class="text-blue-400 hover:text-blue-300 flex items-center">
                        Learn More <i class="fas fa-arrow-right ml-2 text-xs"></i>
                    </a>
                </div>
                
                <!-- Service 6 -->
                <div class="service-card p-8 rounded-2xl">
                    <div class="w-16 h-16 rounded-full bg-blue-500/10 flex items-center justify-center mb-6">
                        <i class="fas fa-shield-alt text-2xl text-blue-400"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Cybersecurity</h3>
                    <p class="text-gray-400 mb-4">
                        Comprehensive security solutions to protect your digital assets and ensure compliance.
                    </p>
                    <ul class="text-gray-400 space-y-2 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span>Vulnerability assessment</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span>Penetration testing</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span>Security compliance</span>
                        </li>
                    </ul>
                    <a href="#" class="text-blue-400 hover:text-blue-300 flex items-center">
                        Learn More <i class="fas fa-arrow-right ml-2 text-xs"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20 px-6 bg-gray-800">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-10">
                <h2 class="section-title text-3xl font-bold inline-block">Featured <span class="gold-gradient-text">Projects</span></h2>
                <p class="text-gray-400 mt-6 max-w-2xl mx-auto">
                    Explore our portfolio of successful projects across various industries and technologies.
                </p>
            </div>
            
            <div class="flex flex-wrap gap-4 justify-center mb-12">
                <button class="project-filter-btn active px-5 py-2 rounded-lg">All Projects</button>
                <button class="project-filter-btn px-5 py-2 rounded-lg">Web Applications</button>
                <button class="project-filter-btn px-5 py-2 rounded-lg">Mobile Apps</button>
                <button class="project-filter-btn px-5 py-2 rounded-lg">Enterprise Solutions</button>
                <button class="project-filter-btn px-5 py-2 rounded-lg">AI/ML Projects</button>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="card rounded-2xl overflow-hidden animate-on-scroll">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                             alt="Project 1" 
                             class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    </div>
                    <div class="p-6">
                        <span class="text-blue-400 text-sm font-medium">Fintech Solution</span>
                        <h3 class="text-xl font-bold my-2">Banking Analytics Platform</h3>
                        <p class="text-gray-400 mb-4">
                            Comprehensive financial analytics platform for a leading banking institution with real-time data visualization.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="text-xs bg-gray-700 px-3 py-1 rounded-full">React</span>
                            <span class="text-xs bg-gray-700 px-3 py-1 rounded-full">Node.js</span>
                            <span class="text-xs bg-gray-700 px-3 py-1 rounded-full">MongoDB</span>
                        </div>
                        <a href="#" class="text-blue-400 hover:text-blue-300 flex items-center">
                            View Case Study <i class="fas fa-arrow-right ml-2 text-xs"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Project 2 -->
                <div class="card rounded-2xl overflow-hidden animate-on-scroll">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1400&q=80" 
                             alt="Project 2" 
                             class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    </div>
                    <div class="p-6">
                        <span class="text-blue-400 text-sm font-medium">Healthcare</span>
                        <h3 class="text-xl font-bold my-2">Patient Management System</h3>
                        <p class="text-gray-400 mb-4">
                            End-to-end patient management solution for hospitals with appointment scheduling and EHR integration.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="text-xs bg-gray-700 px-3 py-1 rounded-full">Angular</span>
                            <span class="text-xs bg-gray-700 px-3 py-1 rounded-full">Firebase</span>
                            <span class="text-xs bg-gray-700 px-3 py-1 rounded-full">iOS/Android</span>
                        </div>
                        <a href="#" class="text-blue-400 hover:text-blue-300 flex items-center">
                            View Case Study <i class="fas fa-arrow-right ml-2 text-xs"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Project 3 -->
                <div class="card rounded-2xl overflow-hidden animate-on-scroll">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                             alt="Project 3" 
                             class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    </div>
                    <div class="p-6">
                        <span class="text-blue-400 text-sm font-medium">E-commerce</span>
                        <h3 class="text-xl font-bold my-2">Global Retail Platform</h3>
                        <p class="text-gray-400 mb-4">
                            Scalable e-commerce platform supporting 500k+ products with personalized recommendations.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="text-xs bg-gray-700 px-3 py-1 rounded-full">Vue.js</span>
                            <span class="text-xs bg-gray-700 px-3 py-1 rounded-full">Laravel</span>
                            <span class="text-xs bg-gray-700 px-3 py-1 rounded-full">MySQL</span>
                        </div>
                        <a href="#" class="text-blue-400 hover:text-blue-300 flex items-center">
                            View Case Study <i class="fas fa-arrow-right ml-2 text-xs"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <button class="gold-gradient-btn text-gray-900 px-8 py-3 rounded-md font-semibold text-lg">
                    View All Projects
                </button>
            </div>
        </div>
    </section>

    <!-- Technologies Section -->
    <section id="tech" class="py-20 px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="section-title text-3xl font-bold inline-block">Our <span class="gold-gradient-text">Technologies</span></h2>
                <p class="text-gray-400 mt-6 max-w-2xl mx-auto">
                    We leverage cutting-edge technologies to build robust and scalable solutions for our clients.
                </p>
            </div>
            
            <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-6 gap-8">
                <div class="tech-logo">
                    <i class="fab fa-react text-4xl text-blue-400"></i>
                </div>
                <div class="tech-logo">
                    <i class="fab fa-angular text-4xl text-red-500"></i>
                </div>
                <div class="tech-logo">
                    <i class="fab fa-vuejs text-4xl text-green-500"></i>
                </div>
                <div class="tech-logo">
                    <i class="fab fa-node-js text-4xl text-green-600"></i>
                </div>
                <div class="tech-logo">
                    <i class="fab fa-python text-4xl text-yellow-500"></i>
                </div>
                <div class="tech-logo">
                    <i class="fab fa-java text-4xl text-red-400"></i>
                </div>
                <div class="tech-logo">
                    <i class="fab fa-swift text-4xl text-orange-500"></i>
                </div>
                <div class="tech-logo">
                    <i class="fab fa-android text-4xl text-green-400"></i>
                </div>
                <div class="tech-logo">
                    <i class="fab fa-aws text-4xl text-orange-400"></i>
                </div>
                <div class="tech-logo">
                    <i class="fab fa-google text-4xl text-blue-500"></i>
                </div>
                <div class="tech-logo">
                    <i class="fab fa-microsoft text-4xl text-blue-600"></i>
                </div>
                <div class="tech-logo">
                    <i class="fas fa-database text-4xl text-blue-300"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="py-20 px-6 bg-gray-800">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="section-title text-3xl font-bold inline-block">Leadership <span class="gold-gradient-text">Team</span></h2>
                <p class="text-gray-400 mt-6 max-w-2xl mx-auto">
                    Meet the experienced professionals driving our company's vision and success.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Team Member 1 -->
                <div class="card rounded-2xl overflow-hidden text-center">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" 
                             alt="Team Member" 
                             class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold">Ahmad Ali</h3>
                        <p class="text-blue-400 mb-3">CEO & Founder</p>
                        <p class="text-gray-400 text-sm mb-4">
                            15+ years of experience in software development and business strategy.
                        </p>
                        <div class="flex justify-center space-x-3">
                            <a href="#" class="social-icon">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 2 -->
                <div class="card rounded-2xl overflow-hidden text-center">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=688&q=80" 
                             alt="Team Member" 
                             class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold">Zara Khan</h3>
                        <p class="text-blue-400 mb-3">CTO</p>
                        <p class="text-gray-400 text-sm mb-4">
                            Technology visionary with expertise in cloud architecture and AI solutions.
                        </p>
                        <div class="flex justify-center space-x-3">
                            <a href="#" class="social-icon">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 3 -->
                <div class="card rounded-2xl overflow-hidden text-center">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                             alt="Team Member" 
                             class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold">John Smith</h3>
                        <p class="text-blue-400 mb-3">Head of Engineering</p>
                        <p class="text-gray-400 text-sm mb-4">
                            Leads our technical teams with 12+ years in software development.
                        </p>
                        <div class="flex justify-center space-x-3">
                            <a href="#" class="social-icon">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 4 -->
                <div class="card rounded-2xl overflow-hidden text-center">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" 
                             alt="Team Member" 
                             class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold">Sarah Johnson</h3>
                        <p class="text-blue-400 mb-3">Director of Operations</p>
                        <p class="text-gray-400 text-sm mb-4">
                            Ensures seamless project delivery and client satisfaction.
                        </p>
                        <div class="flex justify-center space-x-3">
                            <a href="#" class="social-icon">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-20 px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="section-title text-3xl font-bold inline-block">Client <span class="gold-gradient-text">Testimonials</span></h2>
                <p class="text-gray-400 mt-6 max-w-2xl mx-auto">
                    Hear what our clients have to say about working with us.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="testimonial-card rounded-2xl p-8">
                    <div class="flex items-center mb-6">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" 
                             alt="Client" 
                             class="w-16 h-16 rounded-full mr-4">
                        <div>
                            <h3 class="font-bold">Michael Rodriguez</h3>
                            <p class="text-gray-400 text-sm">CTO, FinTech Global</p>
                        </div>
                    </div>
                    <p class="text-gray-300 mb-6">
                        "Ocentra transformed our legacy systems into a modern, scalable platform. Their technical expertise and commitment to our success were outstanding."
                    </p>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="testimonial-card rounded-2xl p-8">
                    <div class="flex items-center mb-6">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=688&q=80" 
                             alt="Client" 
                             class="w-16 h-16 rounded-full mr-4">
                        <div>
                            <h3 class="font-bold">Jennifer Williams</h3>
                            <p class="text-gray-400 text-sm">CEO, HealthTech Solutions</p>
                        </div>
                    </div>
                    <p class="text-gray-300 mb-6">
                        "The mobile app developed by Ocentra exceeded our expectations. Their team was responsive, innovative, and delivered ahead of schedule."
                    </p>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="testimonial-card rounded-2xl p-8">
                    <div class="flex items-center mb-6">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" 
                             alt="Client" 
                             class="w-16 h-16 rounded-full mr-4">
                        <div>
                            <h3 class="font-bold">David Chen</h3>
                            <p class="text-gray-400 text-sm">Director, Retail Innovations</p>
                        </div>
                    </div>
                    <p class="text-gray-300 mb-6">
                        "Our e-commerce platform built by Ocentra handles peak traffic seamlessly. Their solution increased our conversion rate by 35%."
                    </p>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php include("./components/footer.php")?>

    <script>
        // Initialize GSAP animations
        document.addEventListener('DOMContentLoaded', function() {
            // Animate elements on scroll
            gsap.registerPlugin(ScrollTrigger);
            
            gsap.utils.toArray('.animate-on-scroll').forEach(element => {
                gsap.fromTo(element, 
                    { opacity: 0, y: 50 },
                    {
                        opacity: 1,
                        y: 0,
                        duration: 0.8,
                        scrollTrigger: {
                            trigger: element,
                            start: 'top 85%',
                            toggleActions: 'play none none none'
                        }
                    }
                );
            });
            
            // Smooth scrolling for navigation links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        window.scrollTo({
                            top: target.offsetTop - 80,
                            behavior: 'smooth'
                        });
                    }
                });
            });
            
            // Project filter buttons
            document.querySelectorAll('.project-filter-btn').forEach(button => {
                button.addEventListener('click', function() {
                    document.querySelectorAll('.project-filter-btn').forEach(btn => {
                        btn.classList.remove('active');
                    });
                    this.classList.add('active');
                });
            });
            
            // Navigation active link
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.nav-link');
            
            window.addEventListener('scroll', () => {
                let current = '';
                
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.clientHeight;
                    
                    if (pageYOffset >= (sectionTop - 200)) {
                        current = section.getAttribute('id');
                    }
                });
                
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href').substring(1) === current) {
                        link.classList.add('active');
                    }
                });
            });
        });
    </script>
</body>
</html>