<?php
require_once '../config/db.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $cliente = $_POST['cliente'];
  $servico = $_POST['servico'];
  $profissional = $_POST['profissional'];
  $data_hora = $_POST['data_hora'];
  $stmt = $pdo->prepare('INSERT INTO agendamento (id_cliente, id_servico, id_profissional, data_hora) VALUES (?, ?, ?, ?)');
  $stmt->execute([$cliente, $servico, $profissional, $data_hora]);
  header('Location: ../views/confirmacao.php');
}