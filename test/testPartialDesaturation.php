<?php
	/*! 
	 * \file testGreyConversion.php
	 * \brief Reads an image on the disk, convert it into a grescale image, saves it and displays both
	 */
	
	require_once("../conf/config.php");
	require_once("src/srcImageIo.php");
	require_once("src/srcConversion.php");
	require_once("src/srcDesaturation.php");
	
	
	?>

<html>
<body>

<H1>Image desaturation</H1>

<?php
$imageSrc1 = "images/referee.png";
$imageRes1 = "results/refereeDesat.png";

$Trgb = tabCreateFromPng($path.$imageSrc1)
  or die ("cannot create tab from png");

// convert to greyscale image
$Tdesat = partialDesatRGB($Trgb)
  or die ("cannot desaturate");

// write the image on the disk
pngCreateFromTab($Tdesat,$path.$imageRes1);

//free memory
unset($Trgb);
unset($Tdesat);

$imageSrc2 = "images/video.png";
$imageRes2 = "results/videoDesat.png";

$Trgb = tabCreateFromPng($path.$imageSrc1)
  or die ("cannot create tab from png");

// convert to greyscale image
$Tdesat = partialDesatRGB($Trgb)
  or die ("cannot desaturate");

// write the image on the disk
pngCreateFromTab($Tdesat,$path.$imageRes1);

//free memory
unset($Trgb);
unset($Tdesat); // remark instead of copying the code we could have writen a nice function ... 


?>

<table border='0'>
	<tr>
		<th>Original image</th>
		<th>Desat</th>
	</tr>
	<tr>
		<td><img src="<?php echo $url.$imageSrc1; ?>"/></td>
		<td><img src="<?php echo $url.$imageRes1; ?>"/></td>
	</tr>
  <tr>
		<td><img src="<?php echo $url.$imageSrc2; ?>"/></td>
		<td><img src="<?php echo $url.$imageRes2; ?>"/></td>
	</tr>


</table>


</body>
</html>