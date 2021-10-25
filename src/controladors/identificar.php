<?php

/**
    * Controlador de la pàgina d'identificació.
    * Exemple per a M07.
    * @author: Dani Prados dprados@cendrassos.net
    *
    * Mostra el formulari d'identificació
    *
**/

/**
  * ctrlIdentificar: Controlador que carrega el formulari d'identificació
  *
  * @param $peticio contingut de la petició http.
  * @param $resposta contingut de la resposta http.
  *
**/
function ctrlIdentificar($peticio, $resposta, $contenidor)
{
    $error = $nom = $peticio->get("SESSION", "error");
    $resposta->set("error", $error);

    $nom = $peticio->get("SESSION", "nom");
    $cognom = $peticio->get("SESSION", "cognom");
    if (!isset($nom)) {
        $nom = "";
    }
    if (!isset($cognom)) {
        $cognom = "";
    }

    $resposta->set("nom", $nom);
    $resposta->set("cognom", $cognom);

    $resposta->SetTemplate("identificar.php");
    
    return $resposta;
}