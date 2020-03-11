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
			
			if(($i < $w/2))
				$x = 255;
			else
				$x=0;
			
			$T[$i][$j][0] = $x;
			$T[$i][$j][1] = $x;
			$T[$i][$j][2] = $x;
			
		}
	
	$imageSrc = "results/motif.png";
	pngCreateFromTab($T,$path.$imageSrc);

    // detect the horizontal contours
	$Thor =  tabDiffHor($T);	

	// save the table in a png image
	$imageHor ="results/detectContourHor.png";
    pngCreateFromTab($Thor,$path.$imageHor);

	// inverse
	$ThorInv= inversion($Thor);
	// save the table in a png image
	$imageHorInv ="results/detectContourHorInv.png";
    pngCreateFromTab($ThorInv,$path.$imageHorInv);
	

	// detect the horizontal contours
	$Tvert =  tabDiffVert($T);	
	
	// save the table in a png image
	$imageVert ="results/detectContourVert.png";
    pngCreateFromTab($Tvert,$path.$imageVert);
	
	// inverse
	$TvertInv= inversion($Tvert);
	// save the table in a png image
	$imageVertInv ="results/detectContourVertInv.png";
    pngCreateFromTab($TvertInv,$path.$imageVertInv);

	
	// detect the horizontal contours
	$Tcontour = sumsquare($Tvert, $Thor);
	//$Tcontour = dynMaxExtension($Tcontour);
	// save the table in a png image
	$imageCont = "results/detectContourAll.png";
    pngCreateFromTab($Tcontour,$path.$imageCont);
	// inverse
	$TcontourInv = inversion($Tcontour);
	// save the table in a png image
	$imageContInv = "results/detectContourAllInv.png";
    pngCreateFromTab($TcontourInv,$path.$imageContInv);
	
	unset($Tcontour);
	unset($Tvert);
	unset($Thor);
	unset($TcontourInv);
	unset($TvertInv);
	unset($ThorInv);
	unset($T);
	
	?>

<table border="0">
<tr>
<th>Original image</th>
<th>Contour Horizontaux</th>
<th>Contour Verticaux</th>
<th>Contour </th>
</tr>
<tr>
<!--Here we need url-->
<td><img src="<?php echo $url.$imageSrc;?>"/></td>
<td><img src="<?php echo $url.$imageHor;?>"/></td>
<td><img src="<?php echo $url.$imageVert;?>"/></td>
<td><img src="<?php echo $url.$imageCont;?>"/></td>
</tr>
</table>

<p>
Les mêmes images mais avec une inversion des couleurs
</p>

<table border="0">
<tr>
<th>Original image</th>
<th>Contour Horizontaux</th>
<th>Contour Verticaux</th>
<th>Contour </th>
</tr>
<tr>
<!--Here we need url-->
<td><img src="<?php echo $url.$imageSrc;?>"/></td>
<td><img src="<?php echo $url.$imageHorInv;?>"/></td>
<td><img src="<?php echo $url.$imageVertInv;?>"/></td>
<td><img src="<?php echo $url.$imageContInv;?>"/></td>
</tr>

</table>




</body>
</html>