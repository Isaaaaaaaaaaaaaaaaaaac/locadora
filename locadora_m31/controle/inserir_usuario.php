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
<h1>Log de Usuário</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<?php
include("conexao.php");
try{
    $var_usuario=$_POST['txt_usuario'];
    $var_senha=$_POST['pas_senha'];
    $sql="INSERT INTO usuario(usuario,senha) VALUES ('$var_usuario','$var_senha')";
    $conn->query($sql);
    echo "<h4>Usuário cadastrado com sucesso</h4><h3><a href='/locadora_m31'>Voltar</a></h3>";
}catch(PDOException $ex){
    echo "Erro ".$ex->getMessage();
}
?>

</fieldset></div></div></body></html>