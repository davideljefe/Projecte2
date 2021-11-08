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
    $contrasenya = $peticio->get("SESSION", "contrasenya");
    
   /* if (!isset($nom)) {
        $error;
    }
    if (!isset($contrasenya)) {
        $error;
    }*/
    
    echo "$error";
    
    $resposta->set("nom", $nom);
    $resposta->set("contrasenya", $contrasenya);

    $resposta->SetTemplate("identificar.php");
    
    return $resposta;
}