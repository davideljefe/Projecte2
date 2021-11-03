<?php

include "../src/config.php";

$db = $config["sqlite"]["path"] . $config["sqlite"]["name"];
echo "Creant la base de dades : {$db} \n";
$sql = new SQLite3($db);
if (! file_exists($db)) {
    die("No s'ha pogut obrir la base de dades");
}

$q = $sql->query("SELECT name FROM sqlite_master WHERE type='table' AND name='galeria';");
if ($q->fetchArray() === false) {
    $sql->query("CREATE TABLE galeria ( id INTEGER PRIMARY KEY, titol CHAR(255), url_imatge CHAR(255));");
}

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
    $q->bindValue(':titol', $actual["titol"], SQLITE3_TEXT);
    $q->bindValue(':url', $actual["url"], SQLITE3_TEXT);
    $q->execute();
}
