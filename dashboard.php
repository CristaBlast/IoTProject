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
  <meta http-equiv="refresh" content="10">
  <title>Plataforma IoT</title>
  <!--css-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <!--scripts-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
<?php include 'navbar.php';?>
<br>
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
  <br>
  <div class="container">
    <div class="card">
      <div class="card-header">
        <p>Tabela de sensores</p>
      </div>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Tipos de Dispositivos IoT</th>
              <th scope="col">Valor</th>
              <th scope="col">Data de atualização</th>
              <th scope="col">Estado de alertas</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?php echo $name_temperatura ?></td>
              <td><?php echo $valor_temperatura ?>º</td>
              <td><?php echo $time_temperatura ?></td>
              <td><span class="badge rounded-pill text-bg-danger">DC</span></td>
            </tr>
            <tr>
              <td>Humidade</td>
              <td>70%</td>
              <td>2024/15/03 8:36</td>
              <td><span class="badge rounded-pill text-bg-primary">Normal</span></td>
            </tr>
            <tr>
              <td>Led Arduino</td>
              <td>Ligado</td>
              <td>2024/15/03 8:36</td>
              <td><span class="badge rounded-pill text-bg-success">Ativo</span></td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </div>


</body>

</html>