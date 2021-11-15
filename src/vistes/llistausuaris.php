<?php
include "../../cli/initPDO.php";
?>
<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link type="text/css" rel="stylesheet" href="index.css">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

      <link type="text/css" rel="stylesheet" href="footer.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
      
      <title>Llista Usuaris</title>
    </head>

    <body>
    <?php include("header.php"); ?>
    <div class="container">
    <div class="row mt-5 mb-4">
        <div class="col"><h1>LLISTA DELS USUARIS</h1></div>
      </div>
      <div>
        <table>
          <tr>
            <th>DNI</th>
            <th>NOM</th>
            <th>COGNOM</th>
            <th>CORREU</th>
            <th>ADREÇA</th>
            <th>TELEFON</th>
            <th>ROL</th>
            <th>ACCIONS</th>
          </tr>
          <?php
            foreach ($llistatUsuaris as $codi => $actual) {
          ?>
          <tr>
            <td><?php echo $actual["dni"]; ?></td>
            <td><?php echo $actual["nom"]; ?></td>
            <td><?php echo $actual["cognom"]; ?></td>
            <td><?php echo $actual["correu"]; ?></td>
            <td><?php echo $actual["adreca"]; ?></td>
            <td><?php echo $actual["telefon"]; ?></td>
            <td><?php echo $actual["rol"]; ?></td>
            <td>
              <a class="edit" href="#">Editar</a>
              |
              <a class="delete" href="#">Eliminar</a>
            </td>
          </tr>
          <?php } ?>
        </table>
      </div>
    </div>
<footer>
  <?php include("footer.php"); ?>
</footer>
    
    </body>
</html>