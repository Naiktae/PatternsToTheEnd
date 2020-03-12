<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<!-- Bootstrap CSS File -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  	 <!--Font-->
    <link href="https://fonts.googleapis.com/css?family=Lacquer&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
	<!--CSS-->
	<link rel="stylesheet" href="css/fresque.css">
	<style type="text/css">
		img {
			height:19.83vw;
		}
	</style>
</head>
<body class="d-flex justify-content-center container-fluid mr-n2 mt-2">
	<div class="row" id="fresque">
	<?php
	$user = "root";
	$pass = "";
		try {
		    $link = new PDO('mysql:host=localhost;dbname=patterns', $user, $pass);
		    foreach($link->query('SELECT * from img') as $row) {
		        echo '<img src="'.$row["lien"].'" id="i'.$row["id"].'">';
		    }
		    $link = null;
		} catch (PDOException $e) {
		    print "Erreur !: " . $e->getMessage() . "<br/>";
		    die();
		}

	?>
	</div>
	<div class="row" id="selection">
		<div id="box-img" class="offset-2 col-8 offset-2 text-center my-5 py-5">
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>
    <script type="text/javascript" src="js/fresque.js"></script>
</body>
</html>