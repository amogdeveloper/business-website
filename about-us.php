<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ocentra Technologies | About Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
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
            background: linear-gradient(135deg, #05070e 0%, #121924 100%);
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
            transform: translateY(50px);
            opacity: 0;
        }
        
        .animate-in {
            transform: translateY(0);
            opacity: 1;
        }
        
        .section-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 30px rgba(0, 0, 0, 0.3);
        }
        
        .timeline-dot {
            width: 24px;
            height: 24px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 50%;
            position: absolute;
            left: -12px;
            top: 0;
        }
        
        .timeline-line {
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 2px;
            background: linear-gradient(to bottom, var(--primary), var(--secondary), var(--accent));
        }
        
        .floating {
            animation: floating 6s ease-in-out infinite;
        }
            .logo-bg-section {
      background: linear-gradient(135deg, rgba(37, 187, 252, 0.404) 0%, rgba(76, 145, 243, 0.404) 100%);
      width: 90%;
      margin: 0 auto;
      border-left: 4px solid #38bdf8;
      border-right: 4px solid #94a3b8;
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
        
        .hexagon {
            clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
        }
        
        .hex-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            transform: rotate(45deg);
        }
        
        .hex-item {
            width: 100px;
            height: 115px;
            background: rgba(30, 41, 59, 0.6);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }
        
        .hex-item:hover {
            background: rgba(59, 130, 246, 0.3);
            transform: scale(1.1);
        }
        
        .tech-bubble {
            position: absolute;
            border-radius: 50%;
            background: rgba(59, 130, 246, 0.1);
            border: 1px solid rgba(59, 130, 246, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            color: #93c5fd;
            animation: bubble-float 20s infinite linear;
        }
        
        @keyframes bubble-float {
            0% { transform: translateY(0) translateX(0); }
            25% { transform: translateY(-30px) translateX(20px); }
            50% { transform: translateY(0) translateX(40px); }
            75% { transform: translateY(30px) translateX(20px); }
            100% { transform: translateY(0) translateX(0); }
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
         .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
      }
      
      .profile-popup {
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s ease, visibility 0.3s ease;
      }
      
      .profile-popup.active {
        opacity: 1;
        visibility: visible;
      }
      
      .popup-content {
        transform: translateY(20px);
        transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      }
      
      .profile-popup.active .popup-content {
        transform: translateY(0);
      }
      
      /* Hero section overlay */
      .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 60%;
        background: linear-gradient(to bottom, rgba(0,0,0,0.6), rgba(0,0,0,0.3));
      }
      
      /* Hero content container */
      .hero-content {
        min-height: 70vh;
      }
    </style>
