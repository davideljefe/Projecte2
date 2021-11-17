<?php
function ctrlEsborrar($peticio, $resposta, $contenidor)
{
    $usuari = $contenidor->usuaris();
    
    $resposta->setSession("missatge", "Usuari esborrat èxit");

    
    $codi = $peticio->get(INPUT_GET, "codi");

    $usuari->delete($codi);
    $resposta->redirect("location: index.php?r=llista");

    return $resposta;                                       
}