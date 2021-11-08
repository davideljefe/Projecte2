<?php

$config = array();

/* configuració de connexió a la base dades */
$config["db"] = array();
$config["db"]["user"] = 'pma';
$config["db"]["pass"] = 'hotelabp';
$config["db"]["dbname"] = 'hotelabp_db';
$config["db"]["host"] = 'localhost';

/* Path on guardarem el fitxer sqlite */
$config["sqlite"]["path"] = '../';
$config["sqlite"]["name"] = 'galeria.sqlite';

require_once "../src/emeset/peticio.php";
require_once "../src/emeset/resposta.php";
require_once "../src/emeset/contenidor.php";

require_once "../src/models/imatges.php";
require_once "../src/models/imatgesSQLite.php";
require_once "../src/models/imatgesPDO.php";