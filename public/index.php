<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
include "../src/config.php";


include "../src/controladors/identificar.php";
include "../src/controladors/inici.php";
include "../src/controladors/error.php";
include "../src/controladors/reserves.php";

include "../src/middleware/middleAdmin.php";

$r = $_REQUEST["r"];

/* Creem els diferents models */
$contenidor = new Emeset\Contenidor($config);
$resposta = $contenidor->resposta();
$peticio = $contenidor->peticio();

if ($r == "") {
    $resposta = ctrlInici($peticio, $resposta, $contenidor);
}elseif ($r === "identificar") {
    $resposta = ctrlIdentificar($peticio, $resposta, $contenidor);
}elseif ($r === "reserves") {
    $resposta = ctrlReserves($peticio, $resposta, $contenidor);
}else {
    $resposta = ctrlError($peticio, $resposta, $contenidor);
}

$resposta->resposta();

