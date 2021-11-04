<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
    <title>Exemple d'us de sessions</title>
  </head>
  <body>
    <header><?php include("header.php"); ?>
  </header>
    <div class="container">
      <div class="row mt-1 mb-3">
        <div class="col"><h1 class="text-danger">Alguna cosa ha anat malament</h1></div>
      </div>

      <?php if (isset($error) && $error != "") {?>
          <div class="alert alert-danger" role="alert">
                <?=$error;?>
          </div>
      <?php }?>

      <div class="row mt-1 mb-1">
        <div class="col"><p>Si has arribat aquí vol dir que alguna cosa ha fallat.</p></div>
      </div>

    </div>

  </body>
</html>