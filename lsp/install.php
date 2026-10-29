<?php
// install.php - run once to create tables and initial admin user
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $dbName = DB_NAME;
    try {
        $tmp = new PDO('mysql:host=' . DB_HOST, DB_USER, DB_PASS, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        $tmp->exec("CREATE DATABASE IF NOT EXISTS `".addslashes($dbName)."` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
        $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . $dbName . ';charset=utf8mb4', DB_USER, DB_PASS, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);


        // create tables
        $pdo->exec("CREATE TABLE IF NOT EXISTS users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(100) UNIQUE,
            password1_hash VARCHAR(255) NOT NULL,
            password2_hash VARCHAR(255) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;");

        $pdo->exec("CREATE TABLE IF NOT EXISTS lsp (
            id INT AUTO_INCREMENT PRIMARY KEY,
            nama_lep VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL,
            provinsi VARCHAR(100),
            no_hp VARCHAR(50),
            status_email VARCHAR(50) DEFAULT '',
            status_wa VARCHAR(50) DEFAULT '',
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP NULL ON UPDATE CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;");

        // create initial user if not exists
        $username = trim($_POST['username'] ?? 'admin');
        $p1 = $_POST['password1'] ?? '';
        $p2 = $_POST['password2'] ?? '';
        if (!$p1 || !$p2) {
            throw new Exception('Password1 and Password2 required');
        }
        $h1 = password_hash($p1, PASSWORD_DEFAULT);
        $h2 = password_hash($p2, PASSWORD_DEFAULT);

        $stmt = $pdo->prepare('SELECT id FROM users WHERE username = ?');
        $stmt->execute([$username]);
        if(!$stmt->fetch()){
            $ins = $pdo->prepare('INSERT INTO users (username, password1_hash, password2_hash) VALUES (?,?,?)');
            $ins->execute([$username, $h1, $h2]);
            $msg = "User created: $username";
        } else {
            $msg = "User already exists: $username";
        }

        echo "<p>Install berhasil. $msg</p>";
        echo '<p><a href="login.php">Ke login</a></p>';
    } catch (Exception $e){
        echo '<h3>Error:</h3>' . e($e->getMessage());
    }
    exit;
}
?>

<!doctype html>
<html>
<head><meta charset="utf-8"><title>Install - Sistem LSP</title></head>
<body>
<h2>Install - buat database & user awal</h2>
<form method="post">
    <label>Username: <input name="username" value="admin"></label><br>
    <label>Password 1: <input type="password" name="password1"></label><br>
    <label>Password 2: <input type="password" name="password2"></label><br>
    <button type="submit">Run Install</button>
</form>
<p>Setelah sukses, hapus atau amankan file install.php</p>
</body>
</html>