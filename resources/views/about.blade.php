<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us | Neoroza</title>
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
    
    .feature-card {
      transition: all 0.3s ease;
      border-left: 4px solid transparent;
    }
    
    .feature-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px -5px rgba(0,0,0,0.1);
      border-left: 4px solid var(--primary);
    }
    
    .team-card {
      transition: all 0.3s ease;
    }
    
    .team-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px -5px rgba(0,0,0,0.1);
    }
    
    .animate-fade-in {
      animation: fadeIn 1s ease-out forwards;
    }
    
    .animate-fade-in-up {
      animation: fadeInUp 0.8s cubic-bezier(0.22, 0.61, 0.36, 1) forwards;
    }
    
    /* Navbar styles */
    .navbar {
      background: var(--light);
      box-shadow: 0 1px 3px rgba(0,0,0,0.1);
      position: sticky;
      top: 0;
      z-index: 50;
    }
    
    .nav-link {
      color: var(--dark-gray);
      transition: all 0.3s ease;
    }
    
    .nav-link:hover, .nav-link.active {
      color: var(--primary);
    }
    
    .mobile-menu {
      transition: all 0.3s ease;
      max-height: 0;
      overflow: hidden;
    }
    
    .mobile-menu.open {
      max-height: 500px;
    }
    
    /* Scroll Animation Styles */
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
    
    .delay-400 {
      transition-delay: 400ms;
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
<body class="bg-gray-50 font-sans text-gray-800 animate-fade-in">
  <!-- Navbar -->
  <nav class="bg-white shadow-md sticky top-0 z-50 transition-slow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16 items-center">
        <!-- Left (Logo) -->
        <div class="flex items-center animate-slide-in-left" style="animation-delay: 0.1s">
          <button id="mobileMenuBtn" class="md:hidden text-white bg-indigo-600 p-2 rounded-md mr-2 transition-medium hover:bg-indigo-700 hover:shadow-lg">
            <i class="fas fa-bars"></i>
          </button>
          <a href="/dashboard" class="flex items-center space-x-2 hover-grow">
            <img src="{{ asset('img/neorozaLogo.png') }}" alt="Neoroza Logo" class="h-8 w-auto animate-pulse" style="animation-delay: 0.5s"/>
          </a>
        </div>

        <!-- Center Navigation -->
        <div id="navbarNav" class="hidden md:flex space-x-6 animate-fade-in-down" style="animation-delay: 0.2s">
          <a href="/" class="flex items-center hover:text-indigo-600 transition-medium">
            <i class="fas fa-home mr-1"></i> Home
          </a>
          <a href="/about" class="flex items-center text-indigo-600 font-semibold hover:underline transition-medium">
            <i class="fas fa-building mr-1"></i> About
          </a>
          <a href="/services" class="flex items-center hover:text-indigo-600 transition-medium">
            <i class="fas fa-cogs mr-1"></i> Services
          </a>
          <a href="/contact" class="flex items-center hover:text-indigo-600 transition-medium">
            <i class="fas fa-envelope mr-1"></i> Contact
          </a>
        </div>

        {{-- <!-- Right (User) -->
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

    <!-- Mobile menu -->
    <div id="mobileMenu" class="md:hidden hidden px-4 py-3 space-y-2 bg-white border-t animate-fade-in-down">
      <a href="/dashboard" class="block text-indigo-600 font-semibold transition-medium hover:pl-2">Home</a>
      <a href="/about" class="block text-gray-700 hover:text-indigo-600 transition-medium hover:pl-2">About</a>
      <a href="/services" class="block text-gray-700 hover:text-indigo-600 transition-medium hover:pl-2">Services</a>
      <a href="/contact" class="block text-gray-700 hover:text-indigo-600 transition-medium hover:pl-2">Contact</a>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero-gradient py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-6 animate-fade-in-up">
        Tentang <span class="text-indigo-600">Neoroza</span>
      </h1>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto animate-fade-in-up" style="animation-delay: 0.2s">
        Solusi teknologi kreatif untuk sekolah dan UMKM, dikembangkan oleh siswa SMKN 24 Jakarta
      </p>
    </div>
  </section>

  <!-- Main Content -->
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <!-- Vision & Mission -->
    <div class="grid md:grid-cols-2 gap-12 mb-16">
      <div class="bg-white p-8 rounded-xl shadow-md animate-on-scroll slide-up">
        <div class="flex items-center mb-6">
          <div class="bg-indigo-100 text-indigo-600 p-3 rounded-full mr-4">
            <i class="fas fa-eye text-xl"></i>
          </div>
          <h2 class="text-2xl font-bold text-gray-800">Visi Kami</h2>
        </div>
        <p class="text-gray-600">
          Menjadi mitra solusi teknologi kreatif yang mengubah tantangan sehari-hari menjadi kemudahan bagi sekolah dan UMKM di Jakarta.
        </p>
      </div>
      
      <div class="bg-white p-8 rounded-xl shadow-md animate-on-scroll slide-up delay-200">
        <div class="flex items-center mb-6">
          <div class="bg-indigo-100 text-indigo-600 p-3 rounded-full mr-4">
            <i class="fas fa-bullseye text-xl"></i>
          </div>
          <h2 class="text-2xl font-bold text-gray-800">Misi Kami</h2>
        </div>
        <ul class="space-y-3 text-gray-600">
          <li class="flex items-start">
            <i class="fas fa-check text-indigo-500 mt-1 mr-2"></i>
            <span>Mengembangkan perangkat lunak yang user-friendly dan solutif</span>
          </li>
          <li class="flex items-start">
            <i class="fas fa-check text-indigo-500 mt-1 mr-2"></i>
            <span>Memberikan layanan dengan harga kompetitif untuk pendidikan dan UMKM</span>
          </li>
          <li class="flex items-start">
            <i class="fas fa-check text-indigo-500 mt-1 mr-2"></i>
            <span>Wadah pengembangan skill nyata bagi siswa SMK di bidang IT</span>
          </li>
          <li class="flex items-start">
            <i class="fas fa-check text-indigo-500 mt-1 mr-2"></i>
            <span>Membangun kemandirian teknologi di tingkat sekolah dan komunitas usaha kecil</span>
          </li>
        </ul>
      </div>
    </div>

    <!-- Team Section -->
    <div class="mb-16 animate-on-scroll fade-in">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Tim Kami</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">
          Neoroza dioperasikan oleh 14 siswa SMKN 24 Jakarta yang bersemangat dan kompeten
        </p>
      </div>
      
      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Team Card 1 -->
        <div class="bg-white p-6 rounded-lg shadow-md team-card animate-on-scroll zoom-in">
          <h3 class="text-xl font-semibold text-indigo-600 mb-3">Project Manager</h3>
          <ul class="space-y-2 text-gray-600">
            <li class="flex items-center">
              <i class="fas fa-user-circle text-indigo-400 mr-2"></i>
              Raditya Dwi Pahlawadi
            </li>
            <li class="flex items-center">
              <i class="fas fa-user-circle text-indigo-400 mr-2"></i>
              Adelia Tri Ramadhan
            </li>
          </ul>
        </div>
        
        <!-- Team Card 2 -->
        <div class="bg-white p-6 rounded-lg shadow-md team-card animate-on-scroll zoom-in delay-100">
          <h3 class="text-xl font-semibold text-indigo-600 mb-3">Lead Developer</h3>
          <ul class="space-y-2 text-gray-600">
            <li class="flex items-center">
              <i class="fas fa-user-circle text-indigo-400 mr-2"></i>
              Muhammad Daffa Al-Ridzky
            </li>
            <li class="flex items-center">
              <i class="fas fa-user-circle text-indigo-400 mr-2"></i>
              Ari Reivansyah
            </li>
          </ul>
        </div>
        
        <!-- Team Card 3 -->
        <div class="bg-white p-6 rounded-lg shadow-md team-card animate-on-scroll zoom-in delay-200">
          <h3 class="text-xl font-semibold text-indigo-600 mb-3">Frontend Developer</h3>
          <ul class="space-y-2 text-gray-600">
            <li class="flex items-center">
              <i class="fas fa-user-circle text-indigo-400 mr-2"></i>
              Iftikhar Azhar
            </li>
            <li class="flex items-center">
              <i class="fas fa-user-circle text-indigo-400 mr-2"></i>
              Rizki Ramadan
            </li>
            <li class="flex items-center">
              <i class="fas fa-user-circle text-indigo-400 mr-2"></i>
              Andhika Dani
            </li>
          </ul>
        </div>
        
        <!-- Team Card 4 -->
        <div class="bg-white p-6 rounded-lg shadow-md team-card animate-on-scroll zoom-in delay-300">
          <h3 class="text-xl font-semibold text-indigo-600 mb-3">Backend Developer</h3>
          <ul class="space-y-2 text-gray-600">
            <li class="flex items-center">
              <i class="fas fa-user-circle text-indigo-400 mr-2"></i>
              Ari Reivansyah
            </li>
            <li class="flex items-center">
              <i class="fas fa-user-circle text-indigo-400 mr-2"></i>
              Daffa
            </li>
            <li class="flex items-center">
              <i class="fas fa-user-circle text-indigo-400 mr-2"></i>
              Rifqi
            </li>
            <li class="flex items-center">
              <i class="fas fa-user-circle text-indigo-400 mr-2"></i>
              Andhika
            </li>
          </ul>
        </div>
        
        <!-- Team Card 5 -->
        <div class="bg-white p-6 rounded-lg shadow-md team-card animate-on-scroll zoom-in">
          <h3 class="text-xl font-semibold text-indigo-600 mb-3">UI/UX Designer</h3>
          <ul class="space-y-2 text-gray-600">
            <li class="flex items-center">
              <i class="fas fa-user-circle text-indigo-400 mr-2"></i>
              Triandini
            </li>
            <li class="flex items-center">
              <i class="fas fa-user-circle text-indigo-400 mr-2"></i>
              Torda
            </li>
            <li class="flex items-center">
              <i class="fas fa-user-circle text-indigo-400 mr-2"></i>
              Keysha
            </li>
            <li class="flex items-center">
              <i class="fas fa-user-circle text-indigo-400 mr-2"></i>
              Alfina
            </li>
          </ul>
        </div>
        
        <!-- Team Card 6 -->
        <div class="bg-white p-6 rounded-lg shadow-md team-card animate-on-scroll zoom-in delay-100">
          <h3 class="text-xl font-semibold text-indigo-600 mb-3">Marketing</h3>
          <ul class="space-y-2 text-gray-600">
            <li class="flex items-center">
              <i class="fas fa-user-circle text-indigo-400 mr-2"></i>
              Alfina
            </li>
            <li class="flex items-center">
              <i class="fas fa-user-circle text-indigo-400 mr-2"></i>
              Triandini
            </li>
            <li class="flex items-center">
              <i class="fas fa-user-circle text-indigo-400 mr-2"></i>
              Restu
            </li>
            <li class="flex items-center">
              <i class="fas fa-user-circle text-indigo-400 mr-2"></i>
              Fajri Darmawan
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Services Section -->
    <div class="mb-16 animate-on-scroll fade-in">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Layanan Kami</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">
          Solusi teknologi yang kami tawarkan untuk membantu sekolah dan UMKM berkembang
        </p>
      </div>
      
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Service 1 -->
        <div class="bg-white p-6 rounded-lg shadow-md feature-card animate-on-scroll slide-up">
          <div class="bg-indigo-100 text-indigo-600 w-12 h-12 flex items-center justify-center rounded-lg mb-4">
            <i class="fas fa-cash-register text-xl"></i>
          </div>
          <h3 class="text-xl font-semibold text-gray-800 mb-2">Sistem POS & Inventaris</h3>
          <p class="text-gray-600">
            Solusi kasir dan manajemen stok untuk usaha kecil dan menengah
          </p>
        </div>
        
        <!-- Service 2 -->
        <div class="bg-white p-6 rounded-lg shadow-md feature-card animate-on-scroll slide-up delay-100">
          <div class="bg-indigo-100 text-indigo-600 w-12 h-12 flex items-center justify-center rounded-lg mb-4">
            <i class="fas fa-school text-xl"></i>
          </div>
          <h3 class="text-xl font-semibold text-gray-800 mb-2">Manajemen Sekolah Digital</h3>
          <p class="text-gray-600">
            Sistem terintegrasi untuk administrasi sekolah modern
          </p>
        </div>
        
        <!-- Service 3 -->
        <div class="bg-white p-6 rounded-lg shadow-md feature-card animate-on-scroll slide-up delay-200">
          <div class="bg-indigo-100 text-indigo-600 w-12 h-12 flex items-center justify-center rounded-lg mb-4">
            <i class="fas fa-qrcode text-xl"></i>
          </div>
          <h3 class="text-xl font-semibold text-gray-800 mb-2">Absensi Digital</h3>
          <p class="text-gray-600">
            Sistem absensi berbasis QR Code dengan validasi lokasi
          </p>
        </div>
        
        <!-- Service 4 -->
        <div class="bg-white p-6 rounded-lg shadow-md feature-card animate-on-scroll slide-up">
          <div class="bg-indigo-100 text-indigo-600 w-12 h-12 flex items-center justify-center rounded-lg mb-4">
            <i class="fas fa-laptop-code text-xl"></i>
          </div>
          <h3 class="text-xl font-semibold text-gray-800 mb-2">Aplikasi Custom</h3>
          <p class="text-gray-600">
            Pengembangan aplikasi berbasis web sesuai kebutuhan Anda
          </p>
        </div>
        
        <!-- Service 5 -->
        <div class="bg-white p-6 rounded-lg shadow-md feature-card animate-on-scroll slide-up delay-100">
          <div class="bg-indigo-100 text-indigo-600 w-12 h-12 flex items-center justify-center rounded-lg mb-4">
            <i class="fas fa-globe text-xl"></i>
          </div>
          <h3 class="text-xl font-semibold text-gray-800 mb-2">Website Profil</h3>
          <p class="text-gray-600">
            Website profesional untuk memperkenalkan bisnis atau institusi Anda
          </p>
        </div>
      </div>
    </div>

    <!-- Projects Section -->
    <div class="mb-16 animate-on-scroll fade-in">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Proyek Unggulan</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">
          Beberapa solusi yang telah kami kembangkan untuk klien
        </p>
      </div>
      
      <div class="grid md:grid-cols-2 gap-8">
        <!-- Project 1 -->
        <div class="bg-white p-8 rounded-xl shadow-md animate-on-scroll slide-left">
          <div class="flex items-center mb-4">
            <div class="bg-indigo-100 text-indigo-600 p-3 rounded-full mr-4">
              <i class="fas fa-shopping-bag text-xl"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-800">Ventra POS</h3>
          </div>
          <p class="text-gray-600 mb-4">
            Aplikasi kasir untuk usaha fashion "Fashion24" dengan fitur lengkap dan mudah digunakan
          </p>
          <ul class="space-y-2 text-gray-600">
            <li class="flex items-start">
              <i class="fas fa-check-circle text-indigo-500 mt-1 mr-2"></i>
              <span>Scan barcode produk</span>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check-circle text-indigo-500 mt-1 mr-2"></i>
              <span>Laporan penjualan real-time</span>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check-circle text-indigo-500 mt-1 mr-2"></i>
              <span>Manajemen produk lengkap</span>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check-circle text-indigo-500 mt-1 mr-2"></i>
              <span>Multi-platform: smartphone & tablet</span>
            </li>
          </ul>
        </div>
        
        <!-- Project 2 -->
        <div class="bg-white p-8 rounded-xl shadow-md animate-on-scroll slide-right">
          <div class="flex items-center mb-4">
            <div class="bg-indigo-100 text-indigo-600 p-3 rounded-full mr-4">
              <i class="fas fa-user-clock text-xl"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-800">Re-Code</h3>
          </div>
          <p class="text-gray-600 mb-4">
            Sistem Absensi QR Code berbasis lokasi dengan teknologi geofencing
          </p>
          <ul class="space-y-2 text-gray-600">
            <li class="flex items-start">
              <i class="fas fa-check-circle text-indigo-500 mt-1 mr-2"></i>
              <span>Teknologi geofencing untuk validasi lokasi</span>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check-circle text-indigo-500 mt-1 mr-2"></i>
              <span>Scan barcode unik per sesi</span>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check-circle text-indigo-500 mt-1 mr-2"></i>
              <span>Real-time reporting</span>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Why Choose Us -->
    <div class="bg-indigo-50 rounded-xl p-8 mb-16 animate-on-scroll fade-in">
      <div class="text-center mb-8">
        <h2 class="text-3xl font-bold text-gray-800 mb-2">Kenapa Memilih Neoroza?</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">
          Keunggulan yang membuat kami berbeda
        </p>
      </div>
      
      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Feature 1 -->
        <div class="bg-white p-6 rounded-lg shadow-sm text-center animate-on-scroll slide-left">
          <div class="bg-indigo-100 text-indigo-600 w-16 h-16 flex items-center justify-center rounded-full mx-auto mb-4">
            <i class="fas fa-lightbulb text-2xl"></i>
          </div>
          <h3 class="text-lg font-semibold text-gray-800 mb-2">Relevan & Solutif</h3>
          <p class="text-gray-600 text-sm">
            Solusi yang kami kembangkan berdasarkan kebutuhan nyata
          </p>
        </div>
        
        <!-- Feature 2 -->
        <div class="bg-white p-6 rounded-lg shadow-sm text-center animate-on-scroll slide-up delay-100">
          <div class="bg-indigo-100 text-indigo-600 w-16 h-16 flex items-center justify-center rounded-full mx-auto mb-4">
            <i class="fas fa-tags text-2xl"></i>
          </div>
          <h3 class="text-lg font-semibold text-gray-800 mb-2">Harga Terjangkau</h3>
          <p class="text-gray-600 text-sm">
            Biaya yang kompetitif khusus untuk sekolah dan UMKM
          </p>
        </div>
        
        <!-- Feature 3 -->
        <div class="bg-white p-6 rounded-lg shadow-sm text-center animate-on-scroll slide-up delay-200">
          <div class="bg-indigo-100 text-indigo-600 w-16 h-16 flex items-center justify-center rounded-full mx-auto mb-4">
            <i class="fas fa-users text-2xl"></i>
          </div>
          <h3 class="text-lg font-semibold text-gray-800 mb-2">Tim Berkompeten</h3>
          <p class="text-gray-600 text-sm">
            Dikembangkan oleh siswa SMK berbakat di bidang IT
          </p>
        </div>
        
        <!-- Feature 4 -->
        <div class="bg-white p-6 rounded-lg shadow-sm text-center animate-on-scroll slide-right">
          <div class="bg-indigo-100 text-indigo-600 w-16 h-16 flex items-center justify-center rounded-full mx-auto mb-4">
            <i class="fas fa-rocket text-2xl"></i>
          </div>
          <h3 class="text-lg font-semibold text-gray-800 mb-2">Teknologi Modern</h3>
          <p class="text-gray-600 text-sm">
            User-friendly dan siap untuk dikembangkan lebih lanjut
          </p>
        </div>
      </div>
    </div>

    <!-- Contact Section -->
    <div class="text-center animate-on-scroll fade-in">
      <h2 class="text-3xl font-bold text-gray-800 mb-6">Hubungi Kami</h2>
      <p class="text-gray-600 max-w-2xl mx-auto mb-8">
        Tertarik dengan layanan kami? Silakan hubungi tim Neoroza melalui salah satu saluran berikut:
      </p>
      
      <div class="grid sm:grid-cols-3 gap-6 max-w-4xl mx-auto">
        <!-- Email -->
        <div class="bg-white p-6 rounded-lg shadow-sm animate-on-scroll zoom-in">
          <div class="bg-indigo-100 text-indigo-600 w-12 h-12 flex items-center justify-center rounded-full mx-auto mb-4">
            <i class="fas fa-envelope text-xl"></i>
          </div>
          <h3 class="text-lg font-semibold text-gray-800 mb-2">Email</h3>
          <a href="mailto:neorozatech@gmail.com" class="text-indigo-600 hover:underline">neorozatech@gmail.com</a>
        </div>
        
        <!-- WhatsApp -->
        <div class="bg-white p-6 rounded-lg shadow-sm animate-on-scroll zoom-in delay-100">
          <div class="bg-indigo-100 text-indigo-600 w-12 h-12 flex items-center justify-center rounded-full mx-auto mb-4">
            <i class="fab fa-whatsapp text-xl"></i>
          </div>
          <h3 class="text-lg font-semibold text-gray-800 mb-2">WhatsApp</h3>
          <a href="https://wa.me/6281383734851" class="text-indigo-600 hover:underline">+62 813-8373-4851</a>
        </div>
        
        <!-- Instagram -->
        <div class="bg-white p-6 rounded-lg shadow-sm animate-on-scroll zoom-in delay-200">
          <div class="bg-indigo-100 text-indigo-600 w-12 h-12 flex items-center justify-center rounded-full mx-auto mb-4">
            <i class="fab fa-instagram text-xl"></i>
          </div>
          <h3 class="text-lg font-semibold text-gray-800 mb-2">Instagram</h3>
          <a href="https://instagram.com/neoroza.tech" class="text-indigo-600 hover:underline">@neoroza.tech</a>
        </div>
      </div>
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
            // Optional: Unobserve after animation
            // observer.unobserve(entry.target);
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

    // Panggil fungsi saat halaman dimuat
    document.addEventListener('DOMContentLoaded', () => {
      animateOnScroll();
      
      // Mobile menu toggle
      const mobileMenuBtn = document.getElementById('mobileMenuBtn');
      const mobileMenu = document.getElementById('mobileMenu');
      
      mobileMenuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('open');
        const icon = mobileMenuBtn.querySelector('i');
        if (mobileMenu.classList.contains('open')) {
          icon.classList.remove('fa-bars');
          icon.classList.add('fa-times');
        } else {
          icon.classList.remove('fa-times');
          icon.classList.add('fa-bars');
        }
      });

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

    // Jalankan lagi saat ada dynamic content
    window.addEventListener('load', animateOnScroll);
  </script>
</body>
</html>