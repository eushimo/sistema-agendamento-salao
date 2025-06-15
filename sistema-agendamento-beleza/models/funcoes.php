<?php
require_once '../config/db.php';
function listar($tabela) {
  global $pdo;
  return $pdo->query("SELECT * FROM $tabela")->fetchAll(PDO::FETCH_ASSOC);
}