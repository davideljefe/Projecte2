<?php

try {

//translate database conexio
$conexio = mysqli_connect("127.0.0.1", "root", "", "translate") or die("Error " . mysqli_error($conexio));

}

catch(Exception $e)

{

//error de conexió
    die('Error : '.$e->getMessage());
       
}

?>