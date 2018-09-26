<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Pedidos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
<link rel="stylesheet" href="css/estilo.css" />
<link rel="shortcut icon" href="" />
    </head>
    <body>
    <?php
        include ("menu.php");
    ?>
<form method="post" action="registrarpedidos.php">
    <div class="form-group">
    <label for="exampleFormControlInput1">Nome:</label>
    <input type="nome" class="form-control" id="exampleFormControlInput1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Endereço:</label>
    <input type="endereco" class="form-control" id="exampleFormControlInput1">
  </div>
  <div class="form-group">
      <label for="exampleFormControlInput1">Telefone:</label>
    <input type="nome" class="form-control" id="exampleFormControlInput1">
  </div>
    
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Observações:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
    
    <form class="form-horizontal">
<fieldset>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Forma de pagamento:</label>
  <div class="col-md-2">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="1">---</option>
      <option value="2">Cartão</option>
      <option value="3">Dinheiro</option>
    </select>
  </div>
</div>

</fieldset>
        <button type="button" class="btn btn-danger">Registrar</button>
</form>

</form>

        

  
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
    
</html>