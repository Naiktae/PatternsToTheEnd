<?php
		$Tinit = tabCreateFromPng($image);
		$Tmodele = array(array(array()));
		$Taille["clay"][0]=50;
		$Taille["stone"][0]=25;
		$Taille["clay"][1]=25;
		$Taille["stone"][1]=37;
		$T = array(array(array()));
			for ($i = 0,$w=$Taille[$size][0] ; $i < $w ; $i++ ) {
		  		for ($j = 0 , $h=$Taille[$size][0]; $j < $h ; $j++ )
		        {
		        	$Tmodele[$i][$j][0]=$Tinit[$i+$Taille[$size][1]][$j+$Taille[$size][1]][0];
		       		$Tmodele[$i][$j][1]=$Tinit[$i+$Taille[$size][1]][$j+$Taille[$size][1]][1];
		       		$Tmodele[$i][$j][2]=$Tinit[$i+$Taille[$size][1]][$j+$Taille[$size][1]][2];
		        }
		    }
		    if ($size=="clay") {
		    	for ($i = 0,$k=0,$w=100 ; $i < $w ; $i++,$k++ ) {
			  		for ($j = 0,$l=0 , $h=100; $j < $h ; $j++,$l++ )
			        {
				        for ($y = 0,$a=2 ; $y < $a ; $y++ ) {
					  		for ($z = 0, $b=2; $z < $b ; $z++ )
					        {
					        	$T[$i+$y][$j+$z][0]=$Tmodele[$k][$l][0];
					        	$T[$i+$y][$j+$z][1]=$Tmodele[$k][$l][1];
					        	$T[$i+$y][$j+$z][2]=$Tmodele[$k][$l][2];
					        }
				    	}
			       		$j+=1;
			        }
		        $i+=1;
		    }
		    }
		    elseif ($size=="stone") {
		    	for ($i = 0,$k=0,$w=100 ; $i < $w ; $i++,$k++ ) {
			  		for ($j = 0,$l=0 , $h=100; $j < $h ; $j++,$l++ )
			        {
			        	for ($y = 0,$a=4 ; $y < $a ; $y++ ) {
					  		for ($z = 0, $b=4; $z < $b ; $z++ )
					        {
					        	$T[$i+$y][$j+$z][0]=$Tmodele[$k][$l][0];
					        	$T[$i+$y][$j+$z][1]=$Tmodele[$k][$l][1];
					        	$T[$i+$y][$j+$z][2]=$Tmodele[$k][$l][2];
					        }
				    	}
			       		$j+=3;
			        }
		        $i+=3;
		    }
		    }

		  	pngCreateFromTab($T,$image);
		 ?>