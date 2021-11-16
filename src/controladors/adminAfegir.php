<?php
function ctrlAfegir($peticio, $resposta, $contenidor)
{
  $usuaris = $contenidor->usuaris();
	
	$dnireg = $peticio->get(INPUT_POST, "dnireg");
	$nomreg = $peticio->get(INPUT_POST, "nomreg");   
	$cognomreg = $peticio->get(INPUT_POST, "cognomreg"); 
	$emailreg = $peticio->get(INPUT_POST, "emailreg"); 
	$passreg = $peticio->get(INPUT_POST, "passreg");
	$adrecareg = $peticio->get(INPUT_POST, "adrecareg");

	$usuaris->add($dnireg, $nomreg, $cognomreg, $emailreg, $adrecareg, $passreg);
  $resposta->SetTemplate("identificar.php");
	
}