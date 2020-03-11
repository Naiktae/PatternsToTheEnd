<?php
	$c=true;
	$T = array(array(array()));
	for ($i = 0,$w=100 ; $i < $w ; $i++ )
 		for ($j = 0 , $h=100; $j < $h ; $j++ )
			{
		    	if ($c) {
		        	$T[$i][$j][0]=$colors[$color1][0];
		        	$T[$i][$j][1]=$colors[$color1][1];
		        	$T[$i][$j][2]=$colors[$color1][2];
		        	$c=false;
		        }
		        else{
		        	$T[$i][$j][0]=$colors[$color2][0];
		        	$T[$i][$j][1]=$colors[$color2][1];
		        	$T[$i][$j][2]=$colors[$color2][2];
		        	$c=true;
		        }
		    }

		  	pngCreateFromTab($T,$image);
?>