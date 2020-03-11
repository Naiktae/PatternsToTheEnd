<?php
	/*! 
	 * \file testReadPixelValues.php
	 * \brief Reads an image on the disk, reads the values of a pixel and display them
	 */
	?>

<html>
<body>


<?php
	require_once("../conf/config.php");
	require_once("src/srcImageIo.php");
	
	// read the image on disk using the imageCreateFromPng GD function
	$imageSrc = "images/sorciere.png";
	
	$T = tabCreateFromPng($path.$imageSrc)
	or die ("cannot create tab from png");
	
	
	// pixel coordinates
	$i = 10;
	$j = 5;
	
	// get the pixel R, G, and B values
        $r = $T[$i][$j][0];   
        $g = "A vous de jouer !";
        $b = "A vous de jouer !"; 
	
	echo "The red value is ".$r."<br>";
	echo "The green value is ".$g."<br>";
	echo "The blue value is ".$b."<br>";
	
	?>


</body>
<html>