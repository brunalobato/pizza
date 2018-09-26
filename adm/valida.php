<?php    //valida.php
session_start();  //inicializa a sessão da página

include('conexao/conexao.php');

//verifica se os campos possuem dados
if((isset($_POST['txt_usuario'])) && (isset($_POST['txt_senha']))){
	
	$email = mysqli_real_escape_string($con,$_POST['txt_usuario']);
	$senha   = mysqli_real_escape_string($con,$_POST['txt_senha']);
	//echo "$usuario - $senha";
	$senha = md5($senha); //criptografa a senha 
	//echo "<br>$usuario - $senha";
	//executa uma busca na tabela pelo email e senha
	$busca_usuario = "select * from tblusuarios where email='$email' && senha='$senha'";
	
	//se a busca der ok  true(verdadeiro) senão false(falso)
	$resultado_usuario = mysqli_query($con,$busca_usuario);

	//este resultado é convertido em um array associativo (pela string)
	$resultado = mysqli_fetch_assoc($resultado_usuario);
	
	if($resultado){
		$_SESSION['usuarioId'] 				= $resultado['id'];
		$_SESSION['usuarioNome'] 			= $resultado['nome'];
		$_SESSION['usuarioNiveisAcessoId'] 	= $resultado['niveis_acesso_id'];
		$_SESSION['usuarioEmail'] 			= $resultado['email'];
		
		if($_SESSION['usuarioNiveisAcessoId']== "1")
            
		{
			header("Location:administrativo.php");
	
        } else {
			$_SESSION['loginErro'] = "Usuário ou Senha Inválidos";
			header("Location:login.php");
	
	}
		
}
}
