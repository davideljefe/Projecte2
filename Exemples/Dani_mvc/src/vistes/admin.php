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
        if (!is_null($missatge)) {
            ?>    
      <div class="alert alert-success" role="alert"><?=$missatge; ?></div>
            <?php
        }
        ?>

        <div class="row mt-4">
          <div class="col-md-7">
            <a href="index.php?r=form" class="btn btn-danger">Afegir</a>
          </div>
          <div class="col">
            
            <form class="form-inline" action="index.php">
              <input type="hidden" name="r" value="admin">
              <div class="form-group mx-sm-3 mb-2">
                <label for="inputCerca2" class="sr-only">Cerca</label>
                <input type="text" name="cerca" class="form-control" id="inputCerc2" value="<?=$cerca?>" placeholder="Cerca">
              </div>
              <button type="submit" class="btn btn-primary mb-2">Cerca</button>
            </form>
          </div>
        </div>      

      
      <div class="row mt-4">
        
        <div class="col">
                <?php
                if (count($llistatImatges) > 0) {
                    ?>  
              <table class="table">
                <tr>
                    <th>#</th>
                    <th>Codi</th>
                    <th>Títol</th>
                    <th>Url</th>
                    <th></th>
                </tr>
                
                    <?php

                    foreach ($llistatImatges as $codi => $actual) {
                        ?>
                <tr>
                    <td><img src="img/<?php echo $actual["url"]; ?>" alt="<?php echo $actual["titol"]; ?>" class="img-fluid rounded" width="128"></td>
                    <td><?php echo $actual["id"]; ?></td>
                    <td><a href="index.php?r=form&amp;imatge=<?=$actual['id'];?>" class="btn btn-danger"><?php echo $actual["titol"]; ?></a></td>
                    <td><?php echo $actual["url"]; ?></td>
                    <td><a href="index.php?r=delete&amp;codi=<?php echo $actual["id"]; ?>">Esborrar</a></td>
                </tr>
                    <?php } ?>
            </table>
                <?php } ?>
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
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>