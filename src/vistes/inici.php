<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link type="text/css" rel="stylesheet" href="index.css">
      <link type="text/css" rel="stylesheet" href="footer.css">

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
      <link rel="stylesheet" href="fonts.css">
      <script src="http://code.jquery.com/jquery-latest.js"></script>
      <script src="boto.js"></script>
      
      <title>HOTEL ABP</title>
    </head>

    <body>

        <header>  
          <?php include("header.php"); ?> 
        </header>
<span class="up-button icon-arrow-up2"></span>
    <section class="contingut">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>

            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="carousel-caption d-none d-md-block">
                  <h1><b>Benvinguts a l'Hotel ABP</b></h1>
                  <p>El teu hotel de confiança amb els millor preus</p>
                </div>
                <img src="img/6.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <div class="carousel-caption d-none d-md-block">
                  <h1><b>Benvinguts a l'Hotel ABP</b></h1>
                  <p>El teu hotel de confiança amb els millor preus</p>
                </div>
                <img src="img/1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <div class="carousel-caption d-none d-md-block">
                  <h1><b>Benvinguts a l'Hotel ABP</b></h1>
                  <p>El teu hotel de confiança amb els millor preus</p>
                </div>
                <img src="img/3.jpg" class="d-block w-100" alt="...">
              </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
    

      <div style="margin-top: 0px; margin-left: 0px; background-color: #3d3742;">
        <div class="contenttitol"><a href="index.php?r=reserves" style="color: black; text-decoration: none;"><h3 class="subtitol">RESERVA UNA HABITACIÓ</h3></a></div>
        <div class="card-group">
          <div class="card">
            <a href="index.php?r=reserves" style="color: black; text-decoration: none;"><img src="img/3.jpg" class="card-img-top" alt="..."></a>
            <div class="card-body">
              <a href="index.php?r=reserves" style="color: black; text-decoration: none;"><h5 class="card-title">Habitació 512</h5></a>
            </div>
          </div>
          <div class="card">
            <a href="index.php?r=reserves" style="color: black; text-decoration: none;"><img src="img/4.jpg" class="card-img-top" alt="..."></a>
            <div class="card-body">
              <a href="index.php?r=reserves" style="color: black; text-decoration: none;"><h5 class="card-title">Habitació 513</h5></a>
            </div>
          </div>
          <div class="card">
            <a href="index.php?r=reserves" style="color: black; text-decoration: none;"><img src="img/6.jpg" class="card-img-top" alt="..."></a>
            <div class="card-body">
              <a href="index.php?r=reserves" style="color: black; text-decoration: none;"><h5 class="card-title">Habitació 514</h5></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="text-center footer-style">
        <?php include("footer.php"); ?>
    </footer>

  </body>
</html>