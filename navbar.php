
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
            <a class="nav-link active" aria-current="page" href="main.php">Home</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link active" aria-current="page" href="entrance.php">Entrance</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link active" aria-current="page" href="office.php">Office</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link active" aria-current="page" href="machine.php">Machining Room</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link active" aria-current="page" href="backdoor.php">Backdoor</a>
          </li>
        </ul>
        <a class="col-sm-1" aria-current="page" href="#"><?php echo $_SESSION['username'];?></a>
        <button class="btn btn-outline-secondary " aria-disabled="true"><a href="logout.php">Logout</a></button>
      </div>
    </div>
  </nav> 
