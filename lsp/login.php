<?php
require 'config.php';

$err = '';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['username'] ?? '';
    $p1 = $_POST['password1'] ?? '';
    $p2 = $_POST['password2'] ?? '';
    if(!$username || !$p1 || !$p2){ $err = 'Semua field harus diisi.'; }
    else {
        $stmt = $pdo->prepare('SELECT * FROM users WHERE username = ?');
        $stmt->execute([$username]);
        $u = $stmt->fetch();
        if($u && password_verify($p1, $u['password1_hash']) && password_verify($p2, $u['password2_hash'])){
            session_regenerate_id(true);
            $_SESSION['user_id'] = $u['id'];
            $_SESSION['username'] = $u['username'];
            header('Location: index.php'); exit;
        } else {
            $err = 'Login gagal. Periksa username dan kedua password.';
        }
    }
}
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login - Sistem LSP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card p-4">
        <h4>Login (2 Password)</h4>
        <?php if($err): ?>
          <div class="alert alert-danger"><?php echo e($err); ?></div>
        <?php endif; ?>
        <form method="post">
          <div class="mb-2">
            <label>Username</label>
            <input name="username" class="form-control" value="admin">
          </div>
          <div class="mb-2">
            <label>Password 1</label>
            <input type="password" name="password1" class="form-control" required>
          </div>
          <div class="mb-2">
            <label>Password 2</label>
            <input type="password" name="password2" class="form-control" required>
          </div>
          <button class="btn btn-primary">Login</button>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>