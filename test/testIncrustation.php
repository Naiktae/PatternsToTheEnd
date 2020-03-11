<?php
	/*! 
	 * \file testIncrustation.php
	 * \brief fuse image data
	 */
	
	require_once("../conf/config.php");
	require_once("src/srcImageIo.php");
	require_once("src/srcImageFusion.php");
	
	
	?>

<html>
<body>

<H1>Image incrustation</H1>

Take a landscape image and a  character on a green landscape and fuse the image data

<?php
		$imageSrc = "images/video.png";
		$Trgb = tabCreateFromPng($path.$imageSrc)
		or die ("cannot create tab from png");
	
	    $imageBg = "images/landscape.png";
	    $Tbg = tabCreateFromPng($path.$imageBg)
	    or die ("cannot create tab from png");
	
	
		// convert to greyscale image
		$layer = 1;
     	$ratio = 2;
		$Tfuse = fusion( $Trgb,$Tbg, $layer, $ratio)
			or die ("cannot fuse");
		// write the image on the disk
		$imageRes= "results/fusion.png";
		pngCreateFromTab($Tfuse,$path.$imageRes);
		//free memory
		unset($Trgb);
		unset($Tback);
	
	?>

<table border='0'>
<tr>
<th>Original image</th>
<th>Background</th>
<th>Desat</th>
</tr>
<td><img src= "<?php echo $url.$imageSrc; ?>"/></td>
<td><img src= "<?php echo $url.$imageBg; ?>"/></td>
<td><img src= "<?php echo $url.$imageRes; ?>"/></td>
</tr>	

</table>


</body>
</html>