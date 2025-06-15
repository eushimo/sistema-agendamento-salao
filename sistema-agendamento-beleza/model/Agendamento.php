<?php
class Agendamento {
    private $pdo;

    public function __construct() {
        $this->pdo = new PDO("mysql:host=localhost;dbname=salon", "root", "");
    }

    public function salvar($dados) {
        $stmt = $this->pdo->prepare("INSERT INTO agendamento (nome, email, telefone, servico, profissional, data_hora) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([
            $dados["nome"],
            $dados["email"],
            $dados["telefone"],
            $dados["servico"],
            $dados["profissional"],
            $dados["data_hora"]
        ]);
    }
}
?>