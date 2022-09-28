<?php
include_once "includes/head.php";
include_once "includes/header.php";
?>

<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imagens/image1.png" alt="America do sul" class="d-block w-100" style="height: 500px;">
      <div class="carousel-caption d-none d-md-block">
        <h1><a class="nav-link" href="americadosul.php">América do sul</a></h1> 
        <h5>250 d.C. - 900 d.C.</h5>
        </div>
    </div>
    <div class="carousel-item">
      <img src="imagens/oriente.jpg" alt="Chicago" class="d-block w-100" style="height: 500px;">
      <div class="carousel-caption d-none d-md-block">
        <h1><a class="nav-link" href="oriente.php">Oriente Médio</a></h1>    
        <h5>3500 a.C. - 300 d.C.</h5>
        </div>
    </div>
    <div class="carousel-item">  <img src="imagens/italia.jpg" alt="." class="d-block w-100" style="height: 500px;">  
    <div class="carousel-caption d-none d-md-block">
        <h1><a class="nav-link" href="europa.php">Europa</a></h1>    
        <h5>476 a.C. - 1453</h5>
        </div></div>
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
</div>
<br>
<br>
</div>
<!-- carousel end -->




<?php
include_once "includes/footer.php";
?>

