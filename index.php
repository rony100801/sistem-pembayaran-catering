<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>

  <div class="container mt-5 pt-5">
    <div class="row justify-content-center mt-5">
      <div class="col-md-4 text-center">
        <h3>Silahkan Login!</h3>
      </div>
    </div>

    <div class="row justify-content-center mt-4">
      <div class="col-md-4">
        <form action="" method="post">

          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="username" placeholder="Masukkan username..." name="username" autocomplete="off" autofocus>
            <label for="username">Username</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="password" placeholder="Masukkan password..." name="password">
            <label for="password">Password</label>
          </div>
          <div class="d-grid gap-2 mt-4">
            <button class="btn btn-primary" type="button">Masuk</button>
          </div>

        </form>
      </div>
    </div>
  </div>

  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>