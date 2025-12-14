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
                    <a href="{{ route('dashboard') }}" class="flex items-center space-x-3 group">
                        <img src="{{ asset('img/neorozaLogo.png') }}" alt="Neoroza Logo"
                            class="h-8 w-auto animate-pulse" style="animation-delay: 0.5s" />
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8 animate-slide-down">
                    <a href="{{ route('dashboard') }}"
                        class="flex items-center space-x-2 text-slate-600 hover:text-primary-600 transition-colors">
                        <i class="fas fa-home text-sm"></i>
                        <span>Home</span>
                    </a>
                    <a href="{{ route('about') }}"
                        class="flex items-center space-x-2 text-primary-600 font-medium hover:text-primary-700 transition-colors">
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
                <a href="{{ route('dashboard') }}"
                    class="block px-4 py-3 text-primary-600 bg-primary-50 font-medium rounded-lg transition-colors">
                    <i class="fas fa-home mr-3 text-sm"></i>Home
                </a>
                <a href="{{ route('about') }}"
                    class="block px-4 py-3 text-slate-600 hover:text-primary-600 hover:bg-primary-50 rounded-lg transition-colors">
                    <i class="fas fa-building mr-3 text-sm"></i>About
                </a>
                <a href="{{ route('services') }}"
                    class="block px-4 py-3 text-slate-600 hover:text-primary-600 hover:bg-primary-50 rounded-lg transition-colors">
                    <i class="fas fa-cogs mr-3 text-sm"></i>Services
                </a>
                <a href="{{ route('contact') }}"
                    class="block px-4 py-3 text-slate-600 hover:text-primary-600 hover:bg-primary-50 rounded-lg transition-colors">
                    <i class="fas fa-envelope mr-3 text-sm"></i>Contact
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Hero Section -->
        <div class="absolute inset-0 bg-gradient-to-r from-blue-600/10 via-purple-600/5 to-cyan-600/10"></div>

        <div
            class="absolute -bottom-40 -left-32 w-96 h-96 bg-gradient-to-br from-cyan-400/20 to-blue-600/20 rounded-full blur-3xl">
        </div>
        <section class="relative py-20 lg:py-32 overflow-hidden">
            <!-- Background Elements -->

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

        <!-- Vision & Mission -->
        <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 lg:px-12 mb-20">
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
                        Menjadi mitra solusi teknologi kreatif yang mengubah tantangan sehari-hari menjadi kemudahan
                        bagi sekolah
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
                                class="bg-gradient-to-r from-green-400 to-blue-500 text-white rounded-full px-2 py-1 mt-1 mr-4 group-hover/item:scale-110 transition-transform duration-300">
                                <i class="fas fa-check text-xs"></i>
                            </div>
                            <span class="text-lg text-slate-600">Mengembangkan perangkat lunak yang user-friendly dan
                                solutif</span>
                        </div>
                        <div class="flex items-start group/item">
                            <div
                                class="bg-gradient-to-r from-green-400 to-blue-500 text-white rounded-full px-2 py-1 mt-1 mr-4 group-hover/item:scale-110 transition-transform duration-300">
                                <i class="fas fa-check text-xs"></i>
                            </div>
                            <span class="text-lg text-slate-600">Memberikan layanan dengan harga kompetitif untuk
                                pendidikan dan
                                UMKM</span>
                        </div>
                        <div class="flex items-start group/item">
                            <div
                                class="bg-gradient-to-r from-green-400 to-blue-500 text-white rounded-full px-2 py-1 mt-1 mr-4 group-hover/item:scale-110 transition-transform duration-300">
                                <i class="fas fa-check text-xs"></i>
                            </div>
                            <span class="text-lg text-slate-600">Wadah pengembangan skill nyata bagi siswa SMK di bidang
                                IT</span>
                        </div>
                        <div class="flex items-start group/item">
                            <div
                                class="bg-gradient-to-r from-green-400 to-blue-500 text-white rounded-full px-2 py-1 mt-1 mr-4 group-hover/item:scale-110 transition-transform duration-300">
                                <i class="fas fa-check text-xs"></i>
                            </div>
                            <span class="text-lg text-slate-600">Membangun kemandirian teknologi di tingkat sekolah dan
                                komunitas
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
                    Neoroza dioperasikan oleh <span class="font-bold text-primary-600">14 siswa berbakat</span> SMKN 24
                    Jakarta
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
                                class="w-8 h-8 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-full flex items-center justify-center mr-3">
                                <i class="fas fa-user text-white text-xs"></i>
                            </div>
                            <span class="font-medium text-slate-700">Rifqi Kamaluddin</span>
                        </div>
                        <div class="flex items-center p-3 bg-slate-50 rounded-xl hover:bg-slate-100 transition-colors">
                            <div
                                class="w-8 h-8 bg-gradient-to-br from-red-400 to-red-600 rounded-full flex items-center justify-center mr-3">
                                <i class="fas fa-user text-white text-xs"></i>
                            </div>
                            <span class="font-medium text-slate-700">Fajri Darmawan</span>
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
                                class="w-8 h-8 bg-gradient-to-br from-pink-400 to-red-500 rounded-full flex items-center justify-center mr-3">
                                <i class="fas fa-user text-white text-xs"></i>
                            </div>
                            <span class="font-medium text-slate-700">Alfina Khomarul Asih</span>
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
                    </div>
                </div>
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
                        Solusi kasir digital dan manajemen stok yang mudah digunakan untuk mengoptimalkan operasional
                        usaha kecil dan
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
                        Sistem terintegrasi untuk administrasi sekolah modern yang memudahkan pengelolaan data siswa,
                        guru, dan
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
                        Sistem absensi modern berbasis QR Code dengan validasi lokasi GPS untuk akurasi dan kemudahan
                        monitoring
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
                        Pengembangan aplikasi berbasis web yang disesuaikan dengan kebutuhan spesifik bisnis atau
                        institusi Anda
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
                        Website profesional yang responsif dan modern untuk memperkenalkan bisnis atau institusi Anda
                        secara online
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
                        Aplikasi kasir revolusioner untuk usaha fashion "Fashion24" dengan antarmuka yang intuitif dan
                        fitur lengkap
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
                        Sistem Absensi QR Code berbasis lokasi dengan teknologi geofencing canggih untuk validasi
                        kehadiran yang
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
            <div
                class="relative bg-white/90 backdrop-blur-sm rounded-3xl p-10 lg:p-16 shadow-2xl border border-white/50">
                <div class="text-center mb-16">
                    <h2 class="text-4xl lg:text-5xl font-black text-slate-800 mb-6">
                        Kenapa Memilih <span class="text-gradient">Neoroza?</span>
                    </h2>
                    <p class="text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed">
                        Keunggulan dan nilai tambah yang membuat kami menjadi pilihan terbaik untuk solusi teknologi
                        Anda
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
                            Dikembangkan oleh generasi muda berbakat yang memahami teknologi terkini dan kebutuhan masa
                            depan
                        </p>
                    </div>

                    <div class="text-center group">
                        <div
                            class="bg-gradient-to-br from-purple-400 to-pink-500 text-white w-20 h-20 flex items-center justify-center rounded-3xl mx-auto mb-6 group-hover:scale-110 transition-all duration-300 shadow-lg">
                            <i class="fas fa-rocket text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-800 mb-4">Teknologi Modern</h3>
                        <p class="text-slate-600 leading-relaxed">
                            User experience yang premium dengan teknologi scalable dan future-proof untuk pertumbuhan
                            jangka panjang
                        </p>
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
                        <img src="{{ asset('img/neorozaLogo.png') }}" alt="Neoroza Logo"
                            class="h-12 w-auto animate-pulse" style="animation-delay: 0.5s" />
                    </div>
                </div>
                <p class="text-slate-400 mb-6">
                    Building the future, one solution at a time.
                </p>
                <div class="flex justify-center space-x-6">
                    <a href="https://www.instagram.com/neorozatech"
                        class="text-slate-400 hover:text-white transition-colors">
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

        // Add smooth reveal animations for sections
        const sections = document.querySelectorAll('section, .mb-20');
        sections.forEach((section, index) => {
            section.style.opacity = '0';
            section.style.transform = 'translateY(50px)';-
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
</body>

</html>