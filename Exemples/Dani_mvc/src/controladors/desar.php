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
    $cognom = $peticio->get(INPUT_POST, "cognom");

    $error = false;
    $missatgeError = array();
    $resposta->setSession("nom", "");
    $resposta->setSession("cognom", "");

    if ($nom == "") {
        $missatgeError[] =  "No has entrat el nom!";
        $error = true;
    } else {
        $resposta->setSession("nom", $nom);
    }

    if ($cognom == "") {
        $missatgeError[] = "No has entrat el cognom!";
        $error = true;
    } else {
        $resposta->setSession("cognom", $cognom);
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
