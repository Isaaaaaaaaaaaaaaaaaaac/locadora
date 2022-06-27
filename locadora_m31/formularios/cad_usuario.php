<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Locadora</title>
	<link rel="stylesheet" type="text/css" href="../estilos/geral.css">    
</head>
<body>
<h1>Cadastro de Usuário</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<form method="POST" action="../controle/inserir_usuario.php">
    <label>Usuário:</label>
    <input type="text" name="txt_usuario"><br>
    <label>Senha:</label>
    <input type="password" name="pas_senha"><br>
	<input type="submit" value="Cadastrar">
</form>
</fieldset></div></div></body></html>
