<?php

/**
    * Exemple de MVC.
    * Exemple per a M07 - Projecte 2.
    * @author: Dani Prados dprados@cendrassos.net
    * @version 0.1.0
    *
    * Exemple amb una mini galeria d'imatges.
    * Per provar com funcionar podeu executar php -S localhost:8000 a la carpeta public.
    * I amb el navegador visitar la url http://localhost:8000/
    *
    *
**/

error_reporting(E_ERROR | E_WARNING | E_PARSE);
include "../src/config.php";

include "../src/controladors/desar.php";
include "../src/controladors/identificar.php";
include "../src/controladors/inici.php";
include "../src/controladors/error.php";
include "../src/controladors/about.php";
include "../src/controladors/admin.php";
include "../src/controladors/adminForm.php";
include "../src/controladors/adminAfegir.php";
include "../src/controladors/adminEsborrar.php";
include "../src/controladors/adminActualitzar.php";

include "../src/middleware/middleAdmin.php";

$r = $_REQUEST["r"];

/* Creem els diferents models */
$contenidor = new Emeset\Contenidor($config);
$resposta = $contenidor->resposta();
$peticio = $contenidor->peticio();

if ($r === "admin") {
    $resposta = middleAdmin($peticio, $resposta, $contenidor, "ctrlAdmin");
} elseif ($r === "form") {
    $resposta = middleAdmin($peticio, $resposta, $contenidor, "ctrlForm");
} elseif ($r === "afegir") {
    $resposta = middleAdmin($peticio, $resposta, $contenidor, "ctrlAfegir");
} elseif ($r === "actualitzar") {
    $resposta = middleAdmin($peticio, $resposta, $contenidor, "ctrlActualitzar");
} elseif ($r === "delete") {
    $resposta = middleAdmin($peticio, $resposta, $contenidor, "ctrlEsborrar");
} elseif ($r === "identificar") {
    $resposta = ctrlIdentificar($peticio, $resposta, $contenidor);
} elseif ($r === "desar") {
    $resposta = ctrlDesar($peticio, $resposta, $contenidor);
} elseif ($r === "about") {
    $resposta = ctrlAbout($peticio, $resposta, $contenidor);
} elseif ($r == "") {
    $resposta = ctrlPortada($peticio, $resposta, $contenidor);
} else {
    $resposta = ctrlError($peticio, $resposta, $contenidor);
}

$resposta->resposta();