<?php

/**
    * Controlador de la pàgina about.
    * Exemple per a M07.
    * @author: Dani Prados dprados@cendrassos.net
    *
    * Carrega la pàgina d'about.
    *
**/

/**
  * ctrlAbout: Controlador que carrega la pàgina About
  *
  * @param $peticio contingut de la petició http.
  * @param $resposta contingut de la resposta http.
  *
**/
function ctrlReserves($peticio, $resposta, $contenidor)
{

    $nom = $peticio->get("SESSION", "nom");
    $contrasenya = $peticio->get("SESSION", "contrasenya");

    /* Validem que nom i cognom estan definits */
    if ($nom == "" || $contrasenya == "") {
        $resposta->setSession("error", "Has intentat accedir a la pàgina sense identificar-te!!!!!!\n");
        $resposta->redirect("Location:index.php?r=identificar");
    }


    $missatge = "Hola {$nom}!";

    $resposta->set("missatge", $missatge);
    $resposta->SetTemplate("reserves.php");

    return $resposta;
}