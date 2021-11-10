<?php

function ctrldoLogin($peticio, $resposta, $contenidor)
{
    $nom = $peticio->get(INPUT_POST, "nom");
    $contrasenya = $peticio->get(INPUT_POST, "contrasenya");

    $usuaris = new \Daw\UsuarisPDO($contenidor->config["db"]);;

    $actual = $usuaris->getUser($usuari);

    if($actual && $actual["contrasenya"] === $contrasenya) {
        $resposta->setSession("logat", true);
        $resposta->setSession("identificar", $actual);
        $resposta->redirect("location: index.php");
    } else {
        $resposta->setSession("logat", false);
        $resposta->redirect("location: index.php?r=identificar");
    }
    return $resposta;
}