<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

      <link type="text/css" rel="stylesheet" href="footer.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
      
      <title>Sessió</title>
    </head>

    <body>
      
<?php include("header.php"); ?>

<div class="container">
        <div class="row mt-5 mb-4">
            <div class="col"><h1>INICIA SESSIÓ</h1></div>
        </div>
    <div class="row justify-content-md-center">
        <div class="col-4  p-3">
            <form action="index.php" method="POST">
                    <input name="r" type="hidden" value="dologin">
                  <div class="mb-3">
                      <label for="nom1" class="form-label">Usuari</label>
                      <input type="text" name="user" class="form-control" id="nom1">
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Contrasenya</label>
                      <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
                  </div>
                    <button type="submit"  name="iniciar" class="btn btn-primary">Inicia Sessió</button>
                    <a href="index.php?r=registrar"><input type="button" value="Registre"  class="btn btn-primary"></a>
            </form>
        </div>
    </div>
</div>

<?php if (isset($error) && $error != "") {?>
    <div class="alert alert-danger" role="alert">
          <?=$error;?>
    </div>
<?php }?>

<footer>
  <?php include("footer.php"); ?>
</footer>
    </body>
</html>