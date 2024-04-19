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

<div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="card">
          <div class="card-header text-center sensor">
            <p><?php echo $name_temperatura . ': ' . $valor_temperatura; ?>º</p>
          </div>
          <div class="card-body text-center">
            <img src="img/temperature-high.png" alt="temperatura state">
          </div>
          <div class="card-footer text-center">
            <p><b>Atualização: </b><?php echo $time_temperatura; ?> - <a href="./api/files/temperatura/log.txt" target="_blank">historico</a></p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <div class="card-header text-center sensor">
            <p>Humidade:70%</p>
          </div>
          <div class="card-body text-center ">
            <img src="img/humidity-high.png" alt="humidity state">
          </div>
          <div class="card-footer text-center">
            <p><b>Atualização: </b>2024/15/03 8:36 - <a href="">historico</a></p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <div class="card-header text-center atuador">
            <p>Led Arduino: Ligado</p>
          </div>
          <div class="card-body text-center">
            <img src="img/light-on.png" alt="light state">
          </div>
          <div class="card-footer text-center">
            <p><b>Atualização: </b>2024/15/03 8:36 - <a href="">historico</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>