<?php require_once "vistas/parte_superior.php"?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>

  <style>

.carousel-inner img {
  margin: auto;
}

.carousel-inner {
    height: 200px;
    position: relative;
    
}

.carousel-img {
    position: relative;
    top: 50%;
    transform: translateY(-50%);
}

.carousel-inner>.active {
    position: relative;
    top: 50%;
    transform: translateY(-50%);
}

html, body {
    background-size: cover;
    background-repeat: no-repeat;
    object-position: center;
    height: 100%;
    width: 100%;
    align-items: center;
    text-decoration: none;
    font-weight: 500;
}

.footer {
    position: fixed;
    bottom: 0;
    clear: both;
    width: 100%;
    height: 16vh;
    background-color: rgb(128, 128, 128, 0.1);
    color: gray;
    font-size: 0.5vh;
}

.footerText {
    color: gray;
    font-size: 2vh;
}

.contenedor {
    text-align: center;
    display: contents;
}

.divinput {
    text-align: center;
    display: inline-block;
}

.inputl {
    width: 50vw;
    text-align: center;
}

a {
    color: gray;
}

a:hover {
    text-decoration: none;
    color: black;
}

.has-error .help-block {
    color: darkorange;
    background-color: black;
    margin-top: -0.5vh;
    border-radius: 5px;
}

.slogo {
    width: 30px;
}

.tales {
    width: 100%;
}

.carousel-inner {
    max-height: 200px !important;
}

.carousel-img {
    background-position: center center;
}

.car1{
    background-position: center bottom;
}

  </style>

  <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class=" text-danger navbar-brand">PHP CRUD lOGIN</a>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Buscar</button>
    </form>
  </div>
</nav>

  <div class=" card text-center">
  <div class="card-header">
    <h1 class="  card text-white bg-primary mb-3 text-primary" >BIENVENIDO CRUD PHP</h1>
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>
<br>

<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="img/Origina2l.png" class="d-block w-60" alt="...">
      <div class=" carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="img/Original.png" class="d-block w-60" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/Origina4l.png" class="d-block w-60" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

  


  
      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>



<?php require_once "vistas/parte_inferior.php"?>