<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mozasoft | Building Digital Systems</title>
    <link rel="icon" type="image/png" href="moza.png" />
    <script src="js/tailwind.js"></script>

    <link
      href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <style>
      body {
        font-family: "Inter Tight", sans-serif;
        background-color: #0b0b0b;
        color: #f1f1f1;
      }

      .gradient-accent {
        background: linear-gradient(to right, #6e493a, #9f7c6a);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }

      .btn-primary {
        background-color: #f1f1f1;
        color: #0b0b0b;
        font-weight: 600;
      }

      .btn-primary:hover {
        background-color: #d6d6d6;
      }

      .btn-link {
        color: #9f7c6a;
      }

      .btn-link:hover {
        color: #b58e79;
      }

      .hero-bg {
        background: radial-gradient(
          circle at top right,
          rgba(110, 73, 58, 0.25),
          transparent 60%
        );
      }
    </style>
  </head>

   <nav
      class="fixed top-0 left-0 right-0 z-50 bg-[#0b0b0b]/80 backdrop-blur border-b border-white/10"
    >
      <div
        class="max-w-7xl mx-auto flex justify-between items-center px-6 py-4"
      >
        <div class="flex items-center space-x-3">
          <div class="w-10 h-10 overflow-hidden rounded-full">
            <img
              src="moza.png"
              alt="Logo Mozasoft"
              class="w-full h-full object-cover scale-150"
            />
          </div>
          <h1 class="text-lg font-semibold text-white"><a href="index.php">Mozasoft</a></h1>
        </div>

        <div class="hidden md:flex items-center space-x-8 text-gray-300">
          <a href="#product" class="hover:text-[#9f7c6a] transition">Produk</a>
          <a href="#about" class="hover:text-[#9f7c6a] transition">Tentang</a>
          <!-- <a href="#contact" class="hover:text-[#9f7c6a] transition">Contact</a> -->
          <!-- <a href="#login" class="text-gray-400 hover:text-white transition"
            >Log in</a
          > -->
          <a
            href="https://wa.me/628133116694"
            class="ml-2 px-4 py-2 rounded-md bg-[#f1f1f1] text-black font-medium hover:bg-[#dcdcdc]"
            >WhatsApp</a
          >
        </div>
      </div>
    </nav>