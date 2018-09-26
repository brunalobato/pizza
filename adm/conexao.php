<?php //conexao.php

$servidor ="localhost";
$usuario ="root";
$senha ="";
$bd ="bdpizzaria";

$con = mysqli_connect ("$servidor", "$usuario","$senha","$bd");

if (!$con){
    echo "<h1>Erro ao conectar com o BD</h1>";
}
