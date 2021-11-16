<?php
function ctrlEsborrar($peticio, $resposta, $contenidor)
{
    $usuari = $contenidor->usuaris();
    
    $resposta->setSession("missatge", "Usuari esborrat èxit");

    
    $codi = $peticio->get(INPUT_GET, "codi");

    // No estic esborrant el fitxer, només la entrada a la base de dades
    $usuari->delete($codi);
    echo $codi;
    die();

    $resposta->redirect("location: index.php?r=llista");

    return $resposta;
}