<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
include "../src/config.php";


include "../src/controladors/identificar.php";
include "../src/controladors/registrar.php";
include "../src/controladors/inici.php";
include "../src/controladors/error.php";
include "../src/controladors/reserves.php";
include "../src/controladors/quisom.php";
include "../src/controladors/dologin.php";
include "../src/controladors/habitacions.php";
include "../src/controladors/admin.php";
include "../src/controladors/llista.php";
include "../src/controladors/adminEsborrar.php";

include "../src/middleware/middleAdmin.php";

$r = $_REQUEST["r"];

/* Creem els diferents models */
$contenidor = new Emeset\Contenidor($config);
$resposta = $contenidor->resposta();
$peticio = $contenidor->peticio();

if ($r === "admin") {
    $resposta = middleAdmin($peticio, $resposta, $contenidor, "ctrlAdmin");
}elseif ($r == "") {
    $resposta = ctrlInici($peticio, $resposta, $contenidor);
} elseif ($r === "dologin") {
    $resposta = ctrldoLogin($peticio, $resposta, $contenidor);
} elseif ($r === "identificar") {
    $resposta = ctrlIdentificar($peticio, $resposta, $contenidor);
} elseif ($r === "reserves") {
    $resposta = ctrlReserves($peticio, $resposta, $contenidor);
} elseif ($r === "registrar") {
    $resposta = ctrlRegistrar($peticio, $resposta, $contenidor);
}elseif ($r === "quisom") {
    $resposta = ctrlQuisom($peticio, $resposta, $contenidor);
} elseif ($r === "habitacions") {
    $resposta = ctrlHabitacions($peticio, $resposta, $contenidor);
} elseif ($r === "inici") {
    $resposta = ctrlInici($peticio, $resposta, $contenidor);
} elseif ($r === "llista") {
    $resposta = ctrlLlista($peticio, $resposta, $contenidor);
} elseif ($r === "delete") {
    $resposta = ctrlEsborrar($peticio, $resposta, $contenidor);
}else {
    $resposta = ctrlError($peticio, $resposta, $contenidor);
}

$resposta->resposta();

