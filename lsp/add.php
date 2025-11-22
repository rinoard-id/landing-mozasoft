<?php
require 'config.php';
require_login();
$err = '';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nama = trim($_POST['nama_lep'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $prov = trim($_POST['provinsi'] ?? '');
    $no = trim($_POST['no_hp'] ?? '');
    if(!$nama || !$email){ $err = 'Nama dan Email wajib.'; }
    else {
        $ins = $pdo->prepare('INSERT INTO lsp (nama_lep,email,provinsi,no_hp) VALUES (?,?,?,?)');
        $ins->execute([$nama,$email,$prov,$no]);
        header('Location: index.php'); exit;
    }
}
?>
<!doctype html>
<html>
<head><meta charset="utf-8"><title>Tambah LSP</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body>
<div class="container py-4">
  <h3>Tambah LSP</h3>
  <?php if($err): ?><div class="alert alert-danger"><?php echo e($err); ?></div><?php endif; ?>
  <form method="post">
    <div class="mb-2"><label>Nama</label><input name="nama_lep" class="form-control" required></div>
    <div class="mb-2"><label>Email</label><input name="email" class="form-control" required></div>
    <div class="mb-2"><label>Lokasi</label><input name="provinsi" class="form-control"></div>
    <div class="mb-2"><label>No HP</label><input name="no_hp" class="form-control"></div>
    <button class="btn btn-primary">Simpan</button>
    <a href="index.php" class="btn btn-secondary">Batal</a>
  </form>
</div>
</body>
</html>