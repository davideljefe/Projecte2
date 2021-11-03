<?php require "../cli/initPDO.php"; ?>
<?php if(isset($_POST['registrar'])){
	if(!empty($_POST['dni']) && !empty($_POST['nom']) && !empty($_POST['cognoms']) && !empty($_POST['email'])
!empty($_POST['direccio']) && empty($_POST['telefon']) && empty($_POST['contrasenya'])){
	$dni = $_POST['dni'];
	$nom = $_POST['nom'];
	$cognoms = $_POST['cognoms'];
	$correu = $_POST['email'];
	$adreca = $_POST['adreca'];
	$telefon = $_POST['telefon'];
	$contrasenya = $_POST['contrasenya'];
	$consulta = "insert into usuaris(dni, nom, cognom, correu, adreca, telefon, contrasenya) VALUES(
'$dni','$nom','$cognoms','$correu','$adreca','$telefon', '$contrasenya')";
	$resultat = mysqli_query($sql,$consulta);
	if($resultat){?>
	<h3>T'has inscrit</h3>
 <?php }else{ ?>
	<h3>No t'has inscrit</h3>
<?php }
}
}
?>