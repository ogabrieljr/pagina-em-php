<?php require_once("Includes/DB.php") ?>
<?php require_once("Includes/Functions.php") ?>
<?php require_once("Includes/Sessions.php") ?>

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

  <div class="container my-3">
    <div class="row">
      <div class="col-md-3">
        <a href="AddNewPosts.php" class="btn btn-primary btn-block">
          Add New Post
        </a>
      </div>
    </div>
  </div>

  <section class="container py-2 mb-4">
    <div class="row">
      <div class="col-lg-12">
        <table class="table table-striped table-hover">
          <thead class="thead-dark">
            <tr>
              <th>Título</th>
              <th>Comentário</th>
              <th>Imagem</th>
              <th>Data</th>
              <th>Autor</th>
            </tr>
          </thead>
          <?php
          global $ConectarDB;
          $sql = "SELECT * FROM posts";
          $stmt = $ConectarDB->query($sql);
          while ($Dados = $stmt->fetch()) {
            $Title = $Dados["title"];
            $Description = $Dados["description"];
            $Image = $Dados["img_url"];
            $Date = $Dados["created_at"];
            $Author = $Dados["author"];
          ?>
            <tbody class="">
              <tr>
                <td><?php echo $Title; ?></td>
                <td><?php echo $Description; ?></td>
                <td><?php echo $Image; ?></td>
                <td><?php echo $Date; ?></td>
                <td><?php echo $Author; ?></td>
              </tr>
            </tbody>
          <?php } ?>
        </table>
      </div>
    </div>

  </section>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>