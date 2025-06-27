<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Services | Neoroza</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    :root {
      --primary: #4f46e5;
      --primary-light: #6366f1;
      --primary-dark: #4338ca;
      --secondary: #7c3aed;
      --light: #ffffff;
      --light-gray: #f9fafb;
      --medium-gray: #e5e7eb;
      --dark-gray: #6b7280;
      --dark: #111827;
    }
    
    body {
      font-family: 'Inter', Arial, sans-serif;
      background-color: var(--light-gray);
      color: var(--dark);
      line-height: 1.6;
    }
    
    .hero-gradient {
      background: linear-gradient(135deg, rgba(79,70,229,0.1) 0%, rgba(124,58,237,0.05) 100%);
    }
    
    .service-card {
      transition: all 0.3s ease;
      border-left: 4px solid transparent;
    }
    
    .service-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px -5px rgba(0,0,0,0.1);
      border-left: 4px solid var(--primary);
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
    
    .slide-left {
      transform: translateX(-30px);
    }
    
    .slide-left.animated {
      transform: translateX(0);
    }
    
    .slide-right {
      transform: translateX(30px);
    }
    
    .slide-right.animated {
      transform: translateX(0);
    }
    
    .zoom-in {
      transform: scale(0.95);
    }
    
    .zoom-in.animated {
      transform: scale(1);
    }
    
    .delay-100 {
      transition-delay: 100ms;
    }
    
    .delay-200 {
      transition-delay: 200ms;
    }
    
    .delay-300 {
      transition-delay: 300ms;
    }
    
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
          <a href="/services" class="flex items-center text-indigo-600 font-semibold hover:underline">
            <i class="fas fa-cogs mr-1"></i> Services
          </a>
          <a href="/contact" class="flex items-center hover:text-indigo-600">
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
      <a href="/services" class="block text-indigo-600 font-semibold hover:pl-2">Services</a>
      <a href="/contact" class="block text-gray-700 hover:text-indigo-600 hover:pl-2">Contact</a>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero-gradient py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-6 animate-fade-in-up">
        Layanan <span class="text-indigo-600">Neoroza</span>
      </h1>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto animate-fade-in-up" style="animation-delay: 0.2s">
        Solusi teknologi kreatif untuk transformasi digital sekolah dan UMKM
      </p>
    </div>
  </section>

  <!-- Main Content -->
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <!-- Services Grid -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
      <!-- POS System -->
      <div class="bg-white p-6 rounded-xl shadow-md service-card animate-on-scroll slide-up">
        <div class="bg-indigo-100 text-indigo-600 w-14 h-14 flex items-center justify-center rounded-xl mb-4">
          <i class="fas fa-cash-register text-2xl"></i>
        </div>
        <h3 class="text-xl font-bold text-gray-800 mb-3">Aplikasi POS & Inventaris</h3>
        <p class="text-gray-600 mb-4">
          Solusi kasir digital lengkap untuk UMKM dengan manajemen stok terintegrasi.
        </p>
        <ul class="space-y-2 text-gray-600 text-sm">
          <li class="flex items-start">
            <i class="fas fa-check-circle text-indigo-500 mt-1 mr-2"></i>
            <span>Barcode scanner dan pencatatan transaksi</span>
          </li>
          <li class="flex items-start">
            <i class="fas fa-check-circle text-indigo-500 mt-1 mr-2"></i>
            <span>Laporan penjualan harian/mingguan</span>
          </li>
          <li class="flex items-start">
            <i class="fas fa-check-circle text-indigo-500 mt-1 mr-2"></i>
            <span>Notifikasi stok hampir habis</span>
          </li>
          <li class="flex items-start">
            <i class="fas fa-check-circle text-indigo-500 mt-1 mr-2"></i>
            <span>Cocok untuk toko fashion, kuliner, dan retail</span>
          </li>
        </ul>
      </div>

      <!-- School Management -->
      <div class="bg-white p-6 rounded-xl shadow-md service-card animate-on-scroll slide-up delay-100">
        <div class="bg-indigo-100 text-indigo-600 w-14 h-14 flex items-center justify-center rounded-xl mb-4">
          <i class="fas fa-school text-2xl"></i>
        </div>
        <h3 class="text-xl font-bold text-gray-800 mb-3">Manajemen Sekolah Digital</h3>
        <p class="text-gray-600 mb-4">
          Sistem terintegrasi untuk administrasi sekolah modern dan efisien.
        </p>
        <ul class="space-y-2 text-gray-600 text-sm">
          <li class="flex items-start">
            <i class="fas fa-check-circle text-indigo-500 mt-1 mr-2"></i>
            <span>Dashboard untuk admin, guru, dan siswa</span>
          </li>
          <li class="flex items-start">
            <i class="fas fa-check-circle text-indigo-500 mt-1 mr-2"></i>
            <span>Pengelolaan nilai dan kehadiran digital</span>
          </li>
          <li class="flex items-start">
            <i class="fas fa-check-circle text-indigo-500 mt-1 mr-2"></i>
            <span>Jadwal pelajaran interaktif</span>
          </li>
          <li class="flex items-start">
            <i class="fas fa-check-circle text-indigo-500 mt-1 mr-2"></i>
            <span>Portal pengumuman dan materi pembelajaran</span>
          </li>
        </ul>
      </div>

      <!-- Attendance System -->
      <div class="bg-white p-6 rounded-xl shadow-md service-card animate-on-scroll slide-up delay-200">
        <div class="bg-indigo-100 text-indigo-600 w-14 h-14 flex items-center justify-center rounded-xl mb-4">
          <i class="fas fa-user-check text-2xl"></i>
        </div>
        <h3 class="text-xl font-bold text-gray-800 mb-3">Absensi Digital (QR + Geofencing)</h3>
        <p class="text-gray-600 mb-4">
          Sistem presensi berbasis lokasi dengan validasi GPS untuk mencegah manipulasi.
        </p>
        <ul class="space-y-2 text-gray-600 text-sm">
          <li class="flex items-start">
            <i class="fas fa-check-circle text-indigo-500 mt-1 mr-2"></i>
            <span>Scan QR Code unik per sesi</span>
          </li>
          <li class="flex items-start">
            <i class="fas fa-check-circle text-indigo-500 mt-1 mr-2"></i>
            <span>Validasi lokasi dengan teknologi geofencing</span>
          </li>
          <li class="flex items-start">
            <i class="fas fa-check-circle text-indigo-500 mt-1 mr-2"></i>
            <span>Cocok untuk sekolah dan tempat kursus</span>
          </li>
          <li class="flex items-start">
            <i class="fas fa-check-circle text-indigo-500 mt-1 mr-2"></i>
            <span>Ekspor data ke Excel/PDF</span>
          </li>
        </ul>
      </div>

      <!-- Custom Apps -->
      <div class="bg-white p-6 rounded-xl shadow-md service-card animate-on-scroll slide-up">
        <div class="bg-indigo-100 text-indigo-600 w-14 h-14 flex items-center justify-center rounded-xl mb-4">
          <i class="fas fa-laptop-code text-2xl"></i>
        </div>
        <h3 class="text-xl font-bold text-gray-800 mb-3">Aplikasi Web & Mobile Custom</h3>
        <p class="text-gray-600 mb-4">
          Pengembangan aplikasi khusus sesuai kebutuhan bisnis atau organisasi Anda.
        </p>
        <ul class="space-y-2 text-gray-600 text-sm">
          <li class="flex items-start">
            <i class="fas fa-check-circle text-indigo-500 mt-1 mr-2"></i>
            <span>Pembuatan aplikasi dari nol</span>
          </li>
          <li class="flex items-start">
            <i class="fas fa-check-circle text-indigo-500 mt-1 mr-2"></i>
            <span>Solusi untuk kebutuhan internal perusahaan</span>
          </li>
          <li class="flex items-start">
            <i class="fas fa-check-circle text-indigo-500 mt-1 mr-2"></i>
            <span>Aplikasi event atau kegiatan khusus</span>
          </li>
          <li class="flex items-start">
            <i class="fas fa-check-circle text-indigo-500 mt-1 mr-2"></i>
            <span>Integrasi dengan sistem existing</span>
          </li>
        </ul>
      </div>

      <!-- Professional Website -->
      <div class="bg-white p-6 rounded-xl shadow-md service-card animate-on-scroll slide-up delay-100">
        <div class="bg-indigo-100 text-indigo-600 w-14 h-14 flex items-center justify-center rounded-xl mb-4">
          <i class="fas fa-globe text-2xl"></i>
        </div>
        <h3 class="text-xl font-bold text-gray-800 mb-3">Website Profil Profesional</h3>
        <p class="text-gray-600 mb-4">
          Website modern dan responsif untuk meningkatkan kehadiran digital Anda.
        </p>
        <ul class="space-y-2 text-gray-600 text-sm">
          <li class="flex items-start">
            <i class="fas fa-check-circle text-indigo-500 mt-1 mr-2"></i>
            <span>Desain elegan dan mobile-friendly</span>
          </li>
          <li class="flex items-start">
            <i class="fas fa-check-circle text-indigo-500 mt-1 mr-2"></i>
            <span>Optimasi SEO dasar</span>
          </li>
          <li class="flex items-start">
            <i class="fas fa-check-circle text-indigo-500 mt-1 mr-2"></i>
            <span>Formulir kontak dan integrasi media sosial</span>
          </li>
          <li class="flex items-start">
            <i class="fas fa-check-circle text-indigo-500 mt-1 mr-2"></i>
            <span>Cocok untuk UMKM, sekolah, atau portofolio</span>
          </li>
        </ul>
      </div>

      <!-- UI/UX Design -->
      <div class="bg-white p-6 rounded-xl shadow-md service-card animate-on-scroll slide-up delay-200">
        <div class="bg-indigo-100 text-indigo-600 w-14 h-14 flex items-center justify-center rounded-xl mb-4">
          <i class="fas fa-paint-brush text-2xl"></i>
        </div>
        <h3 class="text-xl font-bold text-gray-800 mb-3">UI/UX Design & Prototype</h3>
        <p class="text-gray-600 mb-4">
          Desain antarmuka pengguna yang menarik dan mudah digunakan.
        </p>
        <ul class="space-y-2 text-gray-600 text-sm">
          <li class="flex items-start">
            <i class="fas fa-check-circle text-indigo-500 mt-1 mr-2"></i>
            <span>Pembuatan wireframe dan mockup</span>
          </li>
          <li class="flex items-start">
            <i class="fas fa-check-circle text-indigo-500 mt-1 mr-2"></i>
            <span>Prototipe interaktif dengan Figma</span>
          </li>
          <li class="flex items-start">
            <i class="fas fa-check-circle text-indigo-500 mt-1 mr-2"></i>
            <span>Desain yang fokus pada pengalaman pengguna</span>
          </li>
          <li class="flex items-start">
            <i class="fas fa-check-circle text-indigo-500 mt-1 mr-2"></i>
            <span>Konversi ke HTML/CSS siap develop</span>
          </li>
        </ul>
      </div>
    </div>

    <!-- Maintenance Section -->
    <div class="bg-indigo-50 rounded-xl p-8 mb-16 animate-on-scroll fade-in">
      <div class="flex flex-col md:flex-row items-center">
        <div class="md:w-1/2 mb-6 md:mb-0 md:pr-8">
          <h2 class="text-2xl font-bold text-gray-800 mb-4">Layanan Pemeliharaan & Perbaikan</h2>
          <p class="text-gray-600 mb-4">
            Dukungan pasca-implementasi untuk memastikan sistem Anda selalu berjalan optimal.
          </p>
          <ul class="space-y-3 text-gray-600">
            <li class="flex items-start">
              <i class="fas fa-check text-indigo-500 mt-1 mr-2"></i>
              <span>Perbaikan bug dan error sistem</span>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check text-indigo-500 mt-1 mr-2"></i>
              <span>Update konten dan fitur minor</span>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check text-indigo-500 mt-1 mr-2"></i>
              <span>Backup data berkala</span>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check text-indigo-500 mt-1 mr-2"></i>
              <span>Optimalisasi performa sistem</span>
            </li>
          </ul>
        </div>
        <div class="md:w-1/2">
          <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" 
               alt="Maintenance Service" 
               class="rounded-lg shadow-md w-full h-auto">
        </div>
      </div>
    </div>

    <!-- CTA Section -->
    <div class="text-center bg-white rounded-xl shadow-md p-8 animate-on-scroll zoom-in">
      <h2 class="text-2xl font-bold text-gray-800 mb-4">Tertarik dengan Layanan Kami?</h2>
      <p class="text-gray-600 max-w-2xl mx-auto mb-6">
        Diskusikan kebutuhan digital Anda dengan tim Neoroza dan dapatkan solusi terbaik untuk bisnis atau institusi Anda.
      </p>
      <a href="#contact" class="inline-block bg-indigo-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-indigo-700 transition duration-300">
        Hubungi Kami Sekarang
      </a>
    </div>
  </div>

  <script>
    // Intersection Observer untuk animasi scroll
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

    // Initialize animations
    document.addEventListener('DOMContentLoaded', () => {
      animateOnScroll();
      
      // Smooth scroll for anchor links
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
          e.preventDefault();
          
          document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
          });
        });
      });
    });

    // Re-run on load for dynamic content
    window.addEventListener('load', animateOnScroll);
  </script>
</body>
</html>