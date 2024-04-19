<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div>
      <img src="img/estg.png" alt="estg logo" width="100px">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <div class="">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="main.php">Home</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link active" aria-current="page" href="dashboard.php">Entrance</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link active" aria-current="page" href="dinner.php">Dinning Room</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link active" aria-current="page" href="kitchen.php">Kitchen</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link active" aria-current="page" href="office.php">Office</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link active" aria-current="page" href="backdoor.php">Backdoor</a>
          </li>
        </ul>
      </div>
    </div>
    <div>
      <?php echo $_SESSION['username']; ?>
      <button class="btn btn-outline-secondary " aria-disabled="true"><a href="logout.php">Logout</a></button>
    </div>
  </div>
</nav>