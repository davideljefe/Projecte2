<?php

function ctrldoLogin($peticio, $resposta, $contenidor)
{
    $usuari = $peticio->get(INPUT_POST, "user");
    $pass = $peticio->get(INPUT_POST, "pass");

    $usuaris = new \Daw\UsuarisPDO($contenidor->config["db"]);;

    $actual = $usuaris->getUser($usuari);
    
    if($actual && $actual["contrasenya"] === $pass) {
        $resposta->setSession("logat", true);
        $resposta->setSession("identificar", $actual);
        $resposta->redirect("location: index.php");
    } else {
        $resposta->setSession("logat", false);
        $resposta->redirect("location: index.php?r=identificar");
    }
    return $resposta;
}