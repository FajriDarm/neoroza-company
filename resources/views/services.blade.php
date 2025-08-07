<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Services | Neoroza</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    :root {
      --primary: #6366f1;
      --primary-dark: #4f46e5;
      --secondary: #8b5cf6;
      --accent: #f59e0b;
      --gradient-1: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      --gradient-2: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
      --gradient-3: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
      --gradient-4: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%);
      --gradient-5: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);
      --gradient-6: linear-gradient(135deg, #ff9a9e 0%, #fecfef 100%);
    }
    
    body {
      font-family: 'Inter', sans-serif;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      background-attachment: fixed;
      color: #1f2937;
    }
    
    /* Glassmorphism effects */
    .glass {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(20px);
      border: 1px solid rgba(255, 255, 255, 0.2);
    }
    
    .glass-dark {
      background: rgba(0, 0, 0, 0.1);
      backdrop-filter: blur(20px);
      border: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    /* Floating animations */
    @keyframes float {
      0%, 100% { transform: translateY(0px) rotate(0deg); }
      50% { transform: translateY(-20px) rotate(5deg); }
    }
    
    @keyframes float-reverse {
      0%, 100% { transform: translateY(0px) rotate(0deg); }
      50% { transform: translateY(20px) rotate(-5deg); }
    }
    
    @keyframes pulse-glow {
      0%, 100% { box-shadow: 0 0 20px rgba(99, 102, 241, 0.3); }
      50% { box-shadow: 0 0 40px rgba(99, 102, 241, 0.6); }
    }
    
    @keyframes gradient-shift {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }
    
    .floating { animation: float 6s ease-in-out infinite; }
    .floating-reverse { animation: float-reverse 8s ease-in-out infinite; }
    .pulse-glow { animation: pulse-glow 3s ease-in-out infinite; }
    
    .gradient-animated {
      background: var(--gradient-1);
      background-size: 300% 300%;
      animation: gradient-shift 4s ease infinite;
    }
    
    /* Service card hover effects */
    .service-card {
      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      position: relative;
      overflow: hidden;
    }
    
    .service-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
      transition: all 0.5s;
    }
    
    .service-card:hover::before {
      left: 100%;
    }
    
    .service-card:hover {
      transform: translateY(-15px) scale(1.02);
      box-shadow: 0 30px 60px rgba(0,0,0,0.15);
    }
    
    /* Icon animations */
    .icon-container {
      position: relative;
      overflow: hidden;
    }
    
    .icon-container::after {
      content: '';
      position: absolute;
      top: 50%;
      left: 50%;
      width: 0;
      height: 0;
      background: rgba(255,255,255,0.3);
      border-radius: 50%;
      transform: translate(-50%, -50%);
      transition: all 0.3s ease;
    }
    
    .service-card:hover .icon-container::after {
      width: 120%;
      height: 120%;
    }
    
    /* Scroll animations */
    .animate-on-scroll {
      opacity: 0;
      transition: all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }
    
    .animate-on-scroll.animated {
      opacity: 1;
    }
    
    .slide-up { transform: translateY(60px); }
    .slide-up.animated { transform: translateY(0); }
    
    .slide-left { transform: translateX(-60px); }
    .slide-left.animated { transform: translateX(0); }
    
    .slide-right { transform: translateX(60px); }
    .slide-right.animated { transform: translateX(0); }
    
    .zoom-in { transform: scale(0.8); }
    .zoom-in.animated { transform: scale(1); }
    
    .fade-in { opacity: 0; }
    .fade-in.animated { opacity: 1; }
    
    /* Staggered delays */
    .delay-100 { transition-delay: 100ms; }
    .delay-200 { transition-delay: 200ms; }
    .delay-300 { transition-delay: 300ms; }
    .delay-400 { transition-delay: 400ms; }
    .delay-500 { transition-delay: 500ms; }
    .delay-600 { transition-delay: 600ms; }
    
    /* Interactive elements */
    .btn-glow {
      position: relative;
      overflow: hidden;
      background: linear-gradient(45deg, #6366f1, #8b5cf6);
      transition: all 0.3s ease;
    }
    
    .btn-glow::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
      transition: all 0.5s;
    }
    
    .btn-glow:hover::before {
      left: 100%;
    }
    
    .btn-glow:hover {
      transform: translateY(-2px);
      box-shadow: 0 15px 30px rgba(99, 102, 241, 0.4);
    }
    
    /* Mobile menu */
    .mobile-menu {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.3s ease-in-out;
    }
    
    .mobile-menu.show {
      max-height: 300px;
    }
    
    /* Parallax elements */
    .parallax-bg {
      position: absolute;
      width: 200%;
      height: 200%;
      top: -50%;
      left: -50%;
      opacity: 0.1;
      animation: float 20s ease-in-out infinite;
    }
    
    /* Custom scrollbar */
    ::-webkit-scrollbar { width: 8px; }
    ::-webkit-scrollbar-track { background: rgba(255,255,255,0.1); }
    ::-webkit-scrollbar-thumb { 
      background: linear-gradient(135deg, #6366f1, #8b5cf6);
      border-radius: 10px;
    }
    ::-webkit-scrollbar-thumb:hover { 
      background: linear-gradient(135deg, #4f46e5, #7c3aed);
    }
  </style>
</head>
<body>
  <!-- Animated background elements -->
  <div class="fixed inset-0 overflow-hidden pointer-events-none">
    <div class="absolute top-10 left-10 w-32 h-32 bg-gradient-to-r from-purple-400 to-pink-400 rounded-full opacity-20 floating"></div>
    <div class="absolute top-1/3 right-10 w-24 h-24 bg-gradient-to-r from-blue-400 to-indigo-400 rounded-full opacity-20 floating-reverse"></div>
    <div class="absolute bottom-20 left-1/4 w-20 h-20 bg-gradient-to-r from-green-400 to-blue-400 rounded-full opacity-20 floating"></div>
    <div class="absolute top-1/2 left-1/2 w-40 h-40 bg-gradient-to-r from-yellow-400 to-orange-400 rounded-full opacity-10 floating-reverse"></div>
  </div>

  <!-- Navbar -->
  <nav class="glass sticky top-0 z-50 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16 items-center">
        <!-- Logo -->
        <div class="flex items-center animate-on-scroll slide-right">
          <button id="mobileMenuBtn" class="md:hidden glass text-white p-2 rounded-lg mr-2 hover:bg-white hover:bg-opacity-20 transition-all duration-300">
            <i class="fas fa-bars"></i>
          </button>
          <a href="/" class="flex items-center space-x-2 group">
            <div class="w-10 h-10 rounded-lg overflow-hidden flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300">
              <img src="/img/neorozaLogo1.png" alt="Logo" class="w-full h-full object-cover" />
            </div>
            <span class="text-white font-bold text-xl">Neoroza</span>
          </a>
        </div>

        <!-- Navigation -->
        <div id="navbarNav" class="hidden md:flex space-x-8 animate-on-scroll fade-in delay-200">
          <a href="/" class="text-white hover:text-purple-300 transition-colors duration-300 relative group">
            <i class="fas fa-home mr-2"></i> Home
            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-purple-300 group-hover:w-full transition-all duration-300"></span>
          </a>
          <a href="/about" class="text-white hover:text-purple-300 transition-colors duration-300 relative group">
            <i class="fas fa-building mr-2"></i> About
            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-purple-300 group-hover:w-full transition-all duration-300"></span>
          </a>
          <a href="/services" class="text-purple-300 font-semibold relative">
            <i class="fas fa-cogs mr-2"></i> Services
            <span class="absolute bottom-0 left-0 w-full h-0.5 bg-purple-300"></span>
          </a>
          <a href="/contact" class="text-white hover:text-purple-300 transition-colors duration-300 relative group">
            <i class="fas fa-envelope mr-2"></i> Contact
            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-purple-300 group-hover:w-full transition-all duration-300"></span>
          </a>
        </div>

        <!-- User section (commented out as in original) -->
      </div>
    </div>
  </nav>

  <!-- Mobile menu -->
  <div id="mobileMenu" class="md:hidden mobile-menu glass-dark">
    <div class="max-w-7xl mx-auto px-4 py-4 space-y-2">
      <a href="/" class="block py-2 px-4 text-white hover:bg-white hover:bg-opacity-10 rounded-lg transition-all duration-300">
        <i class="fas fa-home mr-2"></i> Home
      </a>
      <a href="/about" class="block py-2 px-4 text-white hover:bg-white hover:bg-opacity-10 rounded-lg transition-all duration-300">
        <i class="fas fa-building mr-2"></i> About
      </a>
      <a href="/services" class="block py-2 px-4 text-purple-300 bg-white bg-opacity-10 rounded-lg font-semibold">
        <i class="fas fa-cogs mr-2"></i> Services
      </a>
      <a href="/contact" class="block py-2 px-4 text-white hover:bg-white hover:bg-opacity-10 rounded-lg transition-all duration-300">
        <i class="fas fa-envelope mr-2"></i> Contact
      </a>
    </div>
  </div>

  <!-- Hero Section -->
  <section class="py-20 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
      <h1 class="text-5xl md:text-7xl font-black text-white mb-6 animate-on-scroll zoom-in">
        Layanan <span class="bg-gradient-to-r from-yellow-400 to-pink-500 bg-clip-text text-transparent">Neoroza</span>
      </h1>
      <p class="text-xl md:text-2xl text-purple-100 max-w-4xl mx-auto animate-on-scroll slide-up delay-200 leading-relaxed">
        🚀 Solusi teknologi kreatif untuk transformasi digital sekolah dan UMKM yang inovatif dan modern
      </p>
      <div class="mt-8 animate-on-scroll slide-up delay-400">
        <div class="inline-flex items-center space-x-2 glass text-white px-6 py-3 rounded-full">
          <i class="fas fa-star text-yellow-400"></i>
          <span>Dipercaya oleh para UMKM</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Main Content -->
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <!-- Services Grid -->
    <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-8 mb-20">
      <!-- POS System -->
      <div class="bg-white rounded-2xl shadow-2xl service-card animate-on-scroll slide-up p-8 relative overflow-hidden">
        <div class="icon-container bg-gradient-to-br from-blue-500 to-purple-600 w-16 h-16 flex items-center justify-center rounded-2xl mb-6 pulse-glow">
          <i class="fas fa-cash-register text-2xl text-white"></i>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-4">Aplikasi POS & Inventaris</h3>
        <p class="text-gray-600 mb-6 text-lg">
          💻 Solusi kasir digital lengkap untuk UMKM dengan manajemen stok terintegrasi yang canggih.
        </p>
        <ul class="space-y-3 text-gray-700">
          <li class="flex items-start">
            <div class="w-2 h-2 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full mt-2 mr-3"></div>
            <span>Barcode scanner dan pencatatan transaksi real-time</span>
          </li>
          <li class="flex items-start">
            <div class="w-2 h-2 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full mt-2 mr-3"></div>
            <span>Dashboard analitik penjualan yang interaktif</span>
          </li>
          <li class="flex items-start">
            <div class="w-2 h-2 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full mt-2 mr-3"></div>
            <span>Notifikasi stok pintar dengan AI prediction</span>
          </li>
          <li class="flex items-start">
            <div class="w-2 h-2 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full mt-2 mr-3"></div>
            <span>Terintegrasi dengan payment gateway</span>
          </li>
        </ul>
      </div>

      <!-- School Management -->
      <div class="bg-white rounded-2xl shadow-2xl service-card animate-on-scroll slide-up delay-100 p-8 relative overflow-hidden">
        <div class="icon-container bg-gradient-to-br from-green-500 to-teal-600 w-16 h-16 flex items-center justify-center rounded-2xl mb-6 pulse-glow">
          <i class="fas fa-school text-2xl text-white"></i>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-4">Manajemen Sekolah Digital</h3>
        <p class="text-gray-600 mb-6 text-lg">
          🎓 Sistem terintegrasi untuk administrasi sekolah modern dengan teknologi cloud terdepan.
        </p>
        <ul class="space-y-3 text-gray-700">
          <li class="flex items-start">
            <div class="w-2 h-2 bg-gradient-to-r from-green-500 to-teal-600 rounded-full mt-2 mr-3"></div>
            <span>Multi-dashboard responsif untuk semua pengguna</span>
          </li>
          <li class="flex items-start">
            <div class="w-2 h-2 bg-gradient-to-r from-green-500 to-teal-600 rounded-full mt-2 mr-3"></div>
            <span>Sistem penilaian dan kehadiran otomatis</span>
          </li>
          <li class="flex items-start">
            <div class="w-2 h-2 bg-gradient-to-r from-green-500 to-teal-600 rounded-full mt-2 mr-3"></div>
            <span>Learning Management System terintegrasi</span>
          </li>
          <li class="flex items-start">
            <div class="w-2 h-2 bg-gradient-to-r from-green-500 to-teal-600 rounded-full mt-2 mr-3"></div>
            <span>Komunikasi real-time orangtua-sekolah</span>
          </li>
        </ul>
      </div>

      <!-- Attendance System -->
      <div class="bg-white rounded-2xl shadow-2xl service-card animate-on-scroll slide-up delay-200 p-8 relative overflow-hidden">
        <div class="icon-container bg-gradient-to-br from-pink-500 to-rose-600 w-16 h-16 flex items-center justify-center rounded-2xl mb-6 pulse-glow">
          <i class="fas fa-user-check text-2xl text-white"></i>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-4">Absensi Digital (QR + Geofencing)</h3>
        <p class="text-gray-600 mb-6 text-lg">
          🔒 Sistem presensi berbasis lokasi dengan validasi GPS untuk mencegah manipulasi.
        </p>
        <ul class="space-y-3 text-gray-700">
          <li class="flex items-start">
            <div class="w-2 h-2 bg-gradient-to-r from-pink-500 to-rose-600 rounded-full mt-2 mr-3"></div>
            <span>QR Code dinamis dengan enkripsi tingkat tinggi</span>
          </li>
          <li class="flex items-start">
            <div class="w-2 h-2 bg-gradient-to-r from-pink-500 to-rose-600 rounded-full mt-2 mr-3"></div>
            <span>Geofencing radius custom dengan GPS akurat</span>
          </li>
          <li class="flex items-start">
            <div class="w-2 h-2 bg-gradient-to-r from-pink-500 to-rose-600 rounded-full mt-2 mr-3"></div>
            <span>Cocok untuk sekolah dan tempat kursus</span>
          </li>
          <li class="flex items-start">
            <div class="w-2 h-2 bg-gradient-to-r from-pink-500 to-rose-600 rounded-full mt-2 mr-3"></div>
            <span>Ekspor data ke Excel/PDF</span>
          </li>
        </ul>
      </div>

      <!-- Custom Apps -->
      <div class="bg-white rounded-2xl shadow-2xl service-card animate-on-scroll slide-up delay-300 p-8 relative overflow-hidden">
        <div class="icon-container bg-gradient-to-br from-indigo-500 to-purple-600 w-16 h-16 flex items-center justify-center rounded-2xl mb-6 pulse-glow">
          <i class="fas fa-laptop-code text-2xl text-white"></i>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-4">Aplikasi Custom Premium</h3>
        <p class="text-gray-600 mb-6 text-lg">
          ⚡ Pengembangan aplikasi enterprise dengan teknologi cutting-edge dan arsitektur scalable.
        </p>
        <ul class="space-y-3 text-gray-700">
          <li class="flex items-start">
            <div class="w-2 h-2 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-full mt-2 mr-3"></div>
            <span>Full-stack development dengan microservices</span>
          </li>
          <li class="flex items-start">
            <div class="w-2 h-2 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-full mt-2 mr-3"></div>
            <span>Cloud-native architecture dengan auto-scaling</span>
          </li>
          <li class="flex items-start">
            <div class="w-2 h-2 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-full mt-2 mr-3"></div>
            <span>API integration dan third-party services</span>
          </li>
          <li class="flex items-start">
            <div class="w-2 h-2 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-full mt-2 mr-3"></div>
            <span>Progressive Web App (PWA) technology</span>
          </li>
        </ul>
      </div>

      <!-- Professional Website -->
      <div class="bg-white rounded-2xl shadow-2xl service-card animate-on-scroll slide-up delay-400 p-8 relative overflow-hidden">
        <div class="icon-container bg-gradient-to-br from-orange-500 to-red-600 w-16 h-16 flex items-center justify-center rounded-2xl mb-6 pulse-glow">
          <i class="fas fa-globe text-2xl text-white"></i>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-4">Website Premium</h3>
        <p class="text-gray-600 mb-6 text-lg">
          🌟 Website premium dengan design award-winning dan performance lightning-fast.
        </p>
        <ul class="space-y-3 text-gray-700">
          <li class="flex items-start">
            <div class="w-2 h-2 bg-gradient-to-r from-orange-500 to-red-600 rounded-full mt-2 mr-3"></div>
            <span>Design UI/UX yang memukau dan konversi tinggi</span>
          </li>
          <li class="flex items-start">
            <div class="w-2 h-2 bg-gradient-to-r from-orange-500 to-red-600 rounded-full mt-2 mr-3"></div>
            <span>SEO optimization dengan Core Web Vitals perfect</span>
          </li>
          <li class="flex items-start">
            <div class="w-2 h-2 bg-gradient-to-r from-orange-500 to-red-600 rounded-full mt-2 mr-3"></div>
            <span>CMS headless dengan editing yang mudah</span>
          </li>
          <li class="flex items-start">
            <div class="w-2 h-2 bg-gradient-to-r from-orange-500 to-red-600 rounded-full mt-2 mr-3"></div>
            <span>Analytics dan heat mapping terintegrasi</span>
          </li>
        </ul>
      </div>

      <!-- UI/UX Design -->
      <div class="bg-white rounded-2xl shadow-2xl service-card animate-on-scroll slide-up delay-500 p-8 relative overflow-hidden">
        <div class="icon-container bg-gradient-to-br from-cyan-500 to-blue-600 w-16 h-16 flex items-center justify-center rounded-2xl mb-6 pulse-glow">
          <i class="fas fa-paint-brush text-2xl text-white"></i>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-4">UI/UX Design Studio</h3>
        <p class="text-gray-600 mb-6 text-lg">
          🎨 Design thinking approach dengan user research mendalam dan prototype interaktif.
        </p>
        <ul class="space-y-3 text-gray-700">
          <li class="flex items-start">
            <div class="w-2 h-2 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-full mt-2 mr-3"></div>
            <span>User research dan persona development</span>
          </li>
          <li class="flex items-start">
            <div class="w-2 h-2 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-full mt-2 mr-3"></div>
            <span>High-fidelity prototype dengan micro-interactions</span>
          </li>
          <li class="flex items-start">
            <div class="w-2 h-2 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-full mt-2 mr-3"></div>
            <span>Design system dan component library</span>
          </li>
          <li class="flex items-start">
            <div class="w-2 h-2 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-full mt-2 mr-3"></div>
            <span>Usability testing dan iteration</span>
          </li>
        </ul>
      </div>
    </div>

    <!-- Maintenance Section -->
    <div class="glass rounded-3xl p-12 mb-20 animate-on-scroll fade-in relative overflow-hidden">
      <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-pink-600 opacity-10"></div>
      <div class="flex flex-col lg:flex-row items-center relative z-10">
        <div class="lg:w-1/2 mb-8 lg:mb-0 lg:pr-12">
          <div class="flex items-center mb-4">
            <div class="w-12 h-12 bg-gradient-to-r from-green-400 to-blue-500 rounded-full flex items-center justify-center mr-4">
              <i class="fas fa-tools text-white text-xl"></i>
            </div>
            <h2 class="text-3xl font-bold text-white">24/7 Support & Maintenance</h2>
          </div>
          <p class="text-purple-100 mb-6 text-lg leading-relaxed">
            🛠️ Dukungan teknis premium dengan response time cepat dan monitoring proaktif untuk memastikan sistem Anda selalu optimal.
          </p>
          <div class="grid md:grid-cols-2 gap-4">
            <div class="flex items-start text-purple-100">
              <i class="fas fa-rocket text-yellow-400 mt-1 mr-3"></i>
              <span>Performance monitoring real-time</span>
            </div>
            <div class="flex items-start text-purple-100">
              <i class="fas fa-shield-alt text-green-400 mt-1 mr-3"></i>
              <span>Security updates otomatis</span>
            </div>
            <div class="flex items-start text-purple-100">
              <i class="fas fa-cloud text-blue-400 mt-1 mr-3"></i>
              <span>Backup otomatis multi-location</span>
            </div>
            <div class="flex items-start text-purple-100">
              <i class="fas fa-chart-line text-pink-400 mt-1 mr-3"></i>
              <span>Performance optimization berkala</span>
            </div>
          </div>
        </div>
        <div class="lg:w-1/2">
          <div class="relative">
            <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" 
                 alt="24/7 Support" 
                 class="rounded-2xl shadow-2xl w-full h-auto floating">
            <div class="absolute -top-4 -right-4 w-24 h-24 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full flex items-center justify-center floating-reverse">
              <i class="fas fa-headset text-2xl text-white"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Process Section -->
    <div class="mb-20">
      <div class="text-center mb-16 animate-on-scroll fade-in">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
          Our <span class="bg-gradient-to-r from-yellow-400 to-pink-500 bg-clip-text text-transparent">Process</span>
        </h2>
        <p class="text-xl text-purple-100 max-w-3xl mx-auto">
          🚀 Metodologi agile dengan pendekatan user-centric untuk hasil yang exceeds expectation
        </p>
      </div>
      
      <div class="grid md:grid-cols-4 gap-8">
        <div class="text-center animate-on-scroll slide-up">
          <div class="relative mb-6">
            <div class="w-24 h-24 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center mx-auto floating">
              <span class="text-2xl font-bold text-white">1</span>
            </div>
            <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-yellow-400 rounded-full flex items-center justify-center">
              <i class="fas fa-lightbulb text-sm"></i>
            </div>
          </div>
          <h3 class="text-xl font-bold text-white mb-3">Discovery</h3>
          <p class="text-purple-200">Deep dive analysis dan requirement gathering dengan stakeholder</p>
        </div>
        
        <div class="text-center animate-on-scroll slide-up delay-100">
          <div class="relative mb-6">
            <div class="w-24 h-24 bg-gradient-to-r from-green-500 to-teal-600 rounded-full flex items-center justify-center mx-auto floating-reverse">
              <span class="text-2xl font-bold text-white">2</span>
            </div>
            <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-pink-400 rounded-full flex items-center justify-center">
              <i class="fas fa-pencil-ruler text-sm"></i>
            </div>
          </div>
          <h3 class="text-xl font-bold text-white mb-3">Design</h3>
          <p class="text-purple-200">UI/UX design dengan user testing dan iterative improvement</p>
        </div>
        
        <div class="text-center animate-on-scroll slide-up delay-200">
          <div class="relative mb-6">
            <div class="w-24 h-24 bg-gradient-to-r from-pink-500 to-rose-600 rounded-full flex items-center justify-center mx-auto floating">
              <span class="text-2xl font-bold text-white">3</span>
            </div>
            <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-green-400 rounded-full flex items-center justify-center">
              <i class="fas fa-code text-sm"></i>
            </div>
          </div>
          <h3 class="text-xl font-bold text-white mb-3">Development</h3>
          <p class="text-purple-200">Agile development dengan continuous integration dan testing</p>
        </div>
        
        <div class="text-center animate-on-scroll slide-up delay-300">
          <div class="relative mb-6">
            <div class="w-24 h-24 bg-gradient-to-r from-orange-500 to-red-600 rounded-full flex items-center justify-center mx-auto floating-reverse">
              <span class="text-2xl font-bold text-white">4</span>
            </div>
            <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-blue-400 rounded-full flex items-center justify-center">
              <i class="fas fa-rocket text-sm"></i>
            </div>
          </div>
          <h3 class="text-xl font-bold text-white mb-3">Launch</h3>
          <p class="text-purple-200">Deployment dengan monitoring dan ongoing support premium</p>
        </div>
      </div>
    </div>

    <!-- CTA Section -->
    <div class="text-center glass rounded-3xl shadow-2xl p-12 animate-on-scroll zoom-in relative overflow-hidden">
      <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-pink-600 opacity-10"></div>
      <div class="relative z-10">
        <div class="w-20 h-20 bg-gradient-to-r from-yellow-400 to-pink-500 rounded-full flex items-center justify-center mx-auto mb-6 pulse-glow">
          <i class="fas fa-rocket text-2xl text-white"></i>
        </div>
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
          Ready to <span class="bg-gradient-to-r from-yellow-400 to-pink-500 bg-clip-text text-transparent">Transform?</span>
        </h2>
        <p class="text-xl text-purple-100 max-w-3xl mx-auto mb-8 leading-relaxed">
          🚀 Mari wujudkan visi digital Anda bersama tim expert Neoroza. Customer service dalam 24 jam!
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
          <button class="glass text-white px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 hover:bg-white hover:bg-opacity-20 flex items-center">
            <i class="fas fa-phone mr-2"></i>
            Hubungi Kami Sekarang
          </button>
        </div>
        <div class="flex justify-center items-center space-x-6 mt-8">
          <div class="flex items-center text-purple-200">
            <i class="fas fa-check-circle text-green-400 mr-2"></i>
            <span>24h Response</span>
          </div>
          <div class="flex items-center text-purple-200">
            <i class="fas fa-check-circle text-green-400 mr-2"></i>
            <span>Free Maintenance First Year</span>
          </div>
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
      const icon = mobileMenuBtn.querySelector('i');
      
      if (mobileMenu.classList.contains('show')) {
        mobileMenu.classList.remove('show');
        icon.classList.remove('fa-times');
        icon.classList.add('fa-bars');
      } else {
        mobileMenu.classList.add('show');
        icon.classList.remove('fa-bars');
        icon.classList.add('fa-times');
      }
    });

    // Parallax effect
    window.addEventListener('scroll', () => {
      const scrolled = window.pageYOffset;
      const parallaxElements = document.querySelectorAll('.parallax-bg');
      
      parallaxElements.forEach(element => {
        const speed = 0.5;
        element.style.transform = `translateY(${scrolled * speed}px)`;
      });
    });

    // Dynamic gradient animation
    const createDynamicGradients = () => {
      const cards = document.querySelectorAll('.service-card');
      const gradients = [
        'linear-gradient(135deg, #667eea 0%, #764ba2 100%)',
        'linear-gradient(135deg, #f093fb 0%, #f5576c 100%)',
        'linear-gradient(135deg, #4facfe 0%, #00f2fe 100%)',
        'linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%)',
        'linear-gradient(135deg, #a8edea 0%, #fed6e3 100%)',
        'linear-gradient(135deg, #ff9a9e 0%, #fecfef 100%)'
      ];
      
      cards.forEach((card, index) => {
        card.addEventListener('mouseenter', () => {
          card.style.background = gradients[index % gradients.length];
          card.style.color = 'white';
        });
        
        card.addEventListener('mouseleave', () => {
          card.style.background = 'white';
          card.style.color = '#1f2937';
        });
      });
    };

    // Initialize all animations and effects
    document.addEventListener('DOMContentLoaded', () => {
      animateOnScroll();
      createDynamicGradients();
      
      // Smooth scroll for anchor links
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
      
      // Add loading animation
      document.body.style.opacity = '0';
      setTimeout(() => {
        document.body.style.transition = 'opacity 0.5s ease-in-out';
        document.body.style.opacity = '1';
      }, 100);
    });

    // Re-run animations on load
    window.addEventListener('load', () => {
      animateOnScroll();
    });
  </script>
</body>
</html>