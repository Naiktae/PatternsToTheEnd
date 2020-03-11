<?php
	/*! 
	 * \file srcDesaturation.php
	 * \brief Desaturation fonctions
	 * \date 25/08/2011
	 * \author Claire Dune, 
	 */


/*!
 * \fn desatYUV($Tyuv)
 * \brief desaturates a yuv image
 *
 * Set to zero the u and v layers
 *
 * \param $Tyuv an yuv color image
 * \warning this function apply only to YUV color image
 * \return $Tdesat the desaturated image
 */
function desatYUV( $Tyuv)
{
       
        return tabCreateFromPng("../images/avous.png");;
}


/*!
 * \fn partialDesatRGB( $Trgb)
 * \brief desaturates a rgbimage
 *
 * Set to zero the u and v layers
 *
 * \param $Trgb an rgb color image
 *
 * \warning this function apply only to YUV color image
 * \return $Tdesat the desaturated image
 *
 * Example
 * \code
 *
 * $imageSrc = "images/highway.png";
 * $imageRes = "results/highwayDesat.png";
 *
 * $Trgb = tabCreateFromPng($path.$imageSrc)
 *	or die ("cannot create tab from png");
 *
 * // convert to greyscale image
 * $Tdesat = partialDesatRGB($Trgb)
 *	or die ("cannot desaturate");
 *
 * // write the image on the disk
 * pngCreateFromTab($Tdesat,$path.$imageres);
 * //free memory
 * unset($Trgb);
 * unset($Tdesat);
 *
 * \endcode 
 *
 */ 
function partialDesatRGB( $Trgb)
{
	
	return tabCreateFromPng("../images/avous.png");;
}
