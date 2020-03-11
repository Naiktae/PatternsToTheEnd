<?php
	/*! 
	 * \file testNaiveContourDetection.php
	 * \brief Reads an image on the disk, creates a copy, saves it and displays both
	 */
	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<title>SRC Image Processing Toolbox</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<body>

<H1>Detection de contour naïve</H1>

<p>
On part d une image binaire, c est à dire d une image qui ne contient que du noir et du blanc. C est sur ce type d image que
la détection de contours naïve est la plus efficace.
</p>

<?php
	require_once("../conf/config.php");
	require_once("src/srcImageIo.php");
	require_once("src/srcFilter.php");
	require_once("src/srcHistogram.php");
	
	// Creation de l'image
	$w=100;
	$h=60;
	for ( $i=0 ; $i<$w ; $i++ )
		for ( $j=0 ; $j<$h ; $j++ )	
		{
			
			if($i < $w/2)
				$x = 255;
			else
				$x=0;
			
			$T[$i][$j][0] = $x;
			$T[$i][$j][1] = $x;
			$T[$i][$j][2] = $x;
			
		}
	
	$imageSrc = "results/motif.png";
	pngCreateFromTab($T,$path.$imageSrc);

	$K[0][0]=1/9;	$K[1][0]=1/9; $K[2][0]=1/9;
    $K[0][1]=1/9;	$K[1][1]=1/9; $K[2][1]=1/9;
	$K[0][2]=1/9;	$K[1][2]=1/9; $K[2][2]=1/9;
	  
    // detect the horizontal contours
	$Tres =  tabConvolution($T,$K);	

	// save the table in a png image
	$imageRes ="results/Convolution.png";
    pngCreateFromTab($Tres,$path.$imageRes);
	
	?>

<table border="0">
<tr>
<th>Original image</th>
<th>Convolution</th>
</tr>
<tr>
<!--Here we need url-->
<td><img src="<?php echo $url.$imageSrc;?>"/></td>
<td><img src="<?php echo $url.$imageRes;?>"/></td>
</tr>
</table>




</body>
</html>