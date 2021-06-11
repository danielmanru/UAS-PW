<!DOCTYPE html>
<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="login.css">
</head>

<body>
  <div class="container-sm">
    <a href="tiket.html">
      <h1>Cinema 21</h1>
    </a>
    <form method="POST" action="aksi_login.php">
      <div class="mb-3">
        <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat Email">
      </div>
      <div class="mb-3">
        <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Kata Sandi">
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>