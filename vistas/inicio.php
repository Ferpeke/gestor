<?php

session_start();

if (isset($_SESSION['usuario'])) {
  include "header.php";

?>

  <div class="container-fluid">
    <div class="row-4">
      <div class="col-sm">
        <div class="card">
          <div class="card-header fondoJumbo">
            <div id="demo" class="carousel slide" data-ride="carousel" style="text-align: center; height: 50%;">

              <!-- Indicators -->
              <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                <li data-target="#demo" data-slide-to="3"></li>
                <li data-target="#demo" data-slide-to="4"></li>
                <li data-target="#demo" data-slide-to="5"></li>
                <li data-target="#demo" data-slide-to="6"></li>
                <li data-target="#demo" data-slide-to="7"></li>
                <li data-target="#demo" data-slide-to="8"></li>
                <li data-target="#demo" data-slide-to="9"></li>
                <li data-target="#demo" data-slide-to="10"></li>
              </ul>

              <!-- The slideshow -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <!-- <img src="../img/img1.jpeg" alt="Los Angeles" width="60%"> -->
                  <a href="https://covers.alphacoders.com/cover/view/57783"><img src="https://coverfiles.alphacoders.com/577/57783.jpg" style="height: 250px;"></a>
                </div>
                <div class="carousel-item">
                  <a href="https://covers.alphacoders.com/cover/view/46885"><img src="https://coverfiles.alphacoders.com/468/46885.png" style="height: 250px;"></a>
                </div>
                <div class="carousel-item">
                  <a href="https://covers.alphacoders.com/cover/view/177762"><img src="https://coverfiles.alphacoders.com/177/177762.jpg" style="height: 250px;"></a>
                </div>
                <div class="carousel-item">
                  <a href="https://covers.alphacoders.com/cover/view/108635"><img src="https://coverfiles.alphacoders.com/108/108635.jpg" style="height: 250px;"></a>
                </div>
                <div class="carousel-item">
                  <a href="https://covers.alphacoders.com/cover/view/56488"><img src="https://coverfiles.alphacoders.com/564/56488.jpg" style="height: 250px;"></a>
                </div>
                <div class="carousel-item">
                  <a href="https://covers.alphacoders.com/cover/view/174574"><img src="https://coverfiles.alphacoders.com/174/174574.png" style="height: 250px;"></a>
                </div>
                <div class="carousel-item">
                  <a href="https://covers.alphacoders.com/cover/view/74611"><img src="https://coverfiles.alphacoders.com/746/74611.png" style="height: 250px;"></a>
                </div>
                <div class="carousel-item">
                  <a href="https://covers.alphacoders.com/cover/view/115708"><img src="https://coverfiles.alphacoders.com/115/115708.jpg" style="height: 250px;"></a>
                </div>
                <div class="carousel-item">
                  <a href="https://covers.alphacoders.com/cover/view/44229"><img src="https://coverfiles.alphacoders.com/442/44229.png" style="height: 250px;"></a>
                </div>
                <div class="carousel-item">
                  <a href="https://covers.alphacoders.com/cover/view/177775"><img src="https://coverfiles.alphacoders.com/177/177775.png" style="height: 250px;"></a>
                </div>
                <div class="carousel-item">
                  <a href="https://covers.alphacoders.com/cover/view/178540"><img src="https://coverfiles.alphacoders.com/178/178540.jpg" style="height: 250px;"></a>
                </div>
              </div>

              <!-- Left and right controls -->
              <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid mt-3">
    <div class="row-md">
      <div class="col-sm-12">
        <div class="jumbotron text-center jumbo">
          <h1 class="display-4"> <i class="fas fa-child"></i> Bienvenido</h1>
          <p class="lead">En esta pagína podras guardar tus archivos y crear tus propias categorias</p>
          <hr class="my-4">
          <p>by FerPeke</p>
        </div>
      </div>
    </div>
  </div>


<?php
  include "footer.php";
} else {
  header("location:../index.php");
}

?>