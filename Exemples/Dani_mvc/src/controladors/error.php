<?php

/**
    * Controlador per quan hi ha un error.
    * Exemple per a M07.
    * @author: Dani Prados dprados@cendrassos.net
    *
    * Carrega la pàgina d'error per quan no ha trobat un recurs.
    *
**/

/**
  * ctrlError: Controlador que carrega la pàgina d'error
  *
  * @param $peticio contingut de la petició http.
  * @param $resposta contingut de la resposta http.
  *
**/
function ctrlError($peticio, $resposta, $contenidor)
{

    $error = $nom = $peticio->get("SESSION", "error");
    $resposta->set("error", $error);
    $resposta->SetTemplate("error.php");

    return $resposta;
}
