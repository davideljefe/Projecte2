<?php
function ctrlInici($peticio, $resposta, $contenidor)
{
    $resposta->SetTemplate("inici.php");

    return $resposta;
}