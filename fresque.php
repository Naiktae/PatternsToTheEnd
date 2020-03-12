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
		        echo '<img src="'.$row["lien"].'" id="i'.$row["id"].'">';
		    }
		    $link = null;
		} catch (PDOException $e) {
		    print "Erreur !: " . $e->getMessage() . "<br/>";
		    die();
		}

	?>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>
    <script type="text/javascript">
    	$("img").click(function(){
    		var id = $(this).attr("id");
    		console.log(id);
    	});
    </script>
</body>
</html>