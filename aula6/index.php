<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário em PHP</title>
</head>
<body>
<h2>Formulário de Produtos</h2>

<form method="post" action="lojatec.php">
    ID: <input type="text" name="id" required>
    <br><br>
    Nome: <input type="text" name="nome" required>
    <br><br>
    Valor: <input type="text" name="valor" required>
    <br><br>
    Descrição: <textarea name="descricao" rows="5" required></textarea>
    <br><br>
    <input type="submit" name="submit" value="Enviar">
</form>
<form action="localizar.php" method="post">
<label for="localizar">Localizar:</label>
<input type="text" id="localizar" name="localizar" required>
<input type="submit" value="Localizar">
</form>
<form action="limpar.php" method="post">
<input type="submit" value="Limpar">
</form>
<a href="index.php">Voltar</a>
</body>
</html>
