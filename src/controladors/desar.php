<?php

/**
    * Controlador per desar el nom de l'usuari.
    * Exemple per a M07.
    * @author: Dani Prados dprados@cendrassos.net
    *
    * Desar el nom de l'usuari
    *
**/

/**
  * ctrlDesar: Controlador que desa el nom de l'usuari
  *
  * @param $peticio contingut de la petició http.
  * @param $resposta contingut de la resposta http.
  *
**/
function ctrlDesar($peticio, $resposta, $contenidor)
{

    $nom = $peticio->get(INPUT_POST, "nom");
    $contrasenya = $peticio->get(INPUT_POST, "contrasenya");

    $error = false;
    $missatgeError = array();
    $resposta->setSession("nom", "");
    $resposta->setSession("contrasenya", "");

    if ($nom == "") {
        $missatgeError[] =  "No has entrat el nom!";
        $error = true;
    } else {
        $resposta->setSession("nom", $nom);
    }

    if ($contrasenya == "") {
        $missatgeError[] = "No has entrat la contrasenya";
        $error = true;
    } else {
        $resposta->setSession("contrasenya", $contrasenya);
    }
    $resposta->setSession("error", implode("<br>\n", $missatgeError));
    $resposta->setCookie("visites", 0, strtotime("+1 month"));

    if ($error) {
        $resposta->redirect("Location:index.php?r=identificar");
    } else {
        $resposta->redirect("Location:index.php");
    }

    return $resposta;
}