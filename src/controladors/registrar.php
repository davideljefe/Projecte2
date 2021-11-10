<?php
function ctrlRegistrar($peticio, $resposta, $contenidor)
{
    $resposta->SetTemplate("registrar.php");

    return $resposta;


$nomreg = $_POST["nomreg"];   
$cognomreg = $_POST["cognomreg"]; 
$emailreg = $_POST["emailreg"]; 
$dnireg = $_POST["dnireg"];
$emailreg = $_POST["emailreg"];
$passwordreg = $_POST["passwordreg"];
$adrecareg = $_POST["adrecareg"];
}
?>