<?php

function ctrlIdentificar($peticio, $resposta, $contenidor)
{
    $resposta->SetTemplate("identificar.php");
    return $resposta;
}