<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <?php include "nav.php"; ?>
  
  <body class="selection:bg-[#1769F5] selection:text-white relative overflow-x-hidden bg-[#F8FAFC] text-[#1E293B]">
    <!-- Ambient Background Gradients & Glows -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[1200px] h-[700px] bg-gradient-to-tr from-blue-300/30 via-indigo-200/25 to-purple-200/20 rounded-full blur-[160px] pointer-events-none"></div>
    <div class="absolute top-[1600px] left-10 w-[600px] h-[600px] bg-blue-200/30 rounded-full blur-[180px] pointer-events-none"></div>
    <div class="absolute top-[2800px] right-10 w-[700px] h-[700px] bg-purple-200/25 rounded-full blur-[180px] pointer-events-none"></div>
    <div class="absolute top-[4000px] left-1/3 w-[600px] h-[600px] bg-sky-200/30 rounded-full blur-[180px] pointer-events-none"></div>

    <!-- Hero Section -->
    <section class="min-h-screen flex flex-col justify-center px-4 sm:px-6 md:px-12 pt-36 pb-28 relative z-10">
      <div class="max-w-5xl mx-auto text-center">
        <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full bg-white/80 backdrop-blur-xl border border-black/10 text-xs font-semibold text-[#1769F5] mb-8 shadow-sm hover:border-[#1769F5]/40 transition">
          <span class="w-2 h-2 rounded-full bg-[#1769F5] animate-pulse"></span>
          DIGITAL PRODUCT ECOSYSTEM
        </div>

        <h1 class="text-4xl sm:text-6xl md:text-7xl font-extrabold tracking-tight leading-[1.08] mb-8 text-[#0F172A] font-['Plus_Jakarta_Sans']">
          Satu ekosistem. Berbagai solusi digital untuk <span class="liquid-gradient">bisnis dan masa depan.</span>
        </h1>

        <p class="text-[#475569] text-lg sm:text-xl max-w-2xl mx-auto mb-12 leading-relaxed font-light">
          Mozasoft menghadirkan solusi perangkat lunak modern untuk membantu bisnis, organisasi, dan individu bekerja lebih efisien melalui teknologi yang terintegrasi.
        </p>

        <div class="flex flex-wrap items-center justify-center gap-4">
          <a href="#product" class="btn-apple px-8 py-4 rounded-full text-sm font-semibold shadow-lg shadow-blue-500/20">Jelajahi Ekosistem</a>
          <a href="https://wa.me/62895380052983" target="_blank" class="px-8 py-4 rounded-full bg-white hover:bg-slate-50 text-[#0F172A] text-sm font-semibold shadow-sm border border-slate-200/80 transition">Hubungi Kami</a>
        </div>
      </div>

      <!-- App Preview Carousel Window -->
      <div class="mt-20 sm:mt-24 flex justify-center px-2 sm:px-4">
        <div class="macos-window rounded-3xl overflow-hidden max-w-5xl w-full relative group shadow-2xl border border-white/40">
          <div class="bg-white/80 backdrop-blur-xl px-5 py-4 flex items-center justify-between border-b border-slate-200/80">
            <div class="flex space-x-2">
              <div class="w-3 h-3 rounded-full bg-[#FF5F56] shadow-sm"></div>
              <div class="w-3 h-3 rounded-full bg-[#FFBD2E] shadow-sm"></div>
              <div class="w-3 h-3 rounded-full bg-[#27C93F] shadow-sm"></div>
            </div>
            <div id="carousel-title" class="text-xs text-[#64748B] font-mono font-medium truncate max-w-xs sm:max-w-md">Color Sort — Featured Game (colorsort.msof.cloud)</div>
            <div class="flex space-x-1.5">
              <button onclick="prevSlide()" class="w-7 h-7 rounded-full bg-slate-100 hover:bg-slate-200 flex items-center justify-center text-xs text-[#0F172A] transition cursor-pointer font-bold">‹</button>
              <button onclick="nextSlide()" class="w-7 h-7 rounded-full bg-slate-100 hover:bg-slate-200 flex items-center justify-center text-xs text-[#0F172A] transition cursor-pointer font-bold">›</button>
            </div>
          </div>
          
          <!-- Carousel Slides Container -->
          <div class="relative overflow-hidden aspect-[16/9] w-full bg-slate-900">
            <div id="carousel-slides" class="flex transition-transform duration-500 ease-out h-full w-full">
              <div class="w-full flex-shrink-0 h-full">
                <img src="images/color-sort.jpg" alt="Color Sort" class="w-full h-full object-cover" />
              </div>
              <div class="w-full flex-shrink-0 h-full">
                <img src="images/ular.jpg" alt="Game Ular Rimba" class="w-full h-full object-cover" />
              </div>
              <div class="w-full flex-shrink-0 h-full">
                <img src="images/mofin.jpg" alt="Mofin Financial App" class="w-full h-full object-cover" />
              </div>
              <div class="w-full flex-shrink-0 h-full">
                <img src="images/moza-asesmen.png" alt="Moza Asesmen" class="w-full h-full object-cover" />
              </div>
              <div class="w-full flex-shrink-0 h-full">
                <img src="images/claundry.jpg" alt="Laundry POS" class="w-full h-full object-cover" />
              </div>
            </div>
          </div>

          <!-- Carousel Indicators -->
          <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex space-x-2 bg-black/40 backdrop-blur-md px-3.5 py-2 rounded-full z-20 shadow-lg">
            <button onclick="goToSlide(0)" class="w-6 h-2 rounded-full bg-white transition-all duration-300 cursor-pointer" id="dot-0"></button>
            <button onclick="goToSlide(1)" class="w-2 h-2 rounded-full bg-white/50 transition-all duration-300 cursor-pointer" id="dot-1"></button>
            <button onclick="goToSlide(2)" class="w-2 h-2 rounded-full bg-white/50 transition-all duration-300 cursor-pointer" id="dot-2"></button>
            <button onclick="goToSlide(3)" class="w-2 h-2 rounded-full bg-white/50 transition-all duration-300 cursor-pointer" id="dot-3"></button>
            <button onclick="goToSlide(4)" class="w-2 h-2 rounded-full bg-white/50 transition-all duration-300 cursor-pointer" id="dot-4"></button>
          </div>
        </div>
      </div>

      <script>
        let currentSlide = 0;
        const totalSlides = 5;
        const titles = [
          "Color Sort — Featured Game (colorsort.msof.cloud)",
          "Game Ular Rimba — Mini Board Game (ular.msof.cloud)",
          "Mofin — Aplikasi Pencatatan Keuangan & Investasi (mofin.jpg)",
          "Moza Asesmen — Platform Digital Uji Kompetensi LSP (moza-asesmen.png)",
          "Laundry POS — Sistem Kasir & Manajemen Laundry (claundry.jpg)"
        ];

        function updateCarousel() {
          const slidesContainer = document.getElementById('carousel-slides');
          if (!slidesContainer) return;
          slidesContainer.style.transform = `translateX(-${currentSlide * 100}%)`;
          const titleEl = document.getElementById('carousel-title');
          if (titleEl) titleEl.innerText = titles[currentSlide];
          
          for (let i = 0; i < totalSlides; i++) {
            const dot = document.getElementById(`dot-${i}`);
            if (!dot) continue;
            if (i === currentSlide) {
              dot.classList.remove('bg-white/50', 'w-2');
              dot.classList.add('bg-white', 'w-6');
            } else {
              dot.classList.remove('bg-white', 'w-6');
              dot.classList.add('bg-white/50', 'w-2');
            }
          }
        }

        function nextSlide() {
          currentSlide = (currentSlide + 1) % totalSlides;
          updateCarousel();
        }

        function prevSlide() {
          currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
          updateCarousel();
        }

        function goToSlide(index) {
          currentSlide = index;
          updateCarousel();
        }

        // Auto advance slide every 5 seconds
        setInterval(nextSlide, 5000);
      </script>
    </section>

    <!-- Brand Introduction Section -->
    <section class="py-24 px-6 relative z-10 border-t border-slate-200/80 bg-white/70 backdrop-blur-xl">
      <div class="max-w-3xl mx-auto text-center">
        <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight mb-6 text-[#0F172A] font-['Plus_Jakarta_Sans']">
          Teknologi yang dirancang untuk menyederhanakan berbagai kebutuhan.
        </h2>
        <p class="text-[#475569] text-lg font-light leading-relaxed">
          Melalui pengembangan produk digital yang beragam, Mozasoft berkomitmen menghadirkan teknologi yang mudah digunakan, relevan, dan memberikan manfaat nyata.
        </p>
      </div>
    </section>

    <!-- Product Ecosystem Section -->
    <section id="product" class="py-32 px-4 sm:px-6 relative z-10">
      <div class="max-w-6xl mx-auto text-center">
        <div class="inline-block text-xs font-semibold uppercase tracking-widest text-[#1769F5] mb-3 bg-blue-50 px-3.5 py-1.5 rounded-full">Portfolio Produk</div>
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold tracking-tight mb-4 text-[#0F172A] font-['Plus_Jakarta_Sans']">Produk Unggulan</h2>
        <p class="text-[#475569] mb-20 max-w-xl mx-auto font-light text-base md:text-lg">
          Solusi digital terintegrasi dirancang dengan presisi tinggi untuk berbagai kebutuhan industri dan gaya hidup.
        </p>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 text-left">
          <!-- 1. Mofin -->
          <div class="liquid-glass p-8 sm:p-10 rounded-3xl transition-all duration-300 flex flex-col justify-between group hover:border-[#1769F5]/40 hover:shadow-2xl hover:-translate-y-1">
            <div>
              <div class="flex justify-between items-start mb-6">
                <div class="w-14 h-14 rounded-2xl bg-white border border-slate-200 flex items-center justify-center text-3xl shadow-sm group-hover:scale-110 transition duration-300">💰</div>
                <span class="px-3 py-1 rounded-full bg-blue-50 text-[#1769F5] text-xs font-semibold tracking-wide">FINANCE</span>
              </div>
              <h3 class="text-2xl font-bold mb-3 text-[#0F172A] tracking-tight font-['Plus_Jakarta_Sans'] group-hover:text-[#1769F5] transition">Mofin</h3>
              <p class="text-[#475569] mb-8 font-light leading-relaxed text-sm md:text-base">
                Aplikasi pencatatan keuangan lengkap untuk mengelola dompet cash, bank konvensional, bank digital, e-wallet, hingga portofolio investasi logam mulia, reksadana, saham, dan kripto.
              </p>
            </div>
            <div>
              <a href="mofin.php" class="inline-flex items-center space-x-2 px-6 py-3 rounded-full bg-slate-50 hover:bg-[#1769F5] hover:text-white text-[#0F172A] text-sm font-medium transition duration-300 border border-slate-200/80 shadow-sm">
                <span>Pelajari Produk</span>
                <span class="text-xs">→</span>
              </a>
            </div>
          </div>

          <!-- 2. Game Ular Rimba -->
          <div class="liquid-glass p-8 sm:p-10 rounded-3xl transition-all duration-300 flex flex-col justify-between group hover:border-emerald-500/40 hover:shadow-2xl hover:-translate-y-1">
            <div>
              <div class="flex justify-between items-start mb-6">
                <div class="w-14 h-14 rounded-2xl bg-white border border-slate-200 flex items-center justify-center text-3xl shadow-sm group-hover:scale-110 transition duration-300">🐍</div>
                <span class="px-3 py-1 rounded-full bg-emerald-50 text-emerald-600 text-xs font-semibold tracking-wide">GAME</span>
              </div>
              <h3 class="text-2xl font-bold mb-3 text-[#0F172A] tracking-tight font-['Plus_Jakarta_Sans'] group-hover:text-emerald-600 transition">Game Ular Rimba</h3>
              <p class="text-[#475569] mb-8 font-light leading-relaxed text-sm md:text-base">
                Mini board game mirip ular tangga dengan ikon hewan rimba, aturan baru, kartu positif & negatif ala monopoli, bisa lawan bot, co-op 4 player, dan online multiplayer.
              </p>
            </div>
            <div>
              <a href="ular.php" class="inline-flex items-center space-x-2 px-6 py-3 rounded-full bg-slate-50 hover:bg-emerald-600 hover:text-white text-[#0F172A] text-sm font-medium transition duration-300 border border-slate-200/80 shadow-sm">
                <span>Pelajari Produk</span>
                <span class="text-xs">→</span>
              </a>
            </div>
          </div>

          <!-- 3. Laundry POS -->
          <div class="liquid-glass p-8 sm:p-10 rounded-3xl transition-all duration-300 flex flex-col justify-between group hover:border-[#1769F5]/40 hover:shadow-2xl hover:-translate-y-1">
            <div>
              <div class="flex justify-between items-start mb-6">
                <div class="w-14 h-14 rounded-2xl bg-white border border-slate-200 flex items-center justify-center text-3xl shadow-sm group-hover:scale-110 transition duration-300">🧺</div>
                <span class="px-3 py-1 rounded-full bg-blue-50 text-[#1769F5] text-xs font-semibold tracking-wide">BUSINESS</span>
              </div>
              <h3 class="text-2xl font-bold mb-3 text-[#0F172A] tracking-tight font-['Plus_Jakarta_Sans'] group-hover:text-[#1769F5] transition">Laundry POS</h3>
              <p class="text-[#475569] mb-8 font-light leading-relaxed text-sm md:text-base">
                Sistem kasir dan manajemen bisnis laundry untuk membantu mengelola transaksi, operasional, dan laporan bisnis secara lebih efisien.
              </p>
            </div>
            <div>
              <a href="laundry.php" class="inline-flex items-center space-x-2 px-6 py-3 rounded-full bg-slate-50 hover:bg-[#1769F5] hover:text-white text-[#0F172A] text-sm font-medium transition duration-300 border border-slate-200/80 shadow-sm">
                <span>Pelajari Produk</span>
                <span class="text-xs">→</span>
              </a>
            </div>
          </div>

          <!-- 4. CitCat -->
          <div class="liquid-glass p-8 sm:p-10 rounded-3xl transition-all duration-300 flex flex-col justify-between group hover:border-emerald-500/40 hover:shadow-2xl hover:-translate-y-1">
            <div>
              <div class="flex justify-between items-start mb-6">
                <div class="w-14 h-14 rounded-2xl bg-white border border-slate-200 flex items-center justify-center text-3xl shadow-sm group-hover:scale-110 transition duration-300">🍉</div>
                <span class="px-3 py-1 rounded-full bg-emerald-50 text-emerald-600 text-xs font-semibold tracking-wide">COMMUNICATION</span>
              </div>
              <h3 class="text-2xl font-bold mb-3 text-[#0F172A] tracking-tight font-['Plus_Jakarta_Sans'] group-hover:text-emerald-600 transition">CitCat</h3>
              <p class="text-[#475569] mb-8 font-light leading-relaxed text-sm md:text-base">
                Aplikasi komunikasi modern untuk mendukung interaksi, percakapan, dan kolaborasi secara real-time.
              </p>
            </div>
            <div>
              <a href="citcat.php" class="inline-flex items-center space-x-2 px-6 py-3 rounded-full bg-slate-50 hover:bg-emerald-600 hover:text-white text-[#0F172A] text-sm font-medium transition duration-300 border border-slate-200/80 shadow-sm">
                <span>Pelajari Produk</span>
                <span class="text-xs">→</span>
              </a>
            </div>
          </div>

          <!-- 5. Color Sort -->
          <div class="liquid-glass p-8 sm:p-10 rounded-3xl transition-all duration-300 flex flex-col justify-between group hover:border-[#6558E8]/40 hover:shadow-2xl hover:-translate-y-1">
            <div>
              <div class="flex justify-between items-start mb-6">
                <div class="w-14 h-14 rounded-2xl bg-white border border-slate-200 flex items-center justify-center text-3xl shadow-sm group-hover:scale-110 transition duration-300">🧪</div>
                <span class="px-3 py-1 rounded-full bg-purple-50 text-[#6558E8] text-xs font-semibold tracking-wide">ENTERTAINMENT</span>
              </div>
              <h3 class="text-2xl font-bold mb-3 text-[#0F172A] tracking-tight font-['Plus_Jakarta_Sans'] group-hover:text-[#6558E8] transition">Color Sort</h3>
              <p class="text-[#475569] mb-8 font-light leading-relaxed text-sm md:text-base">
                Game puzzle pencocokan warna yang menghadirkan pengalaman bermain sederhana dan menyenangkan dengan 100 level kesulitan.
              </p>
            </div>
            <div>
              <a href="colorsort.php" class="inline-flex items-center space-x-2 px-6 py-3 rounded-full bg-slate-50 hover:bg-[#6558E8] hover:text-white text-[#0F172A] text-sm font-medium transition duration-300 border border-slate-200/80 shadow-sm">
                <span>Pelajari Produk</span>
                <span class="text-xs">→</span>
              </a>
            </div>
          </div>

          <!-- 6. Moza Asesmen -->
          <div class="liquid-glass p-8 sm:p-10 rounded-3xl transition-all duration-300 flex flex-col justify-between group hover:border-amber-500/40 hover:shadow-2xl hover:-translate-y-1">
            <div>
              <div class="flex justify-between items-start mb-6">
                <div class="w-14 h-14 rounded-2xl bg-white border border-slate-200 flex items-center justify-center text-3xl shadow-sm group-hover:scale-110 transition duration-300">📋</div>
                <span class="px-3 py-1 rounded-full bg-amber-50 text-amber-600 text-xs font-semibold tracking-wide">EDUCATION</span>
              </div>
              <h3 class="text-2xl font-bold mb-3 text-[#0F172A] tracking-tight font-['Plus_Jakarta_Sans'] group-hover:text-amber-600 transition">Moza Asesmen</h3>
              <p class="text-[#475569] mb-8 font-light leading-relaxed text-sm md:text-base">
                Platform digital untuk mendukung proses ujian, asesmen, dan pengelolaan evaluasi kompetensi Lembaga Sertifikasi Profesi.
              </p>
            </div>
            <div>
              <a href="asesmen.php" class="inline-flex items-center space-x-2 px-6 py-3 rounded-full bg-slate-50 hover:bg-amber-600 hover:text-white text-[#0F172A] text-sm font-medium transition duration-300 border border-slate-200/80 shadow-sm">
                <span>Pelajari Produk</span>
                <span class="text-xs">→</span>
              </a>
            </div>
          </div>

          <!-- 7. Lokasio -->
          <div class="liquid-glass p-8 sm:p-10 rounded-3xl transition-all duration-300 flex flex-col justify-between group hover:border-sky-500/40 hover:shadow-2xl hover:-translate-y-1">
            <div>
              <div class="flex justify-between items-start mb-6">
                <div class="w-14 h-14 rounded-2xl bg-white border border-slate-200 flex items-center justify-center text-3xl shadow-sm group-hover:scale-110 transition duration-300">🗺️</div>
                <span class="px-3 py-1 rounded-full bg-sky-50 text-sky-600 text-xs font-semibold tracking-wide">DISCOVERY</span>
              </div>
              <h3 class="text-2xl font-bold mb-3 text-[#0F172A] tracking-tight font-['Plus_Jakarta_Sans'] group-hover:text-sky-600 transition">Lokasio</h3>
              <p class="text-[#475569] mb-8 font-light leading-relaxed text-sm md:text-base">
                Platform pencarian lokasi, kios, booth, dan ruang usaha untuk membantu menemukan peluang bisnis serta kebutuhan komersial.
              </p>
            </div>
            <div>
              <a href="lokasio.php" class="inline-flex items-center space-x-2 px-6 py-3 rounded-full bg-slate-50 hover:bg-sky-600 hover:text-white text-[#0F172A] text-sm font-medium transition duration-300 border border-slate-200/80 shadow-sm">
                <span>Pelajari Produk</span>
                <span class="text-xs">→</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Solutions Section -->
    <section id="solutions" class="py-32 px-4 sm:px-6 relative z-10 border-t border-slate-200/80 bg-white/60 backdrop-blur-xl">
      <div class="max-w-6xl mx-auto text-center">
        <div class="inline-block text-xs font-semibold uppercase tracking-widest text-[#1769F5] mb-3 bg-blue-50 px-3.5 py-1.5 rounded-full">Solusi Komprehensif</div>
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold tracking-tight mb-4 text-[#0F172A] font-['Plus_Jakarta_Sans']">Solusi Digital untuk Berbagai Kebutuhan</h2>
        <p class="text-[#475569] mb-20 max-w-xl mx-auto font-light text-base md:text-lg">
          Dirancang khusus untuk memberikan dampak langsung pada efisiensi operasional dan kualitas pengalaman digital.
        </p>

        <div class="grid md:grid-cols-3 gap-8 text-left">
          <div class="liquid-glass p-8 sm:p-10 rounded-3xl hover:shadow-xl transition duration-300 border border-slate-200/80">
            <div class="w-14 h-14 rounded-2xl bg-blue-50 flex items-center justify-center text-2xl mb-6 text-[#1769F5] shadow-sm">💼</div>
            <h3 class="text-xl font-bold text-[#0F172A] mb-3 font-['Plus_Jakarta_Sans']">Business Solutions</h3>
            <p class="text-[#475569] text-sm font-light leading-relaxed mb-6">
              Fokus pada manajemen bisnis, pencatatan transaksi kasir, operasional harian, dan peningkatan efisiensi kerja melalui sistem terintegrasi.
            </p>
            <span class="text-xs font-semibold text-[#1769F5] bg-blue-50 px-3 py-1 rounded-full">Produk: Laundry POS</span>
          </div>

          <div class="liquid-glass p-8 sm:p-10 rounded-3xl hover:shadow-xl transition duration-300 border border-slate-200/80">
            <div class="w-14 h-14 rounded-2xl bg-amber-50 flex items-center justify-center text-2xl mb-6 text-amber-600 shadow-sm">🎓</div>
            <h3 class="text-xl font-bold text-[#0F172A] mb-3 font-['Plus_Jakarta_Sans']">Education Solutions</h3>
            <p class="text-[#475569] text-sm font-light leading-relaxed mb-6">
              Fokus pada asesmen profesional, ujian kompetensi, evaluasi asesor, dan pengelolaan sertifikasi berbasis web yang transparan.
            </p>
            <span class="text-xs font-semibold text-amber-600 bg-amber-50 px-3 py-1 rounded-full">Produk: Moza Asesmen</span>
          </div>

          <div class="liquid-glass p-8 sm:p-10 rounded-3xl hover:shadow-xl transition duration-300 border border-slate-200/80">
            <div class="w-14 h-14 rounded-2xl bg-purple-50 flex items-center justify-center text-2xl mb-6 text-[#6558E8] shadow-sm">✨</div>
            <h3 class="text-xl font-bold text-[#0F172A] mb-3 font-['Plus_Jakarta_Sans']">Digital Lifestyle & Innovation</h3>
            <p class="text-[#475569] text-sm font-light leading-relaxed mb-6">
              Fokus pada komunikasi real-time yang aman, hiburan kasual yang mengasah logika, serta penemuan ruang usaha strategis.
            </p>
            <span class="text-xs font-semibold text-[#6558E8] bg-purple-50 px-3 py-1 rounded-full">Produk: CitCat, Color Sort, Lokasio</span>
          </div>
        </div>
      </div>
    </section>

    <!-- Why Mozasoft Section -->
    <section id="ecosystem" class="py-32 px-4 sm:px-6 relative z-10">
      <div class="max-w-6xl mx-auto text-center">
        <div class="inline-block text-xs font-semibold uppercase tracking-widest text-[#1769F5] mb-3 bg-blue-50 px-3.5 py-1.5 rounded-full">Keunggulan Kami</div>
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold tracking-tight mb-4 text-[#0F172A] font-['Plus_Jakarta_Sans']">Dibangun dengan tujuan yang jelas.</h2>
        <p class="text-[#475569] mb-20 max-w-xl mx-auto font-light text-base md:text-lg">
          Kami percaya teknologi yang baik bukan sekadar canggih, tetapi harus mudah digunakan dan memberikan dampak nyata.
        </p>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 text-left">
          <div class="liquid-glass p-8 rounded-3xl border border-slate-200/80 hover:shadow-xl transition duration-300">
            <div class="text-3xl mb-4 p-3 bg-blue-50 w-fit rounded-2xl">🌐</div>
            <h3 class="text-xl font-bold text-[#0F172A] mb-2 font-['Plus_Jakarta_Sans']">Integrated Ecosystem</h3>
            <p class="text-[#475569] text-sm font-light leading-relaxed">Menghadirkan berbagai solusi digital yang saling terhubung untuk kebutuhan bisnis dan individu.</p>
          </div>
          <div class="liquid-glass p-8 rounded-3xl border border-slate-200/80 hover:shadow-xl transition duration-300">
            <div class="text-3xl mb-4 p-3 bg-emerald-50 w-fit rounded-2xl">🎯</div>
            <h3 class="text-xl font-bold text-[#0F172A] mb-2 font-['Plus_Jakarta_Sans']">User-Centered Design</h3>
            <p class="text-[#475569] text-sm font-light leading-relaxed">Mengutamakan kemudahan penggunaan dan pengalaman pengguna yang nyaman di semua perangkat.</p>
          </div>
          <div class="liquid-glass p-8 rounded-3xl border border-slate-200/80 hover:shadow-xl transition duration-300">
            <div class="text-3xl mb-4 p-3 bg-purple-50 w-fit rounded-2xl">🚀</div>
            <h3 class="text-xl font-bold text-[#0F172A] mb-2 font-['Plus_Jakarta_Sans']">Continuous Innovation</h3>
            <p class="text-[#475569] text-sm font-light leading-relaxed">Mengembangkan produk secara berkelanjutan mengikuti perkembangan zaman dan kebutuhan pengguna.</p>
          </div>
          <div class="liquid-glass p-8 rounded-3xl border border-slate-200/80 hover:shadow-xl transition duration-300">
            <div class="text-3xl mb-4 p-3 bg-amber-50 w-fit rounded-2xl">⚡</div>
            <h3 class="text-xl font-bold text-[#0F172A] mb-2 font-['Plus_Jakarta_Sans']">Performance & Reliability</h3>
            <p class="text-[#475569] text-sm font-light leading-relaxed">Mengutamakan performa tinggi, stabilitas, dan kualitas implementasi yang handal.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-32 px-4 sm:px-6 relative z-10 border-t border-slate-200/80 bg-white/80 backdrop-blur-xl">
      <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-12 items-center">
        <div class="macos-window rounded-3xl overflow-hidden shadow-2xl p-2 bg-white border border-slate-200">
          <img src="images/moza-asesmen.png" alt="Mozasoft Workspace" class="w-full h-auto object-cover rounded-2xl" />
        </div>
        <div>
          <div class="inline-block text-xs font-semibold uppercase tracking-widest text-[#1769F5] mb-3 bg-blue-50 px-3.5 py-1.5 rounded-full">About Mozasoft</div>
          <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight mb-6 text-[#0F172A] font-['Plus_Jakarta_Sans']">
            Membangun teknologi untuk kebutuhan masa kini dan masa depan.
          </h2>
          <p class="text-[#475569] text-base md:text-lg font-light leading-relaxed mb-6">
            Mozasoft (Moza Software) lahir dari semangat untuk membantu lembaga dan organisasi menjadi lebih efisien melalui inovasi perangkat lunak yang sederhana, cepat, dan tepat sasaran.
          </p>
          <p class="text-[#475569] text-sm font-light leading-relaxed mb-8">
            Kami percaya teknologi bukan hanya tentang fitur, tetapi tentang bagaimana teknologi dapat mempermudah kehidupan dan mendorong pertumbuhan bisnis Anda secara berkelanjutan.
          </p>
          <a href="https://wa.me/62895380052983" target="_blank" class="inline-flex items-center space-x-2 px-6 py-3.5 rounded-full btn-apple text-sm font-medium shadow-md">
            <span>Pelajari Lebih Lanjut</span>
            <span>→</span>
          </a>
        </div>
      </div>
    </section>

    <!-- Call To Action Section -->
    <section class="py-28 px-4 sm:px-6 relative z-10 bg-gradient-to-tr from-blue-50 via-indigo-50/50 to-white text-center border-t border-slate-200/80">
      <div class="max-w-3xl mx-auto">
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold tracking-tight mb-6 text-[#0F172A] font-['Plus_Jakarta_Sans']">
          Siap menemukan solusi digital yang tepat?
        </h2>
        <p class="text-[#475569] text-lg md:text-xl mb-10 font-light leading-relaxed">
          Temukan bagaimana produk Mozasoft dapat membantu kebutuhan bisnis, organisasi, dan aktivitas digital Anda.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
          <a href="https://wa.me/62895380052983" target="_blank" class="px-8 py-4 rounded-full btn-apple text-sm font-semibold shadow-lg shadow-blue-500/20">
            Hubungi Kami
          </a>
          <a href="#product" class="px-8 py-4 rounded-full bg-white hover:bg-slate-50 text-[#0F172A] text-sm font-semibold shadow-sm border border-slate-200/80 transition">
            Jelajahi Produk
          </a>
        </div>
      </div>
    </section>

    <?php include "footer.php"; ?>
  </body>
</html>
