<?php

function ctrlReserves($peticio, $resposta, $contenidor)
{  


  $login = $peticio->get("SESSION", "identificar");
  $logat = $peticio->get("SESSION", "logat");


  $resposta->set("logat", $logat);
  $resposta->set("identificar", $login);
	
  $resposta->SetTemplate("reserves.php");

  return $resposta;
}