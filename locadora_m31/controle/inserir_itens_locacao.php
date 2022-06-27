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
<h1>Cadastro de Itens de Locação</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<?php
include("conexao.php");
try{
    $item=$_POST['rd_item'];
    $sql="SELECT cod_locacao from locacao ORDER BY cod_locacao desc limit 1";
    foreach($conn->query($sql) as $row){
        $codloc=$row['cod_locacao'];
    }
    $sql="INSERT INTO carros_locacao(carro_locado, locacao) VALUES ('$item',$codloc)";
    $conn->query($sql);
    echo "<h4>Item incluído com Sucesso</h4>
        <h3><a href='/locadora_m31/formularios/cad_itens_locacao.php'>Selecionar outro veículo</a></h3><br>
        <h3><a href='/locadora_m31/formularios/cad_finalizar.php'>Proceder com a Locação</a></h3>";
}catch(PDOException $ex){
    echo "Erro ".$ex->getMessage();
}
?>
</fieldset></div></div></body></html>