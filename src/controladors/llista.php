<?php
function ctrlInici($peticio, $resposta, $contenidor)
{
    $resposta->SetTemplate("llista.php");

    return $resposta;
}
?>