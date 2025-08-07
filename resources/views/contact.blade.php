<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us | Neoroza</title>
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
    
    @keyframes bounce-in {
      0% { transform: scale(0) rotate(-180deg); opacity: 0; }
      50% { transform: scale(1.2) rotate(-90deg); opacity: 0.8; }
      100% { transform: scale(1) rotate(0deg); opacity: 1; }
    }
    
    .floating { animation: float 6s ease-in-out infinite; }
    .floating-reverse { animation: float-reverse 8s ease-in-out infinite; }
    .pulse-glow { animation: pulse-glow 3s ease-in-out infinite; }
    .bounce-in { animation: bounce-in 0.8s ease-out; }
    
    .gradient-animated {
      background: var(--gradient-1);
      background-size: 300% 300%;
      animation: gradient-shift 4s ease infinite;
    }
    
    /* Form animations */
    .form-group {
      position: relative;
      margin-bottom: 1.5rem;
    }
    
    .form-input {
      background: rgba(255, 255, 255, 0.95);
      border: 2px solid transparent;
      transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
      backdrop-filter: blur(10px);
    }
    
    .form-input:focus {
      background: rgba(255, 255, 255, 1);
      border-color: #6366f1;
      transform: translateY(-2px);
      box-shadow: 0 10px 25px rgba(99, 102, 241, 0.2);
    }
    
    .form-label {
      position: absolute;
      left: 12px;
      top: 12px;
      color: #6b7280;
      font-size: 16px;
      transition: all 0.3s ease;
      pointer-events: none;
      background: linear-gradient(to right, rgba(255,255,255,0.9), rgba(255,255,255,0.9));
      padding: 0 8px;
      border-radius: 4px;
    }
    
    .form-input:focus + .form-label,
    .form-input:not(:placeholder-shown) + .form-label {
      transform: translateY(-30px) translateX(-8px) scale(0.85);
      color: #6366f1;
      font-weight: 600;
    }
    
    /* Contact cards */
    .contact-card {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(20px);
      border: 1px solid rgba(255, 255, 255, 0.3);
      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      position: relative;
      overflow: hidden;
    }
    
    .contact-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
      transition: all 0.6s;
    }
    
    .contact-card:hover::before {
      left: 100%;
    }
    
    .contact-card:hover {
      transform: translateY(-10px) scale(1.02);
      box-shadow: 0 25px 50px rgba(0,0,0,0.15);
      background: rgba(255, 255, 255, 1);
    }
    
    /* Button effects */
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
    
    /* Mobile menu */
    .mobile-menu {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.3s ease-in-out;
    }
    
    .mobile-menu.show {
      max-height: 300px;
    }
    
    /* Success message animation */
    .success-message {
      animation: bounce-in 0.6s ease-out;
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
    
    /* Icon hover effects */
    .icon-hover {
      transition: all 0.3s ease;
    }
    
    .icon-hover:hover {
      transform: scale(1.1) rotate(5deg);
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
    <div class="absolute bottom-40 right-1/4 w-16 h-16 bg-gradient-to-r from-pink-400 to-purple-400 rounded-full opacity-25 floating"></div>
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
          <a href="/services" class="text-white hover:text-purple-300 transition-colors duration-300 relative group">
            <i class="fas fa-cogs mr-2"></i> Services
            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-purple-300 group-hover:w-full transition-all duration-300"></span>
          </a>
          <a href="/contact" class="text-purple-300 font-semibold relative">
            <i class="fas fa-envelope mr-2"></i> Contact
            <span class="absolute bottom-0 left-0 w-full h-0.5 bg-purple-300"></span>
          </a>
        </div>
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
      <a href="/services" class="block py-2 px-4 text-white hover:bg-white hover:bg-opacity-10 rounded-lg transition-all duration-300">
        <i class="fas fa-cogs mr-2"></i> Services
      </a>
      <a href="/contact" class="block py-2 px-4 text-purple-300 bg-white bg-opacity-10 rounded-lg font-semibold">
        <i class="fas fa-envelope mr-2"></i> Contact
      </a>
    </div>
  </div>

  <!-- Hero Section -->
  <section class="py-20 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
      <h1 class="text-5xl md:text-7xl font-black text-white mb-6 animate-on-scroll zoom-in">
        Hubungi <span class="bg-gradient-to-r from-yellow-400 to-pink-500 bg-clip-text text-transparent">Neoroza</span>
      </h1>
      <p class="text-xl md:text-2xl text-purple-100 max-w-4xl mx-auto animate-on-scroll slide-up delay-200 leading-relaxed">
        🚀 Kami siap membantu mewujudkan visi digital Anda dengan solusi teknologi terdepan
      </p>
      <div class="mt-8 animate-on-scroll slide-up delay-400">
        <div class="inline-flex items-center space-x-2 glass text-white px-6 py-3 rounded-full">
          <i class="fas fa-headset text-yellow-400 bounce-in"></i>
          <span>Response dalam 24 jam</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Main Content -->
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <div class="grid lg:grid-cols-3 gap-12">
      <!-- Contact Form - Takes 2 columns -->
      <div class="lg:col-span-2">
        <div class="contact-card rounded-3xl shadow-2xl p-8 animate-on-scroll slide-up min-h-[1253px] flex flex-col justify-between">
          <!-- HEADER -->
          <div>
            <div class="flex items-center mb-8">
              <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center mr-4 pulse-glow">
                <i class="fas fa-paper-plane text-white text-xl"></i>
              </div>
              <h2 class="text-3xl font-bold text-gray-800">Kirim Pesan</h2>
            </div>

            <!-- Success Message -->
            <div id="successMessage" class="hidden mb-6 p-4 bg-gradient-to-r from-green-400 to-green-600 text-white rounded-lg success-message">
              <i class="fas fa-check-circle mr-2"></i>
              Pesan berhasil dikirim! Kami akan segera menghubungi Anda.
            </div>

            <!-- FORM -->
            <form id="contactForm" class="space-y-6">
              <!-- Name & Email -->
              <div class="grid md:grid-cols-1 gap-6">
                <div class="form-group">
                  <input type="text" id="name" name="name" required
                    class="form-input w-full px-4 py-4 h-[100px] rounded-xl focus:outline-none"
                    placeholder=" ">
                  <label for="name" class="form-label"><i class="fas fa-user mr-2"></i>Nama Lengkap</label>
                </div>
                <div class="form-group">
                  <input type="email" id="email" name="email" required
                    class="form-input w-full px-4 py-4 h-[100px] rounded-xl focus:outline-none"
                    placeholder=" ">
                  <label for="email" class="form-label"><i class="fas fa-envelope mr-2"></i>Email</label>
                </div>
              </div>

              <!-- Phone & Subject -->
              <div class="grid md:grid-cols-1 gap-6">
                <div class="form-group">
                  <input type="tel" id="phone" name="phone"
                    class="form-input w-full px-4 py-4 h-[100px] rounded-xl focus:outline-none"
                    placeholder=" ">
                  <label for="phone" class="form-label"><i class="fas fa-phone mr-2"></i>Nomor HP (Opsional)</label>
                </div>
                <div class="form-group">
                  <select id="subject" name="subject" required
                    class="form-input w-full px-4 py-4 h-[100px] rounded-xl focus:outline-none">
                    <option value="">Pilih Subjek...</option>
                    <option value="Pertanyaan Umum">💬 Pertanyaan Umum</option>
                    <option value="Kerjasama">🤝 Penawaran Kerjasama</option>
                    <option value="Support">🛠️ Technical Support</option>
                    <option value="Quote">💰 Request Quote</option>
                  </select>
                </div>
              </div>

              <!-- Message -->
              <div class="form-group">
                <textarea id="message" name="message" rows="6" required
                  class="form-input w-full px-4 py-4 min-h-[300px] rounded-xl focus:outline-none resize-none"
                  placeholder=" "></textarea>
                <label for="message" class="form-label"><i class="fas fa-comment-dots mr-2"></i>Pesan Anda</label>
              </div>
            </form>
          </div>

          <!-- BUTTON: Stuck to Bottom -->
          <div class="pt-6">
            <button type="submit"
              class="btn-glow text-white px-8 py-4 h-[60px] rounded-xl font-bold text-lg w-full md:w-auto relative overflow-hidden">
              <span class="relative z-10">
                <i class="fas fa-rocket mr-2"></i> Kirim Pesan
              </span>
            </button>
          </div>
        </div>
      </div>


      <!-- Contact Info Sidebar -->
      <div class="space-y-6">
        <!-- Contact Cards -->
        <div class="contact-card rounded-3xl shadow-2xl p-6 animate-on-scroll slide-up delay-100">
          <div class="text-center mb-6">
            <div class="w-16 h-16 bg-gradient-to-r from-green-400 to-blue-500 rounded-full flex items-center justify-center mx-auto mb-4 pulse-glow">
              <i class="fas fa-map-marker-alt text-white text-2xl"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-800">Alamat</h3>
          </div>
          <div class="text-center text-gray-600 space-y-1">
            <p class="font-semibold">SMKN 24 Jakarta</p>
            <p>Jl. Bambu Hitam No.3, RT.3/RW.1</p>
            <p>Bambu Apus, Cipayung</p>
            <p>Jakarta Timur 13890</p>
          </div>
        </div>

        <div class="contact-card rounded-3xl shadow-2xl p-6 animate-on-scroll slide-up delay-200">
          <div class="text-center mb-6">
            <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-600 rounded-full flex items-center justify-center mx-auto mb-4 pulse-glow">
              <i class="fas fa-envelope text-white text-2xl"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-800">Email</h3>
          </div>
          <div class="text-center">
            <a href="mailto:neorozatech@gmail.com" class="text-purple-600 hover:text-purple-800 font-semibold text-lg transition-colors duration-300">
              neorozatech@gmail.com
            </a>
          </div>
        </div>

        <div class="contact-card rounded-3xl shadow-2xl p-6 animate-on-scroll slide-up delay-300">
          <div class="text-center mb-6">
            <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-green-600 rounded-full flex items-center justify-center mx-auto mb-4 pulse-glow">
              <i class="fab fa-whatsapp text-white text-2xl"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-800">WhatsApp</h3>
          </div>
          <div class="text-center">
            <a href="https://wa.me/6281383734851" target="_blank" class="text-green-600 hover:text-green-800 font-semibold text-lg transition-colors duration-300">
              +62 881-9980-70
            </a>
          </div>
        </div>

        <div class="contact-card rounded-3xl shadow-2xl p-6 animate-on-scroll slide-up delay-400">
          <div class="text-center mb-6">
            <div class="w-16 h-16 bg-gradient-to-r from-pink-500 to-rose-600 rounded-full flex items-center justify-center mx-auto mb-4 pulse-glow">
              <i class="fab fa-instagram text-white text-2xl"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-800">Instagram</h3>
          </div>
          <div class="text-center">
            <a href="https://www.instagram.com/neorozatech" target="_blank" class="text-pink-600 hover:text-pink-800 font-semibold text-lg transition-colors duration-300">
              @neorozatech
            </a>
          </div>
        </div>

        <!-- Operating Hours -->
        <div class="glass rounded-3xl p-6 animate-on-scroll slide-up delay-500">
          <div class="text-center mb-6">
            <div class="w-16 h-16 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full flex items-center justify-center mx-auto mb-4 pulse-glow">
              <i class="fas fa-clock text-white text-2xl"></i>
            </div>
            <h3 class="text-xl font-bold text-white">Jam Operasional</h3>
          </div>
          <div class="text-purple-100 space-y-2 text-center">
            <div class="flex justify-between items-center">
              <span>Senin-Jumat:</span>
              <span class="font-semibold">08:00 - 16:00 WIB</span>
            </div>
            <div class="flex justify-between items-center">
              <span>Sabtu:</span>
              <span class="font-semibold">09:00 - 14:00 WIB</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- CTA Section -->
    <div class="mt-20 text-center glass rounded-3xl shadow-2xl p-12 animate-on-scroll zoom-in relative overflow-hidden">
      <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-pink-600 opacity-10"></div>
      <div class="relative z-10">
        <div class="w-20 h-20 bg-gradient-to-r from-yellow-400 to-pink-500 rounded-full flex items-center justify-center mx-auto mb-6 pulse-glow">
          <i class="fas fa-star text-2xl text-white"></i>
        </div>
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
          Siap untuk <span class="bg-gradient-to-r from-yellow-400 to-pink-500 bg-clip-text text-transparent">Kolaborasi?</span>
        </h2>
        <p class="text-xl text-purple-100 max-w-3xl mx-auto mb-8 leading-relaxed">
          🚀 Mari diskusikan proyek impian Anda! Tim Neoroza siap memberikan solusi teknologi terbaik.
        </p>
        <div class="flex justify-center items-center space-x-6">
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

    // Form submission with animation
    const contactForm = document.getElementById('contactForm');
    const successMessage = document.getElementById('successMessage');
    
    contactForm.addEventListener('submit', (e) => {
      e.preventDefault();
      
      // Simulate form submission
      const formData = new FormData(contactForm);
      const submitButton = contactForm.querySelector('button[type="submit"]');
      
      // Add loading state
      submitButton.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Mengirim...';
      submitButton.disabled = true;
      
      // Simulate API call
      setTimeout(() => {
        // Show success message with animation
        successMessage.classList.remove('hidden');
        successMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
        
        // Reset form
        contactForm.reset();
        
        // Reset button
        submitButton.innerHTML = '<span class="relative z-10"><i class="fas fa-rocket mr-2"></i> Kirim Pesan</span>';
        submitButton.disabled = false;
        
        // Hide success message after 5 seconds
        setTimeout(() => {
          successMessage.classList.add('hidden');
        }, 5000);
        
        // Add confetti effect (optional)
        createConfetti();
        
      }, 2000);
    });

    // Confetti effect
    const createConfetti = () => {
      const colors = ['#ff6b6b', '#4ecdc4', '#45b7d1', '#96ceb4', '#feca57'];
      const confettiCount = 50;
      
      for (let i = 0; i < confettiCount; i++) {
        const confetti = document.createElement('div');
        confetti.style.cssText = `
          position: fixed;
          width: 10px;
          height: 10px;
          background: ${colors[Math.floor(Math.random() * colors.length)]};
          left: ${Math.random() * 100}%;
          top: -10px;
          z-index: 9999;
          pointer-events: none;
          border-radius: 50%;
        `;
        
        document.body.appendChild(confetti);
        
        const animation = confetti.animate([
          {
            transform: 'translateY(-100vh) rotate(0deg)',
            opacity: 1
          },
          {
            transform: `translateY(100vh) rotate(${Math.random() * 360}deg)`,
            opacity: 0
          }
        ], {
          duration: Math.random() * 3000 + 2000,
          easing: 'cubic-bezier(0.5, 0, 0.5, 1)'
        });
        
        animation.onfinish = () => confetti.remove();
      }
    };

    // Parallax effect for background elements
    window.addEventListener('scroll', () => {
      const scrolled = window.pageYOffset;
      const parallaxElements = document.querySelectorAll('.floating, .floating-reverse');
      
      parallaxElements.forEach((element, index) => {
        const speed = 0.1 + (index * 0.05);
        element.style.transform += ` translateY(${scrolled * speed}px)`;
      });
    });

    // Form input animations
    const formInputs = document.querySelectorAll('.form-input');
    
    formInputs.forEach(input => {
      input.addEventListener('focus', () => {
        input.parentElement.classList.add('focused');
      });
      
      input.addEventListener('blur', () => {
        if (!input.value) {
          input.parentElement.classList.remove('focused');
        }
      });
      
      // Check if input has value on page load
      if (input.value) {
        input.parentElement.classList.add('focused');
      }
    });

    // Add typing effect to hero text
    const typeWriter = (element, text, speed = 100) => {
      let i = 0;
      element.innerHTML = '';
      
      const type = () => {
        if (i < text.length) {
          element.innerHTML += text.charAt(i);
          i++;
          setTimeout(type, speed);
        }
      };
      
      type();
    };

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

    // Add mouse trail effect
    const createMouseTrail = () => {
      const trail = [];
      const trailLength = 20;
      
      document.addEventListener('mousemove', (e) => {
        trail.push({ x: e.clientX, y: e.clientY, time: Date.now() });
        
        if (trail.length > trailLength) {
          trail.shift();
        }
        
        // Create trail elements
        trail.forEach((point, index) => {
          const trailElement = document.createElement('div');
          const opacity = index / trailLength;
          const size = (index / trailLength) * 10;
          
          trailElement.style.cssText = `
            position: fixed;
            width: ${size}px;
            height: ${size}px;
            background: radial-gradient(circle, rgba(99,102,241,${opacity}) 0%, transparent 70%);
            left: ${point.x}px;
            top: ${point.y}px;
            pointer-events: none;
            z-index: 9998;
            border-radius: 50%;
            transform: translate(-50%, -50%);
          `;
          
          document.body.appendChild(trailElement);
          
          setTimeout(() => {
            trailElement.remove();
          }, 500);
        });
      });
    };

    // Interactive background effect
    const createInteractiveBackground = () => {
      const canvas = document.createElement('canvas');
      const ctx = canvas.getContext('2d');
      canvas.style.cssText = `
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: -1;
        opacity: 0.3;
      `;
      
      document.body.appendChild(canvas);
      
      const resizeCanvas = () => {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
      };
      
      window.addEventListener('resize', resizeCanvas);
      resizeCanvas();
      
      const particles = [];
      const particleCount = 50;
      
      for (let i = 0; i < particleCount; i++) {
        particles.push({
          x: Math.random() * canvas.width,
          y: Math.random() * canvas.height,
          vx: (Math.random() - 0.5) * 2,
          vy: (Math.random() - 0.5) * 2,
          size: Math.random() * 3 + 1,
          hue: Math.random() * 360
        });
      }
      
      const animate = () => {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        
        particles.forEach(particle => {
          particle.x += particle.vx;
          particle.y += particle.vy;
          
          if (particle.x < 0 || particle.x > canvas.width) particle.vx *= -1;
          if (particle.y < 0 || particle.y > canvas.height) particle.vy *= -1;
          
          ctx.beginPath();
          ctx.arc(particle.x, particle.y, particle.size, 0, Math.PI * 2);
          ctx.fillStyle = `hsla(${particle.hue}, 70%, 60%, 0.8)`;
          ctx.fill();
          
          particle.hue += 0.5;
        });
        
        requestAnimationFrame(animate);
      };
      
      animate();
    };

    // Initialize all effects
    document.addEventListener('DOMContentLoaded', () => {
      animateOnScroll();
      createMouseTrail();
      createInteractiveBackground();
      
      // Add loading animation
      document.body.style.opacity = '0';
      setTimeout(() => {
        document.body.style.transition = 'opacity 0.5s ease-in-out';
        document.body.style.opacity = '1';
      }, 100);
      
      // Add entrance animations to elements
      setTimeout(() => {
        document.querySelectorAll('.bounce-in').forEach((el, index) => {
          setTimeout(() => {
            el.style.animationDelay = `${index * 0.1}s`;
            el.classList.add('animate');
          }, index * 100);
        });
      }, 500);
    });

    // Re-run animations on load
    window.addEventListener('load', () => {
      animateOnScroll();
    });
  </script>
</body>
</html>