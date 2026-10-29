<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mozasoft — Apple Ecosystem Digital Systems</title>
    <link rel="icon" type="image/png" href="moza.png" />
    <script src="js/tailwind.js"></script>

    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <style>
      :root {
        font-family: -apple-system, BlinkMacSystemFont, "SF Pro Display", "SF Pro Text", "SF Pro", "Inter", sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
      }
      body {
        background-color: #f5f5f7;
        color: #1d1d1f;
        overflow-x: hidden;
      }
      .apple-gradient {
        background: linear-gradient(135deg, #1d1d1f 0%, #424245 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }
      .liquid-gradient {
        background: linear-gradient(135deg, #0071e3 0%, #4263eb 50%, #7928ca 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }
      .glass-nav {
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(25px);
        -webkit-backdrop-filter: blur(25px);
        border-bottom: 1px solid rgba(0, 0, 0, 0.08);
      }
      .liquid-glass {
        background: rgba(255, 255, 255, 0.7);
        backdrop-filter: blur(30px);
        -webkit-backdrop-filter: blur(30px);
        border: 1px solid rgba(0, 0, 0, 0.08);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.04), inset 0 1px 0 rgba(255, 255, 255, 0.8);
      }
      .liquid-glass:hover {
        border-color: rgba(0, 0, 0, 0.15);
        box-shadow: 0 30px 60px rgba(0, 0, 0, 0.08), inset 0 1px 0 rgba(255, 255, 255, 0.9);
      }
      .btn-apple {
        background: #0071e3;
        color: #ffffff;
        font-weight: 500;
        transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
      }
      .btn-apple:hover {
        background: #0077ed;
        transform: translateY(-1px);
        box-shadow: 0 10px 25px rgba(0, 113, 227, 0.3);
      }
      .macos-window {
        background: rgba(255, 255, 255, 0.85);
        backdrop-filter: blur(40px);
        -webkit-backdrop-filter: blur(40px);
        border: 1px solid rgba(0, 0, 0, 0.1);
        box-shadow: 0 30px 60px rgba(0, 0, 0, 0.1), inset 0 1px 0 rgba(255, 255, 255, 1);
      }
    </style>
  </head>

  <nav class="fixed top-0 left-0 right-0 z-50 glass-nav">
    <div class="max-w-7xl mx-auto flex justify-between items-center px-6 py-4">
      <div class="flex items-center space-x-3">
        <div class="w-10 h-10 overflow-hidden rounded-2xl shadow-md border border-black/10 bg-white p-0.5">
          <img
            src="moza.png"
            alt="Logo Mozasoft"
            class="w-full h-full object-cover rounded-xl scale-110"
          />
        </div>
        <a href="index.php" class="text-base font-semibold tracking-tight text-[#1d1d1f] flex items-center gap-1.5">
          Mozasoft <span class="text-xs px-2 py-0.5 rounded-full bg-black/5 text-[#424245] font-normal border border-black/10">Pro</span>
        </a>
      </div>

      <div class="hidden md:flex items-center space-x-8 text-sm text-[#424245] font-medium">
        <a href="index.php#product" class="hover:text-[#1d1d1f] transition">Produk</a>
        <a href="index.php#ecosystem" class="hover:text-[#1d1d1f] transition">Ekosistem</a>
        <a href="index.php#about" class="hover:text-[#1d1d1f] transition">Tentang</a>
        <a
          href="https://wa.me/62895380052983"
          class="px-4 py-2 rounded-full btn-apple text-xs tracking-wide shadow-sm"
        >
          WhatsApp Hub
        </a>
      </div>
    </div>
  </nav>
