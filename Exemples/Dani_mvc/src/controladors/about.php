<?php

/**
    * Controlador de la pàgina about.
    * Exemple per a M07.
    * @author: Dani Prados dprados@cendrassos.net
    *
    * Carrega la pàgina d'about.
    *
**/

/**
  * ctrlAbout: Controlador que carrega la pàgina About
  *
  * @param $peticio contingut de la petició http.
  * @param $resposta contingut de la resposta http.
  *
**/
function ctrlAbout($peticio, $resposta, $contenidor)
{

    $nom = $peticio->get("SESSION", "nom");
    $cognom = $peticio->get("SESSION", "cognom");

    /* Validem que nom i cognom estan definits */
    if ($nom == "" || $cognom == "") {
        $resposta->setSession("error", "Has intentat accedir a la pàgina sense identificar-te!!!!!!\n");
        $resposta->redirect("Location:index.php?r=identificar");
    }

    $visites = $peticio->get(INPUT_COOKIE, "visites");

    $missatge = "";
    if ($visites == 1) {
        $missatge = "Benvingut {$nom} {$cognom}! Només has visitat una imatge de la galeria!";
    } else {
        $missatge = "Hola {$nom} {$cognom}! Ja has visitat {$visites} imatges de la galeria!";
    }

    $resposta->set("missatge", $missatge);
    $resposta->SetTemplate("about.php");

    return $resposta;
}
