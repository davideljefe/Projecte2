<?php
require 'initPDO.php';

if(!empty($_POST['dni']) && !empty($_POST['nom']) && !empty($_POST['cognom']) && !empty($_POST['correu'])
!empty($_POST['adreca']) && empty($_POST['telefon']) && !empty($_POST['rol']) && empty($_POST['contrasenya'])){
    $sql = "INSERT INTO users (dni, nom, cognom, correu, adreca, telefon, rol, contrasenya) VALUES
    (:dni, :nom, :cognom, :correu, :adreca, :telefon, :rol, :contrasenya)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':dni', $_POST['dni']);
    $stmt->bindParam(':nom', $_POST['nom']);
    $stmt->bindParam(':cognom', $_POST['cognom']);
    $stmt->bindParam(':correu', $_POST['correu']);
    $stmt->bindParam(':adreca', $_POST['adreca']);
    $stmt->bindParam(':telefon', $_POST['adreca']);
    $stmt->bindParam(':rol', $_POST['rol']);
    $stmt->bindParam(':contrasenya', $_POST['contrasenya']);


    if($stmt->excute()){
        $message = 'Usuari creat';

    }else{
        $message = 'Error en la creacio del usuari';
    }
}

?>