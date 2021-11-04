<?php

function ctrlReserves($peticio, $resposta, $contenidor)
{

    $email = $peticio->get("SESSION", "email");
    $contrasenya = $peticio->get("SESSION", "contrasenya");

    if ($email == "" || $contrasenya == "") {
        $resposta->setSession("error", "Has intentat accedir a la pàgina sense identificar-te!!!!!!\n");
        $resposta->redirect("Location:index.php?r=identificar");
    }

    
    $resposta->SetTemplate("reserves.php");

    return $resposta;
}

?>