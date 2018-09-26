<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Cardápio</title>
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
    <form method="post" action="pedidos.php">    
   <div class="card-group">
  <div class="card">
    <img class="cardimg" src="img/pizzamussarela.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Pizza Mussarela</h5>
      <p class="card-text">Ingredientes:Queijo Mussarela, Azeitona Preta e Orégano.</p>
          <div class="form-group">
    <label for="exampleFormControlSelect1">Escolha o tamanha da sua pizza</label>
    <select class="form-control" id="exampleFormControlSelect1">
       <option> </option>
      <option>Média      R$ 30,00</option>
      <option>Grande     R$ 40,00</option>
      <option>Família    R$ 45,00</option>
      <option>Gigante    R$ 50,00</option>
    </select>
  </div>
    </div>
  </div>
  <div class="card">
    <img class="cardimg" src="img/pizzacalabresa.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Pizza Calabresa</h5>
      <p class="card-text">Ingredientes: Queijo Mussarela, Calabresa, Molho de tomate e Orégano.</p>
          <div class="form-group">
    <label for="exampleFormControlSelect1">Escolha o tamanha da sua pizza</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option> </option>
      <option>Média    R$ 30,00</option>
      <option>Grande   R$ 40,00</option>
      <option>Família  R$ 45,00</option>
      <option>Gigante  R$ 50,00</option>
    </select>
  </div>
    </div>
  </div>
  <div class="card">
    <img class="cardimg" src="img/pizzafrango.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Pizza Frango com Catupiry</h5>
      <p class="card-text">Ingredientes: Queijo Mussarela, Frango desfiado, Catupiry e Orégano.</p>
      <div class="form-group">
    <label for="exampleFormControlSelect1">Escolha o tamanha da sua pizza</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option> </option>
      <option>Média     R$ 30,00</option>
      <option>Grande    R$ 40,00</option>
      <option>Família   R$ 45,00</option>
      <option>Gigante   R$ 50,00</option>
    </select>
  </div>
    </div>
  </div>
       
       <div class="card" style="width: 50rem;">
  <img class="card-img-top" src="img/bebidas.jpg" alt="Card image cap">
  <div class="card-body">
      <h5 class="card-title">Bebidas</h5>
       <div class="form-group">
    <label for="exampleFormControlSelect1">Escolha sua Bebida</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option> </option>
      <option>Aguá     R$ 4,00</option>
      <option>Refrigerante   R$ 8,00</option>
      <option>Cerveja   R$ 10,00</option>
      <option>Suco   R$ 7,00</option>
    </select>
  </div>
  </div>
</div>
      
</div>
        <button type="submit" class="btn btn-danger">Pedir</button>
    </form>
        
        
  
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
    
</html>