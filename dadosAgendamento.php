<html>
  <head>
    <title>Agendamento</title>
  </head>
  <body>
    <h1>Agendamento</h1>
    <form method="post" action="processa_agendamento.php">
      <label for="data">Data:</label><br>
      <input type="date" id="data" name="data"><br>
      <label for="hora">Hora:</label><br>
      <input type="time" id="hora" name="hora"><br>
      <label for="descricao">Descrição:</label><br>
      <textarea id="descricao" name="descricao"></textarea><br>
      <input type="submit" id="submit" name="submit" value="Agendar">
    </form> 
    
  </body>
</html>

<?php
// Pega a data do agendamento
if (isset($_POST['data'])) {
  $data = $_POST['data'];
}

// Pega a hora do agendamento
if (isset($_POST['hora'])) {
  $hora = $_POST['hora'];
}

// Pega a descrição do agendamento
if (isset($_POST['descricao'])) {
  $descricao = $_POST['descricao'];
}

if (isset($_POST['submit'])) {
    $descricao = $_POST['submit'];
  }

// Aqui você pode processar os dados do agendamento
// Por exemplo, armazenar os dados em um banco de dados
// ou enviar um email com os dados do agendamento

?>
