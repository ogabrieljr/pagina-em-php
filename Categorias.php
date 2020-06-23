<?php require_once("Includes/DB.php") ?>
<?php require_once("Includes/Functions.php") ?>
<?php require_once("Includes/Sessions.php") ?>

<?php
if (isset($_POST["Submit"])) {
  $Categoria = $_POST["Titulo"];

  if (empty($Categoria)) {
    $_SESSION["MenssagemDeErro"] = "Preencha todos os campos corretamente.";
    Redirect("Categorias.php");
  };

  if (strlen($Categoria) < 10) {
    $_SESSION["MenssagemDeErro"] = "Campo muito curto, mínimo de 10 caracteres.";
    Redirect("Categorias.php");
  }

  if (strlen($Categoria) > 49) {
    $_SESSION["MenssagemDeErro"] = "Campo muito longo, máximo de 50 caracteres.";
    Redirect("Categorias.php");
  }
}
?>

<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <title>título</title>
</head>

<body>
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">JR</a>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
    </ul>
  </nav>

  <section class="container py-2 mb-4">
    <?php
    echo MenssagemDeErro();
    echo Sucesso();
    ?>
    <form action="Categorias.php" method="post">
      <div class="form-group">
        <label for="Titulo">Título: </label>
        <input class="form control" id="Titulo" name="Titulo" type="text">
      </div>
      <button name="Submit" type="Submit" class="btn btn-sm btn-primary">Enviar</button>
      <button type="button" class="btn btn-sm btn-primary">Voltar</button>
    </form>
  </section>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>