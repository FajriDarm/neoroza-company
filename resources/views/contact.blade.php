<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us | Neoroza</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    :root {
      --primary: #4f46e5;
      --primary-light: #6366f1;
      --primary-dark: #4338ca;
    }
    
    .hero-gradient {
      background: linear-gradient(135deg, rgba(79,70,229,0.1) 0%, rgba(124,58,237,0.05) 100%);
    }
    
    .animate-on-scroll {
      opacity: 0;
      transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }
    
    .animate-on-scroll.animated {
      opacity: 1;
    }
    
    .slide-up {
      transform: translateY(30px);
    }
    
    .slide-up.animated {
      transform: translateY(0);
    }
  </style>
</head>
<body class="bg-gray-50 font-sans text-gray-800">
  <!-- Navbar -->
  <nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16 items-center">
        <div class="flex items-center">
          <button id="mobileMenuBtn" class="md:hidden text-white bg-indigo-600 p-2 rounded-md mr-2">
            <i class="fas fa-bars"></i>
          </button>
          <a href="/" class="flex items-center space-x-2">
            <img src="{{ asset('img/neorozaLogo.png') }}" alt="Neoroza Logo" class="h-8 w-auto"/>
          </a>
        </div>

        <div id="navbarNav" class="hidden md:flex space-x-6">
          <a href="/" class="flex items-center hover:text-indigo-600">
            <i class="fas fa-home mr-1"></i> Home
          </a>
          <a href="/about" class="flex items-center hover:text-indigo-600">
            <i class="fas fa-building mr-1"></i> About
          </a>
          <a href="/services" class="flex items-center hover:text-indigo-600">
            <i class="fas fa-cogs mr-1"></i> Services
          </a>
          <a href="/contact" class="flex items-center text-indigo-600 font-semibold hover:underline">
            <i class="fas fa-envelope mr-1"></i> Contact
          </a>
        </div>

        {{-- <div class="flex items-center space-x-3">
          <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name ?? 'User') }}&background=6366f1&color=fff"
            alt="User Avatar" class="w-8 h-8 rounded-full border-2 border-indigo-400"/>
          <span class="text-sm font-medium">{{ Auth::user()->name ?? 'User' }}</span>
          <a href="/logout" class="text-gray-500 hover:text-red-500">
            <i class="fas fa-sign-out-alt"></i>
          </a>
        </div>
      </div>
    </div> --}}

    <!-- Mobile menu -->
    <div id="mobileMenu" class="md:hidden hidden px-4 py-3 space-y-2 bg-white border-t">
      <a href="/" class="block text-gray-700 hover:text-indigo-600 hover:pl-2">Home</a>
      <a href="/about" class="block text-gray-700 hover:text-indigo-600 hover:pl-2">About</a>
      <a href="/services" class="block text-gray-700 hover:text-indigo-600 hover:pl-2">Services</a>
      <a href="/contact" class="block text-indigo-600 font-semibold hover:pl-2">Contact</a>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero-gradient py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-6 animate-on-scroll slide-up">
        Hubungi <span class="text-indigo-600">Neoroza</span>
      </h1>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto animate-on-scroll slide-up" style="animation-delay: 0.2s">
        Kami siap membantu Anda dengan solusi teknologi terbaik
      </p>
    </div>
  </section>

  <!-- Main Content -->
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="grid md:grid-cols-2 gap-12">
      <!-- Contact Form -->
      <div class="bg-white p-8 rounded-xl shadow-md animate-on-scroll slide-up">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Kirim Pesan</h2>
        
        @if(session('success'))
        <div class="mb-6 p-4 bg-green-100 text-green-700 rounded-lg">
          {{ session('success') }}
        </div>
        @endif

        <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
          @csrf
          
          <div>
            <label for="name" class="block text-gray-700 mb-2">Nama Lengkap</label>
            <input type="text" id="name" name="name" required 
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
          </div>
          
          <div>
            <label for="email" class="block text-gray-700 mb-2">Email</label>
            <input type="email" id="email" name="email" required
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
          </div>
          
          <div>
            <label for="phone" class="block text-gray-700 mb-2">Nomor HP (Opsional)</label>
            <input type="tel" id="phone" name="phone"
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
          </div>
          
          <div>
            <label for="subject" class="block text-gray-700 mb-2">Subjek</label>
            <select id="subject" name="subject" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
              <option value="">Pilih Subjek...</option>
              <option value="Pertanyaan Umum">Pertanyaan Umum</option>
              <option value="Kerjasama">Penawaran Kerjasama</option>
              <option value="Support">Technical Support</option>
            </select>
          </div>
          
          <div>
            <label for="message" class="block text-gray-700 mb-2">Pesan</label>
            <textarea id="message" name="message" rows="5" required
                      class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"></textarea>
          </div>
          
          <button type="submit" 
                  class="bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700 transition duration-300 w-full md:w-auto">
            <i class="fas fa-paper-plane mr-2"></i> Kirim Pesan
          </button>
        </form>
      </div>

      <!-- Contact Info -->
      <div class="bg-indigo-50 p-8 rounded-xl animate-on-scroll slide-up delay-100">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Informasi Kontak</h2>
        
        <div class="space-y-6">
          <div class="flex items-start">
            <div class="bg-indigo-100 text-indigo-600 p-3 rounded-full mr-4">
              <i class="fas fa-map-marker-alt"></i>
            </div>
            <div>
              <h3 class="font-semibold text-gray-800">Alamat</h3>
              <p class="text-gray-600">
                SMKN 24 Jakarta<br>
                Jl. Bambu Hitam No.3, RT.3/RW.1<br>
                Bambu Apus, Cipayung<br>
                Jakarta Timur 13890
              </p>
            </div>
          </div>
          
          <div class="flex items-start">
            <div class="bg-indigo-100 text-indigo-600 p-3 rounded-full mr-4">
              <i class="fas fa-envelope"></i>
            </div>
            <div>
              <h3 class="font-semibold text-gray-800">Email</h3>
              <a href="mailto:neorozatech@gmail.com" class="text-indigo-600 hover:underline">neorozatech@gmail.com</a>
            </div>
          </div>
          
          <div class="flex items-start">
            <div class="bg-indigo-100 text-indigo-600 p-3 rounded-full mr-4">
              <i class="fab fa-whatsapp"></i>
            </div>
            <div>
              <h3 class="font-semibold text-gray-800">WhatsApp</h3>
              <a href="https://wa.me/6281383734851" class="text-indigo-600 hover:underline">+62 813-8373-4851</a>
            </div>
          </div>
          
          <div class="flex items-start">
            <div class="bg-indigo-100 text-indigo-600 p-3 rounded-full mr-4">
              <i class="fab fa-instagram"></i>
            </div>
            <div>
              <h3 class="font-semibold text-gray-800">Instagram</h3>
              <a href="https://instagram.com/neoroza.tech" target="_blank" class="text-indigo-600 hover:underline">@neoroza.tech</a>
            </div>
          </div>
          
          <div class="pt-4">
            <h3 class="font-semibold text-gray-800 mb-2">Jam Operasional</h3>
            <p class="text-gray-600">
              Senin-Jumat: 08.00 - 16.00 WIB<br>
              Sabtu: 09.00 - 14.00 WIB
            </p>
          </div>
        </div>
      </div>
    </div>

    {{-- <!-- Map Embed -->
    <div class="mt-16 bg-white p-6 rounded-xl shadow-md animate-on-scroll slide-up">
      <h2 class="text-xl font-bold text-gray-800 mb-4">Lokasi Kami</h2>
      <div class="aspect-w-16 aspect-h-9">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d106.85412541529419!3d-6.194962662247247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f4256b5b8a9f%3A0x1a7b1b1b1b1b1b1b!2sSMKN%2024%20Jakarta!5e0!3m2!1sen!2sid!4v1620000000000!5m2!1sen!2sid" 
          width="100%" 
          height="450" 
          style="border:0;" 
          allowfullscreen="" 
          loading="lazy"
          class="rounded-lg">
        </iframe>
      </div>
    </div>
  </div> --}}

  <script>
    // Mobile menu toggle
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    
    mobileMenuBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
      const icon = mobileMenuBtn.querySelector('i');
      if (mobileMenu.classList.contains('hidden')) {
        icon.classList.remove('fa-times');
        icon.classList.add('fa-bars');
      } else {
        icon.classList.remove('fa-bars');
        icon.classList.add('fa-times');
      }
    });

    // Animasi scroll
    const animateOnScroll = () => {
      const elements = document.querySelectorAll('.animate-on-scroll');
      
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('animated');
          }
        });
      }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
      });

      elements.forEach(element => {
        observer.observe(element);
      });
    };

    document.addEventListener('DOMContentLoaded', () => {
      animateOnScroll();
    });

    window.addEventListener('load', animateOnScroll);
  </script>
</body>
</html>