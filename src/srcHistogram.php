<?php
	/*! 
	 * \file srcHistogram.php
	 * \brief Contrast related functions
	 * \date 21/08/2011
	 * \author Claire Dune, Jean René Tozza
	 *
	 * Point to point transform function to enhance image contrast, build histogram, etc ...  
	 * \warning The functions implemented in this file can only be used on greyscale images
	 *
	 *
	 */
	
	require_once("src/srcConversion.php");
	
	
	/*!
	 * \fn findMin($T)
	 * \brief find the min value of greyscale image
	 *
	 * \param $T is a greyscale image
	 * \return $minT
	 */
	 function findMin($T)
		{
			$minT = 0;
		    
            // => Write your code here     	
		
			return $minT;
		}
	
	/*!
	 * \fn findMax($T)
	 * \brief find the max value of greyscale image
	 *
	 * \param $T is a greyscale image
	 * \return $maxT
	 */
	function findMax($T)
	{
	
		$maxT =255;
		
        //=>Write your code here
		
		return $maxT;
		
		
	}
	
	
	/*!
	 * \fn dynMaxExtension($T)
	 * \brief Extend the image dynamic to [0,255]         
	 *
	 *
	 * \param $T greyscale image 3d table
	 * \return$Tres a greyscale image 3d table with extended dynamic
	 */
	 //function dynMaxExtension($T,$MIN,$MAX)
 	 function dynMaxExtension($T)
	 {
	   // compute min and max values of T
	   $minT = findMin($T);
	   $maxT = findMax($T);
	   // deduce amplitude $ampli
	   $ampli = $maxT-$minT;
	   if($ampli > 0)
		 {
			return tabCreateFromPng("../images/avous.png"); 
		 }
		 else
		  {
			return tabCreateFromPng("../images/wrong.png"); 
			  
		  }
	 }
	
	
	/*!\fn createHistogram($T)
	 * \brief Computes a greyscale image's histogram 
	 *  
	 * \param $T
	 * \return $hist
	 *
	 * \warning createHist is only defined for greyscale image ! 
	 */
	function createHistogram($T)
	{
		// test if it is a greyscale
		if(!isGreyImage($T))
		  {
			for ($i=0;$i<255;$i++)
				$hist[$i] = 255-$i;
		  }
		// else,  the image is grey, then let's build the histogram
		else 
		{ 	for ($i=0;$i<255;$i++)
				$hist[$i] = 255-$i;
		}
		return $hist;
	}
	
	
	

	/*!
	 * \fn createImageHistogram( $hist, $width,$height )
	 * 
	 * \param $hist an histogram
	 * \param $height height of the histogram image
	 * \param $width width of the histogramm image
	 * \return $ImageHist an image
	 */
	function createImageHistogram( $hist, $width,$height )
	{
	  if (!isset($hist))
	    {
	      return tabCreateFromPng("../images/wrong.png"); 
	    }
	  //add a frame for "the style"
	  $shift = 3;
	  
	  // compute the size of bars
	  $barWidth = (($width-2*$shift-1)/(sizeOf($hist)));
	  $width = (int) ($barWidth*sizeOf($hist))+2*$shift;
		
	  //create the image	
	  $I          = imageCreate( $width ,$height );
	  $background = imageColorAllocate($I, 255, 255, 255);
	  $barcolor   = imageColorAllocate($I, 100, 180, 220);
	  $bgcolor    = imageColorAllocate($I, 240, 250, 250);
	  $framecolor = imageColorAllocate($I, 200, 200, 200);
	  $title      = "Histogramme";
	  $fontSize   = 15;
	  
	  imageFilledRectangle($I, 
			       1, 
			       1,
			       $width-2,
			       $height-2,
			       $bgcolor);
	  
	  imageRectangle($I, 
			 $shift, 
			 $shift,
			 $width-$shift,
			 $height-$shift,
			 $framecolor);
	  
	  imageString($I, 
		      $fontSize,
		      ($width-ImageFontWidth($fontSize)*strlen($title))/2,
		      $shift+1,
		      $title, 
		      $barcolor);
	 
	  
	  // to compute vertical scale, first determine the max value
	  $max = 0;
	  for ($i=0; isset($hist[$i]); $i++) 
	    {
	      if ($hist[$i]>$max) 
		$max = $hist[$i];
	    }
	  
	 // draw the bars
	  for ($i=0; $i<sizeOf($hist); $i++)
	    {
	      $x = (int)($barWidth*($i));
	      $barHeight = (int)(($hist[$i]*($height-20))/$max);  
	      
	      imageFilledRectangle($I, 
				   $shift+$x, 
				   $height-$barHeight-10,
				   $shift+$x+$barWidth,
				   $height-10,
				   $barcolor);
	    }
	  
	  // return the created image
	  return $I;
	}



