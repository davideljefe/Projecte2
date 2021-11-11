<?php

include "../src/config.php";

$db = $config["db"]["dbname"];
echo "Creant la base de dades : {$db} \n";
$dsn = "mysql:dbname={$config['db']['dbname']};host={$config['db']['host']}";

$usuari = $config["db"]["user"];
$clau = $config["db"]["pass"];
try {
    $sql = new PDO($dsn, $usuari, $clau);
} catch (\PDOException $e) {
    die('Ha fallat la connexió: ' . $e->getMessage());
}

//PUEDE SER ÚTIL PARA EL LISTADO DE USUARIOS.

/*$sql->query("CREATE TABLE IF NOT EXISTS galeria ( id INT AUTO_INCREMENT PRIMARY KEY, titol VARCHAR(255), url_imatge VARCHAR(255));");


$imatges = $imatges = [
    ["titol" => "Via lactea", "url" => "via-lactea.jpg"],
    ["titol" => "Figueres", "url" => "figueres.jpg"],
    ["titol" => "Calella", "url" => "calella.jpg"],
    ["titol" => "Nova York", "url" => "ny.jpg"],
    ["titol" => "Fraser Island", "url" => "platja.jpg"],
    ["titol" => "Lake Moraine", "url" => "llac.jpg"]
];

$sql->query("delete from galeria;");

foreach ($imatges as $actual) {
    $q = $sql->prepare("insert into galeria (titol,url_imatge) values (:titol, :url);");
    $q->execute([":titol" => $actual["titol"], ":url" => $actual["url"]]);
}*/