</head>
<body class="min-h-screen">
  <?php include ('./components/header.php')?>
    <!-- Particles Background -->
    <div id="particles" class="fixed inset-0 z-0"></div>
    
    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden hero-bg">
      
        
        <div class="container mx-auto px-4 py-16 relative z-10">
            <div class="text-center max-w-4xl mx-auto">
                <h1 class="text-5xl md:text-7xl font-bold mb-6 glitch" data-text="About Us">
                    <span class="gradient-text">About Us</span>
                </h1>
                <p class="text-xl md:text-2xl text-slate-300 mb-10 max-w-2xl mx-auto">
                    We are redefining the future of technology with innovative solutions that transform businesses and empower people.
                </p>
                
                <div class="flex flex-wrap justify-center gap-4">
                        <a href="about.php" class="px-8 py-3 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full font-bold text-lg shadow-lg hover:shadow-xl transition-all transform hover:scale-105">
                          More know
                        </a>
                        <a href="contact.php" class="px-8 py-3 bg-transparent border-2 border-white text-white rounded-full font-bold text-lg hover:bg-white hover:text-gray-900 transition-all">
                            Get a Quote
                        </a>
                    </div>
            </div>
            
           
        </div>
    </section>

    <!-- About Sections -->
    <div class="container mx-auto px-4 py-16 relative z-10">
        <!-- Section 1: Our Story -->
        <section class="mb-28">
            <div class="max-w-4xl mx-auto text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    Our <span class="gradient-text">Journey</span> to Innovation
                </h2>
                <p class="text-xl text-slate-300 max-w-3xl mx-auto">
                    Founded in 2015, Ocentra Technologies has been at the forefront of digital transformation, helping businesses harness the power of technology.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                <div class="section-card p-8">
                    <div class="flex items-center mb-6">
                        <div class="bg-gradient-to-r from-blue-500 to-purple-500 p-3 rounded-lg mr-4 glow">
                            <i class="fas fa-rocket text-2xl text-white"></i>
                        </div>
                        <h3 class="text-2xl font-bold">From Humble Beginnings</h3>
                    </div>
                    <p class="text-slate-300 mb-4">
                        What started as a small team of passionate developers in a garage has grown into a global technology powerhouse. Our founder, Alex Johnson, envisioned a world where technology empowers every business.
                    </p>
                    <p class="text-slate-300">
                        Today, we serve over 500 clients across 30 countries, delivering cutting-edge solutions that drive real business results. Our commitment to excellence has earned us numerous industry awards and recognitions.
                    </p>
                </div>
                
                <div class="relative">
                    <div class="hologram section-card overflow-hidden">
                        <div class="hologram-content bg-gray-900 h-80 w-full flex items-center justify-center floating">
                            <div class="relative">
                                <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full blur-3xl opacity-30 animate-pulse"></div>
                                <div class="relative bg-gray-900 border border-gray-700 rounded-xl p-8 w-64 h-64 flex flex-col items-center justify-center">
                                    <div class="text-6xl font-bold gradient-text mb-2">500+</div>
                                    <div class="text-xl">Happy Clients</div>
                                    <div class="text-sm text-slate-400 mt-4">Worldwide</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 2: Our Values -->
        <section class="mb-28">
            <div class="max-w-4xl mx-auto text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    Our Core <span class="gradient-text">Values</span>
                </h2>
                <p class="text-xl text-slate-300 max-w-3xl mx-auto">
                    These principles guide everything we do at Ocentra Technologies and shape our company culture.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Value Card 1 -->
                <div class="section-card p-6">
                    <div class="bg-gradient-to-r from-blue-500 to-cyan-500 p-3 rounded-lg w-14 h-14 flex items-center justify-center mb-4 glow">
                        <i class="fas fa-lightbulb text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Innovation</h3>
                    <p class="text-slate-300">
                        We constantly push boundaries and explore new possibilities to deliver groundbreaking solutions.
                    </p>
                </div>
                
                <!-- Value Card 2 -->
                <div class="section-card p-6">
                    <div class="bg-gradient-to-r from-purple-500 to-pink-500 p-3 rounded-lg w-14 h-14 flex items-center justify-center mb-4 glow">
                        <i class="fas fa-users text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Collaboration</h3>
                    <p class="text-slate-300">
                        We believe in the power of teamwork and building strong partnerships with our clients.
                    </p>
                </div>
                
                <!-- Value Card 3 -->
                <div class="section-card p-6">
                    <div class="bg-gradient-to-r from-amber-500 to-orange-500 p-3 rounded-lg w-14 h-14 flex items-center justify-center mb-4 glow">
                        <i class="fas fa-gem text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Excellence</h3>
                    <p class="text-slate-300">
                        We're committed to delivering exceptional quality in everything we do, every single time.
                    </p>
                </div>
                
                <!-- Value Card 4 -->
                <div class="section-card p-6">
                    <div class="bg-gradient-to-r from-green-500 to-emerald-500 p-3 rounded-lg w-14 h-14 flex items-center justify-center mb-4 glow">
                        <i class="fas fa-heart text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Integrity</h3>
                    <p class="text-slate-300">
                        We operate with honesty, transparency, and the highest ethical standards in all our dealings.
                    </p>
                </div>
            </div>
        </section>

        <!-- Section 3: Our Timeline -->
        <section class="mb-28">
            <div class="max-w-4xl mx-auto text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    Our <span class="gradient-text">Timeline</span>
                </h2>
                <p class="text-xl text-slate-300 max-w-3xl mx-auto">
                    Milestones that have shaped our journey and defined our success.
                </p>
            </div>

            <div class="relative max-w-4xl mx-auto">
                <!-- Vertical Line -->
                <div class="timeline-line absolute left-0 top-0 h-full"></div>
                
                <!-- Timeline Item 1 -->
                <div class="relative pl-10 pb-16">
                    <div class="timeline-dot glow"></div>
                    <div class="section-card p-6">
                        <div class="text-blue-400 font-bold mb-2">2015</div>
                        <h3 class="text-xl font-bold mb-3">Company Founded</h3>
                        <p class="text-slate-300">
                            Ocentra Technologies was founded with a vision to revolutionize the tech industry. Started with just 5 team members working from a small garage.
                        </p>
                    </div>
                </div>
                
                <!-- Timeline Item 2 -->
                <div class="relative pl-10 pb-16">
                    <div class="timeline-dot glow"></div>
                    <div class="section-card p-6">
                        <div class="text-purple-400 font-bold mb-2">2017</div>
                        <h3 class="text-xl font-bold mb-3">First Major Client</h3>
                        <p class="text-slate-300">
                            Secured our first enterprise client, marking a significant milestone in our growth journey. Expanded team to 20 members.
                        </p>
                    </div>
                </div>
                
                <!-- Timeline Item 3 -->
                <div class="relative pl-10 pb-16">
                    <div class="timeline-dot glow"></div>
                    <div class="section-card p-6">
                        <div class="text-pink-400 font-bold mb-2">2019</div>
                        <h3 class="text-xl font-bold mb-3">International Expansion</h3>
                        <p class="text-slate-300">
                            Opened our first international office in London, serving clients across Europe. Team grew to 50 talented professionals.
                        </p>
                    </div>
                </div>
                
                <!-- Timeline Item 4 -->
                <div class="relative pl-10 pb-16">
                    <div class="timeline-dot glow"></div>
                    <div class="section-card p-6">
                        <div class="text-emerald-400 font-bold mb-2">2021</div>
                        <h3 class="text-xl font-bold mb-3">Product Launch</h3>
                        <p class="text-slate-300">
                            Launched our flagship SaaS product, revolutionizing how businesses manage their operations. Surpassed 100 employees.
                        </p>
                    </div>
                </div>
                
                <!-- Timeline Item 5 -->
                <div class="relative pl-10">
                    <div class="timeline-dot glow"></div>
                    <div class="section-card p-6">
                        <div class="text-amber-400 font-bold mb-2">2023</div>
                        <h3 class="text-xl font-bold mb-3">Global Recognition</h3>
                        <p class="text-slate-300">
                            Named "Tech Innovator of the Year" by Global Tech Awards. Now serving 500+ clients worldwide with 200+ team members.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
  <section class="px-4 sm:px-6 py-2  mb-12 sm:mb-20 text-center ">
      <div class="container mx-auto">
        <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold gradient-text">
          Our Team
        </h2>
        <p class="text-xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl text-white mt-2 mb-6 sm:mb-10">
          Meet Our Team
          
        </p >
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-20 sm:gap-8 lg:gap-10 max-w-6xl mx-auto">
          <!-- Team Member 1 -->
          <div class="relative bg-white rounded-2xl shadow-md transition-all duration-100 hover-card">
            <img
              src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80"
              alt="Ahmad Ali"
              class="w-full h-48 sm:h-56 md:h-64 object-cover rounded-t-2xl"
            />

            <div class="absolute top-26 sm:top-24 md:top-32 lg:top-48 left-1/2 transform -translate-x-1/2 z-50 bg-white px-3 sm:px-4 py-2 sm:py-3 rounded-lg shadow-lg w-[90%] text-left transition-all duration-100 card-content"
              style="height: 70px;">
              <div class="flex justify-between items-center w-full">
                <h3 class="text-base sm:text-lg font-semibold text-gray-800">
                  Ahmad Ali
                </h3>
                <a href="#" target="_blank" rel="noopener noreferrer">
                  <i class="fab fa-linkedin text-[#0e76a8] text-lg sm:text-xl"></i>
                </a>
              </div>
              <p class="text-xs sm:text-sm text-gray-500">Founding Partner</p>

              <div class="transition-opacity duration-100 opacity-0 h-0  bio-content">
                <p class="text-xs sm:text-sm text-gray-700 line-clamp-2">
                  Ahmad brings 10+ years of experience in venture capital and startup growth across emerging markets. He has led investments in over 40 startups and played an integral role in their scale-up journey...
                </p>
                <button class="inline-block mt-1 sm:mt-2 text-[#1E40AF] font-medium hover:underline read-more-btn text-xs sm:text-sm">
                  Read More →
                </button>
              </div>
            </div>
          </div>

          <!-- Team Member 2 -->
          <div class="relative bg-white rounded-2xl shadow-md transition-all duration-500 hover-card">
            <img
              src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=688&q=80"
              alt="Zara Khan"
              class="w-full h-48 sm:h-56 md:h-64 object-cover rounded-t-2xl"
            />

            <div class="absolute top-26 sm:top-24 md:top-32 lg:top-48 left-1/2 transform -translate-x-1/2 z-50 bg-white px-3 sm:px-4 py-2 sm:py-3 rounded-lg shadow-lg w-[90%] text-left transition-all duration-500 card-content"
              style="height: 70px ">
              <div class="flex justify-between items-center w-full">
                <h3 class="text-base sm:text-lg font-semibold text-gray-800">
                  Zara Khan
                </h3>
                <a href="#" target="_blank" rel="noopener noreferrer">
                  <i class="fab fa-linkedin text-[#0e76a8] text-lg sm:text-xl"></i>
                </a>
              </div>
              <p class="text-xs sm:text-sm text-gray-500">Growth Strategist</p>

              <div class="transition-opacity duration-500 opacity-0 h-0  bio-content">
                <p class="text-xs sm:text-sm text-gray-700 line-clamp-2">
                  Zara specializes in scaling early-stage startups with data-driven marketing strategies. She previously led growth teams at two unicorns and now advises portfolio companies...
                </p>
                <button class="inline-block mt-1 sm:mt-2 text-[#1E40AF] font-medium hover:underline read-more-btn text-xs sm:text-sm">
                  Read More →
                </button>
              </div>
            </div>
          </div>

          <!-- Team Member 3 -->
          <div class="relative bg-white rounded-2xl shadow-md transition-all duration-500 hover-card">
            <img
              src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
              alt="John Smith"
              class="w-full h-48 sm:h-56 md:h-64 object-cover rounded-t-2xl"
            />

            <div class="absolute top-26 sm:top-24 md:top-32 lg:top-48 left-1/2 transform -translate-x-1/2 z-50 bg-white px-3 sm:px-4 py-2 sm:py-3 rounded-lg shadow-lg w-[90%] text-left transition-all duration-500 card-content"
              style="height: 70px ">
              <div class="flex justify-between items-center w-full">
                <h3 class="text-base sm:text-lg font-semibold text-gray-800">
                  John Smith
                </h3>
                <a href="#" target="_blank" rel="noopener noreferrer">
                  <i class="fab fa-linkedin text-[#0e76a8] text-lg sm:text-xl"></i>
                </a>
              </div>
              <p class="text-xs sm:text-sm text-gray-500">Tech Lead</p>

              <div class="transition-opacity duration-500 opacity-0 h-0  bio-content">
                <p class="text-xs sm:text-sm text-gray-700 line-clamp-2">
                  John is our technical visionary with 15 years of experience in software architecture. He leads our engineering teams to build scalable, secure solutions...
                </p>
                <button class="inline-block mt-1 sm:mt-2 text-[#1E40AF] font-medium hover:underline read-more-btn text-xs sm:text-sm">
                  Read More →
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Profile Popup -->
    <div id="profilePopup" class="profile-popup fixed inset-0 bg-black/60 backdrop-blur-sm z-50 flex items-center justify-center px-4">
      <div class="popup-content bg-white rounded-2xl overflow-auto shadow-xl w-full max-w-4xl lg:max-w-6xl flex flex-col md:flex-row max-h-[80vh] sm:max-h-[90vh]">
        <!-- Left side -->
        <div class="p-4 sm:p-6 md:p-8 md:w-3/5 overflow-y-auto max-h-[50vh] sm:max-h-[60vh] md:max-h-none">
          <h2 id="popupName" class="text-xl sm:text-2xl font-bold text-[#1E40AF]"></h2>
          <p id="popupRole" class="text-xs sm:text-sm text-gray-500 mb-2 sm:mb-4"></p>
          <p id="popupBio" class="text-gray-700 text-xs sm:text-sm leading-relaxed whitespace-pre-line"></p>
          <button
            id="closePopup"
            class="mt-4 sm:mt-6 px-4 sm:px-6 py-1 sm:py-2 bg-[#1E40AF] text-white rounded-lg hover:bg-[#1e3a8a] transition-colors duration-300 text-xs sm:text-sm md:text-base">
            Close
          </button>
        </div>

        <!-- Right side -->
        <div class="md:w-2/5 h-48 sm:h-64 md:h-auto">
          <img
            id="popupImage"
            src=""
            alt=""
            class="w-full h-full object-cover"
          />
        </div>
      </div>
    </div>
    <!-- Call to Action -->
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

 <?php include ('./components/footer.php')?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize GSAP and ScrollTrigger
            gsap.registerPlugin(ScrollTrigger);
            
            // Create particles
            const particlesContainer = document.getElementById('particles');
            const particleCount = 100;
            
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
            
            // Animate sections on scroll
            gsap.utils.toArray('.section-card').forEach((card, index) => {
                gsap.to(card, {
                    scrollTrigger: {
                        trigger: card,
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
            
            // Animate timeline dots
            gsap.utils.toArray('.timeline-dot').forEach((dot, index) => {
                gsap.from(dot, {
                    scrollTrigger: {
                        trigger: dot,
                        start: 'top 90%',
                        toggleActions: 'play none none none'
                    },
                    scale: 0,
                    duration: 0.5,
                    delay: index * 0.2,
                    ease: "elastic.out(1, 0.3)"
                });
            });
            
            // Animate the timeline line
            gsap.from('.timeline-line', {
                scrollTrigger: {
                    trigger: '.timeline-line',
                    start: 'top 80%',
                    scrub: 1
                },
                scaleY: 0,
                transformOrigin: 'top',
                duration: 2
            });
            
            // Animate hex grid
            gsap.utils.toArray('.hex-item').forEach((hex, index) => {
                gsap.from(hex, {
                    scrollTrigger: {
                        trigger: hex,
                        start: 'top 90%',
                        toggleActions: 'play none none none'
                    },
                    scale: 0,
                    rotation: 180,
                    duration: 0.8,
                    delay: index * 0.1,
                    ease: "back.out(1.7)"
                });
            });
            
            // Animate CTA button
            gsap.to('.glow', {
                scrollTrigger: {
                    trigger: '.glow',
                    start: 'top 80%',
                    toggleActions: 'play none none none'
                },
                boxShadow: '0 0 30px rgba(59, 130, 246, 0.9)',
                duration: 1,
                yoyo: true,
                repeat: -1,
                ease: "sine.inOut"
            });
        });
    </script>
      <script>
     
      // Team Section Functionality
      document.addEventListener('DOMContentLoaded', function () {
        const team = [
          {
            name: "Ahmad Ali",
            role: "Founding Partner",
            img: "https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80",
            bio: "Ahmad brings 10+ years of experience in venture capital and startup growth across emerging markets. He has led investments in over 40 startups and played an integral role in their scale-up journey. Ahmad is passionate about deep tech and financial inclusion. He believes in empowering entrepreneurs who solve real-world problems with disruptive innovation. With a background in economics and an MBA from Harvard, Ahmad blends strategic thinking with sharp execution. His network spans global VC circles, and he frequently mentors founders. He is also an advocate for ethical investing, aiming to create impact-driven portfolios that deliver long-term value. In his free time, he writes thought pieces on startup ecosystems and is an active angel investor across Asia.",
            link: "#"
          },
          {
            name: "Zara Khan",
            role: "Growth Strategist",
            img: "https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=688&q=80",
            bio: "Zara specializes in scaling early-stage startups with data-driven marketing strategies. She previously led growth teams at two unicorns and now advises portfolio companies at VestedVC on user acquisition, funnel optimization, and brand positioning. Zara has a background in behavioral psychology and growth design. Her leadership brings structure and speed to startups aiming to scale from MVP to PMF. She's known for building viral loops and applying precision analytics to every stage of the user journey. Her insights have helped startups triple retention within 6 months. She also teaches workshops and actively supports women-led startups.",
            link: "#"
          },
          {
            name: "John Smith",
            role: "Tech Lead",
            img: "https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80",
            bio: "John is our technical visionary with 15 years of experience in software architecture. He leads our engineering teams to build scalable, secure solutions that power our portfolio companies' growth. His expertise spans cloud infrastructure, DevOps, and cutting-edge technologies like AI/ML. Before joining us, John was CTO at two successful SaaS startups that exited to major tech companies. He's passionate about mentoring junior developers and creating inclusive engineering cultures. John holds a PhD in Computer Science from MIT and has published several papers on distributed systems. When not coding, he enjoys hiking and playing jazz guitar.",
            link: "#"
          }
        ];

        const hoverCards = document.querySelectorAll('.hover-card');
        const profilePopup = document.getElementById('profilePopup');
        const popupName = document.getElementById('popupName');
        const popupRole = document.getElementById('popupRole');
        const popupBio = document.getElementById('popupBio');
        const popupImage = document.getElementById('popupImage');
        const closePopup = document.getElementById('closePopup');

        // Hover animation for cards
        hoverCards.forEach((card, index) => {
          const cardContent = card.querySelector('.card-content');
          const bioContent = card.querySelector('.bio-content');
          const readMoreBtn = card.querySelector('.read-more-btn');

          card.addEventListener('mouseenter', () => {
            gsap.to(cardContent, {
              height: 150,
              duration: 0.5,
              ease: "power2.out"
            });
            gsap.to(bioContent, {
              opacity: 1,
              height: 'auto',
              marginTop: '0.5rem',
              duration: 0.3,
              delay: 0.2
            });
          });

          card.addEventListener('mouseleave', () => {
            gsap.to(cardContent, {
              height: 70,
              duration: 0.5,
              ease: "power2.out"
            });
            gsap.to(bioContent, {
              opacity: 0,
              height: 0,
              marginTop: 0,
              duration: 0.3
            });
          });

          readMoreBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            e.preventDefault();
            showPopup(team[index]);
          });
        });

        // Show popup with reset animation
        function showPopup(member) {
          const popupContent = profilePopup.querySelector('.popup-content');

          // Set content
          popupName.textContent = member.name;
          popupRole.textContent = member.role;
          popupBio.textContent = member.bio;
          popupImage.src = member.img;
          popupImage.alt = member.name;

          // Reset popup style first
          gsap.set(popupContent, { opacity: 0, y: 30 });

          // Display the popup
          profilePopup.classList.add('active');
          document.body.style.overflow = 'hidden';

          // Animate in
          gsap.to(popupContent, {
            opacity: 1,
            y: 0,
            duration: 0.6,
            ease: "back.out(1.7)"
          });
        }

        // Hide popup
        function hidePopup() {
          const popupContent = profilePopup.querySelector('.popup-content');

          gsap.to(popupContent, {
            opacity: 0,
            y: 30,
            duration: 0.3,
            ease: "power1.in",
            onComplete: () => {
              profilePopup.classList.remove('active');
              document.body.style.overflow = '';
            }
          });
        }

        closePopup.addEventListener('click', hidePopup);

        // Close by clicking outside
        profilePopup.addEventListener('click', (e) => {
          if (e.target === profilePopup) hidePopup();
        });

        // Close with Esc key
        document.addEventListener('keydown', (e) => {
          if (e.key === 'Escape' && profilePopup.classList.contains('active')) {
            hidePopup();
          }
        });
      });
    </script>
    
</body>
</html>