<?php

function ctrlReserves($peticio, $resposta, $contenidor)
{  
  $resposta->SetTemplate("reserves.php");
  return $resposta;
}