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
      <div class="row mt-5 mb-4">
        <div class="col"><h1>Exemple per veure com funcionen les sessions</h1></div>
      </div>

            <?php if (isset($error) && $error != "") {?>
          <div class="alert alert-danger" role="alert">
                <?=$error;?>
          </div>
            <?php }?>

            
      <div class="row justify-content-md-center">
        <div class="col-4  p-3">
          <div class="card text-white bg-info mb-3">
            <div class="card-header">Etapa 3 - Exemple 1 - Sessions</div>
            <div class="card-body">
              <h5 class="card-title">Hola!</h5>
              <p class="card-text">
                <form action="index.php" method="post">
                <input type="hidden" name="r" value="desar">
          
                  <div class="form-group">
                    <label for="inputNom">Abans d'entrar que et sembla si em dius el teu nom?</label>
                    <input name="nom" type="text" class="form-control" id="inputNom" value="<?=$nom;?>" placeholder="El teu nom">

                  </div>
                  <div class="form-group">
                    <label for="inputcognom">Cognom *</label>
                    <input name="cognom" type="text" class="form-control" id="inputCognom" value="<?=$cognom;?>" placeholder="El teu cognom">
                  </div>
                  <button type="submit" class="btn btn-primary">Hola!</button>
                </form>
              </p>
            </div>
          </div>          
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