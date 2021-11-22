<?php

function ctrlIdentificar($peticio, $resposta, $contenidor)
{

	$error = $nom = $peticio->get("SESSION", "error");
    $resposta->set("error", $error);
    $resposta->SetTemplate("error.php");
  	$resposta->SetTemplate("identificar.php");
    return $resposta;
}