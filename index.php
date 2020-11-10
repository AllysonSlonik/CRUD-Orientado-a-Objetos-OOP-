<?php
  require_once 'usersview.class.php';
  require_once 'userscontroller.class.php';
?>

<!doctype html>

  <head>
    <title>CRUDOOP</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

  <div class="container text-center">
    <h1>Cadastre seu Animal</h1>

  <form action=" " method="post">
    <div class="form-group row justify-content-center">
      <label for="setanimal" class="col-sm-1 col-form-label">Animal:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="animal" placeholder="Animal">
      </div>
    </div>
    <div class="form-group row justify-content-center">
      <label for="setusuario" class="col-sm-1 col-form-label">Usuário:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="usuario" placeholder="Usuário">
      </div>
    </div>
    <div class="form-group row ">
      <div class="col-sm-10">
        <input type="submit" class="btn btn-secondary" id="btnSubmit" name="btnSubmit" value="Enviar">
      </div>
    </div>
  </form>
  </div>

  <div class="container text-center pt-3 bg-secondary">
    <h1>Verificar Informação</h1>
    <form action=" " method="post">
    <div class="form-group row justify-content-center">
      <label for="setusuario" class="col-sm-1 col-form-label">ID:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="id" name="id" placeholder="ID">
      </div>
    </div>
    <div class="form-group row ">
      <div class="col-sm-10">
        <input type="submit" class="btn btn-warning" name="btnVerificar" value="Verificar">
      </div>
    </div>
    </form>

  </div>
<?php

  if(isset($_POST['btnSubmit'])){
    
    if(!empty($_POST['animal']) && !empty($_POST['usuario']) && $_POST['animal'] != " " && $_POST['usuario'] != " "){
    $animal = $_POST['animal'];
    $usuario = $_POST['usuario'];
  } 
}

  if(isset($_POST['btnVerificar'])){
    $id = $_POST['id'];
  }

  //$objShow = new UsersView();
  //$objShow->showData($id);

  $objControl = new UsersController();
  $objControl->editData($animal, $usuario);
  $objControl->redirects();
  //$objControl->deleteData($id);

  //$objControl->createData($animal, $usuario);
  
?>

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>