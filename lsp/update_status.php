<?php
include 'config.php';

$id = $_POST['id'];
$field = $_POST['field'];
$value = $_POST['value'];

if (!in_array($field, ['status_email', 'status_wa'])) {
    die("Invalid field");
}

$stmt = $pdo->prepare("UPDATE lsp SET $field = :value WHERE id = :id");
$stmt->execute([
    ':value' => $value,
    ':id' => $id
]);

echo "ok";
