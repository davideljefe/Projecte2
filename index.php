<!DOCTYPE html>
<html>
    <head>
    <title>HOTEL ABP</title>
    <link type="text/css" rel="stylesheet" href="index.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
     <footer class="text-center footer-style">
        <?php 
            include_once('layout/footer.php');
        ?>
    </footer>
    </body>
</html>