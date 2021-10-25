<?php

/**
    * Controlador per esborrar imatges.
    * Exemple per a M07.
    * @author: Dani Prados dprados@cendrassos.net
    *
    * Carrega la imatge que toca i la visualitza
    *
**/

/**
  * ctrlEsborrar: Controlador que esborra imatges. Només de la base de dades!!!.
  *
  * @param $peticio contingut de la petició http.
  * @param $resposta contingut de la resposta http.
  * @param $imatges Model que encapsula les imatges.
  *
**/
function ctrlEsborrar($peticio, $resposta, $contenidor)
{
    $imatges = $contenidor->imatges();
    
    $resposta->setSession("missatge", "Imatge esborrada èxit");

    
    $codi = $peticio->get(INPUT_GET, "codi");

    // No estic esborrant el fitxer, només la entrada a la base de dades
    $imatges->delete($codi);

    $resposta->redirect("location: index.php?r=admin");

    return $resposta;
}