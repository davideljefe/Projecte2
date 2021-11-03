<?php

/**
    * Controlador per afegir imatges.
    * Exemple per a M07.
    * @author: Dani Prados dprados@cendrassos.net
    *
    * Carrega la imatge que toca i la visualitza
    *
**/

/**
  * ctrlAfegir: Controlador que afegeix imatges
  *
  * @param $peticio contingut de la petició http.
  * @param $resposta contingut de la resposta http.
  * @param $imatges Model que encapsula les imatges.
  *
**/
function ctrlAfegir($peticio, $resposta, $contenidor)
{
    $imatges = $contenidor->imatges();
    
    $resposta->setSession("missatge", "Imatge afegida amb èxit");

    $fitxer = $peticio->get("FILES", "imatge");
    $titol = $peticio->get(INPUT_POST, "titol");

    $fitxerDesti =  $fitxer["name"];


    /* no estem validant res,  en un servidor real hauriem de validar-ho tot!! */
    move_uploaded_file($fitxer["tmp_name"], "img/" . $fitxerDesti);
    $imatges->add($titol, $fitxerDesti);

    $resposta->redirect("location: index.php?r=admin");

    return $resposta;
}
