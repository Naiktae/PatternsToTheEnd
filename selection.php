<?php
	$user = "root";
	$pass = "";
		try {
		    $link = new PDO('mysql:host=localhost;dbname=patterns', $user, $pass);
		    $img = $link->query('SELECT * from img WHERE id = "'.$_POST["id"].'"')->fetchAll();
		    $variables = $link->query('SELECT * from variables WHERE id = "'.$_POST["id"].'"')->fetchAll();
		       echo '<img src="'.$img[0]["lien"].'" id="j'.$img[0]["id"].'">
		        <button type="button" class="close" aria-label="Close" data-dismiss="selection">
 				<span aria-hidden="true">&times;</span>
			</button>
			<div class="row">
	            <div class="offset-1 offset-lg-3 col-10 col-lg-6 offset-1 offset-lg-3 my-4 shadow py-2 bg-white text-center">
	                <h1>'.$img[0]["createur"].'</h1>
	            </div>
	        </div>
	        <div class="row">
		        <div class="col-md-12 text-center">
		        	<a href="images/'.$img[0]["id"].'.png" download="Image">
		        		<button type="button" class="btn btn-lg btn-outline-secondary shadow-sm my-4">
		        			<i class="fas fa-download mr-3"></i>Télécharger cette image</button>
		        	</a>
		        </div>
	    	</div>
	        <div class="row">
	            <div class="offset-1 col-10 offset-1 d-flex flex-column text-center mt-3 bg-white shadow pt-3 pb-4" id="choice-box">
	            	<div class="row">
	            		<div class="col-12 text-center">
	                		<h5>Les choix</h5>
	            		</div>
	       			</div>
		       		<div class="row">
		       			<div class="col-12 text-center" id="choice-img-box">
			            	<img class="shadow" src="img/'.$variables[0]["color1"].'.svg">
			            	<img class="shadow" src="img/'.$variables[0]["color2"].'.svg">
			            	<img class="shadow" src="img/'.$variables[0]["motif"].'.svg">
			            	<img class="shadow" src="img/'.$variables[0]["size"].'.svg">
			            	<img class="shadow" src="img/'.$variables[0]["direction"].'.svg">
			            	<img class="shadow" src="img/'.$variables[0]["life"].'.svg">
			            	<img class="shadow" src="img/'.$variables[0]["survive"].'.svg">
		            	</div>
		            </div>
                </div>
       		</div>';
		    $link = null;
		} catch (PDOException $e) {
		    print "Erreur !: " . $e->getMessage() . "<br/>";
		    die();
		}

	?>