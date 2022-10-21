<?php
include_once "includes/head.php";
include_once "includes/header.php";
?>

<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel" style="margin: 10px;">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imagens/chicagobulls.jpg" alt="Chicago Bulls" class="d-block w-100" style="height: 500px;">
      <div class="carousel-caption d-none d-md-block">
        <h1><a class="nav-link" href="pagina1.php">Chicago Bulls</a></h1> 
        <h5>1990 - 1999</h5>
        </div>
    </div>
    <div class="carousel-item">
      <img src="imagens/oriente.jpg" alt="Chicago" class="d-block w-100" style="height: 500px;">
      <div class="carousel-caption d-none d-md-block">
        <h1><a class="nav-link" href="pagina2.php">Los Angeles Lakers</a></h1>    
        <h5>2000 - 2020</h5>
        </div>
    </div>
    <div class="carousel-item">  <img src="imagens/italia.jpg" alt="." class="d-block w-100" style="height: 500px;">  
    <div class="carousel-caption d-none d-md-block">
        <h1><a class="nav-link" href="pagina3.php">Boston Celtics</a></h1>    
        <h5>1960 - 2000</h5>
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

  <!--font-family-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500&display=swap" rel="stylesheet">
  <!--link css styles-->
  <link rel="stylesheet" href="style.css">
<body>
  <h5 class="title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae ipsum nunc. Cras mi sapien, consectetur id efficitur nec, consequat id ante. Phasellus id suscipit neque, id fringilla justo. Maecenas tempor dignissim velit, pretium posuere nisi porta rhoncus. Maecenas mi nisl, aliquet at turpis ut, commodo finibus leo. Proin sed venenatis dolor. Suspendisse sapien velit, euismod at pharetra nec, pretium quis est. Fusce eget lectus fermentum, ornare metus eget, fermentum arcu. Integer ligula felis, lacinia eget risus non, vehicula semper lorem. Vestibulum tempor elit quis nisi mollis, sed ornare tortor pulvinar. Fusce id iaculis augue, sit amet scelerisque dui.
<br>
Phasellus ut mi sed turpis dapibus pretium. Nullam aliquam diam a dolor sagittis imperdiet. In egestas viverra ante. Sed quis felis et mauris feugiat condimentum. Nulla condimentum rhoncus bibendum. Ut consequat placerat tincidunt. Phasellus sit amet velit vitae lorem mattis viverra quis rutrum magna. Integer lobortis ornare quam, eget blandit lacus rhoncus finibus. Nullam rutrum dictum semper. Sed id placerat turpis. Fusce at enim varius, venenatis ante id, cursus nibh. Integer sed maximus orci, et porttitor erat. Maecenas quam tortor, imperdiet sit amet nunc vel, fringilla consectetur lacus. Suspendisse imperdiet dolor ac metus laoreet, in bibendum nibh ullamcorper.</h5>
  <div class="container1">

    <a class="button-inter item9"><span></span><span></span><span></span><span></span>Comece a explorar</a>
  </div>

<br>
<br>
</div>


<?php
include_once "includes/footer.php";
?>

