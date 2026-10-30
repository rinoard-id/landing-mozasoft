<!DOCTYPE html>
<html lang="en">
<?php include "nav.php"; ?>

<body class="selection:bg-[#1769F5] selection:text-white relative overflow-x-hidden bg-[#F8FAFC] text-[#1E293B]">
  <!-- Ambient Background Orbs -->
  <div class="absolute top-20 left-1/4 w-[500px] h-[500px] bg-emerald-200/40 rounded-full blur-[140px] pointer-events-none"></div>
  <div class="absolute top-1/2 right-1/4 w-[600px] h-[600px] bg-amber-200/40 rounded-full blur-[160px] pointer-events-none"></div>

<section class="max-w-5xl mx-auto px-6 pt-40 pb-28 text-center relative z-10">
  <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/80 border border-black/10 text-xs font-medium text-emerald-600 mb-8 shadow-sm">
    <span>🐍🎲</span> Game Ular Rimba — Mini Board Game Seru & Menantang
  </div>

  <h1 class="text-4xl sm:text-6xl md:text-7xl font-extrabold tracking-tight text-[#0F172A] mb-8 leading-[1.1] font-['Plus_Jakarta_Sans']">
    Petualangan Seru di <span class="liquid-gradient">Game Ular Rimba</span>
  </h1>

  <p class="text-[#475569] text-lg md:text-xl max-w-3xl mx-auto mb-16 font-light leading-relaxed">
    <strong>Game Ular Rimba</strong> adalah mini board game modern dengan konsep terinspirasi dari ular tangga namun menghadirkan ikon hewan rimba, tantangan lebih berat berkat aturan baru, serta Kartu Positif & Negatif ala permainan Monopoli. Mainkan secara solo melawan bot, coop hingga 4 player, atau online bersama pemain lain di seluruh dunia!
  </p>

  <!-- Ular Rimba Screenshot Showcase -->
  <div class="space-y-12 flex flex-col items-center mb-20">
    <div class="macos-window rounded-3xl overflow-hidden w-full max-w-4xl shadow-2xl border border-white/40">
      <div class="bg-white/90 px-5 py-4 flex items-center space-x-2 border-b border-slate-200">
        <div class="flex space-x-2">
          <div class="w-3 h-3 rounded-full bg-[#FF5F56]"></div>
          <div class="w-3 h-3 rounded-full bg-[#FFBD2E]"></div>
          <div class="w-3 h-3 rounded-full bg-[#27C93F]"></div>
        </div>
        <div class="text-xs text-[#64748B] font-mono mx-auto pr-14">images/ular.jpg</div>
      </div>
      <img src="images/ular.jpg" class="w-full h-auto object-cover" alt="Game Ular Rimba Gameplay">
    </div>
  </div>

  <!-- Features Bento Grid -->
  <div class="grid md:grid-cols-3 gap-6 text-left mb-20">
    <div class="liquid-glass p-8 rounded-3xl flex flex-col justify-between border border-slate-200/80">
      <div>
        <div class="text-3xl mb-4 p-3 bg-emerald-50 w-fit rounded-2xl">🐾</div>
        <h3 class="text-xl font-bold text-[#0F172A] mb-2 font-['Plus_Jakarta_Sans']">Tema Hewan Rimba & Kartu</h3>
        <p class="text-[#475569] text-sm font-light leading-relaxed">Konsep klasik ular tangga dengan ikon hewan rimba, aturan dinamis, serta Kartu Positif & Negatif yang menegangkan seperti Monopoli.</p>
      </div>
    </div>
    <div class="liquid-glass p-8 rounded-3xl flex flex-col justify-between border border-slate-200/80">
      <div>
        <div class="text-3xl mb-4 p-3 bg-blue-50 w-fit rounded-2xl">🤖</div>
        <h3 class="text-xl font-bold text-[#0F172A] mb-2 font-['Plus_Jakarta_Sans']">Mode Bot & Co-Op 4 Player</h3>
        <p class="text-[#475569] text-sm font-light leading-relaxed">Bisa dimainkan seru-seruan melawan kecerdasan bot AI, atau mode co-op bersama tim hingga 4 pemain sekaligus.</p>
      </div>
    </div>
    <div class="liquid-glass p-8 rounded-3xl flex flex-col justify-between border border-slate-200/80">
      <div>
        <div class="text-3xl mb-4 p-3 bg-purple-50 w-fit rounded-2xl">🌐</div>
        <h3 class="text-xl font-bold text-[#0F172A] mb-2 font-['Plus_Jakarta_Sans']">Online Multiplayer</h3>
        <p class="text-[#475569] text-sm font-light leading-relaxed">Nikmati keseruan bermain secara online real-time langsung melalui browser tanpa instalasi tambahan.</p>
      </div>
    </div>
  </div>

  <div class="liquid-glass p-10 rounded-3xl max-w-xl mx-auto text-center border border-slate-200/80 shadow-xl bg-white/80 space-y-4">
    <div class="text-xl font-bold text-[#0F172A] mb-1 font-['Plus_Jakarta_Sans']">Mainkan Game Ular Rimba Sekarang!</div>
    <p class="text-[#475569] text-sm font-light mb-4">Coba langsung demo online atau hubungi kami untuk informasi kerja sama.</p>
    <div class="flex flex-wrap justify-center gap-3">
      <a href="https://ular.msof.cloud/" target="_blank" class="inline-block px-8 py-3.5 rounded-full btn-apple text-sm font-semibold shadow-lg">Coba Demo Live</a>
      <a href="https://wa.me/62895380052983" target="_blank" class="inline-block px-8 py-3.5 rounded-full bg-white hover:bg-slate-50 text-[#0F172A] border border-slate-200 text-sm font-semibold shadow-sm">Hubungi WhatsApp</a>
    </div>
  </div>
</section>

<?php include "footer.php"; ?>
</body>
</html>
