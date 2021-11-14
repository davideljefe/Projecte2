<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

      <link type="text/css" rel="stylesheet" href="footer.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
      
      <title>Registarse</title>
    </head>

    <body>
    <?php include("header.php"); ?>
    <?php echo "Hola " . $nomreg . ", benvingut"; ?>
    <div class="container">
    <div class="row mt-5 mb-4">
        <div class="col"><h1>REGISTRA'T</h1></div>
      </div>
      <div class="row justify-content-md-center">
      <div class="col-4  p-3">
      <form method="POST" class="row g-3" action="index.php" >
      <div class="col-md-6">
    <label for="inputnom" class="form-label">Nom</label>
    <input type="text" class="form-control" id="inputnom" name="nomreg">
  </div>
  <div class="col-md-6">
    <label for="inputcognom" class="form-label">Cognom</label>
    <input type="text" class="form-control" id="inputcognom" name="cognomreg">
  </div>
  <div class="col-md-6">
    <label for="inputdni" class="form-label">DNI</label>
    <input type="text" class="form-control" placeholder="Ex. 12345678H" id="inputdni" name="dnireg">
  </div>
  <div class="col-md-6">
    <label for="inputEmail" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail" name="emailreg">
  </div>
  <div class="col-md-12">
    <label for="inputPassword" class="form-label">Contrasenya</label>
    <input type="password" class="form-control" id="inputPassword" name="passreg">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Adreça</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="C/ Cendrassos 8, 1A" name="adrecareg">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Registrar-se</button>
  </div>
</form>
      </div>
    </div>
    </div>
<footer>
  <?php include("footer.php"); ?>
</footer>
    
    </body>
</html>