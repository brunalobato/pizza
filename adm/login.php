<?php
session_start();
?>

<!doctype html> <!-- login.php -->
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
	<link href="css/estilo.css" rel="stylesheet">
    <title></title>
  </head>
  
  <body>
  <body class="text-center">
    <form class="form-signin" action="valida.php" method="post">
      
      <h1 class="h3 mb-3 font-weight-normal">Login</h1>
      <label for="inputEmail" class="sr-only">Email </label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus name="txt_usuario">
	  
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Digite a senha" required name="txt_senha">
	      
      <button class="btn btn-lg btn-outline-danger btn-block" type="submit">Logar</button>
	  <p class="text-center text-danger">
		<?php 
			if(isset($_SESSION['loginErro'])){
				echo $_SESSION['loginErro'];
				unset ($_SESSION['loginErro']);
			 }		
			?>
	  </p>
	  
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js" ></script>
  </body>
</html>