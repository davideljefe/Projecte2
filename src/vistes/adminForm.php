<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Exemple d'us de sessions</title>
  </head>
  <body>
    <?php include("cap.php"); ?>
    <div class="container">
      <div class="row mt-1 mb-3">
        <div class="col"><h1>Exemple per veure com funcionen les sessions</h1></div>
      </div>

        <?php
        if (!is_null($imatge)) {
            ?>    
      <div class="alert">
        <div class="col"><p><?=$missatge; ?></p></div>
      </div>
            <?php
        }
        ?>
      
      <div class="row mt-4">
        
        <div class="col">
        <form action="index.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="r" value="<?=$accio?>">
            <input type="hidden" name="id" value="<?=$imatgeActual["id"]?>">
            <div class="form-group">
                <label for="exampleInputTitol">Títol de la imatge</label>
                <input type="text" name="titol" value="<?=$imatgeActual["titol"];?>" class="form-control" 
                id="exampleInputTitol" aria-describedby="emailHelp">
            </div>
            <?php if ($imatgeActual["id"] === "") { ?>
            <div class="form-group">
                <label for="exampleFormControlFitxer">Imatge</label>
                <input type="file" name="imatge" class="form-control-file" id="exampleFormControlFitxer">
            </div>
            <?php }  ?>

            <button type="submit" class="btn btn-primary"><?=$nomAccio;?></button>
        </form>
        </div>
        <?php if ($imatgeActual["id"] !== "") { ?>
            <div class="col">
                <img src="img/<?php echo $imatgeActual["url"]; ?>" alt="<?php echo $imatgeActual["titol"]; ?>" class="img-fluid rounded" >
            </div>
                
        <?php } ?>
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
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>