<!DOCTYPE html>
<html lang="en">
  <?php include "nav.php"; ?>
  
  <body class="overflow-x-hidden">
    <!-- Hero Section (Linear style) -->
    <section
      class="hero-bg min-h-screen flex flex-col justify-center px-6 md:px-12 border-b border-white/10"
    >
      <div class="max-w-5xl mx-auto mt-0" style="margin-top: 10%">
        <h1
          class="text-5xl md:text-6xl font-extrabold leading-tight mb-8 text-white"
        >
          Mozasoft adalah sistem<br />
          modern untuk membangun
          <span class="gradient-accent"> produk digital</span>
        </h1>

        <p class="text-gray-400 text-lg md:text-xl max-w-2xl mb-10">
          Temui platform cerdas untuk pengembangan perangkat lunak. Sederhanakan
          alur kerja, asesmen, dan manajemen produk Anda secara efisien.
        </p>

        <div class="flex flex-wrap items-center gap-4">
          <a href="#product" class="btn-primary px-6 py-3 rounded-md">Produk</a>
          <!-- <a
            href="#intelligence"
            class="text-[#9f7c6a] font-medium hover:underline"
          >
            New: Product Intelligence →
          </a> -->
        </div>
      </div>

      <div class="mt-20 flex justify-center relative">
        <img
          src="back.png"
          alt="App Preview"
          class="w-full max-w-5xl rounded-xl border border-[#6e493a]/20 shadow-2xl"
        />
      </div>
    </section>

    <!-- Product Section -->
    <section
      id="product"
      class="py-20 px-6 bg-gradient-to-b from-[#0b0b0b] to-[#1a1a1a] text-center"
    >
      <h2 class="text-3xl font-bold mb-6 gradient-accent">Produk Unggulan</h2>
      <p class="text-gray-400 mb-12 max-w-xl mx-auto">
        Aplikasi asesmen profesional berbasis web untuk Lembaga Sertifikasi
        Profesi (LSP).
      </p>
      <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-8">
        <div
          class="p-8 rounded-2xl bg-[#1c1c1c] shadow hover:shadow-lg transition border border-[#6e493a]/30"
        >
          <h3 class="text-2xl font-bold mb-2 text-white">🧭 Moza Asesmen</h3>
          <p class="text-gray-400 mb-4">
            Platform digital untuk manajemen uji kompetensi asesmen. (Coming Soon)
          </p>
          <a href="asesmen.php"
            ><span
              class="px-4 py-2 bg-[#6e493a] text-white rounded-full text-sm"
              >Detail</span
            ></a
          >
        </div>
        <div
          class="p-8 rounded-2xl bg-[#1c1c1c] shadow-inner border border-[#6e493a]/30"
        >
          <h3 class="text-2xl font-bold mb-2 text-white">🚀 Lokasio</h3>
          <p class="text-gray-400 mb-4">
            Platform Pencarian Ruko & Ruang Usaha Modern (Coming Soon)
          </p>
          <a href="lokasio.php"
            ><span class="px-4 py-2 bg-[#6e493a] text-white rounded-full text-sm"
              >Detail</span
            >
          </a>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section
      id="about"
      class="py-20 px-6 bg-gradient-to-b from-[#1a1a1a] to-[#0b0b0b] text-center"
    >
      <h2 class="text-3xl font-bold mb-6 gradient-accent">Tentang Mozasoft</h2>
      <p class="text-gray-400 max-w-2xl mx-auto">
        Mozasoft (Moza Software) lahir dari semangat untuk membantu lembaga dan
        organisasi menjadi lebih efisien melalui inovasi software sederhana,
        cepat, dan tepat sasaran.
      </p>
    </section>

    <?php include "footer.php"; ?>
  </body>
</html>
