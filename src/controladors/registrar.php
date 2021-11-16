<?php
function ctrlRegistrar($peticio, $resposta, $contenidor)
{
    $resposta->SetTemplate("registrar.php");

    return $resposta;

}
?>