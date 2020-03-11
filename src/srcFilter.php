<?php
	/*!
	 * \file srcFilter.php
	 * \author 			Claire Dune
	 * \date :	november 2010
	 * \brief :			Greyscale image filtering lib
	 */
	
	/*!
	 * \fn tabDiffVert($T)
	 * \brief Detects naive horizontal contour 
	 * 
	 * \param $T
	 * \return $Tres
	 */
	function tabDiffVert($T)
	{
		//init $Tres
		for($i=0;isset($T[$i][0][0]);$i++) 
		{
			for($j=0;isset($T[0][$j][0]);$j++)
			{
				
				$Tres[$i][$j][0]=0;
				$Tres[$i][$j][1]=0;
				$Tres[$i][$j][2]=0;	
			}
		}
		
		//create $Tres
		for($i=1;isset($T[$i][0][0]);$i++) 
		{
			for($j=0;isset($T[0][$j][0]);$j++)
			{
				//=> Write your code here :replace 0 by the diff in i
			  $Tres[$i][$j][0]= 0;
			  $Tres[$i][$j][1]= $Tres[$i][$j][0];
			  $Tres[$i][$j][2]= $Tres[$i][$j][0];
				
			}
		}
		
		
		return $Tres;
		
	}
	
	/*!
	 * \fn tabDiffHor($T)
	 * \brief Detects naive horizontal contour
	 * 
	 * \param $T
	 * \return $Tres
	 */
	function tabDiffHor($T)
	{
		//init $Tres
		for($i=0;isset($T[$i][0][0]);$i++) 
		{
			for($j=0;isset($T[0][$j][0]);$j++)
			{
				
				$Tres[$i][$j][0]=0;
				$Tres[$i][$j][1]=0;
				$Tres[$i][$j][2]=0;
				
			}
		}
		
		//create $Tres
		for($i=0;isset($T[$i][0][0]);$i++) 
		{
			for($j=1;isset($T[0][$j][0]);$j++)
			{
				
				//=> Write your code here
			  $Tres[$i][$j][0]=  0;
			  $Tres[$i][$j][1]= $Tres[$i][$j][0];
			  $Tres[$i][$j][2]= $Tres[$i][$j][0];
				
			}
		}
		
		
		return $Tres;
		
	}
	
	/*!
	 * \fn tabConvolution($T,$K)
	 * \brief Conv image $T by Kernel $K
	 * 
	 * \param $T, $K
	 * \return $Tres
	 */
	function tabConvolution($T,$K)
	{
		//init $Tres
		for($i=0;isset($T[$i][0][0]);$i++) 
		{
			for($j=0;isset($T[0][$j][0]);$j++)
			{
				
				$Tres[$i][$j][0]=0;
				$Tres[$i][$j][1]=0;
				$Tres[$i][$j][2]=0;
				
			}
		}
		
		//create $Tres
		for($i=1;isset($T[$i+1][0][0]);$i++) 
		{
			for($j=1;isset($T[0][$j+1][0]);$j++)
			{
				$pix=0;
			        

				//=> Write your code here
				$Tres[$i][$j][0]= $pix;
				$Tres[$i][$j][1]= $Tres[$i][$j][0];
				$Tres[$i][$j][2]= $Tres[$i][$j][0];
				
			}
		}
		
		
		return $Tres;
		
	}
	
	//------------------------------//
	// OTHER FUNCTIONS              //
	//------------------------------//
	
	/*!
	 * \fn sumsquare($T1,$T2)
	 * \brief sum square two images
	 * 
	 * \param $T1,$T2
	 * \return $Tres
	 */
	function sumsquare($T1,$T2)
	{
		
		
		for($i=0;isset($T1[$i][0][0]);$i++) 
		{
			for($j=0;isset($T1[0][$j][0]);$j++)
			{
				
				$Tres[$i][$j][0]= round(sqrt($T1[$i][$j][0]*$T1[$i][$j][0] + $T2[$i][$j][0]*$T2[$i][$j][0]));
				$Tres[$i][$j][1]=$Tres[$i][$j][0];
				$Tres[$i][$j][2]=$Tres[$i][$j][0];
				
			}
		}
		
		
		return $Tres;
		
	}
	
	/*!
	 * \fn inversion($T)
	 * \brief inverse image values
	 * 
	 * \param $T
	 * \return $Tres
	 */
	function inversion($T)
	{
		for($i=0;isset($T[$i][0][0]);$i++) 
		{
			for($j=0;isset($T[0][$j][0]);$j++)
			{
				
				$Tres[$i][$j][0]=255-$T[$i][$j][0];
				$Tres[$i][$j][1]=255-$T[$i][$j][1];
				$Tres[$i][$j][2]=255-$T[$i][$j][2];
				
			}
		}
		
		return $Tres;		
		
	}