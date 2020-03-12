<?php
	$user = "root";
	$pass = "";
		$link = new PDO('mysql:host=localhost;dbname=patterns', $user, $pass);
		$result = $link->query('SELECT * FROM img')->rowCount();
		$nameImg = ($result+1).".png";
		$linkImg = "images/".($result+1).".png";
		$link->query('INSERT INTO variables VALUES ("'.($result+1).'","'.$_POST["color1"].'"," '.$_POST["color2"].'"," '.$_POST['motif'].'"," '.$_POST['size'].'"," '.$_POST['direction'].'"," '.$_POST['life'].'"," '.$_POST['survive'].'")');
		$link->query('INSERT INTO img VALUES ("'.($result+1).'","'.$nameImg.'"," '.$linkImg.'"," '.$_POST['createur'].'")');
	$image=$linkImg;
	$color1=$_POST["color1"];
	$color2=$_POST["color2"];
	require_once("srcImageIo.php");
	require_once("fonctions/couleurs.php");
	// 1ere étape
	if ($_POST["motif"]=="diffus") {
		require_once("fonctions/diffus.php");
	}
	if ($_POST["motif"]=="mariniere") {
		require_once("fonctions/mariniere.php");
	}
	//2eme étape
	if ($_POST["survive"]=="no") {
		require_once("fonctions/inverse.php");
	}
	//3eme étape
	if ($_POST["life"]=="kill") {
		require_once("fonctions/random.php");
	}
	//4eme étape
	if ($_POST["size"]=="moyen" || $_POST["size"]=="grand") {
		$size = $_POST["size"];
		require_once("fonctions/taille.php");
	}
	echo "<img src='".$linkImg."' >";
?>