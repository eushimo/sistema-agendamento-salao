<?php
require_once "model/Agendamento.php";
require_once "view/formulario.php";

class AgendamentoController {
    public function handleRequest() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $agendamento = new Agendamento();
            $agendamento->salvar($_POST);
            echo "<p>Agendamento realizado com sucesso!</p>";
        }
        include "view/formulario.php";
    }
}
?>