<?php /*
if (isset($_GET['user'])) {
  echo "O user submetido foi: ". $_GET['user']."<br>";
}
if (isset($_GET['pass'])) {
  echo "A pass submetida foi: ". $_GET['pass']."<br>";
}*/

session_start(); 
//$username="bruh"; 
//echo password_hash("123", PASSWORD_DEFAULT); 
$password_hash='$2y$10$s6VjlIbp3ppTOnfapF5bmesRRLx4g4Ispdny.0kJt.b./ULqeNvmG';        
if (password_verify ($_POST['password'], $password_hash)) {

  header("location:dashboard.php");
  $_SESSION["username"]=$_POST['username'];  

}  
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php   //echo '<h1>Olá Mundo</h1>';$dia=16;$mes=03;$ano=2023; echo '<p>Data de hoje='.$ano.'/'.$mes.'/'.$dia.'</p>';   ?>
    
    <div class="container">
        <div class="row">
          <form class="tiform" method="post">
            <a href="index.php"><img src="./img/estg_h.png" alt=""></a>
            <div class="mb-3">
              <br>
              <label for="exampleInputEmail1" class="form-label">user</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="username" aria-describedby="emailHelp" name=username required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name=password required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>

   </div>
  </body>
</html>