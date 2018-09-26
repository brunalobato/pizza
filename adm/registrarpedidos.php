<?php  

include ("conexao.php");

$nome = $_POST['nome'];
$ingredientes = $_POST['ingredientes'];
$tamanho = $_POST['tamanho'];
$agua = $_POST['agua'];
$refrigerante = $_POST['refrigerante'];
$cerveja = $_POST['cerveja'];
$suco = $_POST['suco'];

$sql = "insert into tblcardapio
    (nome,ingredientes,tamanho,agua,refrigerante,cerveja,suco) values ('$nome','$ingredientes','$tamanho','$agua', '$refrigerante', '$cerveja', '$suco')";
    
$qry = mysqli_query($con,$sql);
