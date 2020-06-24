<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <title>título</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="Posts.php">JR</a>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="Posts.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li> -->
    </ul>
  </nav>

  <section class="container py-4">
    <div class="row">
      <div class="col-4">
        <form>
          <div class="form-group input-group-sm">
            <label for="username">Username</label>
            <input type="username" class="form-control" id="username">
          </div>
          <div class="form-group input-group-sm">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email">
          </div>
          <div class="form-group input-group-sm">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password">
            <small id="passwordHelp" class="form-text text-muted"> <a class="text-dark" href="#">Esqueceu sua senha?</a> </small>
          </div>
          <button type="submit" class="btn btn-primary btn-sm">Submit</button>
        </form>
      </div>
    </div>
  </section>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>