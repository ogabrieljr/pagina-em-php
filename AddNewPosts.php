<?php require_once("Includes/DB.php") ?>
<?php require_once("Includes/Functions.php") ?>
<?php require_once("Includes/Sessions.php") ?>

<?php
if (isset($_POST["Submit"])) {
  $Title = $_POST["Title"];
  $Post = $_POST["Description"];

  $Author = "abc";

  $Image = $_FILES["Image"]["name"];
  $Target = "Uploads/" . basename($_FILES["Image"]["name"]);
  date_default_timezone_set("America/Sao_Paulo");
  $CurrentTime = time();
  $DateTime = strftime("%d/%b/%Y", $CurrentTime);

  if (empty($Title & $Post)) {
    $_SESSION["MenssagemDeErro"] = "Preencha todos os campos corretamente.";
    Redirect("AddNewPosts.php");
  };

  if (strlen($Title & $Post) < 10) {
    $_SESSION["MenssagemDeErro"] = "Campo muito curto, mínimo de 10 caracteres.";
    Redirect("AddNewPosts.php");
  }

  if (strlen($Title) >= 50) {
    $_SESSION["MenssagemDeErro"] = "Campo muito longo, máximo de 50 caracteres.";
    Redirect("AddNewPosts.php");
  }

  if (strlen($Post) >= 1000) {
    $_SESSION["MenssagemDeErro"] = "Campo muito longo, máximo de 1000 caracteres.";
    Redirect("AddNewPosts.php");
  } else {
    $sql = "INSERT INTO posts(title, description, author, img_url, created_at)";
    $sql .= "VALUES(:titulo, :descricao, :autor, :imagem, :data)";
    $stmt = $ConectarDB->prepare($sql);
    $stmt->bindValue(":titulo", $Title);
    $stmt->bindValue(":descricao", $Post);
    $stmt->bindValue(":imagem", $Image);
    $stmt->bindValue(":autor", $Author);
    $stmt->bindValue(":data", $Date);

    $Executar = $stmt->execute();
    move_uploaded_file($_FILES["Image"]["tmp_name"], $Target);

    if ($Executar) {
      $_SESSION["Sucesso"] = "Sucesso";
      Redirect("Posts.php");
    } else {
      $_SESSION["MenssagemDeErro"] = "Erro";
    }
  }
};

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
    <div class="form-group row">
      <form action="AddNewPosts.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="Title">Título: </label><br>
          <input class="form control" id="Title" name="Title" type="text">
        </div>
        <div class="form-group">
          <label for="Description">Descrição: </label><br>
          <textarea id="Description" name="Description" class="form-control" aria-label="With textarea"></textarea>
        </div>
        <div class="custom-file">
          <input type="file" class="custom-file-input" name="Image" id="Image">
          <label class="custom-file-label" for="Image">Arquivo</label>
        </div><br>
        <button name="Submit" type="Submit" class="mt-2 btn btn-sm btn-primary">Enviar</button>
        <button type="button" class="mt-2 btn btn-sm btn-primary">Voltar</button>
    </div>
    </form>
  </section>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>