<?php
		$degRate[0] = ($colors[$color1][0]-$colors[$color2][0])/100;
		$degRate[1] = ($colors[$color1][1]-$colors[$color2][1])/100;
		$degRate[2] = ($colors[$color1][2]-$colors[$color2][2])/100;
		$deg[0]=$colors[$color1][0];
		$deg[1]=$colors[$color1][1];
		$deg[2]=$colors[$color1][2];
			$T = array(array(array()));
			for ($i = 0,$w=100 ; $i < $w ; $i++ ) {
				$deg[0]-=$degRate[0];
		        $deg[1]-=$degRate[1];
		        $deg[2]-=$degRate[2];
		  		for ($j = 0 , $h=100; $j < $h ; $j++ )
		        {
		        	$T[$i][$j][0]=$deg[0];
		       		$T[$i][$j][1]=$deg[1];
		       		$T[$i][$j][2]=$deg[2];
		        }
		    }

		  	pngCreateFromTab($T,$image);
?>