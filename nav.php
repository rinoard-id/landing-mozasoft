<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mozasoft — Digital Product Ecosystem</title>
    <meta name="description" content="Mozasoft menghadirkan berbagai solusi produk digital modern untuk kebutuhan bisnis, pendidikan, komunikasi, dan kehidupan digital." />
    <link rel="icon" type="image/png" href="images/moza.png" />
    <script src="js/tailwind.js"></script>

    <link
      href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <style>
      :root {
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, "SF Pro Display", "SF Pro Text", sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
      }
      h1, h2, h3, h4, h5, h6 {
        font-family: 'Plus Jakarta Sans', sans-serif;
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
        background: linear-gradient(135deg, #1769F5 0%, #3B82F6 50%, #6558E8 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }
      .glass-nav {
        background: rgba(255, 255, 255, 0.85);
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
        background: #1769F5;
        color: #ffffff;
        font-weight: 600;
        transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
      }
      .btn-apple:hover {
        background: #3B82F6;
        transform: translateY(-1px);
        box-shadow: 0 10px 25px rgba(23, 105, 245, 0.3);
      }
      .macos-window {
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(40px);
        -webkit-backdrop-filter: blur(40px);
        border: 1px solid rgba(0, 0, 0, 0.1);
        box-shadow: 0 30px 60px rgba(0, 0, 0, 0.1), inset 0 1px 0 rgba(255, 255, 255, 1);
      }
      /* Hide Google Translate top banner & tooltip */
      .goog-te-banner-frame.skiptranslate { display: none !important; }
      body { top: 0px !important; }
      .goog-logo-link { display: none !important; }
      .goog-te-gadget { color: transparent !important; }
      .goog-te-combo { font-size: 12px; padding: 4px; border-radius: 8px; border: 1px solid #cbd5e1; }
    </style>
  </head>

  <nav class="fixed top-0 left-0 right-0 z-50 glass-nav">
    <div class="max-w-7xl mx-auto flex justify-between items-center px-6 py-4">
      <div class="flex items-center space-x-3">
        <div class="w-10 h-10 overflow-hidden rounded-2xl shadow-md border border-black/15 bg-white p-0.5">
          <img
            src="images/moza.png"
            alt="Logo Mozasoft"
            class="w-full h-full object-cover rounded-xl scale-110"
          />
        </div>
        <a href="index.php" class="text-base font-bold tracking-tight text-[#1d1d1f] flex items-center gap-1.5 font-['Plus_Jakarta_Sans']">
          Mozasoft <span class="text-xs px-2 py-0.5 rounded-full bg-black/5 text-[#424245] font-normal border border-black/10">Pro</span>
        </a>
      </div>

      <!-- Desktop Nav Center -->
      <div class="hidden md:flex items-center space-x-8 text-sm text-[#424245] font-medium">
        <a href="index.php#product" class="hover:text-[#1769F5] transition">Produk</a>
        <a href="index.php#solutions" class="hover:text-[#1769F5] transition">Solusi</a>
        <a href="index.php#ecosystem" class="hover:text-[#1769F5] transition">Keunggulan</a>
        <a href="index.php#about" class="hover:text-[#1769F5] transition">Tentang</a>
      </div>

      <!-- Right CTA / Language Switcher -->
      <div class="hidden md:flex items-center space-x-3">
        <!-- Language Selector -->
        <div class="relative">
          <select id="language-select" onchange="changeLanguage(this.value)" class="bg-white/90 border border-slate-200 text-xs font-semibold text-[#0F172A] rounded-full px-3.5 py-2 focus:outline-none focus:ring-2 focus:ring-[#1769F5] cursor-pointer shadow-sm">
            <option value="id">ID</option>
            <option value="en">EN</option>
            <option value="zh-CN">CH</option>
          </select>
        </div>

        <a
          href="https://wa.me/62895380052983"
          target="_blank"
          class="px-5 py-2.5 rounded-full btn-apple text-xs tracking-wide shadow-sm"
        >
          Hubungi Kami
        </a>
      </div>

      <!-- Mobile Hamburger Button -->
      <div class="md:hidden flex items-center space-x-2">
        <select id="language-select-mobile" onchange="changeLanguage(this.value)" class="bg-white/90 border border-slate-200 text-xs font-semibold text-[#0F172A] rounded-full px-2 py-1.5 focus:outline-none">
          <option value="id">ID</option>
          <option value="en">EN</option>
          <option value="zh-CN">CH</option>
        </select>
        <button id="mobile-menu-btn" onclick="toggleMobileMenu()" class="p-2 text-[#1d1d1f] focus:outline-none" aria-label="Menu">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
          </svg>
        </button>
      </div>
    </div>

    <!-- Mobile Menu Drawer -->
    <div id="mobile-menu" class="hidden md:hidden bg-white/95 backdrop-blur-xl border-b border-black/10 px-6 py-6 space-y-4 shadow-xl transition-all">
      <a href="index.php#product" onclick="toggleMobileMenu()" class="block text-base font-medium text-[#424245] hover:text-[#1769F5]">Produk</a>
      <a href="index.php#solutions" onclick="toggleMobileMenu()" class="block text-base font-medium text-[#424245] hover:text-[#1769F5]">Solusi</a>
      <a href="index.php#ecosystem" onclick="toggleMobileMenu()" class="block text-base font-medium text-[#424245] hover:text-[#1769F5]">Keunggulan</a>
      <a href="index.php#about" onclick="toggleMobileMenu()" class="block text-base font-medium text-[#424245] hover:text-[#1769F5]">Tentang</a>
      <div class="pt-4 border-t border-black/10">
        <a
          href="https://wa.me/62895380052983"
          target="_blank"
          class="block w-full py-3 rounded-full btn-apple text-center text-sm font-semibold shadow-md"
        >
          Hubungi Kami
        </a>
      </div>
    </div>
  </nav>

  <!-- Google Translate Element (Hidden) -->
  <div id="google_translate_element" style="display:none;"></div>

  <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({
        pageLanguage: 'id',
        includedLanguages: 'id,en,zh-CN',
        autoDisplay: false
      }, 'google_translate_element');
    }

    function changeLanguage(lang) {
      // Sync both desktop and mobile selects
      const desktopSelect = document.getElementById('language-select');
      const mobileSelect = document.getElementById('language-select-mobile');
      if (desktopSelect) desktopSelect.value = lang;
      if (mobileSelect) mobileSelect.value = lang;

      const select = document.querySelector('.goog-te-combo');
      if (select) {
        select.value = lang;
        select.dispatchEvent(new Event('change'));
      } else {
        setTimeout(() => {
          const retrySelect = document.querySelector('.goog-te-combo');
          if (retrySelect) {
            retrySelect.value = lang;
            retrySelect.dispatchEvent(new Event('change'));
          }
        }, 1000);
      }
    }

    function toggleMobileMenu() {
      const menu = document.getElementById('mobile-menu');
      if (menu) {
        menu.classList.toggle('hidden');
      }
    }
  </script>
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
