<?php
	$user = "root";
	$pass = "";
		try {
		    $link = new PDO('mysql:host=localhost;dbname=patterns', $user, $pass);
		    foreach($link->query('SELECT * from img WHERE id = "'.$_POST["id"].'"') as $row) {
		        echo '<img src="'.$row["lien"].'" id="j'.$row["id"].'">';
		    }
		    $link = null;
		} catch (PDOException $e) {
		    print "Erreur !: " . $e->getMessage() . "<br/>";
		    die();
		}

	?>