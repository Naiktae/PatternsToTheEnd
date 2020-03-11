<?php
		$Tinit = tabCreateFromPng($image);
			$T = array(array(array()));
			for ($i = 0,$w=100 ; $i < $w ; $i++ ) {
		  		for ($j = 0 , $h=100; $j < $h ; $j++ )
		        {
		        	$T[$i][$j][0]=255-$Tinit[$i][$j][0];
		       		$T[$i][$j][1]=255-$Tinit[$i][$j][1];
		       		$T[$i][$j][2]=255-$Tinit[$i][$j][2];
		        }
		    }

		  	pngCreateFromTab($T,$image);
		 ?>