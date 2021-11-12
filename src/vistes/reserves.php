<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link type="text/css" rel="stylesheet" href="footer.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
      <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
      
      <title>Reserves</title>
      <script>
	       $(function() {
	       $( "#data1" ).daterangepicker();
	       });
	   </script>  
    </head>

<body>
    <header>
        <?php include("header.php"); ?> 
    </header>
    <div class="col-9">
          <?php if($logat) { ?>
                  <h1>Hola <?=$identificar["usuari"]; ?></h1>
            <?php } else { ?>  
              <a href="index.php?r=identificar" class="btn">Login</a>
          <?php } ?>  
          </div>
    <div class="container">
          <div style="margin-top: 10px;" class="col">
              <p><?=$missatge?></p>
              <hr>
              <p>Benvingut a l'apartat de reserves</p>
          </div>

        <div class="row mt-5 mb-4">
          <div class="col">
            <div class="bg-light border rounded p-3">
                <h2>CALENDARI</h2>
                <p>Sel·leccioni quan li agradaria venir a l'hotel.</p>
                <div class="col">
                  <form >
                    <input type="text" id="data1" />
                  </form>
                </div>
            </div>
          </div>
        </div>
    </div>

    <footer class="text-center footer-style">
        <?php include("footer.php"); ?> 
    </footer>

</body>
</html>