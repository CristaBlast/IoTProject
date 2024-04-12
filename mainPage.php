<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("refresh:5;url=index.php");
  die("Acesso restrict");
}

$valor_temperatura = file_get_contents("./api/files/temperatura/valor.txt");
$time_temperatura = file_get_contents("./api/files/temperatura/time.txt");
$name_temperatura = file_get_contents("./api/files/temperatura/name.txt");
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="refresh" content="5">
  <title>Plataforma IoT</title>
  <!--css-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <!--scripts-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
    <img src="img/estg.png" alt="estg logo" width="100px">
  </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link active" aria-current="page" href="#">Entrance</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link active" aria-current="page" href="#">Office</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link active" aria-current="page" href="#">Machining Room</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link active" aria-current="page" href="#">Backdoor</a>
          </li>
         
        </ul>
        <a class="col-sm-1" aria-current="page" href="#"><?php echo $_SESSION['username'];?></a>
        <button class="btn btn-outline-secondary " aria-disabled="true"><a href="logout.php">Logout</a></button>
      </div>
    </div>
  </nav>    
  <br>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
          <div class="card-body text-center">
            <img src="img/fabrica_png.avif" alt="temperatura state">
          </div>    
      </div>
    </div>
  </div>

</body>

</html>