<?php
function ctrlRegistrar($peticio, $resposta, $contenidor)
{
	$usuaris = $contenidor->usuaris();
	
	$dnireg = $peticio->get(INPUT_POST, "dnireg");
	$nomreg = $peticio->get(INPUT_POST, "nomreg");   
	$cognomreg = $peticio->get(INPUT_POST, "cognomreg"); 
	$emailreg = $peticio->get(INPUT_POST, "emailreg"); 
	$passreg = $peticio->get(INPUT_POST, "passreg");
	$adrecareg = $peticio->get(INPUT_POST, "adrecareg");
	$telefonreg = $peticio->get(INPUT_POST, "telefonreg");

	$usuaris->add($dnireg, $nomreg, $cognomreg, $emailreg, $adrecareg, $telefonreg, $passreg);
	
    $resposta->SetTemplate("registrar.php");

    return $resposta;

}
?>