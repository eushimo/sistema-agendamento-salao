<!DOCTYPE html>
<html>
<head>
  <title>Agendamento</title>
  <link rel='stylesheet' href='../assets/css/style.css'>
</head>
<body>
  <h1>Agende seu horário</h1>
  <form method='POST' action='../controllers/agendamentoController.php'>
    <input type='text' name='cliente' placeholder='ID do Cliente' required><br>
    <input type='text' name='servico' placeholder='ID do Serviço' required><br>
    <input type='text' name='profissional' placeholder='ID do Profissional' required><br>
    <input type='datetime-local' name='data_hora' required><br>
    <button type='submit'>Agendar</button>
  </form>
</body>
</html>