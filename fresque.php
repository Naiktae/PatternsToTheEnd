<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		img {
			height:19vw;
		}
	</style>
</head>
<body>
	<?php
	$user = "root";
	$pass = "";
		try {
		    $link = new PDO('mysql:host=localhost;dbname=patterns', $user, $pass);
		    foreach($link->query('SELECT * from img') as $row) {
		        echo '<img src="'.$row["lien"].'">';
		    }
		    $link = null;
		} catch (PDOException $e) {
		    print "Erreur !: " . $e->getMessage() . "<br/>";
		    die();
		}
	?>
</body>
</html>