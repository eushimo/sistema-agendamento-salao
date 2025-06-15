<?php
try {
  $pdo = new PDO('mysql:host=localhost;dbname=salon', 'root', '');
} catch (PDOException $e) {
  echo 'Erro: ' . $e->getMessage();
  exit;
}
?>