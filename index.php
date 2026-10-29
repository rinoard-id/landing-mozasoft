<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <?php include "nav.php"; ?>
  
  <body class="selection:bg-[#0071e3] selection:text-white relative overflow-x-hidden">
    <!-- Ambient Background Orbs & Mesh Gradients -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[1000px] h-[600px] bg-gradient-to-tr from-blue-200/50 via-purple-100/40 to-pink-100/30 rounded-full blur-[140px] pointer-events-none"></div>
    <div class="absolute top-[1200px] left-10 w-[500px] h-[500px] bg-indigo-200/40 rounded-full blur-[140px] pointer-events-none"></div>
    <div class="absolute top-[2200px] right-10 w-[600px] h-[600px] bg-sky-200/40 rounded-full blur-[160px] pointer-events-none"></div>

    <!-- Hero Section -->
    <section class="min-h-screen flex flex-col justify-center px-6 md:px-12 pt-36 pb-28 relative z-10">
      <div class="max-w-5xl mx-auto text-center">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full liquid-glass text-xs font-medium text-[#424245] mb-8 shadow-sm">
          <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
          Next-Gen Multplatform Ecosystem Architecture
        </div>

        <h1 class="text-4xl sm:text-6xl md:text-7xl font-extrabold tracking-tight leading-[1.1] mb-8 text-[#1d1d1f]">
          Mozasoft adalah sistem<br />
          modern untuk membangun
          <span class="liquid-gradient">produk digital</span>
        </h1>

        <p class="text-[#424245] text-lg md:text-xl max-w-2xl mx-auto mb-12 leading-relaxed font-light">
          Temui platform cerdas untuk pengembangan perangkat lunak. Sederhanakan
          alur kerja, asesmen, dan manajemen produk Anda secara efisien.
        </p>

        <div class="flex items-center justify-center gap-4">
          <a href="#product" class="btn-apple px-8 py-3.5 rounded-full text-sm font-semibold shadow-lg">Jelajahi Ekosistem</a>
        </div>
      </div>

      <!-- App Preview Window -->
      <div class="mt-24 flex justify-center px-4">
        <div class="macos-window rounded-3xl overflow-hidden max-w-5xl w-full">
          <div class="bg-[#f0f0f2]/90 px-5 py-4 flex items-center space-x-2 border-b border-black/10">
            <div class="flex space-x-2">
              <div class="w-3 h-3 rounded-full bg-[#ff5f56]"></div>
              <div class="w-3 h-3 rounded-full bg-[#ffbd2e]"></div>
              <div class="w-3 h-3 rounded-full bg-[#27c93f]"></div>
            </div>
            <div class="text-xs text-[#6e6e73] font-mono mx-auto pr-14">mozasoft-ecosystem-preview.app</div>
          </div>
          <img
            src="back.png"
            alt="App Preview"
            class="w-full h-auto object-cover"
          />
        </div>
      </div>
    </section>

    <!-- Product Section (Ordered: Laundry, CitCat, Moza Asesmen, Lokasio) -->
    <section id="product" class="py-36 px-6 relative z-10">
      <div class="max-w-6xl mx-auto text-center">
        <div class="inline-block text-xs font-semibold uppercase tracking-widest text-[#0071e3] mb-3">Portfolio Produk</div>
        <h2 class="text-3xl md:text-5xl font-extrabold tracking-tight mb-4 text-[#1d1d1f]">Ekosistem Produk Unggulan</h2>
        <p class="text-[#6e6e73] mb-20 max-w-xl mx-auto font-light text-base md:text-lg">
          Solusi digital terintegrasi dirancang dengan presisi tinggi untuk berbagai kebutuhan industri.
        </p>

        <div class="grid md:grid-cols-2 gap-8 text-left">
          <!-- 1. Laundry POS -->
          <div class="liquid-glass p-8 rounded-3xl transition-all duration-300 flex flex-col justify-between group">
            <div>
              <div class="w-14 h-14 rounded-2xl bg-white border border-black/10 flex items-center justify-center text-3xl mb-6 shadow-sm group-hover:scale-105 transition">🧺</div>
              <h3 class="text-2xl font-bold mb-3 text-[#1d1d1f] tracking-tight">Laundry POS</h3>
              <p class="text-[#424245] mb-8 font-light leading-relaxed text-sm md:text-base">
                Sistem kasir dan manajemen bisnis laundry cepat, pencatatan nota digital, serta tracking status cucian real-time. (Coming Soon)
              </p>
            </div>
            <div>
              <a href="laundry.php" class="inline-flex items-center space-x-2 px-6 py-3 rounded-full bg-white hover:bg-black/5 text-[#1d1d1f] text-sm font-medium transition border border-black/10 shadow-sm">
                <span>Pelajari Produk</span>
                <span class="text-xs">→</span>
              </a>
            </div>
          </div>

          <!-- 2. CitCat -->
          <div class="liquid-glass p-8 rounded-3xl transition-all duration-300 flex flex-col justify-between group">
            <div>
              <div class="w-14 h-14 rounded-2xl bg-white border border-black/10 flex items-center justify-center text-3xl mb-6 shadow-sm group-hover:scale-105 transition">🍉</div>
              <h3 class="text-2xl font-bold mb-3 text-[#1d1d1f] tracking-tight">CitCat</h3>
              <p class="text-[#424245] mb-8 font-light leading-relaxed text-sm md:text-base">
                Aplikasi chat real-time modern mirip WhatsApp untuk komunikasi instan, aman, dan kolaborasi tim tanpa batas. (Coming Soon)
              </p>
            </div>
            <div>
              <a href="citcat.php" class="inline-flex items-center space-x-2 px-6 py-3 rounded-full bg-white hover:bg-black/5 text-[#1d1d1f] text-sm font-medium transition border border-black/10 shadow-sm">
                <span>Pelajari Produk</span>
                <span class="text-xs">→</span>
              </a>
            </div>
          </div>

          <!-- 3. Moza Asesmen -->
          <div class="liquid-glass p-8 rounded-3xl transition-all duration-300 flex flex-col justify-between group">
            <div>
              <div class="w-14 h-14 rounded-2xl bg-white border border-black/10 flex items-center justify-center text-3xl mb-6 shadow-sm group-hover:scale-105 transition">📋</div>
              <h3 class="text-2xl font-bold mb-3 text-[#1d1d1f] tracking-tight">Moza Asesmen</h3>
              <p class="text-[#424245] mb-8 font-light leading-relaxed text-sm md:text-base">
                Platform digital profesional berbasis web untuk uji kompetensi asesmen Lembaga Sertifikasi Profesi (LSP). (Coming Soon)
              </p>
            </div>
            <div>
              <a href="asesmen.php" class="inline-flex items-center space-x-2 px-6 py-3 rounded-full bg-white hover:bg-black/5 text-[#1d1d1f] text-sm font-medium transition border border-black/10 shadow-sm">
                <span>Pelajari Produk</span>
                <span class="text-xs">→</span>
              </a>
            </div>
          </div>

          <!-- 4. Lokasio -->
          <div class="liquid-glass p-8 rounded-3xl transition-all duration-300 flex flex-col justify-between group">
            <div>
              <div class="w-14 h-14 rounded-2xl bg-white border border-black/10 flex items-center justify-center text-3xl mb-6 shadow-sm group-hover:scale-105 transition">🗺️</div>
              <h3 class="text-2xl font-bold mb-3 text-[#1d1d1f] tracking-tight">Lokasio</h3>
              <p class="text-[#424245] mb-8 font-light leading-relaxed text-sm md:text-base">
                Platform pencarian ruko, kios, booth, dan ruang usaha strategis untuk UMKM dan ekspansi bisnis modern. (Coming Soon)
              </p>
            </div>
            <div>
              <a href="lokasio.php" class="inline-flex items-center space-x-2 px-6 py-3 rounded-full bg-white hover:bg-black/5 text-[#1d1d1f] text-sm font-medium transition border border-black/10 shadow-sm">
                <span>Pelajari Produk</span>
                <span class="text-xs">→</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Ecosystem Architecture Highlights -->
    <section id="ecosystem" class="py-36 px-6 relative z-10 border-t border-black/10">
      <div class="max-w-5xl mx-auto text-center">
        <div class="inline-block text-xs font-semibold uppercase tracking-widest text-[#0071e3] mb-3">Keunggulan Sistem</div>
        <h2 class="text-3xl md:text-5xl font-extrabold tracking-tight mb-6 text-[#1d1d1f]">Dirancang untuk Performa & Keandalan</h2>
        <p class="text-[#6e6e73] max-w-2xl mx-auto mb-20 font-light text-base md:text-lg">
          Setiap produk dikembangkan dengan standar arsitektur kelas enterprise, memastikan keamanan, kecepatan, dan pengalaman pengguna yang luar biasa.
        </p>

        <div class="grid md:grid-cols-3 gap-6 text-left">
          <div class="liquid-glass p-8 rounded-3xl">
            <div class="text-3xl mb-4">⚡</div>
            <h3 class="text-xl font-bold text-[#1d1d1f] mb-2">Kecepatan Tinggi</h3>
            <p class="text-[#424245] text-sm font-light leading-relaxed">Dioptimalkan untuk latensi minimal dan respons instan di semua perangkat.</p>
          </div>
          <div class="liquid-glass p-8 rounded-3xl">
            <div class="text-3xl mb-4">🔒</div>
            <h3 class="text-xl font-bold text-[#1d1d1f] mb-2">Keamanan Berlapis</h3>
            <p class="text-[#424245] text-sm font-light leading-relaxed">Perlindungan data sensitif dengan enkripsi end-to-end dan standar industri.</p>
          </div>
          <div class="liquid-glass p-8 rounded-3xl">
            <div class="text-3xl mb-4">💎</div>
            <h3 class="text-xl font-bold text-[#1d1d1f] mb-2">Desain Intuitif</h3>
            <p class="text-[#424245] text-sm font-light leading-relaxed">Antarmuka bersih terinspirasi estetika Apple yang nyaman dan mudah digunakan.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-36 px-6 relative z-10 border-t border-black/10">
      <div class="max-w-3xl mx-auto text-center">
        <div class="inline-block text-xs font-semibold uppercase tracking-widest text-[#0071e3] mb-3">Tentang Kami</div>
        <h2 class="text-3xl md:text-5xl font-extrabold tracking-tight mb-6 text-[#1d1d1f]">Tentang Mozasoft</h2>
        <p class="text-[#424245] text-lg md:text-xl font-light leading-relaxed">
          Mozasoft (Moza Software) lahir dari semangat untuk membantu lembaga dan
          organisasi menjadi lebih efisien melalui inovasi software sederhana,
          cepat, dan tepat sasaran.
        </p>
      </div>
    </section>

    <?php include "footer.php"; ?>
  </body>
</html>
