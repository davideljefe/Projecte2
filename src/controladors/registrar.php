<?php
function ctrlRegistrar($peticio, $resposta, $contenidor)
{

	$nomreg = $_POST["nomreg"];   
	$cognomreg = $_POST["cognomreg"]; 
	$emailreg = $_POST["emailreg"]; 
	$dnireg = $_POST["dnireg"];
	$passwordreg = $_POST["passreg"];
	$adrecareg = $_POST["adrecareg"];
	$telefonreg = $_POST["telefonreg"];
	
    $resposta->SetTemplate("registrar.php");

    return $resposta;

}
?>