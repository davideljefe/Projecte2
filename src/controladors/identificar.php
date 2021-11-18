<?php

function ctrlIdentificar($peticio, $resposta, $contenidor)
{

    $usuari = $peticio->get("SESSION", "nom");
    $pass = $peticio->get("SESSION", "contrasenya");
    if (!isset($nom)) {
        $nom = "";
    }
    if (!isset($pass)) {
        $pass = "";
    }

    $resposta->set("nom", $usuari);
    $resposta->set("contrasenya", $pass);

    $resposta->SetTemplate("identificar.php");
    return $resposta;
}