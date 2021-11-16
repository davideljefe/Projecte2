<?php


function ctrlActualitzar($peticio, $resposta, $contenidor)
{
    $imatges = $contenidor->imatges();
    
    /* Validem que nom i cognom estan definits */
    $resposta->setSession("missatge", "Imatge actualitzada amb èxit");

    // Per ara  no actualitzarem la imatge
    //$fitxer = $peticio->get("FILES", "imatge");
    $id = $peticio->get(INPUT_POST, "id");
    $titol = $peticio->get(INPUT_POST, "titol");

    $imatgeActual = $imatges->get($id);
    $url = $imatgeActual["url"];

    //$fitxerDesti =  $fitxer["name"];
    /* no estem validant res,  en un servidor real hauriem de validar-ho tot!! */
    //move_uploaded_file($fitxer["tmp_name"], "img/" . $fitxerDesti);
    $imatges->update($id, $titol, $url);

    $resposta->redirect("location: index.php?r=admin");

    return $resposta;
}