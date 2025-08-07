<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us | Neoroza</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            'inter': ['Inter', 'sans-serif'],
          },
          colors: {
            primary: {
              50: '#eff6ff',
              100: '#dbeafe',
              200: '#bfdbfe',
              300: '#93c5fd',
              400: '#60a5fa',
              500: '#3b82f6',
              600: '#2563eb',
              700: '#1d4ed8',
              800: '#1e40af',
              900: '#1e3a8a',
            }
          },
          animation: {
            'fade-in': 'fadeIn 0.8s ease-out',
            'fade-in-up': 'fadeInUp 1s ease-out',
            'slide-in-left': 'slideInLeft 0.8s ease-out',
            'slide-in-right': 'slideInRight 0.8s ease-out',
            'bounce-gentle': 'bounceGentle 2s infinite',
            'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
          },
          backdropBlur: {
            xs: '2px',
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

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes slideInLeft {
      from {
        opacity: 0;
        transform: translateX(-50px);
      }

      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    @keyframes slideInRight {
      from {
        opacity: 0;
        transform: translateX(50px);
      }

      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    @keyframes bounceGentle {

      0%,
      20%,
      50%,
      80%,
      100% {
        transform: translateY(0);
      }

      40% {
        transform: translateY(-10px);
      }

      60% {
        transform: translateY(-5px);
      }
    }

    .glass-effect {
      backdrop-filter: blur(16px) saturate(180%);
      background-color: rgba(255, 255, 255, 0.9);
      border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .gradient-bg {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }

    .card-hover {
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .card-hover:hover {
      transform: translateY(-8px) scale(1.02);
      box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    }

    .text-gradient {
      background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }
  </style>
</head>

<body class="font-inter bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50 text-slate-800 overflow-x-hidden">

  <!-- Enhanced Navigation -->
  <nav class="sticky top-0 z-50 glass-effect shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-20">
        <!-- Logo -->
        <div class="flex items-center space-x-3">
          <button id="mobileMenuToggle"
            class="md:hidden p-2 rounded-xl bg-primary-500 text-white hover:bg-primary-600 transition-all duration-300 shadow-lg hover:shadow-xl">
            <i class="fas fa-bars text-lg"></i>
          </button>
          <a href="/" class="flex items-center space-x-3 group">
            <div
              class="w-10 h-10 bg-gradient-to-br from-primary-500 to-purple-600 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
              <span class="text-white font-bold text-xl">N</span>
            </div>
            <span class="text-2xl font-bold text-gradient">Neoroza</span>
          </a>
        </div>

        <!-- Desktop Navigation -->
        <div class="hidden md:flex items-center space-x-1">
          <a href="/"
            class="flex items-center space-x-2 px-4 py-2 rounded-xl text-primary-600 bg-primary-50 font-medium hover:bg-primary-100 transition-all duration-300">
            <i class="fas fa-home text-sm"></i>
            <span>Home</span>
          </a>
          <a href="/about"
            class="flex items-center space-x-2 px-4 py-2 rounded-xl text-slate-600 hover:text-primary-600 hover:bg-slate-100 transition-all duration-300">
            <i class="fas fa-building text-sm"></i>
            <span>About</span>
          </a>
          <a href="/services"
            class="flex items-center space-x-2 px-4 py-2 rounded-xl text-slate-600 hover:text-primary-600 hover:bg-slate-100 transition-all duration-300">
            <i class="fas fa-cogs text-sm"></i>
            <span>Services</span>
          </a>
          <a href="/contact"
            class="flex items-center space-x-2 px-4 py-2 rounded-xl text-slate-600 hover:text-primary-600 hover:bg-slate-100 transition-all duration-300">
            <i class="fas fa-envelope text-sm"></i>
            <span>Contact</span>
          </a>
        </div>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu"
      class="md:hidden overflow-hidden max-h-0 transition-all duration-300 ease-in-out bg-white/95 backdrop-blur-md">
      <div class="px-6 py-4 space-y-2 border-t border-slate-200">
        <a href="/" class="flex items-center space-x-3 px-4 py-3 text-primary-600 bg-primary-50 font-medium rounded-xl">
          <i class="fas fa-home"></i>
          <span>Home</span>
        </a>
        <a href="/about"
          class="flex items-center space-x-3 px-4 py-3 text-slate-600 hover:text-primary-600 hover:bg-slate-50 rounded-xl transition-colors">
          <i class="fas fa-building"></i>
          <span>About</span>
        </a>
        <a href="/services"
          class="flex items-center space-x-3 px-4 py-3 text-slate-600 hover:text-primary-600 hover:bg-slate-50 rounded-xl transition-colors">
          <i class="fas fa-cogs"></i>
          <span>Services</span>
        </a>
        <a href="/contact"
          class="flex items-center space-x-3 px-4 py-3 text-slate-600 hover:text-primary-600 hover:bg-slate-50 rounded-xl transition-colors">
          <i class="fas fa-envelope"></i>
          <span>Contact</span>
        </a>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="relative py-20 lg:py-32 overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 bg-gradient-to-r from-blue-600/10 via-purple-600/5 to-cyan-600/10"></div>
    <div
      class="absolute -top-40 -right-32 w-96 h-96 bg-gradient-to-br from-blue-400/20 to-purple-600/20 rounded-full blur-3xl">
    </div>
    <div
      class="absolute -bottom-40 -left-32 w-96 h-96 bg-gradient-to-br from-cyan-400/20 to-blue-600/20 rounded-full blur-3xl">
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <h1 class="text-5xl md:text-6xl lg:text-7xl font-black text-slate-900 mb-8 animate-fade-in-up">
        Tentang <span class="text-gradient">Neoroza</span>
      </h1>
      <p class="text-xl md:text-2xl text-slate-600 max-w-4xl mx-auto leading-relaxed animate-fade-in-up"
        style="animation-delay: 0.2s;">
        Solusi teknologi kreatif untuk sekolah dan UMKM, dikembangkan oleh siswa berbakat
        <span class="font-semibold text-primary-600">SMKN 24 Jakarta</span>
      </p>

      <!-- Floating Elements -->
      <div class="mt-16 flex justify-center space-x-8">
        <div class="animate-bounce-gentle bg-white/80 backdrop-blur-sm rounded-2xl p-4 shadow-lg"
          style="animation-delay: 0.5s;">
          <i class="fas fa-code text-2xl text-primary-500"></i>
        </div>
        <div class="animate-bounce-gentle bg-white/80 backdrop-blur-sm rounded-2xl p-4 shadow-lg"
          style="animation-delay: 1s;">
          <i class="fas fa-lightbulb text-2xl text-yellow-500"></i>
        </div>
        <div class="animate-bounce-gentle bg-white/80 backdrop-blur-sm rounded-2xl p-4 shadow-lg"
          style="animation-delay: 1.5s;">
          <i class="fas fa-rocket text-2xl text-purple-500"></i>
        </div>
      </div>
    </div>
  </section>

  <!-- Main Content -->
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-20">

    <!-- Vision & Mission -->
    <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 mb-20">
      <!-- Vision -->
      <div class="group">
        <div
          class="bg-white/80 backdrop-blur-sm p-8 lg:p-10 rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 card-hover border border-white/50">
          <div class="flex items-center mb-8">
            <div
              class="bg-gradient-to-br from-blue-500 to-purple-600 text-white p-4 rounded-2xl mr-6 group-hover:scale-110 transition-transform duration-300">
              <i class="fas fa-eye text-2xl"></i>
            </div>
            <div>
              <h2 class="text-3xl font-bold text-slate-800 mb-2">Visi Kami</h2>
              <div class="w-12 h-1 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full"></div>
            </div>
          </div>
          <p class="text-lg text-slate-600 leading-relaxed">
            Menjadi mitra solusi teknologi kreatif yang mengubah tantangan sehari-hari menjadi kemudahan bagi sekolah
            dan UMKM di Jakarta.
          </p>
        </div>
      </div>

      <!-- Mission -->
      <div class="group">
        <div
          class="bg-white/80 backdrop-blur-sm p-8 lg:p-10 rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 card-hover border border-white/50">
          <div class="flex items-center mb-8">
            <div
              class="bg-gradient-to-br from-purple-500 to-pink-600 text-white p-4 rounded-2xl mr-6 group-hover:scale-110 transition-transform duration-300">
              <i class="fas fa-bullseye text-2xl"></i>
            </div>
            <div>
              <h2 class="text-3xl font-bold text-slate-800 mb-2">Misi Kami</h2>
              <div class="w-12 h-1 bg-gradient-to-r from-purple-500 to-pink-600 rounded-full"></div>
            </div>
          </div>
          <div class="space-y-4">
            <div class="flex items-start group/item">
              <div
                class="bg-gradient-to-r from-green-400 to-blue-500 text-white rounded-full p-1 mt-1 mr-4 group-hover/item:scale-110 transition-transform duration-300">
                <i class="fas fa-check text-xs"></i>
              </div>
              <span class="text-lg text-slate-600">Mengembangkan perangkat lunak yang user-friendly dan solutif</span>
            </div>
            <div class="flex items-start group/item">
              <div
                class="bg-gradient-to-r from-green-400 to-blue-500 text-white rounded-full p-1 mt-1 mr-4 group-hover/item:scale-110 transition-transform duration-300">
                <i class="fas fa-check text-xs"></i>
              </div>
              <span class="text-lg text-slate-600">Memberikan layanan dengan harga kompetitif untuk pendidikan dan
                UMKM</span>
            </div>
            <div class="flex items-start group/item">
              <div
                class="bg-gradient-to-r from-green-400 to-blue-500 text-white rounded-full p-1 mt-1 mr-4 group-hover/item:scale-110 transition-transform duration-300">
                <i class="fas fa-check text-xs"></i>
              </div>
              <span class="text-lg text-slate-600">Wadah pengembangan skill nyata bagi siswa SMK di bidang IT</span>
            </div>
            <div class="flex items-start group/item">
              <div
                class="bg-gradient-to-r from-green-400 to-blue-500 text-white rounded-full p-1 mt-1 mr-4 group-hover/item:scale-110 transition-transform duration-300">
                <i class="fas fa-check text-xs"></i>
              </div>
              <span class="text-lg text-slate-600">Membangun kemandirian teknologi di tingkat sekolah dan komunitas
                usaha kecil</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Team Section -->
    <div class="mb-20">
      <div class="text-center mb-16">
        <h2 class="text-4xl lg:text-5xl font-black text-slate-800 mb-6">
          Tim <span class="text-gradient">Kami</span>
        </h2>
        <p class="text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed">
          Neoroza dioperasikan oleh <span class="font-bold text-primary-600">14 siswa berbakat</span> SMKN 24 Jakarta
          yang penuh semangat dan kompeten
        </p>
      </div>

      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
        <!-- Project Manager -->
        <div
          class="bg-white/80 backdrop-blur-sm p-8 rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 card-hover border border-white/50 group">
          <div class="flex items-center mb-6">
            <div
              class="bg-gradient-to-br from-blue-500 to-cyan-500 text-white p-3 rounded-2xl mr-4 group-hover:scale-110 transition-transform duration-300">
              <i class="fas fa-crown text-xl"></i>
            </div>
            <h3 class="text-2xl font-bold text-slate-800">Project Manager</h3>
          </div>
          <div class="space-y-3">
            <div class="flex items-center p-3 bg-slate-50 rounded-xl hover:bg-slate-100 transition-colors">
              <div
                class="w-8 h-8 bg-gradient-to-br from-cyan-400 to-teal-500 rounded-full flex items-center justify-center mr-3">
                <i class="fas fa-user text-white text-xs"></i>
              </div>
              <span class="font-medium text-slate-700">Raditya Dwi Pahlawadi</span>
            </div>
            <div class="flex items-center p-3 bg-slate-50 rounded-xl hover:bg-slate-100 transition-colors">
              <div
                class="w-8 h-8 bg-gradient-to-br from-blue-400 to-purple-500 rounded-full flex items-center justify-center mr-3">
                <i class="fas fa-user text-white text-xs"></i>
              </div>
              <span class="font-medium text-slate-700">Adelia Tri Ramadhani</span>
            </div>
          </div>
        </div>

        <!-- Lead Developer -->
        <div
          class="bg-white/80 backdrop-blur-sm p-8 rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 card-hover border border-white/50 group">
          <div class="flex items-center mb-6">
            <div
              class="bg-gradient-to-br from-green-500 to-teal-500 text-white p-3 rounded-2xl mr-4 group-hover:scale-110 transition-transform duration-300">
              <i class="fas fa-code text-xl"></i>
            </div>
            <h3 class="text-2xl font-bold text-slate-800">Lead Developer</h3>
          </div>
          <div class="space-y-3">
            <div class="flex items-center p-3 bg-slate-50 rounded-xl hover:bg-slate-100 transition-colors">
              <div
                class="w-8 h-8 bg-gradient-to-br from-green-400 to-blue-500 rounded-full flex items-center justify-center mr-3">
                <i class="fas fa-user text-white text-xs"></i>
              </div>
              <span class="font-medium text-slate-700">Muhammad Daffa Al-Ridzky</span>
            </div>
            <div class="flex items-center p-3 bg-slate-50 rounded-xl hover:bg-slate-100 transition-colors">
              <div
                class="w-8 h-8 bg-gradient-to-br from-teal-400 to-cyan-500 rounded-full flex items-center justify-center mr-3">
                <i class="fas fa-user text-white text-xs"></i>
              </div>
              <span class="font-medium text-slate-700">Ari Reivansyah</span>
            </div>
          </div>
        </div>

        <!-- Frontend Developer -->
        <div
          class="bg-white/80 backdrop-blur-sm p-8 rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 card-hover border border-white/50 group">
          <div class="flex items-center mb-6">
            <div
              class="bg-gradient-to-br from-purple-500 to-pink-500 text-white p-3 rounded-2xl mr-4 group-hover:scale-110 transition-transform duration-300">
              <i class="fas fa-paint-brush text-xl"></i>
            </div>
            <h3 class="text-2xl font-bold text-slate-800">Frontend Developer</h3>
          </div>
          <div class="space-y-3">
            <div class="flex items-center p-3 bg-slate-50 rounded-xl hover:bg-slate-100 transition-colors">
              <div
                class="w-8 h-8 bg-gradient-to-br from-purple-400 to-pink-500 rounded-full flex items-center justify-center mr-3">
                <i class="fas fa-user text-white text-xs"></i>
              </div>
              <span class="font-medium text-slate-700">Iftikhar Azhar</span>
            </div>
            <div class="flex items-center p-3 bg-slate-50 rounded-xl hover:bg-slate-100 transition-colors">
              <div
                class="w-8 h-8 bg-gradient-to-br from-indigo-400 to-purple-500 rounded-full flex items-center justify-center mr-3">
                <i class="fas fa-user text-white text-xs"></i>
              </div>
              <span class="font-medium text-slate-700">Rizki Ramadan</span>
            </div>
            <div class="flex items-center p-3 bg-slate-50 rounded-xl hover:bg-slate-100 transition-colors">
              <div
                class="w-8 h-8 bg-gradient-to-br from-pink-400 to-red-500 rounded-full flex items-center justify-center mr-3">
                <i class="fas fa-user text-white text-xs"></i>
              </div>
              <span class="font-medium text-slate-700">Andhika Dani</span>
            </div>
          </div>
        </div>

        <div
          class="bg-white/80 backdrop-blur-sm p-8 rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 card-hover border border-white/50 group">
          <div class="flex items-center mb-6">
            <div
              class="bg-gradient-to-br from-orange-500 to-red-500 text-white p-3 rounded-2xl mr-4 group-hover:scale-110 transition-transform duration-300">
              <i class="fas fa-server text-xl"></i>
            </div>
            <h3 class="text-2xl font-bold text-slate-800">Backend Developer</h3>
          </div>
          <div class="space-y-3">
            <div class="flex items-center p-3 bg-slate-50 rounded-xl hover:bg-slate-100 transition-colors">
              <div
                class="w-8 h-8 bg-gradient-to-br from-orange-400 to-red-500 rounded-full flex items-center justify-center mr-3">
                <i class="fas fa-user text-white text-xs"></i>
              </div>
              <span class="font-medium text-slate-700">Ari Reivansyah</span>
            </div>
            <div class="flex items-center p-3 bg-slate-50 rounded-xl hover:bg-slate-100 transition-colors">
              <div
                class="w-8 h-8 bg-gradient-to-br from-red-400 to-pink-500 rounded-full flex items-center justify-center mr-3">
                <i class="fas fa-user text-white text-xs"></i>
              </div>
              <span class="font-medium text-slate-700">Muhammad Daffa Al-Ridzky</span>
            </div>
            <div class="flex items-center p-3 bg-slate-50 rounded-xl hover:bg-slate-100 transition-colors">
              <div
                class="w-8 h-8 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-full flex items-center justify-center mr-3">
                <i class="fas fa-user text-white text-xs"></i>
              </div>
              <span class="font-medium text-slate-700">Rifqi Kamalludin</span>
            </div>
            <div class="flex items-center p-3 bg-slate-50 rounded-xl hover:bg-slate-100 transition-colors">
              <div
                class="w-8 h-8 bg-gradient-to-br from-red-400 to-red-600 rounded-full flex items-center justify-center mr-3">
                <i class="fas fa-user text-white text-xs"></i>
              </div>
              <span class="font-medium text-slate-700">Andhika Dani</span>
            </div>
          </div>
        </div>

        <div
          class="bg-white/80 backdrop-blur-sm p-8 rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 card-hover border border-white/50 group">
          <div class="flex items-center mb-6">
            <div
              class="bg-gradient-to-br from-pink-500 to-rose-500 text-white p-3 rounded-2xl mr-4 group-hover:scale-110 transition-transform duration-300">
              <i class="fas fa-palette text-xl"></i>
            </div>
            <h3 class="text-2xl font-bold text-slate-800">UI/UX Designer</h3>
          </div>
          <div class="space-y-3">
            <div class="flex items-center p-3 bg-slate-50 rounded-xl hover:bg-slate-100 transition-colors">
              <div
                class="w-8 h-8 bg-gradient-to-br from-pink-400 to-rose-500 rounded-full flex items-center justify-center mr-3">
                <i class="fas fa-user text-white text-xs"></i>
              </div>
              <span class="font-medium text-slate-700">Triandini Puspita Sari</span>
            </div>
            <div class="flex items-center p-3 bg-slate-50 rounded-xl hover:bg-slate-100 transition-colors">
              <div
                class="w-8 h-8 bg-gradient-to-br from-rose-400 to-pink-500 rounded-full flex items-center justify-center mr-3">
                <i class="fas fa-user text-white text-xs"></i>
              </div>
              <span class="font-medium text-slate-700">Torda Ibrani Sitorus</span>
            </div>
            <div class="flex items-center p-3 bg-slate-50 rounded-xl hover:bg-slate-100 transition-colors">
              <div
                class="w-8 h-8 bg-gradient-to-br from-purple-400 to-pink-500 rounded-full flex items-center justify-center mr-3">
                <i class="fas fa-user text-white text-xs"></i>
              </div>
              <span class="font-medium text-slate-700">Keysha Syakilla Ramadhani</span>
            </div>
            <div class="flex items-center p-3 bg-slate-50 rounded-xl hover:bg-slate-100 transition-colors">
              <div
                class="w-8 h-8 bg-gradient-to-br from-pink-400 to-red-500 rounded-full flex items-center justify-center mr-3">
                <i class="fas fa-user text-white text-xs"></i>
              </div>
              <span class="font-medium text-slate-700">Alfina Khomarul Asih</span>
            </div>
          </div>
        </div>

        <div
          class="bg-white/80 backdrop-blur-sm p-8 rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 card-hover border border-white/50 group">
          <div class="flex items-center mb-6">
            <div
              class="bg-gradient-to-br from-cyan-500 to-blue-500 text-white p-3 rounded-2xl mr-4 group-hover:scale-110 transition-transform duration-300">
              <i class="fas fa-bullhorn text-xl"></i>
            </div>
            <h3 class="text-2xl font-bold text-slate-800">Marketing</h3>
          </div>
          <div class="space-y-3">
            <div class="flex items-center p-3 bg-slate-50 rounded-xl hover:bg-slate-100 transition-colors">
              <div
                class="w-8 h-8 bg-gradient-to-br from-cyan-400 to-blue-500 rounded-full flex items-center justify-center mr-3">
                <i class="fas fa-user text-white text-xs"></i>
              </div>
              <span class="font-medium text-slate-700">Alfina Khomarul Asih</span>
            </div>
            <div class="flex items-center p-3 bg-slate-50 rounded-xl hover:bg-slate-100 transition-colors">
              <div
                class="w-8 h-8 bg-gradient-to-br from-blue-400 to-purple-500 rounded-full flex items-center justify-center mr-3">
                <i class="fas fa-user text-white text-xs"></i>
              </div>
              <span class="font-medium text-slate-700">Triandini Puspita Sari</span>
            </div>
            <div class="flex items-center p-3 bg-slate-50 rounded-xl hover:bg-slate-100 transition-colors">
              <div
                class="w-8 h-8 bg-gradient-to-br from-teal-400 to-blue-500 rounded-full flex items-center justify-center mr-3">
                <i class="fas fa-user text-white text-xs"></i>
              </div>
              <span class="font-medium text-slate-700">Restu Adi Putra</span>
            </div>
            <div class="flex items-center p-3 bg-slate-50 rounded-xl hover:bg-slate-100 transition-colors">
              <div
                class="w-8 h-8 bg-gradient-to-br from-purple-400 to-pink-500 rounded-full flex items-center justify-center mr-3">
                <i class="fas fa-user text-white text-xs"></i>
              </div>
              <span class="font-medium text-slate-700">Fajri Darmawan</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
  </div>
  </div>

  <!-- Services Section -->
  <div class="mb-20">
    <div class="text-center mb-16">
      <h2 class="text-4xl lg:text-5xl font-black text-slate-800 mb-6">
        Layanan <span class="text-gradient">Kami</span>
      </h2>
      <p class="text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed">
        Solusi teknologi inovatif yang kami tawarkan untuk membantu sekolah dan UMKM berkembang pesat
      </p>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 lg:px-12">
      <!-- Service Cards -->
      <div
        class="bg-white/80 backdrop-blur-sm p-8 rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 card-hover border border-white/50 group">
        <div
          class="bg-gradient-to-br from-green-500 to-emerald-600 text-white w-16 h-16 flex items-center justify-center rounded-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
          <i class="fas fa-cash-register text-2xl"></i>
        </div>
        <h3 class="text-2xl font-bold text-slate-800 mb-4">Sistem POS & Inventaris</h3>
        <p class="text-slate-600 leading-relaxed">
          Solusi kasir digital dan manajemen stok yang mudah digunakan untuk mengoptimalkan operasional usaha kecil dan
          menengah
        </p>
      </div>

      <div
        class="bg-white/80 backdrop-blur-sm p-8 rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 card-hover border border-white/50 group">
        <div
          class="bg-gradient-to-br from-blue-500 to-indigo-600 text-white w-16 h-16 flex items-center justify-center rounded-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
          <i class="fas fa-school text-2xl"></i>
        </div>
        <h3 class="text-2xl font-bold text-slate-800 mb-4">Manajemen Sekolah Digital</h3>
        <p class="text-slate-600 leading-relaxed">
          Sistem terintegrasi untuk administrasi sekolah modern yang memudahkan pengelolaan data siswa, guru, dan
          akademik
        </p>
      </div>

      <div
        class="bg-white/80 backdrop-blur-sm p-8 rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 card-hover border border-white/50 group">
        <div
          class="bg-gradient-to-br from-purple-500 to-pink-600 text-white w-16 h-16 flex items-center justify-center rounded-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
          <i class="fas fa-qrcode text-2xl"></i>
        </div>
        <h3 class="text-2xl font-bold text-slate-800 mb-4">Absensi Digital</h3>
        <p class="text-slate-600 leading-relaxed">
          Sistem absensi modern berbasis QR Code dengan validasi lokasi GPS untuk akurasi dan kemudahan monitoring
        </p>
      </div>

      <div
        class="bg-white/80 backdrop-blur-sm p-8 rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 card-hover border border-white/50 group">
        <div
          class="bg-gradient-to-br from-orange-500 to-red-600 text-white w-16 h-16 flex items-center justify-center rounded-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
          <i class="fas fa-laptop-code text-2xl"></i>
        </div>
        <h3 class="text-2xl font-bold text-slate-800 mb-4">Aplikasi Custom</h3>
        <p class="text-slate-600 leading-relaxed">
          Pengembangan aplikasi berbasis web yang disesuaikan dengan kebutuhan spesifik bisnis atau institusi Anda
        </p>
      </div>

      <div
        class="bg-white/80 backdrop-blur-sm p-8 rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 card-hover border border-white/50 group">
        <div
          class="bg-gradient-to-br from-cyan-500 to-teal-600 text-white w-16 h-16 flex items-center justify-center rounded-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
          <i class="fas fa-globe text-2xl"></i>
        </div>
        <h3 class="text-2xl font-bold text-slate-800 mb-4">Website Profil</h3>
        <p class="text-slate-600 leading-relaxed">
          Website profesional yang responsif dan modern untuk memperkenalkan bisnis atau institusi Anda secara online
        </p>
      </div>
    </div>
  </div>

  <!-- Featured Projects -->
  <div class="mb-20">
    <div class="text-center mb-16">
      <h2 class="text-4xl lg:text-5xl font-black text-slate-800 mb-6">
        Proyek <span class="text-gradient">Unggulan</span>
      </h2>
      <p class="text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed">
        Beberapa solusi teknologi terdepan yang telah kami kembangkan dan implementasikan untuk klien
      </p>
    </div>

    <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 lg:px-12">
      <!-- Project 1 -->
      <div
        class="bg-white/80 backdrop-blur-sm p-10 rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 card-hover border border-white/50 group">
        <div class="flex items-center mb-8">
          <div
            class="bg-gradient-to-br from-emerald-500 to-teal-600 text-white p-4 rounded-2xl mr-6 group-hover:scale-110 transition-transform duration-300">
            <i class="fas fa-shopping-bag text-2xl"></i>
          </div>
          <div>
            <h3 class="text-3xl font-bold text-slate-800 mb-2">Ventra POS</h3>
            <div class="w-16 h-1 bg-gradient-to-r from-emerald-500 to-teal-600 rounded-full"></div>
          </div>
        </div>
        <p class="text-lg text-slate-600 mb-8 leading-relaxed">
          Aplikasi kasir revolusioner untuk usaha fashion "Fashion24" dengan antarmuka yang intuitif dan fitur lengkap
          untuk manajemen bisnis modern
        </p>
        <div class="grid sm:grid-cols-2 gap-4">
          <div class="flex items-start group/feature">
            <div
              class="bg-gradient-to-r from-green-400 to-emerald-500 text-white rounded-full p-2 mt-1 mr-4 group-hover/feature:scale-110 transition-transform duration-300">
              <i class="fas fa-barcode text-sm"></i>
            </div>
            <span class="text-slate-700 font-medium">Scan barcode produk</span>
          </div>
          <div class="flex items-start group/feature">
            <div
              class="bg-gradient-to-r from-blue-400 to-cyan-500 text-white rounded-full p-2 mt-1 mr-4 group-hover/feature:scale-110 transition-transform duration-300">
              <i class="fas fa-chart-line text-sm"></i>
            </div>
            <span class="text-slate-700 font-medium">Laporan real-time</span>
          </div>
          <div class="flex items-start group/feature">
            <div
              class="bg-gradient-to-r from-purple-400 to-pink-500 text-white rounded-full p-2 mt-1 mr-4 group-hover/feature:scale-110 transition-transform duration-300">
              <i class="fas fa-box text-sm"></i>
            </div>
            <span class="text-slate-700 font-medium">Manajemen produk</span>
          </div>
          <div class="flex items-start group/feature">
            <div
              class="bg-gradient-to-r from-orange-400 to-red-500 text-white rounded-full p-2 mt-1 mr-4 group-hover/feature:scale-110 transition-transform duration-300">
              <i class="fas fa-mobile-alt text-sm"></i>
            </div>
            <span class="text-slate-700 font-medium">Multi-platform</span>
          </div>
        </div>
      </div>

      <!-- Project 2 -->
      <div
        class="bg-white/80 backdrop-blur-sm p-10 rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 card-hover border border-white/50 group">
        <div class="flex items-center mb-8">
          <div
            class="bg-gradient-to-br from-indigo-500 to-purple-600 text-white p-4 rounded-2xl mr-6 group-hover:scale-110 transition-transform duration-300">
            <i class="fas fa-user-clock text-2xl"></i>
          </div>
          <div>
            <h3 class="text-3xl font-bold text-slate-800 mb-2">Re-Code</h3>
            <div class="w-16 h-1 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-full"></div>
          </div>
        </div>
        <p class="text-lg text-slate-600 mb-8 leading-relaxed">
          Sistem Absensi QR Code berbasis lokasi dengan teknologi geofencing canggih untuk validasi kehadiran yang
          akurat dan anti-manipulasi
        </p>
        <div class="space-y-4">
          <div class="flex items-start group/feature">
            <div
              class="bg-gradient-to-r from-indigo-400 to-purple-500 text-white rounded-full p-2 mt-1 mr-4 group-hover/feature:scale-110 transition-transform duration-300">
              <i class="fas fa-map-marker-alt text-sm"></i>
            </div>
            <span class="text-slate-700 font-medium">Teknologi geofencing untuk validasi lokasi</span>
          </div>
          <div class="flex items-start group/feature">
            <div
              class="bg-gradient-to-r from-blue-400 to-indigo-500 text-white rounded-full p-2 mt-1 mr-4 group-hover/feature:scale-110 transition-transform duration-300">
              <i class="fas fa-qrcode text-sm"></i>
            </div>
            <span class="text-slate-700 font-medium">QR Code unik per sesi dengan enkripsi</span>
          </div>
          <div class="flex items-start group/feature">
            <div
              class="bg-gradient-to-r from-purple-400 to-pink-500 text-white rounded-full p-2 mt-1 mr-4 group-hover/feature:scale-110 transition-transform duration-300">
              <i class="fas fa-chart-bar text-sm"></i>
            </div>
            <span class="text-slate-700 font-medium">Dashboard analytics real-time</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Why Choose Us -->
  <div class="relative mb-20">
    <!-- Background gradient -->
    <div
      class="absolute inset-0 bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 rounded-3xl transform -rotate-1">
    </div>
    <div class="relative bg-white/90 backdrop-blur-sm rounded-3xl p-10 lg:p-16 shadow-2xl border border-white/50">
      <div class="text-center mb-16">
        <h2 class="text-4xl lg:text-5xl font-black text-slate-800 mb-6">
          Kenapa Memilih <span class="text-gradient">Neoroza?</span>
        </h2>
        <p class="text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed">
          Keunggulan dan nilai tambah yang membuat kami menjadi pilihan terbaik untuk solusi teknologi Anda
        </p>
      </div>

      <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
        <!-- Features -->
        <div class="text-center group">
          <div
            class="bg-gradient-to-br from-yellow-400 to-orange-500 text-white w-20 h-20 flex items-center justify-center rounded-3xl mx-auto mb-6 group-hover:scale-110 transition-all duration-300 shadow-lg">
            <i class="fas fa-lightbulb text-3xl"></i>
          </div>
          <h3 class="text-xl font-bold text-slate-800 mb-4">Relevan & Solutif</h3>
          <p class="text-slate-600 leading-relaxed">
            Solusi yang kami kembangkan berdasarkan riset mendalam terhadap kebutuhan nyata di lapangan
          </p>
        </div>

        <div class="text-center group">
          <div
            class="bg-gradient-to-br from-green-400 to-emerald-500 text-white w-20 h-20 flex items-center justify-center rounded-3xl mx-auto mb-6 group-hover:scale-110 transition-all duration-300 shadow-lg">
            <i class="fas fa-tags text-3xl"></i>
          </div>
          <h3 class="text-xl font-bold text-slate-800 mb-4">Harga Terjangkau</h3>
          <p class="text-slate-600 leading-relaxed">
            Investasi teknologi yang cost-effective khusus untuk sekolah dan UMKM dengan ROI yang tinggi
          </p>
        </div>

        <div class="text-center group">
          <div
            class="bg-gradient-to-br from-blue-400 to-indigo-500 text-white w-20 h-20 flex items-center justify-center rounded-3xl mx-auto mb-6 group-hover:scale-110 transition-all duration-300 shadow-lg">
            <i class="fas fa-users text-3xl"></i>
          </div>
          <h3 class="text-xl font-bold text-slate-800 mb-4">Tim Berkompeten</h3>
          <p class="text-slate-600 leading-relaxed">
            Dikembangkan oleh generasi muda berbakat yang memahami teknologi terkini dan kebutuhan masa depan
          </p>
        </div>

        <div class="text-center group">
          <div
            class="bg-gradient-to-br from-purple-400 to-pink-500 text-white w-20 h-20 flex items-center justify-center rounded-3xl mx-auto mb-6 group-hover:scale-110 transition-all duration-300 shadow-lg">
            <i class="fas fa-rocket text-3xl"></i>
          </div>
          <h3 class="text-xl font-bold text-slate-800 mb-4">Teknologi Modern</h3>
          <p class="text-slate-600 leading-relaxed">
            User experience yang premium dengan teknologi scalable dan future-proof untuk pertumbuhan jangka panjang
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- Contact Section -->
  <div class="text-center">
    <div
      class="bg-gradient-to-br from-slate-900 to-slate-800 rounded-3xl p-10 lg:p-16 text-white relative overflow-hidden">
      <!-- Background decoration -->
      <div
        class="absolute top-0 right-0 w-64 h-64 bg-gradient-to-bl from-blue-500/20 to-transparent rounded-full transform translate-x-32 -translate-y-32">
      </div>
      <div
        class="absolute bottom-0 left-0 w-64 h-64 bg-gradient-to-tr from-purple-500/20 to-transparent rounded-full transform -translate-x-32 translate-y-32">
      </div>

      <div class="relative">
        <h2 class="text-4xl lg:text-5xl font-black mb-6">
          Hubungi <span class="text-gradient">Kami</span>
        </h2>
        <p class="text-xl text-slate-300 max-w-3xl mx-auto mb-12 leading-relaxed">
          Siap mengubah ide menjadi solusi digital yang powerful? Mari berkolaborasi dan wujudkan transformasi teknologi
          untuk bisnis Anda
        </p>

        <div class="grid sm:grid-cols-3 gap-8 max-w-5xl mx-auto">
          <!-- Contact Cards -->
          <div
            class="bg-white/10 backdrop-blur-sm p-8 rounded-2xl hover:bg-white/20 transition-all duration-300 group border border-white/20">
            <div
              class="bg-gradient-to-br from-red-500 to-pink-600 w-16 h-16 flex items-center justify-center rounded-2xl mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
              <i class="fas fa-envelope text-2xl text-white"></i>
            </div>
            <h3 class="text-2xl font-bold mb-4">Email</h3>
            <a href="mailto:neorozatech@gmail.com"
              class="text-blue-300 hover:text-blue-200 font-medium transition-colors text-lg">
              neorozatech@gmail.com
            </a>
          </div>

          <div
            class="bg-white/10 backdrop-blur-sm p-8 rounded-2xl hover:bg-white/20 transition-all duration-300 group border border-white/20">
            <div
              class="bg-gradient-to-br from-green-500 to-emerald-600 w-16 h-16 flex items-center justify-center rounded-2xl mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
              <i class="fab fa-whatsapp text-2xl text-white"></i>
            </div>
            <h3 class="text-2xl font-bold mb-4">WhatsApp</h3>
            <a href="https://wa.me/6281383734851"
              class="text-green-300 hover:text-green-200 font-medium transition-colors text-lg">
              +62 813-8373-4851
            </a>
          </div>

          <div
            class="bg-white/10 backdrop-blur-sm p-8 rounded-2xl hover:bg-white/20 transition-all duration-300 group border border-white/20">
            <div
              class="bg-gradient-to-br from-pink-500 to-rose-600 w-16 h-16 flex items-center justify-center rounded-2xl mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
              <i class="fab fa-instagram text-2xl text-white"></i>
            </div>
            <h3 class="text-2xl font-bold mb-4">Instagram</h3>
            <a href="https://instagram.com/neoroza.tech"
              class="text-pink-300 hover:text-pink-200 font-medium transition-colors text-lg">
              @neoroza.tech
            </a>
          </div>
        </div>

        <!-- Call to Action -->
        <div class="mt-12">
          <a href="/contact"
            class="inline-flex items-center space-x-3 bg-gradient-to-r from-blue-500 to-purple-600 hover:from-blue-600 hover:to-purple-700 text-white font-bold py-4 px-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 group">
            <span class="text-lg">Mulai Konsultasi Gratis</span>
            <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform duration-300"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
  </div>

  <!-- JavaScript -->
  <script>
    // Mobile menu toggle
    document.getElementById('mobileMenuToggle').addEventListener('click', function () {
      const mobileMenu = document.getElementById('mobileMenu');
      const icon = this.querySelector('i');

      if (mobileMenu.style.maxHeight === '0px' || !mobileMenu.style.maxHeight) {
        mobileMenu.style.maxHeight = '300px';
        icon.classList.remove('fa-bars');
        icon.classList.add('fa-times');
      } else {
        mobileMenu.style.maxHeight = '0px';
        icon.classList.remove('fa-times');
        icon.classList.add('fa-bars');
      }
    });

    // Smooth scrolling for internal links
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

    // Add scroll-based animations
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

    // Observe all cards and sections for animation
    document.querySelectorAll('.card-hover').forEach(el => {
      el.style.opacity = '0';
      el.style.transform = 'translateY(30px)';
      el.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
      observer.observe(el);
    });

    // Add parallax effect to background elements
    window.addEventListener('scroll', () => {
      const scrolled = window.pageYOffset;
      const rate = scrolled * -0.5;

      document.querySelectorAll('.bg-gradient-to-br').forEach(el => {
        if (el.classList.contains('blur-3xl')) {
          el.style.transform = `translateY(${rate}px)`;
        }
      });
    });

    // Add dynamic gradient animation
    const gradientElements = document.querySelectorAll('.text-gradient');
    gradientElements.forEach(el => {
      let hue = 0;
      setInterval(() => {
        hue = (hue + 1) % 360;
        el.style.background = `linear-gradient(135deg, hsl(${hue}, 70%, 60%) 0%, hsl(${hue + 60}, 70%, 60%) 100%)`;
        el.style.webkitBackgroundClip = 'text';
        el.style.webkitTextFillColor = 'transparent';
        el.style.backgroundClip = 'text';
      }, 100);
    });

    // Add typing effect for hero subtitle
    const heroSubtitle = document.querySelector('section p');
    if (heroSubtitle) {
      const originalText = heroSubtitle.innerText;
      heroSubtitle.innerText = '';
      let i = 0;

      setTimeout(() => {
        const typeInterval = setInterval(() => {
          heroSubtitle.innerText = originalText.slice(0, i);
          i++;
          if (i > originalText.length) {
            clearInterval(typeInterval);
          }
        }, 50);
      }, 1000);
    }

    // Add floating animation to service cards
    document.querySelectorAll('.card-hover').forEach((card, index) => {
      setTimeout(() => {
        card.style.animationDelay = `${index * 0.2}s`;
        card.classList.add('animate-fade-in-up');
      }, 100);
    });

    // Add interactive hover effects for team member cards
    document.querySelectorAll('.bg-white\\/80.backdrop-blur-sm').forEach(card => {
      const gradientBg = card.querySelector('.bg-gradient-to-br');
      if (gradientBg) {
        card.addEventListener('mouseenter', () => {
          gradientBg.style.transform = 'scale(1.1) rotate(5deg)';
          gradientBg.style.transition = 'transform 0.3s ease-out';
        });

        card.addEventListener('mouseleave', () => {
          gradientBg.style.transform = 'scale(1) rotate(0deg)';
        });
      }
    });

    // Add pulse effect to contact buttons
    document.querySelectorAll('a[href^="mailto:"], a[href^="https://wa.me"], a[href^="https://instagram.com"]').forEach(link => {
      link.addEventListener('mouseenter', () => {
        link.style.animation = 'pulse 1s infinite';
      });

      link.addEventListener('mouseleave', () => {
        link.style.animation = '';
      });
    });

    // Add progressive loading for better performance
    const imageElements = document.querySelectorAll('img');
    const imageObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const img = entry.target;
          if (img.dataset.src) {
            img.src = img.dataset.src;
            img.classList.add('fade-in');
            imageObserver.unobserve(img);
          }
        }
      });
    });

    imageElements.forEach(img => imageObserver.observe(img));

    // Add theme toggle functionality (bonus feature)
    const themeToggle = document.createElement('button');
    themeToggle.innerHTML = '<i class="fas fa-moon"></i>';
    themeToggle.className = 'fixed bottom-6 right-6 bg-gradient-to-r from-purple-500 to-pink-500 text-white p-4 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 z-50';
    document.body.appendChild(themeToggle);

    let isDarkMode = false;
    themeToggle.addEventListener('click', () => {
      isDarkMode = !isDarkMode;
      if (isDarkMode) {
        document.body.style.filter = 'invert(1) hue-rotate(180deg)';
        themeToggle.innerHTML = '<i class="fas fa-sun"></i>';
      } else {
        document.body.style.filter = '';
        themeToggle.innerHTML = '<i class="fas fa-moon"></i>';
      }
    });

    // Add smooth reveal animations for sections
    const sections = document.querySelectorAll('section, .mb-20');
    sections.forEach((section, index) => {
      section.style.opacity = '0';
      section.style.transform = 'translateY(50px)';
      section.style.transition = `opacity 0.8s ease-out ${index * 0.1}s, transform 0.8s ease-out ${index * 0.1}s`;

      const sectionObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
            sectionObserver.unobserve(entry.target);
          }
        });
      }, { threshold: 0.1 });

      sectionObserver.observe(section);
    });

    // Add particle effect (optional, for premium feel)
    function createParticle() {
      const particle = document.createElement('div');
      particle.className = 'fixed pointer-events-none bg-gradient-to-r from-blue-400 to-purple-600 rounded-full opacity-20';
      particle.style.width = Math.random() * 4 + 2 + 'px';
      particle.style.height = particle.style.width;
      particle.style.left = Math.random() * window.innerWidth + 'px';
      particle.style.top = window.innerHeight + 'px';
      particle.style.zIndex = '1';

      document.body.appendChild(particle);

      const animation = particle.animate([
        { transform: 'translateY(0) rotate(0deg)', opacity: 0.2 },
        { transform: `translateY(-${window.innerHeight + 100}px) rotate(360deg)`, opacity: 0 }
      ], {
        duration: Math.random() * 3000 + 2000,
        easing: 'linear'
      });

      animation.onfinish = () => particle.remove();
    }

    // Create particles periodically
    setInterval(createParticle, 300);
  </script>

  <!-- Footer -->
  <footer class="bg-gradient-to-r from-slate-900 to-slate-800 text-white py-16 mt-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid md:grid-cols-4 gap-8">
        <!-- Company Info -->
        <div class="md:col-span-2">
          <div class="flex items-center space-x-3 mb-6">
            <div
              class="w-12 h-12 bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl flex items-center justify-center">
              <span class="text-white font-bold text-2xl">N</span>
            </div>
            <span class="text-3xl font-bold text-gradient">Neoroza</span>
          </div>
          <p class="text-slate-300 leading-relaxed mb-6 max-w-md">
            Mewujudkan transformasi digital untuk sekolah dan UMKM melalui solusi teknologi yang inovatif, terjangkau,
            dan berkelanjutan.
          </p>
          <div class="flex space-x-4">
            <a href="https://instagram.com/neoroza.tech"
              class="bg-gradient-to-r from-pink-500 to-rose-600 p-3 rounded-xl hover:scale-110 transition-transform duration-300">
              <i class="fab fa-instagram text-xl"></i>
            </a>
            <a href="mailto:neorozatech@gmail.com"
              class="bg-gradient-to-r from-blue-500 to-indigo-600 p-3 rounded-xl hover:scale-110 transition-transform duration-300">
              <i class="fas fa-envelope text-xl"></i>
            </a>
            <a href="https://wa.me/6281383734851"
              class="bg-gradient-to-r from-green-500 to-emerald-600 p-3 rounded-xl hover:scale-110 transition-transform duration-300">
              <i class="fab fa-whatsapp text-xl"></i>
            </a>
          </div>
        </div>

        <!-- Quick Links -->
        <div>
          <h3 class="text-xl font-bold mb-6">Quick Links</h3>
          <div class="space-y-3">
            <a href="/" class="block text-slate-300 hover:text-white transition-colors">Home</a>
            <a href="/about" class="block text-slate-300 hover:text-white transition-colors">About Us</a>
            <a href="/services" class="block text-slate-300 hover:text-white transition-colors">Services</a>
            <a href="/contact" class="block text-slate-300 hover:text-white transition-colors">Contact</a>
          </div>
        </div>

        <!-- Services -->
        <div>
          <h3 class="text-xl font-bold mb-6">Services</h3>
          <div class="space-y-3">
            <a href="#" class="block text-slate-300 hover:text-white transition-colors">POS System</a>
            <a href="#" class="block text-slate-300 hover:text-white transition-colors">School Management</a>
            <a href="#" class="block text-slate-300 hover:text-white transition-colors">Digital Attendance</a>
            <a href="#" class="block text-slate-300 hover:text-white transition-colors">Custom Apps</a>
            <a href="#" class="block text-slate-300 hover:text-white transition-colors">Website Development</a>
          </div>
        </div>
      </div>

      <!-- Bottom Bar -->
      <div class="border-t border-slate-700 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
        <p class="text-slate-400 mb-4 md:mb-0">
          © 2024 Neoroza Technology. Made with ❤️ by SMKN 24 Jakarta Students.
        </p>
        <div class="flex items-center space-x-6">
          <a href="#" class="text-slate-400 hover:text-white transition-colors">Privacy Policy</a>
          <a href="#" class="text-slate-400 hover:text-white transition-colors">Terms of Service</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Back to Top Button -->
  <button id="backToTop"
    class="fixed bottom-6 left-6 bg-gradient-to-r from-blue-500 to-purple-600 text-white p-4 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 z-40 opacity-0 translate-y-10">
    <i class="fas fa-arrow-up text-lg"></i>
  </button>

  <script>
    // Back to top functionality
    const backToTopBtn = document.getElementById('backToTop');

    window.addEventListener('scroll', () => {
      if (window.pageYOffset > 300) {
        backToTopBtn.style.opacity = '1';
        backToTopBtn.style.transform = 'translateY(0)';
      } else {
        backToTopBtn.style.opacity = '0';
        backToTopBtn.style.transform = 'translateY(40px)';
      }
    });

    backToTopBtn.addEventListener('click', () => {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  </script>
</body>

</html>