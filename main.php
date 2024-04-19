<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("refresh:10;url=index.php");
  die("Acesso restrict");
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <meta http-equiv="refresh" content="30"> -->
  <title>Plataforma IoT</title>
  <!--css-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <!--scripts-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
  <?php include 'navbar.php';?>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
          <div class="card-body text-center">
            <img src="img/building.png" alt="image of the building" class="photo">
          </div>    
      </div>
    </div>
  </div>
</body>
</html>