<!DOCTYPE html>
<html>
    <head>
    <title>HOTEL ABP</title>
    <link type="text/css" rel="stylesheet" href="index.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>

    <body>
        <header>  

         <?php 
              require_once('layout/header.php');
         ?>  

         </header>
         
        <div class="container">
            <div class="header"><h1>HOTEL ABP</h1></div>
            <div class="sidebar">
                <ul>
                    <li>
                        <a href="#">Habitacions</a>
                    </li>
                    <li>
                        <a href="#">Reserves</a>
                    </li>
                    <li>
                        <a href="#">LOGO</a>
                    </li>
                </ul>
               //CALENDARI PER RESERVA I REGITRAR.
                /**************************
                <div class="container">
            <div class="row">
              <div class='col-sm-6'>
                 <div class="form-group">
                    <div class='input-group date' id='datetimepicker1'>
                       <input type='text' class="form-control" />
                       <span class="input-group-addon">
                       <span class="glyphicon glyphicon-calendar"></span>
                       </span>
                    </div>
                 </div>
              </div>
              <script type="text/javascript">
                 $(function () {
                     $('#datetimepicker1').datetimepicker();
                 });
              </script>
            </div>
 ***************/
                </div>
            </div>
            <div class="main">MAIN</div>
            <div class="sidebar2">SIDEBAR2</div>
            <div class="footer">FOOTER</div>
        </div>

     <footer class="text-center footer-style">

        <?php 
            include_once('layout/footer.php');
        ?>

    </footer>

    </body>
</html>