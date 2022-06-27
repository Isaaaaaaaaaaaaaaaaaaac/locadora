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
<h1>Exclusão de Clientes</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<?php
include("conexao.php");
try{
    $cod_cliente=$_POST['cmb_cliente'];
    $sql="UPDATE locacao SET cliente_locacao=27 WHERE cliente_locacao=$cod_cliente";
    $conn->query($sql);
}catch(PDOException $ex){
    echo "Erro ".$ex->getMessage();
}
try{
    $cod_cliente=$_POST['cmb_cliente'];
    $sql="DELETE FROM cliente WHERE cod_cliente='$cod_cliente'";
    $conn->query($sql);
    echo "<h4>Cliente Excluído com sucesso</h4><h3><a href='/locadora_m31'>Voltar</a></h3>";
}catch(PDOException $ex){
    echo "Erro ".$ex->getMessage();
}
?>
</fieldset></div></div></body></html>