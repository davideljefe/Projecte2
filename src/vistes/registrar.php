<?php

function ctrlRegistrar($peticio, $resposta, $contenidor)
{
    $error = $nom = $peticio->get("SESSION", "error");
    $resposta->set("error", $error);

    $nom = $peticio->get("SESSION", "nom");
    $cognom = $peticio->get("SESSION", "cognom");
    if (!isset($nom)) {
        $nom = "";
    }
    if (!isset($cognom)) {
        $cognom = "";
    }

    $resposta->set("nom", $nom);
    $resposta->set("cognom", $cognom);

    $resposta->SetTemplate("identificar.php");
    
    return $resposta;
}
