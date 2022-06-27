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
<h1>Atualização de Carros</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<?php
include("conexao.php");
try{
    $cod_carro=$_POST['cmb_carro'];
    $up_carro=$_POST['txt_carro'];
    $up_montadora=$_POST['cmb_montadora'];
    $up_tipo=$_POST['cmb_tipo'];
    $up_valor=$_POST['txt_valor'];
    $sql="UPDATE carro SET carro='$up_carro', montadora_carro='$up_montadora', valor='$up_valor', tipo_carro='$up_tipo' WHERE cod_carro=$cod_carro";
    $conn->query($sql);
    echo "<h4>Carro Atualizado com sucesso</h4><h3><a href='/locadora_m31'>Voltar</a></h3>";
}catch(PDOException $ex){
    echo "Erro ".$ex->getMessage();
}
?>
</fieldset></div></div></body></html>