<!DOCTYPE html>
<html>
    <head>
    <title>HOTEL ABP</title>
    <link type="text/css" rel="stylesheet" href="index.css">

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
            </div>
            <div class="main">MAIN</div>
            <div class="sidebar2">SIDEBAR2</div>
            <div class="footer">FOOTER</div>
        </div>
     <footer>
        <?php 
            include_once('layout/footer.php');
        ?>
    </footer>
    </body>
</html>