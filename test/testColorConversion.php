<?php
	/*! 
	 * \file testColorConversion.php
	 * \brief Reads an RGB image on the disk, convert it into a YUV, saves it and displays both
	 */
	
	require_once("../conf/config.php");
	require_once("src/srcImageIo.php");
	require_once("src/srcConversion.php");
	
	
	
	?>

<html>
<body>



<H1>Test conversion from RGB to YUV </H1>
<p>
Convert an RGB image into an YUV image
</p>


<?php
	
	// read the image on disk using the imageCreateFromPng GD function
	$imageSrc = "images/highway.png";
	$Trgb = tabCreateFromPng($path.$imageSrc)
	or die ("cannot create tab from png");
	
	// convert to an YUV image
	$Tyuv = convertRgb2Yuv( $Trgb )
	or die ("ERROR: conversion rgb to yuv");
	
	// convert the YUV image into a RGB image
	$Trgb2=convertYuv2Rgb($Tyuv)
	or die ("ERROR: conversion yuv to rgb");
	
	// write the image on the disk
	$imageResYuv = "results/highwayYUV.png";
	pngCreateFromTab($Tyuv,$path.$imageResYuv);
	
	// write the image on the disk
	$imageResRGB = "results/highwayRGB.png";
	pngCreateFromTab($Trgb2,$path.$imageResRGB);
	
	// free memory
	unset($Trgb);
	unset($Tyuv);
	unset($Trgb2);
	
	?>

<table border="0">
<tr>
<th>Original image</td>
<th>YUV</td>
<th>recomposed RGB</td>
</tr>
<tr>
<!--Here we need url-->
<td><img src="<?php echo $url.$imageSrc;?>"/></td>
<td><img src="<?php echo $url.$imageResYuv;?>"/></td>
<td><img src="<?php echo $url.$imageResRGB ;?>"/></td>
</tr>
<tr>
<td><?php echo $imageSrc;?></td>
<td><?php echo $imageResYuv;?></td>
<td><?php echo $imageResRGB;?></td>
</tr>
</table>




</body>
</html>