<?php

function ctrlLogout($peticio, $resposta, $contenidor)
{
  
  $resposta->SetTemplate("inici.php");
  return $resposta;
  session_destroy();
}