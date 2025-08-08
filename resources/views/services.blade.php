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

    /* Floating animations */
    @keyframes float {

      0%,
      100% {
        transform: translateY(0px) rotate(0deg);
      }

      50% {
        transform: translateY(-20px) rotate(5deg);
      }
    }

    @keyframes float-reverse {

      0%,
      100% {
        transform: translateY(0px) rotate(0deg);
      }

      50% {
        transform: translateY(20px) rotate(-5deg);
      }
    }

    @keyframes pulse-glow {

      0%,
      100% {
        box-shadow: 0 0 20px rgba(99, 102, 241, 0.3);
      }

      50% {
        box-shadow: 0 0 40px rgba(99, 102, 241, 0.6);
      }
    }

    @keyframes gradient-shift {
      0% {
        background-position: 0% 50%;
      }

      50% {
        background-position: 100% 50%;
      }

      100% {
        background-position: 0% 50%;
      }
    }

    .floating {
      animation: float 6s ease-in-out infinite;
    }

    .floating-reverse {
      animation: float-reverse 8s ease-in-out infinite;
    }

    .pulse-glow {
      animation: pulse-glow 3s ease-in-out infinite;
    }

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
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
      transition: all 0.5s;
    }

    .service-card:hover::before {
      left: 100%;
    }

    .service-card:hover {
      transform: translateY(-15px) scale(1.02);
      box-shadow: 0 30px 60px rgba(0, 0, 0, 0.15);
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
      background: rgba(255, 255, 255, 0.3);
      border-radius: 50%;
      transform: translate(-50%, -50%);
      transition: all 0.3s ease;
    }

    .service-card:hover .icon-container::after {
      width: 120%;
      height: 120%;
    }

    /* Scroll animations */

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
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
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
    ::-webkit-scrollbar {
      width: 8px;
    }

    ::-webkit-scrollbar-track {
      background: rgba(255, 255, 255, 0.1);
    }

    ::-webkit-scrollbar-thumb {
      background: linear-gradient(135deg, #6366f1, #8b5cf6);
      border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb:hover {
      background: linear-gradient(135deg, #4f46e5, #7c3aed);
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
          <a href="/" class="flex items-center space-x-2 text-slate-600 hover:text-primary-600 transition-colors">
            <i class="fas fa-home text-sm"></i>
            <span>Home</span>
          </a>
          <a href="/about" class="flex items-center space-x-2 text-slate-600 hover:text-primary-600 transition-colors">
            <i class="fas fa-building text-sm"></i>
            <span>About</span>
          </a>
          <a href="/services"
            class="flex items-center space-x-2 text-primary-600 font-medium hover:text-primary-700 transition-colors">
            <i class="fas fa-cogs text-sm"></i>
            <span>Services</span>
          </a>
          <a href="/contact"
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
        <a href="/"
          class="block px-4 py-3 text-slate-600 hover:text-primary-600 hover:bg-primary-50 rounded-lg transition-colors">
          <i class="fas fa-home mr-3 text-sm"></i>Home
        </a>
        <a href="/about"
          class="block px-4 py-3 text-slate-600 hover:text-primary-600 hover:bg-primary-50 rounded-lg transition-colors">
          <i class="fas fa-building mr-3 text-sm"></i>About
        </a>
        <a href="/services"
          class="block px-4 py-3 text-primary-600 bg-primary-50 font-medium rounded-lg transition-colors">
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
    <div class="absolute inset-0 bg-gradient-to-r from-blue-600/10 via-purple-600/5 to-cyan-600/10"></div>

    <!-- Hero Section -->
    <section class="py-20 relative overflow-hidden">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <h1 class="text-5xl md:text-7xl font-black text-white mb-6 animate-on-scroll zoom-in">
          Layanan <span
            class="bg-gradient-to-r from-yellow-400 to-pink-500 bg-clip-text text-transparent">Neoroza</span>
        </h1>
        <p
          class="text-xl md:text-2xl text-black-100 max-w-4xl mx-auto animate-on-scroll slide-up delay-200 leading-relaxed">
          🚀 Solusi teknologi kreatif untuk transformasi digital sekolah dan UMKM yang inovatif dan modern
        </p>
        <div class="mt-8 animate-on-scroll slide-up delay-400">
          <div class="inline-flex items-center space-x-2 glass text-black  px-6 py-3 rounded-full">
            <i class="fas fa-star text-yellow-400"></i>
            <span>Dipercaya oleh para UMKM</span>
          </div>
        </div>
      </div>
    </section>

    <!-- Services Grid -->
    <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-8 mb-20">
      <!-- POS System -->
      <div class="bg-white rounded-2xl shadow-2xl service-card animate-on-scroll slide-up p-8 relative overflow-hidden">
        <div
          class="icon-container bg-gradient-to-br from-blue-500 to-purple-600 w-16 h-16 flex items-center justify-center rounded-2xl mb-6 pulse-glow">
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
      <div
        class="bg-white rounded-2xl shadow-2xl service-card animate-on-scroll slide-up delay-100 p-8 relative overflow-hidden">
        <div
          class="icon-container bg-gradient-to-br from-green-500 to-teal-600 w-16 h-16 flex items-center justify-center rounded-2xl mb-6 pulse-glow">
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
      <div
        class="bg-white rounded-2xl shadow-2xl service-card animate-on-scroll slide-up delay-200 p-8 relative overflow-hidden">
        <div
          class="icon-container bg-gradient-to-br from-pink-500 to-rose-600 w-16 h-16 flex items-center justify-center rounded-2xl mb-6 pulse-glow">
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
      <div
        class="bg-white rounded-2xl shadow-2xl service-card animate-on-scroll slide-up delay-300 p-8 relative overflow-hidden">
        <div
          class="icon-container bg-gradient-to-br from-indigo-500 to-purple-600 w-16 h-16 flex items-center justify-center rounded-2xl mb-6 pulse-glow">
          <i class="fas fa-laptop-code text-2xl text-white"></i>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-4">Aplikasi Custom Premium</h3>
        <p class="text-gray-600 mb-6 text-lg">
          ⚡ Pengembangan aplikasi enterprise dengan teknologi cutting-edge dan arsitektur scalable.
        </p>
        <ul class="space-y-3 text-gray-700">
          <li class="flex items-start">
            <div class="w-2 h-2 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-full mt-2 mr-3">
            </div>
            <span>Full-stack development dengan microservices</span>
          </li>
          <li class="flex items-start">
            <div class="w-2 h-2 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-full mt-2 mr-3">
            </div>
            <span>Cloud-native architecture dengan auto-scaling</span>
          </li>
          <li class="flex items-start">
            <div class="w-2 h-2 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-full mt-2 mr-3">
            </div>
            <span>API integration dan third-party services</span>
          </li>
          <li class="flex items-start">
            <div class="w-2 h-2 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-full mt-2 mr-3">
            </div>
            <span>Progressive Web App (PWA) technology</span>
          </li>
        </ul>
      </div>

      <!-- Professional Website -->
      <div
        class="bg-white rounded-2xl shadow-2xl service-card animate-on-scroll slide-up delay-400 p-8 relative overflow-hidden">
        <div
          class="icon-container bg-gradient-to-br from-orange-500 to-red-600 w-16 h-16 flex items-center justify-center rounded-2xl mb-6 pulse-glow">
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
      <div
        class="bg-white rounded-2xl shadow-2xl service-card animate-on-scroll slide-up delay-500 p-8 relative overflow-hidden">
        <div
          class="icon-container bg-gradient-to-br from-cyan-500 to-blue-600 w-16 h-16 flex items-center justify-center rounded-2xl mb-6 pulse-glow">
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
  <div class="absolute inset-0 bg-white"></div>
  <div class="relative z-10">
    <div class="text-center mb-10">
      <div class="flex justify-center items-center mb-6">
        <div
          class="w-16 h-16 bg-gradient-to-r from-green-400 to-blue-500 rounded-full flex items-center justify-center mx-auto">
          <i class="fas fa-tools text-white text-2xl"></i>
        </div>
      </div>
      <h2 class="text-3xl font-bold text-black mb-4">24/7 Support & Maintenance</h2>
      <p class="text-black-100 text-lg max-w-3xl mx-auto leading-relaxed">
        🛠️ Dukungan teknis premium dengan response time cepat dan monitoring proaktif untuk memastikan
        sistem Anda selalu optimal.
      </p>
    </div>
    <div class="grid md:grid-cols-2 gap-6 max-w-4xl mx-auto">
      <div class="flex items-start text-black-100 bg-white/50 p-4 rounded-xl">
        <i class="fas fa-rocket text-yellow-400 mt-1 mr-3 text-lg"></i>
        <span>Performance monitoring real-time</span>
      </div>
      <div class="flex items-start text-black-100 bg-white/50 p-4 rounded-xl">
        <i class="fas fa-shield-alt text-green-400 mt-1 mr-3 text-lg"></i>
        <span>Security updates otomatis</span>
      </div>
      <div class="flex items-start text-black-100 bg-white/50 p-4 rounded-xl">
        <i class="fas fa-cloud text-blue-400 mt-1 mr-3 text-lg"></i>
        <span>Backup otomatis multi-location</span>
      </div>
      <div class="flex items-start text-black-100 bg-white/50 p-4 rounded-xl">
        <i class="fas fa-chart-line text-pink-400 mt-1 mr-3 text-lg"></i>
        <span>Performance optimization berkala</span>
      </div>
    </div>
  </div>
</div>

    <!-- Process Section -->
    <div class="mb-20">
      <div class="text-center mb-16 animate-on-scroll fade-in">
        <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">
          Our <span class="bg-gradient-to-r from-yellow-400 to-pink-500 bg-clip-text text-transparent">Process</span>
        </h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          🚀 Metodologi agile dengan pendekatan user-centric untuk hasil yang exceeds expectation
        </p>
      </div>

      <div class="grid md:grid-cols-4 gap-8">
        <div class="text-center animate-on-scroll slide-up">
          <div class="relative mb-6">
            <div
              class="w-24 h-24 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center mx-auto floating">
              <span class="text-2xl font-bold text-white">1</span>
            </div>
            <div
              class="absolute -bottom-2 -right-2 w-8 h-8 bg-yellow-400 rounded-full flex items-center justify-center">
              <i class="fas fa-lightbulb text-sm"></i>
            </div>
          </div>
          <h3 class="text-xl font-bold text-black mb-3">Discovery</h3>
          <p class="text-gray-600">Deep dive analysis dan requirement gathering dengan stakeholder</p>
        </div>

        <div class="text-center animate-on-scroll slide-up delay-100">
          <div class="relative mb-6">
            <div
              class="w-24 h-24 bg-gradient-to-r from-green-500 to-teal-600 rounded-full flex items-center justify-center mx-auto floating-reverse">
              <span class="text-2xl font-bold text-white">2</span>
            </div>
            <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-pink-400 rounded-full flex items-center justify-center">
              <i class="fas fa-pencil-ruler text-sm"></i>
            </div>
          </div>
          <h3 class="text-xl font-bold text-black mb-3">Design</h3>
          <p class="text-gray-600">UI/UX design dengan user testing dan iterative improvement</p>
        </div>

        <div class="text-center animate-on-scroll slide-up delay-200">
          <div class="relative mb-6">
            <div
              class="w-24 h-24 bg-gradient-to-r from-pink-500 to-rose-600 rounded-full flex items-center justify-center mx-auto floating">
              <span class="text-2xl font-bold text-white">3</span>
            </div>
            <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-green-400 rounded-full flex items-center justify-center">
              <i class="fas fa-code text-sm"></i>
            </div>
          </div>
          <h3 class="text-xl font-bold text-black mb-3">Development</h3>
          <p class="text-gray-600">Agile development dengan continuous integration dan testing</p>
        </div>

        <div class="text-center animate-on-scroll slide-up delay-300">
          <div class="relative mb-6">
            <div
              class="w-24 h-24 bg-gradient-to-r from-orange-500 to-red-600 rounded-full flex items-center justify-center mx-auto floating-reverse">
              <span class="text-2xl font-bold text-white">4</span>
            </div>
            <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-blue-400 rounded-full flex items-center justify-center">
              <i class="fas fa-rocket text-sm"></i>
            </div>
          </div>
          <h3 class="text-xl font-bold text-black mb-3">Launch</h3>
          <p class="text-gray-600">Deployment dengan monitoring dan ongoing support premium</p>
        </div>
      </div>
    </div>

    <!-- CTA Section -->
    <div class="text-center glass rounded-3xl shadow-2xl p-12 animate-on-scroll zoom-in relative overflow-hidden">
      <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-pink-600 opacity-10"></div>
      <div class="relative z-10">
        <div
          class="w-20 h-20 bg-gradient-to-r from-yellow-400 to-pink-500 rounded-full flex items-center justify-center mx-auto mb-6 pulse-glow">
          <i class="fas fa-rocket text-2xl text-white"></i>
        </div>
        <h2 class="text-4xl md:text-5xl font-bold text-gray-600 mb-6">
          Ready to <span
            class="bg-gradient-to-r from-yellow-400 to-pink-500 bg-clip-text text-transparent">Transform?</span>
        </h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto mb-8 leading-relaxed">
          🚀 Mari wujudkan visi digital Anda bersama tim expert Neoroza. Customer service dalam 24 jam!
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
          <a href="https://wa.me/628811998070"
            class="glass text-black px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 hover:bg-white hover:bg-opacity-20 flex items-center">
            <i class="fas fa-phone mr-2"></i>
            Hubungi Kami Sekarang
          </a href="">
        </div>
        <div class="flex justify-center items-center space-x-6 mt-8">
          <div class="flex items-center text-gray-600">
            <i class="fas fa-check-circle text-green-400 mr-2"></i>
            <span>24h Response</span>
          </div>
          <div class="flex items-center text-gray-600">
            <i class="fas fa-check-circle text-green-400 mr-2"></i>
            <span>Free Maintenance First Year</span>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="mt-24 bg-slate-800 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
      <div class="text-center">
        <div class="flex justify-center items-center space-x-3 mb-4">
          <div class="rounded-lg flex items-center justify-center">
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

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && mobileMenu.classList.contains('open')) {
        mobileMenu.classList.remove('open');
        menuIcon.className = 'fas fa-bars text-sm';
        mobileMenuToggle.focus();
      }
    });
  </script>
  <script>
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