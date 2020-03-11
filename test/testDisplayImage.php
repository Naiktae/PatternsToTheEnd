<?php
	/*! 
	 * \file testDisplayImage.php
	 * \brief Reads an image on the disk, creates a copy, saves it and displays both
	 */
?>
	
<html>
<body>

<p>
Display the image "sorciere.png".
</p>

<?php
	
	require_once("../conf/config.php");
	require_once("src/srcImageIo.php");

	
	// read the image on disk using the imageCreateFromPng GD function
	$imageSrc = "images/sorciere.png";
	$I = imageCreateFromPng($path.$imageSrc) 
		or die("ERROR : cannot open the image");
		
?>

<table border="0">
	<tr>
		<th>Original image</td>
	</tr>
	<tr>
		<!--Here we need url-->
		<td><img src="<?php echo $url.$imageSrc;?>"/></td>
	</tr>
	<tr>
		<td><?php echo $imageSrc;?></td>
	</tr>
</table>
  



</body>
</html>