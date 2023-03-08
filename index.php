<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URC</title>
    <link href="/css/styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   

</head>
<body>

  <!--navbar-->
    <?php
        include('navbar.html');
    ?>

    <div id="carouselControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/Banner 1.jpg" class="d-block w-100" alt="banner 1">
        </div>
        <div class="carousel-item">
          <img src="img/Banner 2.jpg" class="d-block w-100" alt="banner 2">
        </div>
        <div class="carousel-item">
          <img src="img/Banner 4.jpg" class="d-block w-100" alt="banner 3">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div id="card" class="row row-cols-1 row-cols-md-3 g-4" >
      <div class="col">
        <div class="card h-100">
          <img src="img/explore.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Explore Our Research</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="img/innovation.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Innovation and Impact</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="img/research.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Our Research Environment</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>
    </div>

    <h1 class="content">content</h1>
    <p>
      History of URC
      Recognizing the importance of promoting research among staff of the university, the International Research Centre (InRC) was established at University of Peradeniya in 2012.

      The Main activities of the InRC included enhancing global relations, promoting multidisciplinary collaborative research programmes, and facilitating students and staff of the university by providing and coordinating resources, platforms and scholarly exchanges.

      This centre has been functioning as the liaising entity for all international exchanges and research activities of the university and has initiated and renewed links and agreements of the university with various institutions throughout the world. Since inception the InRC was headed by a full time director until it was transformed into International Affairs Office (IAO) in 2018.

      The main focus of the IAO was to co-ordinate international affairs of the University, therefore, the need of an entity to further research was felt. In order to cater to the need of promoting research activities the university proposed that URC be established. Accordingly, the URC was established in 2020. The URC strives for facilitating research within university of Peradeniya by creating a conducive environment for the university community.
    </p>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="js/index.js" charset="utf-8"></script>
</body>
</html>