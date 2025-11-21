<?php
require 'config.php';
require_login();
$id = (int)($_GET['id'] ?? 0);
if($id){
    $stmt = $pdo->prepare('DELETE FROM lsp WHERE id = ?');
    $stmt->execute([$id]);
}
header('Location: index.php'); exit;