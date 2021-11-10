<?php
function ctrlRegistrar($peticio, $resposta, $contenidor, $nomreg, $cognomreg, $dnireg, $emailreg, $passwordreg, $adrecareg)
{
	$nomreg = $_POST["nomreg"];   
	$cognomreg = $_POST["cognomreg"]; 
	$emailreg = $_POST["emailreg"]; 
	$dnireg = $_POST["dnireg"];
	$emailreg = $_POST["emailreg"];
	$passwordreg = $_POST["passwordreg"];
	$adrecareg = $_POST["adrecareg"];
	
    $resposta->SetTemplate("registrar.php");

    return $resposta;

}
?>