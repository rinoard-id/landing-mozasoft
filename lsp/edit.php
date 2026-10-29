<?php
require 'config.php';
require_login();
$id = (int)($_GET['id'] ?? 0);
if(!$id){ header('Location: index.php'); exit; }
$stmt = $pdo->prepare('SELECT * FROM lsp WHERE id = ?');
$stmt->execute([$id]);
$row = $stmt->fetch();
if(!$row){ echo 'Data tidak ditemukan'; exit; }
$err = '';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nama = trim($_POST['nama_lep'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $prov = trim($_POST['provinsi'] ?? '');
    $no = trim($_POST['no_hp'] ?? '');
    if(!$nama || !$email){ $err = 'Nama dan Email wajib.'; }
    else {
        $upd = $pdo->prepare('UPDATE lsp SET nama_lep=?, email=?, provinsi=?, no_hp=? WHERE id=?');
        $upd->execute([$nama,$email,$prov,$no,$id]);
        header('Location: index.php'); exit;
    }
}
?>
<!doctype html>
<html>
<head><meta charset="utf-8"><title>Edit LSP</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body>
<div class="container py-4">
  <h3>Edit LSP</h3>
  <?php if($err): ?><div class="alert alert-danger"><?php echo e($err); ?></div><?php endif; ?>
  <form method="post">
    <div class="mb-2"><label>Nama</label><input name="nama_lep" class="form-control" value="<?php echo e($row['nama_lep']); ?>" required></div>
    <div class="mb-2"><label>Email</label><input name="email" class="form-control" value="<?php echo e($row['email']); ?>" required></div>
    <div class="mb-2"><label>Lokasi</label><input name="provinsi" class="form-control" value="<?php echo e($row['provinsi']); ?>"></div>
    <div class="mb-2"><label>No HP</label><input name="no_hp" class="form-control" value="<?php echo e($row['no_hp']); ?>"></div>
    <button class="btn btn-primary">Simpan</button>
    <a href="index.php" class="btn btn-secondary">Batal</a>
  </form>
</div>
</body>
</html>