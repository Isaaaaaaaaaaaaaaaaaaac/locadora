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
    $var_usuario=$_POST['cmb_usuario'];
    $var_senha=$_POST['pas_senha'];
    $sql="SELECT * FROM usuario WHERE cod_usuario='$var_usuario'";
    $conn->query($sql);
    $result=$query->execute();
    $cod_user=$query->fetchColumn();
    if([$cod_user]==1){
        echo "Acesso Liberado";
    }else{
        echo "Tente outra vez";
    }
}catch(PDOException $ex){
    echo "Erro ".$ex->getMessage();
}
?>

</fieldset></div></div></body></html>