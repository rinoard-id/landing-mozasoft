<?php
// config.php - set database connection and basic settings
session_start();

// Ubah sesuai konfigurasi DB
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'lspdb');
define('DB_USER', 'root');
define('DB_PASS', '');

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];
try {
    $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4', DB_USER, DB_PASS, $options);
} catch (PDOException $e) {
    // If DB not exist, some pages will handle, or run install.php
    // For debug:
    echo 'DB error: ' . $e->getMessage();
}

// Helper: escape output
function e($s){ return htmlspecialchars($s ?? '', ENT_QUOTES, 'UTF-8'); }

// Helper: require login
function require_login(){
    if(!isset($_SESSION['user_id'])){
        header('Location: login.php'); exit;
    }
}

?>