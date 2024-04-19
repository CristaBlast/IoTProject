<?php
//$username="bruh"; 
//echo password_hash("123", PASSWORD_DEFAULT); 
$password_hash = '$2y$10$s6VjlIbp3ppTOnfapF5bmesRRLx4g4Ispdny.0kJt.b./ULqeNvmG';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (password_verify($_POST['password'], $password_hash)) {
    session_start();
    header("location:main.php");
    $_SESSION['username'] = $_POST['username'];
  }
}
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <br>
  <div class="container">
    <div class="row">
      <div class="col"></div>
      <div class="col">
        <form class="loginForm" method="post" action="">
          <a href="index.php"><img src="./img/estg_h.png" alt=""></a>
          <div class="mb-3">
            <br>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="username" aria-describedby="emailHelp" name=username required>
          </div>
          <div class="mb-3">
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="password" name=password required>
          </div>
          <div class="row">
            <div class="col"><button type="submit" class="btn btn-danger">Submit</button></div>
            <div class="col-3"><button type="" class="btn ">Registar</button></div>
          </div>
        </form>
      </div>
      <div class="col"></div>
    </div>
  </div>
</body>

</html>