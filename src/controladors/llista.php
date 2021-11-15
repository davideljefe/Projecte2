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
function ctrlLlista($peticio, $resposta, $contenidor)
{
    $llistatus = $contenidor->usuaris();

    $llistatUsuaris = $llistatus->llistat();
    $resposta->set("llistatUsuaris", $llistatUsuaris);

    $resposta->SetTemplate("llistausuaris.php");

    return $resposta;
}
