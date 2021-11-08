<?php

function ctrldoLogin($peticio, $resposta, $contenidor)
{
    $usuari = $peticio->get(INPUT_POST, "email");
    $pass = $peticio->get(INPUT_POST, "contrasenya");

    $usuaris = new \Daw\UsuarisPDO($contenidor->config["db"]);;

    $actual = $usuaris->getUser($usuari);

    if($actual && $actual["contrasenya"] === $pass) {
        $resposta->setSession("logat", true);
        $resposta->setSession("login", $actual);
        $resposta->redirect("location: index.php");
    } else {
        $resposta->setSession("logat", false);
        $resposta->redirect("location: index.php?r=login");
    }
    return $resposta;
}