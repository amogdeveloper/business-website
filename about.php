<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us - Ocentra</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
      .typing-gradient {
        background: linear-gradient(to right, #ffffff, #1e293b);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }

      body {
        font-family: 'Segoe UI', sans-serif;
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
<body class="w-full bg-gray-900 relative">
    <!-- Hero Section -->
      <div class="absolute inset-0 h-[40%] bg-black/40"></div>

    <div class="relative z-10 flex items-center py-[100px] justify-center h-[100%]  px-10 "  style="background-image: url('h1.webp') ; background-repeat: no-repeat; background-size: cover; background-position:center;">
      <div class="text-white  space-y-6">
        <!-- About Us Button -->
        <button class="px-5 py-2 bg-white text-black font-semibold rounded-md shadow hover:bg-gray-300 transition">
          About Us
        </button>

        <!-- Heading -->
        <h1 class="text-5xl font-bold">Meet the Team Behind</h1>

        <!-- Typing Text -->
     <h2 class="text-5xl font-bold h-14 text-transparent bg-clip-text bg-gradient-to-r from-[#FFD700] via-[#FFC300] to-[#FFA500]">
  <span id="typing-text"></span>
</h2>

        <!-- Company Name -->
        <h3 class="text-xl md:w-[50%] w-[90%] mt-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe ad repellat neque magni dolorum repellendus ipsam doloribus ipsum perferendis voluptatem?</h3>

        <!-- Buttons Row -->
        <div class="flex space-x-4 mt-6">
          <button class="px-5 py-2 bg-gradient-to-r from-blue-500 to-cyan-400 rounded-md font-semibold shadow-lg hover:scale-105 transition">
            Contact Us
          </button>
          <button class="px-5 py-2 bg-gradient-to-r from-green-400 to-emerald-500 rounded-md font-semibold shadow-lg hover:scale-105 transition">
            Learn More
          </button>
        </div>
      </div>
    </div>
    
    <!-- Team Section -->
    <section class="px-4 sm:px-6 py-12 sm:py-20 mb-12 sm:mb-20 text-center ">
      <div class="container mx-auto">
        <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-[#2253f5]">
          Our Team
        </h2>
        <p class="text-xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl text-white mt-2 mb-6 sm:mb-10">
          Meet Our Team
        </p>

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

    <!-- JavaScript -->
    <script>
      // Auto Typing Effect
      const texts = ["Ocentra", "Technology", "Services"];
      let i = 0;
      let j = 0;
      let currentText = '';
      let isDeleting = false;
      const typingElement = document.getElementById('typing-text');

      function typeEffect() {
        if (i < texts.length) {
          if (!isDeleting && j <= texts[i].length) {
            currentText = texts[i].slice(0, j++);
            typingElement.textContent = currentText;
          } else if (isDeleting && j >= 0) {
            currentText = texts[i].slice(0, j--);
            typingElement.textContent = currentText;
          }

          if (j === texts[i].length + 1) {
            isDeleting = true;
            setTimeout(typeEffect, 1000);
            return;
          }

          if (j === 0 && isDeleting) {
            isDeleting = false;
            i = (i + 1) % texts.length;
          }

          setTimeout(typeEffect, isDeleting ? 50 : 100);
        }
      }

      typeEffect();

      // GSAP Entrance Animations
      gsap.from(".hero-content > .container > * > *", {
        opacity: 0,
        y: 50,
        duration: 1,
        stagger: 0.2,
        ease: "power2.out"
      });
      
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