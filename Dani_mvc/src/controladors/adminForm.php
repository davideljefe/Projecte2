<?php

/**
    * Controlador del formulari per afegir i editar imatges.
    * Exemple per a M07.
    * @author: Dani Prados dprados@cendrassos.net
    *
    * Carrega la imatge que toca i la visualitza
    *
**/

/**
  * ctrlForm: Controlador que carrega el formulari per afegir i editar imatges
  *
  * @param $peticio contingut de la petició http.
  * @param $resposta contingut de la resposta http.
  * @param $imatges Model que encapsula les imatges.
  *
**/
function ctrlForm($peticio, $resposta, $contenidor)
{
    $missatge = $peticio->get("SESSION", "missatge");
    $resposta->set("missatge", $missatge);

    $imatges = $contenidor->imatges();

    $imatge = $peticio->get(INPUT_GET, "imatge");
    //var_dump($imatge);
    if (!is_null($imatge)) {
        $imatgeActual = $imatges->get($imatge);
        $resposta->set("accio", "actualitzar");
        $resposta->set("nomAccio", "Actualitzar");
    } else {
        $imatgeActual = ["id" => "", "titol" => "", "url" => ""];   //iniciem una imatge buida
        $resposta->set("accio", "afegir");
        $resposta->set("nomAccio", "Afegir");
    }
    
    $resposta->set("imatgeActual", $imatgeActual);
    
    $resposta->SetTemplate("adminForm.php");

    return $resposta;
}
