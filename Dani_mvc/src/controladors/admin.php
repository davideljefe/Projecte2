<?php

/**
    * Controlador de la portada de la part d'aministració.
    * Exemple per a M07.
    * @author: Dani Prados dprados@cendrassos.net
    *
    * Carrega la imatge que toca i la visualitza
    *
**/

/**
  * ctrlAdmin: Controlador que carrega les imatges i visualitza la portada de la zona d'aministració
  *
  * @param $peticio contingut de la petició http.
  * @param $resposta contingut de la resposta http.
  * @param $imatges Model que encapsula les imatges.
  *
**/
function ctrlAdmin($peticio, $resposta, $contenidor)
{
    $missatge = $peticio->get("SESSION", "missatge");
    $resposta->set("missatge", $missatge);
    $imatges = $contenidor->imatges();
    
    $cerca = $peticio->get(INPUT_GET, "cerca");

    if(is_null($cerca)) {
        $llistatImatges = $imatges->llistat();
        $resposta->set("cerca", $cerca);
    } else {
        $llistatImatges = $imatges->llistatCercar($cerca);
        $resposta->set("cerca", $cerca);
    }
    
    $resposta->set("llistatImatges", $llistatImatges);
    
    // Esborrem el missatge de la sessió
    $resposta->setSession("missatge", null);
    $resposta->SetTemplate("admin.php");

    return $resposta;
}
