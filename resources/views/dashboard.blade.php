<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Neoroza Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.0/css/all.min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: {
              50: '#f0f9ff',
              100: '#e0f2fe',
              500: '#0ea5e9',
              600: '#0284c7',
              700: '#0369a1',
              900: '#0c4a6e'
            }
          },
          animation: {
            'fade-in': 'fadeIn 0.6s ease-out',
            'slide-up': 'slideUp 0.8s ease-out',
            'slide-down': 'slideDown 0.5s ease-out',
            'float': 'float 6s ease-in-out infinite',
            'pulse-soft': 'pulseSoft 3s ease-in-out infinite'
          }
        }
      }
    }
  </script>
  <style>
    @keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    @keyframes slideUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes slideDown {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes float {

      0%,
      100% {
        transform: translateY(0px);
      }

      50% {
        transform: translateY(-8px);
      }
    }

    @keyframes pulseSoft {

      0%,
      100% {
        opacity: 1;
      }

      50% {
        opacity: 0.8;
      }
    }

    /* Custom scrollbar */
    ::-webkit-scrollbar {
      width: 6px;
    }

    ::-webkit-scrollbar-track {
      background: #f8fafc;
    }

    ::-webkit-scrollbar-thumb {
      background: #cbd5e1;
      border-radius: 3px;
    }

    ::-webkit-scrollbar-thumb:hover {
      background: #94a3b8;
    }

    /* Smooth focus styles */
    .focus-ring:focus {
      outline: none;
      box-shadow: 0 0 0 3px rgba(14, 165, 233, 0.2);
    }

    /* Glass morphism effect */
    .glass {
      backdrop-filter: blur(16px) saturate(180%);
      background-color: rgba(255, 255, 255, 0.85);
      border: 1px solid rgba(255, 255, 255, 0.2);
    }

    /* Mobile menu animation */
    .mobile-menu {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .mobile-menu.open {
      max-height: 400px;
    }

    @keyframes float {

      0%,
      100% {
        transform: translateY(0px);
      }

      50% {
        transform: translateY(-10px);
      }
    }

    @keyframes glow {

      0%,
      100% {
        box-shadow: 0 0 20px rgba(79, 70, 229, 0.3);
      }

      50% {
        box-shadow: 0 0 40px rgba(79, 70, 229, 0.6);
      }
    }

    @keyframes shimmer {
      0% {
        background-position: -200% center;
      }

      100% {
        background-position: 200% center;
      }
    }

    .card-hover {
      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    .card-hover:hover {
      transform: translateY(-12px) scale(1.02);
    }

    .floating-icon {
      animation: float 3s ease-in-out infinite;
    }

    .gradient-text {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .btn-glow:hover {
      animation: glow 1.5s ease-in-out infinite alternate;
    }

    .decorative-dots {
      background-image: radial-gradient(circle at 2px 2px, rgba(102, 126, 234, 0.15) 1px, transparent 0);
      background-size: 20px 20px;
    }
  </style>
</head>

<body class="bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50 min-h-screen">
  <!-- Navigation -->
  <nav class="sticky top-0 z-50 glass border-b border-white/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-16">
        <!-- Logo -->
        <div class="flex items-center animate-fade-in">
          <button id="mobileMenuToggle"
            class="md:hidden mr-3 px-3 rounded-lg bg-primary-500 text-white hover:bg-primary-600 transition-colors focus-ring"
            aria-label="Toggle menu">
            <i class="fas fa-bars text-sm"></i>
          </button>
          <a href="/" class="flex items-center space-x-3 group">
            <img src="{{ asset('img/neorozaLogo.png') }}" alt="Neoroza Logo" class="h-8 w-auto animate-pulse"
              style="animation-delay: 0.5s" />
          </a>
        </div>

        <!-- Desktop Navigation -->
        <div class="hidden md:flex items-center space-x-8 animate-slide-down">
          <a href="{{ route('dashboard') }}"
            class="flex items-center space-x-2 text-primary-600 font-medium hover:text-primary-700 transition-colors">
            <i class="fas fa-home text-sm"></i>
            <span>Home</span>
          </a>
          <a href="{{ route('about') }}" class="flex items-center space-x-2 text-slate-600 hover:text-primary-600 transition-colors">
            <i class="fas fa-building text-sm"></i>
            <span>About</span>
          </a>
          <a href="{{ route('services') }}"
            class="flex items-center space-x-2 text-slate-600 hover:text-primary-600 transition-colors">
            <i class="fas fa-cogs text-sm"></i>
            <span>Services</span>
          </a>
          <a href="{{ route('contact') }}"
            class="flex items-center space-x-2 text-slate-600 hover:text-primary-600 transition-colors">
            <i class="fas fa-envelope text-sm"></i>
            <span>Contact</span>
          </a>
        </div>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="md:hidden mobile-menu bg-white/95 backdrop-blur-md border-t border-white/20">
      <div class="px-4 py-3 space-y-2">
        <a href="/" class="block px-4 py-3 text-primary-600 bg-primary-50 font-medium rounded-lg transition-colors">
          <i class="fas fa-home mr-3 text-sm"></i>Home
        </a>
        <a href="/about"
          class="block px-4 py-3 text-slate-600 hover:text-primary-600 hover:bg-primary-50 rounded-lg transition-colors">
          <i class="fas fa-building mr-3 text-sm"></i>About
        </a>
        <a href="/services"
          class="block px-4 py-3 text-slate-600 hover:text-primary-600 hover:bg-primary-50 rounded-lg transition-colors">
          <i class="fas fa-cogs mr-3 text-sm"></i>Services
        </a>
        <a href="/contact"
          class="block px-4 py-3 text-slate-600 hover:text-primary-600 hover:bg-primary-50 rounded-lg transition-colors">
          <i class="fas fa-envelope mr-3 text-sm"></i>Contact
        </a>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <!-- Hero Section -->
    <section class="text-center mb-16 animate-slide-up">
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-slate-800 mb-6">
        Welcome to
        <span class="bg-gradient-to-r from-primary-600 to-indigo-600 bg-clip-text text-transparent animate-float">
          Neoroza
        </span>
      </h1>
      <p class="text-lg md:text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed">
        Your comprehensive dashboard to explore our corporate identity, discover our services,
        and connect with our team. Built with modern technology for seamless experience.
      </p>
    </section>

    <!-- Cards Grid -->
    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
      <!-- About Card -->
      <article
        class="animate-slide-up card-hover group relative bg-white/10 backdrop-blur-xl rounded-3xl p-8 border border-white/20 overflow-hidden shadow-lg hover:cursor-pointer transition-all duration-300">
        <!-- Background Pattern -->
        <div class="absolute inset-0 decorative-dots opacity-50"></div>

        <!-- Glowing Border Effect -->
        <div class="absolute inset-0 rounded-3xl bg-white transition-all duration-500">
        </div>

        <!-- Content Container -->
        <div class="relative z-10">
          <!-- Icon Section -->
          <div class="flex justify-between items-start mb-8">
            <div
              class="w-16 h-16 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-500 bg-gradient-to-br from-purple-500 via-indigo-600 to-purple-700 floating-icon">
              <i class="fas fa-building text-white text-2xl"></i>
            </div>

            <div class="flex space-x-1">
              <div class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></div>
              <div class="w-2 h-2 bg-blue-400 rounded-full animate-pulse" style="animation-delay: 0.5s;"></div>
              <div class="w-2 h-2 bg-purple-400 rounded-full animate-pulse" style="animation-delay: 1s;"></div>
            </div>
          </div>

          <!-- Title -->
          <h3 class="text-2xl font-bold gradient-text mb-4 group-hover:scale-105 transition-transform duration-300">
            About Our Company
          </h3>

          <!-- Description -->
          <p
            class="text-black-300 mb-8 leading-relaxed text-lg opacity-90 group-hover:opacity-100 transition-opacity duration-300">
            Discover our mission, values, and the passionate team behind our innovative solutions that shape the future.
          </p>

          <!-- Button -->
          <div class="flex items-center justify-between">
            <a href="/about"
              class="btn-glow inline-flex items-center space-x-3 bg-gradient-to-r from-blue-600 via-purple-600 to-indigo-600 text-white px-8 py-4 rounded-2xl font-semibold hover:shadow-2xl hover:shadow-purple-500/30 transition-all duration-300 group/btn relative overflow-hidden">
              <!-- Button Shine Effect -->
              <div
                class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent -skew-x-12 -translate-x-full group-hover/btn:translate-x-full transition-transform duration-700">
              </div>

              <span class="relative z-10">Learn More</span>
              <i
                class="fas fa-arrow-right text-sm group-hover/btn:translate-x-2 transition-transform duration-300 relative z-10"></i>
            </a>

            <!-- Social Icons -->
            <div class="flex space-x-3 opacity-60 group-hover:opacity-100 transition-opacity duration-300">
              <div
                class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center hover:bg-white/20 transition-colors cursor-pointer">
                <i class="fab fa-twitter text-white text-sm"></i>
              </div>
              <div
                class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center hover:bg-white/20 transition-colors cursor-pointer">
                <i class="fab fa-linkedin text-white text-sm"></i>
              </div>
            </div>
          </div>

          <!-- Progress Indicator -->
          <div class="mt-6 flex items-center space-x-2">
            <div class="flex-1 h-1 bg-white/10 rounded-full overflow-hidden">
              <div
                class="h-full bg-gradient-to-r from-blue-500 to-purple-500 rounded-full group-hover:w-full transition-all duration-1000 w-2/3">
              </div>
            </div>
            <span class="text-xs text-slate-400 font-medium">Explore</span>
          </div>
        </div>

        <!-- Corner Decorations -->
        <div class="absolute top-4 right-4 w-6 h-6 border-t-2 border-r-2 border-white/20 rounded-tr-lg"></div>
        <div class="absolute bottom-4 left-4 w-6 h-6 border-b-2 border-l-2 border-white/20 rounded-bl-lg"></div>
      </article>

      <article
        class="animate-slide-up card-hover group relative bg-white/10 backdrop-blur-xl rounded-3xl p-8 border border-white/20 overflow-hidden shadow-lg hover:cursor-pointer transition-all duration-300">
        <!-- Background Pattern -->
        <div class="absolute inset-0 decorative-dots opacity-50"></div>

        <!-- Glowing Border Effect -->
        <div class="absolute inset-0 rounded-3xl bg-white transition-all duration-500">
        </div>

        <!-- Content Container -->
        <div class="relative z-10">
          <!-- Icon Section -->
          <div class="flex justify-between items-start mb-8">
            <div
              class="w-16 h-16 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-500 bg-gradient-to-br from-green-400 via-green-500 to-emerald-600 floating-icon">
              <i class="fas fa-cogs text-white text-2xl"></i>
            </div>
            <div class="flex space-x-1">
              <div class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></div>
              <div class="w-2 h-2 bg-blue-400 rounded-full animate-pulse" style="animation-delay: 0.5s;"></div>
              <div class="w-2 h-2 bg-purple-400 rounded-full animate-pulse" style="animation-delay: 1s;"></div>
            </div>
          </div>

          <!-- Title -->
          <h3 class="text-2xl font-bold gradient-text mb-4 group-hover:scale-105 transition-transform duration-300">
            Our Services
          </h3>

          <!-- Description -->
          <p
            class="text-black-300 mb-8 leading-relaxed text-lg opacity-90 group-hover:opacity-100 transition-opacity duration-300">
            Explore our comprehensive suite of professional services designed to accelerate growth.
          </p>

          <!-- Button -->
          <div class="flex items-center justify-between">
            <a href="/services"
              class="btn-glow inline-flex items-center space-x-3 bg-gradient-to-r from-green-500 via-green-600 to-emerald-500 text-white px-8 py-4 rounded-2xl font-semibold hover:shadow-2xl hover:shadow-green-500/30 transition-all duration-300 group/btn relative overflow-hidden">
              <!-- Button Shine Effect -->
              <div
                class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent -skew-x-12 -translate-x-full group-hover/btn:translate-x-full transition-transform duration-700">
              </div>

              <span class="relative z-10">View Services</span>
              <i
                class="fas fa-arrow-right text-sm group-hover/btn:translate-x-2 transition-transform duration-300 relative z-10"></i>
            </a>


            <!-- Social Icons -->
            <div class="flex space-x-3 opacity-60 group-hover:opacity-100 transition-opacity duration-300">
              <div
                class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center hover:bg-white/20 transition-colors cursor-pointer">
                <i class="fab fa-twitter text-white text-sm"></i>
              </div>
              <div
                class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center hover:bg-white/20 transition-colors cursor-pointer">
                <i class="fab fa-linkedin text-white text-sm"></i>
              </div>
            </div>
          </div>

          <!-- Progress Indicator -->
          <div class="mt-6 flex items-center space-x-2">
            <div class="flex-1 h-1 bg-white/10 rounded-full overflow-hidden">
              <div
                class="h-full bg-gradient-to-r from-blue-500 to-purple-500 rounded-full group-hover:w-full transition-all duration-1000 w-2/3">
              </div>
            </div>
            <span class="text-xs text-slate-400 font-medium">Explore</span>
          </div>
        </div>

        <!-- Corner Decorations -->
        <div class="absolute top-4 right-4 w-6 h-6 border-t-2 border-r-2 border-white/20 rounded-tr-lg"></div>
        <div class="absolute bottom-4 left-4 w-6 h-6 border-b-2 border-l-2 border-white/20 rounded-bl-lg"></div>
      </article>

      <article
        class="animate-slide-up card-hover group relative bg-white/10 backdrop-blur-xl rounded-3xl p-8 border border-white/20 overflow-hidden shadow-lg hover:cursor-pointer transition-all duration-300">
        <!-- Background Pattern -->
        <div class="absolute inset-0 decorative-dots opacity-50"></div>

        <!-- Glowing Border Effect -->
        <div class="absolute inset-0 rounded-3xl bg-white transition-all duration-500">
        </div>

        <!-- Content Container -->
        <div class="relative z-10">
          <!-- Icon Section -->
          <div class="flex justify-between items-start mb-8">
            <div
              class="w-16 h-16 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-500 bg-gradient-to-br from-pink-400 via-pink-500 to-rose-500 floating-icon">
              <i class="fas fa-headset text-white text-2xl"></i>
            </div>

            <div class="flex space-x-1">
              <div class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></div>
              <div class="w-2 h-2 bg-blue-400 rounded-full animate-pulse" style="animation-delay: 0.5s;"></div>
              <div class="w-2 h-2 bg-purple-400 rounded-full animate-pulse" style="animation-delay: 1s;"></div>
            </div>
          </div>

          <!-- Title -->
          <h3 class="text-2xl font-bold gradient-text mb-4 group-hover:scale-105 transition-transform duration-300">
            Get in Touch
          </h3>

          <!-- Description -->
          <p
            class="text-black-300 mb-8 leading-relaxed text-lg opacity-90 group-hover:opacity-100 transition-opacity duration-300">
            Ready to start your journey with us? Our team is here to support you and help you succeed.
          </p>

          <!-- Button -->
          <div class="flex items-center justify-between">
            <a href="#contact-form"
              class="btn-glow inline-flex items-center space-x-3 bg-gradient-to-r from-pink-500 via-rose-500 to-pink-600 text-white px-8 py-4 rounded-2xl font-semibold hover:shadow-2xl hover:shadow-pink-500/30 transition-all duration-300 group/btn relative overflow-hidden">

              <!-- Button Shine Effect -->
              <div
                class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent -skew-x-12 -translate-x-full group-hover/btn:translate-x-full transition-transform duration-700">
              </div>

              <span class="relative z-10">Contact Us</span>
              <i
                class="fas fa-arrow-right text-sm group-hover/btn:translate-x-2 transition-transform duration-300 relative z-10"></i>
            </a>
            <!-- Social Icons -->
            <div class="flex space-x-3 opacity-60 group-hover:opacity-100 transition-opacity duration-300">
              <div
                class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center hover:bg-white/20 transition-colors cursor-pointer">
                <i class="fab fa-twitter text-white text-sm"></i>
              </div>
              <div
                class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center hover:bg-white/20 transition-colors cursor-pointer">
                <i class="fab fa-linkedin text-white text-sm"></i>
              </div>
            </div>
          </div>

          <!-- Progress Indicator -->
          <div class="mt-6 flex items-center space-x-2">
            <div class="flex-1 h-1 bg-white/10 rounded-full overflow-hidden">
              <div
                class="h-full bg-gradient-to-r from-blue-500 to-purple-500 rounded-full group-hover:w-full transition-all duration-1000 w-2/3">
              </div>
            </div>
            <span class="text-xs text-slate-400 font-medium">Explore</span>
          </div>
        </div>

        <!-- Corner Decorations -->
        <div class="absolute top-4 right-4 w-6 h-6 border-t-2 border-r-2 border-white/20 rounded-tr-lg"></div>
        <div class="absolute bottom-4 left-4 w-6 h-6 border-b-2 border-l-2 border-white/20 rounded-bl-lg"></div>
      </article>
    </section>

    <!-- Contact Form Section -->
    <section id="contact-form" class="animate-slide-up" style="animation-delay: 0.4s">
      <div class="bg-white rounded-2xl shadow-sm border border-slate-200/60 p-8">
        <form class="space-y-6" method="POST" action="/contact">
          <!-- Name Field -->
          <div class="space-y-2">
            <label for="name" class="text-sm font-medium text-slate-800">
              Name
            </label>
            <input type="text" id="name" name="name" required
              class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-slate-900 placeholder-slate-500 focus:bg-white focus:border-primary-500 focus:ring-1 focus:ring-primary-500 focus:outline-none transition-all duration-200"
              placeholder="Your full name">
          </div>

          <!-- Email Field -->
          <div class="space-y-2">
            <label for="email" class="text-sm font-medium text-slate-800">
              Email
            </label>
            <input type="email" id="email" name="email" required
              class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-slate-900 placeholder-slate-500 focus:bg-white focus:border-primary-500 focus:ring-1 focus:ring-primary-500 focus:outline-none transition-all duration-200"
              placeholder="your.email@example.com">
          </div>

          <!-- Message Field -->
          <div class="space-y-2">
            <label for="message" class="text-sm font-medium text-slate-800">
              Message
            </label>
            <textarea id="message" name="message" rows="4" required
              class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-slate-900 placeholder-slate-500 focus:bg-white focus:border-primary-500 focus:ring-1 focus:ring-primary-500 focus:outline-none transition-all duration-200 resize-none"
              placeholder="Tell us about your project..."></textarea>
          </div>

          <!-- Submit Button -->
          <button type="submit"
            class="w-full bg-slate-900 hover:bg-slate-800 text-white font-medium py-3.5 px-6 rounded-xl transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-slate-900 focus:ring-offset-2">
            Send Message
          </button>
        </form>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="mt-24 bg-slate-800 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
      <div class="text-center">
        <div class="flex justify-center items-center space-x-3 mb-4">
          <div
            class="rounded-lg flex items-center justify-center">
            <img src="{{ asset('img/neorozaLogo.png') }}" alt="Neoroza Logo" class="h-12 w-auto animate-pulse"
              style="animation-delay: 0.5s" />
          </div>
        </div>
        <p class="text-slate-400 mb-6">
          Building the future, one solution at a time.
        </p>
        <div class="flex justify-center space-x-6">
          <a href="https://www.instagram.com/neorozatech" class="text-slate-400 hover:text-white transition-colors">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="mailto:neorozatech@gmail.com" class="text-slate-400 hover:text-white transition-colors">
            <i class="fa-solid fa-envelope"></i>
          </a>
          <a href="https://wa.me/628811998070" class="text-slate-400 hover:text-white transition-colors">
            <i class="fa-solid fa-phone"></i>
          </a>
        </div>
      </div>
    </div>
  </footer>

  <script>
    // Mobile menu toggle
    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    const mobileMenu = document.getElementById('mobileMenu');
    const menuIcon = mobileMenuToggle.querySelector('i');

    mobileMenuToggle.addEventListener('click', () => {
      const isOpen = mobileMenu.classList.contains('open');

      if (isOpen) {
        mobileMenu.classList.remove('open');
        menuIcon.className = 'fas fa-bars text-sm';
      } else {
        mobileMenu.classList.add('open');
        menuIcon.className = 'fas fa-times text-sm';
      }
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      });
    });

    // Form submission (placeholder)
    document.querySelector('form').addEventListener('submit', (e) => {
      e.preventDefault();
      alert('Thank you for your message! We\'ll get back to you soon.');
    });

    // Intersection Observer for animations
    const observerOptions = {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = '1';
          entry.target.style.transform = 'translateY(0)';
        }
      });
    }, observerOptions);

    // Observe animated elements
    document.querySelectorAll('.animate-slide-up').forEach(el => {
      el.style.opacity = '0';
      el.style.transform = 'translateY(30px)';
      el.style.transition = 'opacity 0.8s ease-out, transform 0.8s ease-out';
      observer.observe(el);
    });

    // Close mobile menu when clicking outside
    document.addEventListener('click', (e) => {
      if (!mobileMenuToggle.contains(e.target) && !mobileMenu.contains(e.target)) {
        mobileMenu.classList.remove('open');
        menuIcon.className = 'fas fa-bars text-sm';
      }
    });

    // Add keyboard navigation
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && mobileMenu.classList.contains('open')) {
        mobileMenu.classList.remove('open');
        menuIcon.className = 'fas fa-bars text-sm';
        mobileMenuToggle.focus();
      }
    });
  </script>
</body>

</html>