<?php

/**
    * Controlador de la portada.
    * Exemple per a M07.
    * @author: Dani Prados dprados@cendrassos.net
    *
    * Carrega la imatge que toca i la visualitza
    *
**/

/**
  * ctrlPortada: Controlador que carrega les tasques i visaulitza la portada
  *
  * @param $peticio contingut de la petició http.
  * @param $resposta contingut de la resposta http.
  *
**/
function ctrlPortada($peticio, $resposta, $contenidor)
{
    $nom = $peticio->get("SESSION", "nom");
    $cognom = $peticio->get("SESSION", "cognom");
    $imatges = $contenidor->imatges();

    $imatge = $peticio->get(INPUT_GET, "imatge");
    //var_dump($imatge);
    if (!is_null($imatge)) {
        // Si tenim un codi d'imatge al $_GET actualitzem la cookie
        //echo 1;
        $resposta->setcookie("imatge", $imatge, strtotime("+7 days")); // guarda la cookie per 7 dies
    } else {
        // Si no tenim un codi d'imatge al $_GET llegim la cookie
        $imatge = $peticio->get(INPUT_COOKIE, "imatge");
    }
    $imatgeActual = $imatges->get($imatge);
    
    $llistatImatges = $imatges->llistat();
    $resposta->set("imatgeActual", $imatgeActual);
    $resposta->set("llistatImatges", $llistatImatges);
    $resposta->set("imatge", $imatge);

    // Comptem quantes vegades has visitat aquesta pàgina
    $visites = $peticio->get(INPUT_COOKIE, "visites");
    if (!is_null($visites)) {
        $visites = (int)$visites + 1;
    } else {
        $visites = 1;
    }
    $resposta->setcookie("visites", $visites, strtotime("+1 month"));

    $missatge = "";
    if ($visites == 1) {
        $missatge = "Benvingut {$nom} {$cognom}! Aquesta és la primera pàgina que visites d'aquesta web!";
    } else {
        $missatge = "Hola {$nom} {$cognom}! Ja has visitat {$visites} pàgines d'aquesta web!";
    }


    $resposta->set("missatge", $missatge);
    $resposta->SetTemplate("portada.php");

    return $resposta;
}