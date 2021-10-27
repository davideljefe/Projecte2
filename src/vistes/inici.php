<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link type="text/css" rel="stylesheet" href="index.css">

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      
      <title>HOTEL ABP</title>
    </head>

    <body>

        <header>  
         <?php 
              require_once('layout/header.php');
         ?>  
         </header>

         <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../../public/slider/1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../../public/slider/2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../../public/slider/3.jpg" class="d-block w-100" alt="...">
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

      <div class="card-group">
        <div class="card">
          <img src="../../public/slider/3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
        <div class="card">
          <img src="../../public/slider/4.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
        <div class="card">
          <img src="../../public/slider/4.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>

<!--CODI DANI*****************************************************************************************-->
<div class="container">
      <div class="row mt-1 mb-3">
        <div class="col"><h1>Exemple per veure com funcionen els susaris</h1></div>
      </div>

      <div class="row mt-1 mb-1">
        <div class="col"><p><?=$missatge; ?></p></div>
      </div>
      
      <div class="row mt-4">
        <div class="col-3">
          <div class="list-group">
            <?php
            foreach ($llistatImatges as $codi => $actual) {
                if ($codi == $imatge) {
                  // és la imatge que estem mostrant!
                    $css = "active";
                } else {
                    $css = "";
                }
                ?>
                <a href="index.php?imatge=<?=$codi;?>" class="list-group-item list-group-item-action <?=$css;?>">
                  <?=$actual["titol"];?>
                </a>
            <?php }?>
            
          </div>
          
        </div>
        <div class="col-9">
            <?php
            if (!is_null($imatge)) {
                ?>
          <img src="img/<?php echo $imatgeActual["url"]; ?>" alt="<?php echo $imatgeActual["titol"]; ?>" class="img-fluid rounded">
                <?php
            } else {
                ?>
          <div class="alert alert-danger" role="alert">
            No has escollit cap imatge!
          </div>
                <?php
            }
            ?>
        </div>
      </div>
      <div class="row mt-5 mb-4">
        <div class="col">
          <div class="bg-light border rounded p-3">
          <h2>M07 - Desenvolupament web entorn servidor</h2>
          <p>Professor: Dani Prados</p>
          </div>
        </div>
      </div>
    </div>

    <!-- FINAL CODI DANI*************************************************************************************-->

      <div  class="buttoncard">
        <a href="#">Veure tots</a>
      </div>
         
    
    <footer class="text-center footer-style">
        <?php 
            include_once('layout/footer.php');
        ?>
    </footer>

    </body>
</html>