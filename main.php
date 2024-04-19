<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("refresh:10;url=index.php");
  die("Acesso restrict");

  $valor_temperatura = file_get_contents("./api/files/temperatura/valor.txt");
  $time_temperatura = file_get_contents("./api/files/temperatura/time.txt");
  $name_temperatura = file_get_contents("./api/files/temperatura/name.txt");
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
  <link rel="stylesheet" href="./css/cards.css">
  <!--scripts-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body class="bc">
  <?php include 'navbar.php'; ?>
    <div class="wrapper">
        <div class="containers">
            <input type="radio" name="slide" id="c1" checked>
            <label for="c1" class="cards">
                <div class="row">
                    <div class="icon">1</div>
                    <div class="description">
                        <h4>Winter</h4>
                        <p>bruhffer -
                         creative activities</p>
                    </div>
                </div>
            </label>
            <input type="radio" name="slide" id="c2" >
            <label for="c2" class="cards">
                <div class="row">
                    <div class="icon">2</div>
                    <div class="description">
                        <h4>Digitsachnology</h4>
                        <p>Gets better every day -
                         stay tuned</p>
                    </div>
                </div>
            </label>
            <input type="radio" name="slide" id="c3" >
            <label for="c3" class="cards">
                <div class="row">
                    <div class="icon">3</div>
                    <div class="description">
                        <h4>Globalization</h4>
                        <p>Help people all over the world</p>
                    </div>
                </div>
            </label>
            <input type="radio" name="slide" id="c4" >
            <label for="c4" class="cards">
                <div class="row">
                    <div class="icon">4</div>
                    <div class="description">
                        <h4>New technologies</h4>
                        <p>Space engineering becomes
                         more and more advanced</p>
                    </div>
                </div>
            </label>
            <input type="radio" name="slide" id="c5" >
            <label for="c5" class="cards">
                <div class="row">
                    <div class="icon">5</div>
                    <div class="description">
                        <h4>New technologies</h4>
                        <p>Space engineering becomes
                         more and more advanced</p>
                    </div>
                </div>
            </label>
        </div>
    </div>
</body>
</html>
  <?php include 'entrance.php'; ?>
  <?php include 'office.php'; ?>

</body>

</html>