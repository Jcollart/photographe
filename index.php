<!DOCTYPE html>

<html>

<head>

  <title>CV</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
  <link href="style.css" rel="stylesheet">
  <link href="header.css" rel="stylesheet">
  <link href="footer.css" rel="stylesheet">

</head>

<body>
  <?php include('header.php'); ?>

  <section id="mainsection">
    <div class="container">
      <div class="col-lg-12">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="models01.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="animal02.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="sport02.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      </div>
  </section>


  <section id="section1">
    <div class="container">
      <div class="col-lg-12">
        <h1 class="text-center"><strong>PRESENTATION</h1></strong><br><br>
      </div>
      <div class="col-lg-12 col-xs-12">
        <div class="row ">
          <div class="col-lg-4 col-sm-4 ">
            <img class="photoprofil" src="luc.jpg">
          </div>
          <div class="col-lg-8 col-sm-8 col-xs-12">

            <p>je suis photographe professionnel depuis 20 ans, notamment dans les Ardennes autour de
          Charleville-Mézières, mais aussi à Sedan et dans la Vallée de la Meuse. <br>il m'arrive de pousser mon
          appareil photo jusque dans l'Aisne et dans la Marne – Reims.<br> Je vous propose des séances photo pour une
          prise de vue Originale façon Noire et Blanc.
            
                
            </p>
          </div>
        </div>
      </div>
  </section>

<section id="section2">
<div class= "container">
<div class="col-lg-12">
        <h1 class="text-center"><strong>THEMES</h1></strong><br><br>
      </div>
<div class="row ">
            <div class="col-lg-6 col-sm-6">
<a href="photosanimaux.php">
          <img src="animal01.jpg" alt="ANIMAUX" width="50%">
          <p><strong>Animaux</strong></p>
        </a>
</div>
            <div class="col-lg-6 col-sm-6">
<a href="photosmodels.php">
          <img src="models01.jpg" alt="MODELE" width="50%">
          <p><strong>Modeles</strong></p>
        </a>
      </div>
</div><br><br>
<div class="row ">
            <div class="col-lg-6 col-sm-6">
<a href="photosarchitecture.php">
          <img src="architecture01.jpg" alt="ARCHITECTURE" width="50%">
          <p><strong>Architectures</strong></p>
        </a>
</div>
<div class="col-lg-6 col-sm-6">
<a href="photossport.php">
          <img src="sport02.jpg" alt="SPORT" width="50%">
          <p><strong>Sports</strong></p>
        </a>
</div>
</div>
</div>
</section>
  <?php include('footer.php'); ?>

</body>

</html>