
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Professional Glassy Header</title>

  <!-- Tailwind & GSAP CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

  <style>
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
  </style>
</head>

<body >

  <!-- Header Section -->
  <header class="w-[95%] flex ml-6 mx-auto  mt-6 rounded-[50px] fixed top-0 z-50 bg-white/10 backdrop-blur-lg shadow-xl border border-white/50">
    <div class="container mx-auto px-6 py-6">
      <div class="flex items-center justify-between">

        <!-- Logo -->
        <div class="logo-container flex items-center">
          <img src="ocentra.webp" alt="Logo" class="h-10 w-10 object-contain"/>
          <span class="ml-3 text-xl font-bold bg-gradient-to-r from-sky-400 to-gray-400 bg-clip-text text-transparent">Ocentra</span>
        </div>

        <!-- Navigation Links -->
        <nav class="hidden md:flex items-center space-x-8">
          <a href="#" class="nav-link hover:text-white">Home</a>
          <div class="relative group">
            <a href="#" class="nav-link hover:text-white flex items-center">Services
              <i class="fas fa-chevron-down ml-1 text-xs"></i>
            </a>
           <div class="absolute left-[-50px] mt-0 w-48 bg-gray-800/90 backdrop-blur-md rounded-md shadow-lg py-2 z-50 hidden group-hover:block border border-gray-700/50">
  <a href="website" class="block px-4 py-2 hover:bg-gray-700/50 hover:text-white">Web Development</a>
  <a href="seo" class="block px-4 py-2 hover:bg-gray-700/50 hover:text-white">SEO Services</a>
  <a href="digital" class="block px-4 py-2 hover:bg-gray-700/50 hover:text-white">Digital Marketing</a>
  <a href="graphic" class="block px-4 py-2 hover:bg-gray-700/50 hover:text-white">Graphic Design</a>
</div>

          </div>
          <a href="#" class="nav-link hover:text-white">Portfolio</a>
          <a href="#" class="nav-link hover:text-white">Blog</a>
          <a href="about-us" class="nav-link hover:text-white">About</a>
          <a href="contact" class="nav-link hover:text-white">Contact</a>
        </nav>

        <!-- Social Icons & Mobile Button -->
        <div class="flex items-center space-x-6">
          <div class="hidden md:flex space-x-4">
            <a href="#" class="social-icon hover:text-sky-400"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social-icon hover:text-sky-400"><i class="fab fa-twitter"></i></a>
            <a href="#" class="social-icon hover:text-sky-400"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="social-icon hover:text-sky-400"><i class="fab fa-instagram"></i></a>
          </div>
          <button class="md:hidden focus:outline-none" id="mobile-menu-button">
            <i class="fas fa-bars text-2xl"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div class="md:hidden hidden bg-gray-900/95 backdrop-blur-md border-t border-gray-800" id="mobile-menu">
      <div class="container mx-auto px-6 py-4 flex flex-col space-y-4">
        <a href="#" class="hover:text-white">Home</a>
        <a href="#" class="hover:text-white">Services</a>
        <a href="#" class="hover:text-white">Portfolio</a>
        <a href="#" class="hover:text-white">Blog</a>
        <a href="#" class="hover:text-white">About</a>
        <a href="#" class="hover:text-white">Contact</a>
        <div class="flex space-x-6 pt-4">
          <a href="#" class="social-icon hover:text-sky-400"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social-icon hover:text-sky-400"><i class="fab fa-twitter"></i></a>
          <a href="#" class="social-icon hover:text-sky-400"><i class="fab fa-linkedin-in"></i></a>
          <a href="#" class="social-icon hover:text-sky-400"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </div>
  </header>

  <!-- Content Spacer -->
  <div class="h-24"></div>


  <!-- GSAP Script -->
  <script>
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');

      if (!mobileMenu.classList.contains('hidden')) {
        gsap.from(mobileMenu, { opacity: 0, height: 0, duration: 0.3 });
      }
    });

    // GSAP Animation on Load
    document.addEventListener('DOMContentLoaded', () => {
      gsap.from('.logo-container', {
        x: -20,
        duration: 0.8,
        ease: 'power3.out'
      });

      gsap.from('.nav-link', {
        duration: 0.6,
        stagger: 0.1,
        delay: 0.3,
        ease: 'back.out'
      });

      gsap.from('.social-icon', {
        duration: 0.6,
        stagger: 0.1,
        delay: 0.5,
        ease: 'back.out'
      });
    });
  </script>
</body>
</html>
