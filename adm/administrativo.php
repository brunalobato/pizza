<?php
include("seguranca.php");
session_start();
seguranca_adm();
echo "Bem vindo, " .$_SESSION['usuarioNome'];
echo "<a href='sair.php'><br>Deslogar</a>";