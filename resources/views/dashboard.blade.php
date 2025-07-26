<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Neoroza Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      /* Animations */
      @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
      }
      @keyframes fadeInUp {
        from { 
          opacity: 0;
          transform: translateY(20px);
        }
        to { 
          opacity: 1;
          transform: translateY(0);
        }
      }
      @keyframes fadeInDown {
        from { 
          opacity: 0;
          transform: translateY(-20px);
        }
        to { 
          opacity: 1;
          transform: translateY(0);
        }
      }
      @keyframes slideInLeft {
        from { 
          opacity: 0;
          transform: translateX(-20px);
        }
        to { 
          opacity: 1;
          transform: translateX(0);
        }
      }
      @keyframes slideInRight {
        from { 
          opacity: 0;
          transform: translateX(20px);
        }
        to { 
          opacity: 1;
          transform: translateX(0);
        }
      }
      @keyframes pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
      }
      @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-5px); }
      }
      
      /* Animation Classes */
      .animate-fade-in {
        animation: fadeIn 1s ease-out forwards;
      }
      .animate-fade-in-up {
        animation: fadeInUp 0.8s cubic-bezier(0.22, 0.61, 0.36, 1) forwards;
      }
      .animate-fade-in-down {
        animation: fadeInDown 0.8s cubic-bezier(0.22, 0.61, 0.36, 1) forwards;
      }
      .animate-slide-in-left {
        animation: slideInLeft 0.8s cubic-bezier(0.22, 0.61, 0.36, 1) forwards;
      }
      .animate-slide-in-right {
        animation: slideInRight 0.8s cubic-bezier(0.22, 0.61, 0.36, 1) forwards;
      }
      .animate-pulse {
        animation: pulse 2s infinite;
      }
      .animate-float {
        animation: float 3s ease-in-out infinite;
      }
      
      /* Transition Effects */
      .transition-slow {
        transition: all 0.5s cubic-bezier(0.22, 0.61, 0.36, 1);
      }
      .transition-medium {
        transition: all 0.3s cubic-bezier(0.22, 0.61, 0.36, 1);
      }
      .transition-fast {
        transition: all 0.15s cubic-bezier(0.22, 0.61, 0.36, 1);
      }
      
      /* Hover Effects */
      .hover-grow {
        transition: transform 0.3s ease;
      }
      
      /* Mobile menu animation */
      .mobile-menu {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-in-out, opacity 0.3s ease-in-out, transform 0.3s ease-in-out;
        opacity: 0;
        transform: translateY(-10px);
      }
      
      .mobile-menu.show {
        max-height: 300px;
        opacity: 1;
        transform: translateY(0);
      }
      
      .mobile-menu-item {
        opacity: 0;
        transform: translateX(-20px);
        transition: all 0.3s ease-in-out;
      }
      
      .mobile-menu.show .mobile-menu-item {
        opacity: 1;
        transform: translateX(0);
      }
      
      .mobile-menu.show .mobile-menu-item:nth-child(1) { transition-delay: 0.1s; }
      .mobile-menu.show .mobile-menu-item:nth-child(2) { transition-delay: 0.2s; }
      .mobile-menu.show .mobile-menu-item:nth-child(3) { transition-delay: 0.3s; }
      .mobile-menu.show .mobile-menu-item:nth-child(4) { transition-delay: 0.4s; }
      }
      .hover-grow:hover {
        transform: scale(1.03);
      }
      
      /* Custom Scrollbar */
      ::-webkit-scrollbar {
        width: 8px;
        height: 8px;
      }
      ::-webkit-scrollbar-track {
        background: #f1f1f1;
      }
      ::-webkit-scrollbar-thumb {
        background: #888;
        border-radius: 4px;
      }
      ::-webkit-scrollbar-thumb:hover {
        background: #555;
      }
    </style>
  </head>
  <body class="bg-gray-50 font-sans text-gray-800 animate-fade-in">
    <!-- Navbar with Staggered Animations -->
    <nav class="bg-white shadow-md sticky top-0 z-50 transition-slow">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center border-b border-gray-200">
          <!-- Left (Logo) - Slide in from left -->
          <div class="flex items-center animate-slide-in-left" style="animation-delay: 0.1s">
            <button id="mobileMenuBtn" class="md:hidden text-white bg-indigo-600 p-2 rounded-md mr-2 transition-medium hover:bg-indigo-700 hover:shadow-lg">
              <i class="fas fa-bars"></i>
            </button>
            <a href="/" class="flex items-center space-x-2 hover-grow">
              <img src="{{ asset('img/neorozaLogo.png') }}" alt="Neoroza Logo" class="h-8 w-auto animate-pulse" style="animation-delay: 0.5s"/>
            </a>
          </div>

          <!-- Center Navigation - Fade in down -->
          <div id="navbarNav" class="hidden md:flex space-x-6 animate-fade-in-down" style="animation-delay: 0.2s">
            <a href="/" class="flex items-center text-indigo-600 font-semibold hover:underline transition-medium">
              <i class="fas fa-home mr-1"></i> Home
            </a>
            <a href="/about" class="flex items-center hover:text-indigo-600 transition-medium">
              <i class="fas fa-building mr-1"></i> About
            </a>
            <a href="/services" class="flex items-center hover:text-indigo-600 transition-medium">
              <i class="fas fa-cogs mr-1"></i> Services
            </a>
            <a href="/contact" class="flex items-center hover:text-indigo-600 transition-medium">
              <i class="fas fa-envelope mr-1"></i> Contact
            </a>
          </div>

          {{-- <!-- Right (User) - Slide in from right -->
          <div class="flex items-center space-x-3 animate-slide-in-right" style="animation-delay: 0.3s">
            <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name ?? 'User') }}&background=6366f1&color=fff"
              alt="User Avatar" class="w-8 h-8 rounded-full border-2 border-indigo-400 transition-medium hover:scale-110 hover:shadow"/>
            <span class="text-sm font-medium">{{ Auth::user()->name ?? 'User' }}</span>
            <a href="/logout" class="text-gray-500 hover:text-red-500 transition-medium">
              <i class="fas fa-sign-out-alt"></i>
            </a>
          </div>
        </div>
      </div> --}}
    </nav>

    <!-- Mobile menu - positioned outside nav to appear below the border -->
    <div id="mobileMenu" class="md:hidden mobile-menu bg-white border-b border-gray-200 shadow-lg">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="py-3 space-y-2">
          <a href="/" class="mobile-menu-item block py-2 px-3 text-indigo-600 bg-indigo-50 font-semibold rounded-md transition-all duration-300 ease-in-out">
            <i class="fas fa-home mr-2"></i> Home
          </a>
          <a href="/about" class="mobile-menu-item block py-2 px-3 text-gray-700 hover:text-indigo-600 hover:bg-indigo-50 rounded-md transition-all duration-300 ease-in-out">
            <i class="fas fa-building mr-2"></i> About
          </a>
          <a href="/services" class="mobile-menu-item block py-2 px-3 text-gray-700 hover:text-indigo-600 hover:bg-indigo-50 rounded-md transition-all duration-300 ease-in-out">
            <i class="fas fa-cogs mr-2"></i> Services
          </a>
          <a href="/contact" class="mobile-menu-item block py-2 px-3 text-gray-700 hover:text-indigo-600 hover:bg-indigo-50 rounded-md transition-all duration-300 ease-in-out">
            <i class="fas fa-envelope mr-2"></i> Contact
          </a>
        </div>
      </div>
    </div>

    <!-- Main Content with Staggered Animations -->
    <main class="max-w-7xl mx-auto px-4 py-10">
      <!-- Header - Fade in up with delay -->
      <div class="mb-10 animate-fade-in-up" style="animation-delay: 0.4s">
        <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">
          Welcome to <span class="text-indigo-600 animate-float">Neoroza</span> Dashboard
        </h1>
        <p class="text-gray-600 max-w-xl md:text-lg">
          This dashboard is your gateway to manage and explore all about our corporate website.
          Discover our company profile, services, and get in touch with us easily.
        </p>
      </div>

      <!-- Cards with Staggered Animations -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Card 1 - Fade in up with delay -->
        <div class="bg-white rounded-xl shadow p-6 hover-grow animate-fade-in-up" style="animation-delay: 0.5s">
          <div class="bg-indigo-100 text-indigo-600 w-12 h-12 flex items-center justify-center rounded-lg mb-4 transition-medium hover:rotate-6">
            <i class="fas fa-building text-xl"></i>
          </div>
          <h3 class="text-lg font-semibold mb-2">About Us</h3>
          <p class="text-sm text-gray-600 mb-4">
            Learn more about our company, vision, and values that drive us forward.
          </p>
          <a href="/about" class="inline-flex items-center text-white bg-indigo-600 px-4 py-2 rounded-md hover:bg-indigo-700 text-sm font-medium transition-medium hover:shadow-md">
            Read More <i class="fas fa-arrow-right ml-2 text-xs transition-medium group-hover:ml-3"></i>
          </a>
        </div>

        <!-- Card 2 - Fade in up with delay -->
        <div class="bg-white rounded-xl shadow p-6 hover-grow animate-fade-in-up" style="animation-delay: 0.6s">
          <div class="bg-indigo-100 text-indigo-600 w-12 h-12 flex items-center justify-center rounded-lg mb-4 transition-medium hover:rotate-6">
            <i class="fas fa-cogs text-xl"></i>
          </div>
          <h3 class="text-lg font-semibold mb-2">Our Services</h3>
          <p class="text-sm text-gray-600 mb-4">
            Explore the wide range of services we offer to help your business grow.
          </p>
          <a href="/services" class="inline-flex items-center text-white bg-indigo-600 px-4 py-2 rounded-md hover:bg-indigo-700 text-sm font-medium transition-medium hover:shadow-md">
            See Services <i class="fas fa-arrow-right ml-2 text-xs transition-medium group-hover:ml-3"></i>
          </a>
        </div>

        <!-- Card 3 - Fade in up with delay -->
        <div class="bg-white rounded-xl shadow p-6 hover-grow animate-fade-in-up" style="animation-delay: 0.7s">
          <div class="bg-indigo-100 text-indigo-600 w-12 h-12 flex items-center justify-center rounded-lg mb-4 transition-medium hover:rotate-6">
            <i class="fas fa-headset text-xl"></i>
          </div>
          <h3 class="text-lg font-semibold mb-2">Contact Us</h3>
          <p class="text-sm text-gray-600 mb-4">
            Have questions or need support? Reach out to our team anytime.
          </p>
          <a href="/contact" class="inline-flex items-center text-white bg-indigo-600 px-4 py-2 rounded-md hover:bg-indigo-700 text-sm font-medium transition-medium hover:shadow-md group">
            Contact <i class="fas fa-arrow-right ml-2 text-xs transition-medium group-hover:ml-3"></i>
          </a>
        </div>
      </div>

      <!-- Contact Section -->
      <section id="contact" class="mt-16">
        <div class="bg-white rounded-xl shadow p-8 animate-fade-in-up">
          <h2 class="text-2xl font-bold text-gray-800 mb-4">Contact Us</h2>
          <form method="POST" action="/contact" class="space-y-4">
            @csrf
            <div>
              <label class="block text-gray-700 mb-1">Name</label>
              <input type="text" name="name" required class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400" />
            </div>
            <div>
              <label class="block text-gray-700 mb-1">Email</label>
              <input type="email" name="email" required class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400" />
            </div>
            <div>
              <label class="block text-gray-700 mb-1">Message</label>
              <textarea name="message" rows="4" required class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400"></textarea>
            </div>
            <button type="submit" class="bg-indigo-600 text-white px-6 py-2 rounded hover:bg-indigo-700 font-semibold transition">Send Message</button>
          </form>
        </div>
      </section>
    </main>

    <script>
      // Mobile menu toggle with animation
      const mobileMenuBtn = document.getElementById('mobileMenuBtn');
      const mobileMenu = document.getElementById('mobileMenu');
      
      mobileMenuBtn.addEventListener('click', () => {
        const icon = mobileMenuBtn.querySelector('i');
        
        if (mobileMenu.classList.contains('show')) {
          // Close menu with animation
          mobileMenu.classList.remove('show');
          setTimeout(() => {
            mobileMenu.classList.add('hidden');
          }, 300); // Wait for animation to complete
          
          icon.classList.remove('fa-times');
          icon.classList.add('fa-bars');
        } else {
          // Open menu with animation
          mobileMenu.classList.remove('hidden');
          setTimeout(() => {
            mobileMenu.classList.add('show');
          }, 10); // Small delay to ensure hidden class is removed
          
          icon.classList.remove('fa-bars');
          icon.classList.add('fa-times');
        }
      });
      
      // Scroll animation for elements
      const animateOnScroll = () => {
        const elements = document.querySelectorAll('.animate-fade-in-up, .animate-slide-in-left, .animate-slide-in-right');
        
        elements.forEach(el => {
          const elementTop = el.getBoundingClientRect().top;
          const windowHeight = window.innerHeight;
          
          if (elementTop < windowHeight - 100) {
            el.style.opacity = 1;
            el.style.transform = 'translate(0, 0)';
          }
        });
      };
      
      // Run once on load
      window.addEventListener('load', animateOnScroll);
      
      // Run on scroll
      window.addEventListener('scroll', animateOnScroll);
      
      // Add hover effects to cards
      document.querySelectorAll('.hover-grow').forEach(card => {
        card.addEventListener('mouseenter', () => {
          card.style.transform = 'scale(1.03)';
          card.style.boxShadow = '0 10px 25px -5px rgba(0, 0, 0, 0.1)';
        });
        
        card.addEventListener('mouseleave', () => {
          card.style.transform = 'scale(1)';
          card.style.boxShadow = '';
        });
      });
    </script>
  </body>
</html>