<?php
	/*! 
	 * \file testGreyConversion.php
	 * \brief Reads an image on the disk, convert it into a grescale image, saves it and displays both
	 */
	
	require_once("../conf/config.php");
	require_once("src/srcImageIo.php");
	require_once("src/srcConversion.php");
	
	
	
	?>

<html>
<body>

<H1>2 methods to convert color image into greyscale images</H1>

<H2> Color mode conversion from RGB</H2>
<p>
Convert an RGB image into a greyscale Image
</p>

<?php
	
	
	// read the image on disk using the imageCreateFromPng GD function
	$imageSrc = "images/highway.png";
	$Trgb = tabCreateFromPng($path.$imageSrc)
	or die ("cannot create tab from png");
	
	// convert to greyscale image
	$TgreyNaive = convertRgb2GreyNaive($Trgb);
	// write the image on the disk
	$imageResNaive = "results/highwayNaiveGreyNaive.png";
	pngCreateFromTab($TgreyNaive,$path.$imageResNaive);
	

	// convert to greyscale image
	$TgreyGamma = convertRgb2GreyGamma( $Trgb);
	// write the image on the disk
	$imageResGamma = "results/highwayNaiveGreyGamma.png";
	pngCreateFromTab($TgreyGamma,$path.$imageResGamma);
	
	?>
	
<table border="0">
<tr>
<th>Original image</th>
<th>Naive algo</th>
<th>Gamma algo</th>
</tr>
<tr>
<!--Here we need url-->
<td><img src="<?php echo $url.$imageSrc;?>"/></td>
<td><img src="<?php echo $url.$imageResNaive;?>"/></td>
<td><img src="<?php echo $url.$imageResGamma;?>"/></td>
</tr>
<tr>
<td><?php echo $imageSrc;?></td>
<td><?php echo $imageResNaive;?></td>
<td><?php echo $imageResGamma;?></td>
</tr>
</table>





<H2> Test image color mode  </H2>

<p>
Use the isGreyImage test function to check if the images are color image or not:
</p>
<?
	if(isGreyImage($Trgb))
		echo $imageSrc." is a greyscale image<br>";
	else
		echo $imageSrc." is a color image<br>";

	if(isGreyImage($TgreyNaive))
		echo $imageResNaive." is a greyscale image<br>";
	else
		echo $imageResNaive." is a color image<br>";

	if(isGreyImage($TgreyGamma))
		echo $imageResGamma." is a greyscale image<br>";
	else
		echo $imageResGamma." is a color image<br>";




// free memory
unset($TgreyGamma);
unset($TgreyNaive);
unset($Trgb);
?>



</body>
</html>