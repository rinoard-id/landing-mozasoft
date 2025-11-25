<!DOCTYPE html>
<html lang="en">
<?php include "nav.php"; ?>

<style>
.lokasio-section {
  max-width: 900px;
  margin: 80px auto;
  text-align: center;
  padding: 0 20px;
}

.badge {
  display: inline-block;
  background: #f1f1f5;
  padding: 8px 18px;
  border-radius: 50px;
  font-size: 14px;
  color: #555;
  margin-bottom: 25px;
}

.title {
  font-size: 46px;
  line-height: 1.15;
  font-weight: 700;
  color: #fafafa;
  margin-bottom: 16px;
}

.gradient {
  background: linear-gradient(90deg, #4e8cff, #6c4bff);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.subtitle {
  font-size: 20px;
  line-height: 1.6;
  color: #fafafa;
  max-width: 700px;
  margin: 0 auto 40px;
}

.features-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 15px;
  margin-bottom: 50px;
}

.feature-item {
  padding: 14px 20px;
  background: #fafafa;
  border-radius: 25px;
  font-size: 16px;
  color: #444;
  box-shadow: 0 4px 12px rgba(0,0,0,0.03);
}

.comingsoon-box {
  background: linear-gradient(135deg, #f8f9ff, #eef2ff);
  border-radius: 20px;
  padding: 40px 30px;
  margin: 60px auto 30px;
  max-width: 600px;
  box-shadow: 0 8px 20px rgba(0,0,0,0.05);
}

.soon-title {
  font-size: 28px;
  font-weight: 700;
  letter-spacing: 8px;
  color: #4e5cff;
  margin-bottom: 10px;
}

.soon-text {
  font-size: 17px;
  color: #555;
}

.mozasoft-note {
  margin-top: 40px;
  font-size: 14px;
  color: #999;
}

</style>

<section class="lokasio-section">
  <div class="badge">🚀 Produk baru dari Mozasoft</div>

  <h1 class="title">Temukan Lokasi Usaha & Ruko <span class="gradient">Dengan Lebih Mudah</span></h1>

  <p class="subtitle">
    <strong>Lokasio</strong> mempermudah pelaku usaha menemukan ruko, kios, booth, hunian usaha, dan ruang dagang lain
    secara cepat, transparan, dan bebas ribet.
  </p>

  <div class="features-grid">
    <div class="feature-item">🔍 Listing terkurasi & akurat</div>
    <div class="feature-item">📍 Filter lokasi, harga, ukuran</div>
    <div class="feature-item">🏷️ Foto + detail fasilitas</div>
    <div class="feature-item">💬 Hubungi langsung via Wa</div>
    <div class="feature-item">🏪 Ideal untuk UMKM, Industri, dll</div>
  </div>

  <div class="comingsoon-box">
    <div class="soon-title">COMING SOON</div>
    <div class="soon-text">Sedang dalam pengembangan — rilis awal 2026</div>
  </div>

</section>


<?php include "footer.php"; ?>
</body>
</html>
