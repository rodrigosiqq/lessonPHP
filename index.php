<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>formulario PHP</title>
</head>
<body>
<p>FORMULARIO PARA INSCRIÇÃO DE COMPETIDORES</p>

<form action="script.php" method="post">
    <?php
       $mensagemDeErro = isset($_SESSION['mensagem-erro']) ? $_SESSION['mensagem-erro'] : '';
       if(!empty($mensagemDeErro))
       {
           echo $mensagemDeErro;
       }
    ?>
    <p>Seu nome: <input type="text" name="nome" /></p>
    <p>Seu idade: <input type="text" name="idade" /></p>
    <p><input type="submit" value="enviar dados" /></p>

</form>

</body>
</html>