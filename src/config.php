<?php

$config = array();

/* configuració de connexió a la base dades */
$config["db"] = array();
$config["db"]["user"] = 'pma';
$config["db"]["pass"] = 'hotelabp';
$config["db"]["dbname"] = 'hotelabp_db';
$config["db"]["host"] = 'localhost';

require_once "../src/emeset/peticio.php";
require_once "../src/emeset/resposta.php";
require_once "../src/emeset/contenidor.php";

require_once "../src/models/usuarisPDO.php";