<?php

function ctrlIdentificar($peticio, $resposta, $contenidor)
{
    $error = $email = $peticio->get("SESSION", "error");
    $resposta->set("error", $error);

    $email = $peticio->get("SESSION", "email");
    $contrasenya = $peticio->get("SESSION", "contrasenya");
    if (!isset($email)) {
        $email = "";
    }
    if (!isset($contrasenya)) {
        $contrasenya = "";
    }

    $resposta->set("email", $email);
    $resposta->set("contrasenya", $contrasenya);

    $resposta->SetTemplate("identificar.php");
    
    return $resposta;
}