<?php
$Tinit = tabCreateFromPng($image);
$T = array(array(array()));
if ($_POST["motif"]=="diffus") {
  for ($i = 0,$w=100 ; $i < $w ; $i++ ) {
      for ($j = 0 , $h=100; $j < $h ; $j++ )
        {
          shuffle($Tinit);
          $T[$i][$j][0]=$Tinit[$i][$j][0];
          $T[$i][$j][1]=$Tinit[$i][$j][1];
          $T[$i][$j][2]=$Tinit[$i][$j][2];
        }
    }
}
elseif ($_POST["motif"]=="mariniere") {
  $c=true;
  for ($i = 0,$w=100 ; $i < $w ; $i++ ) {
      for ($j = 0 , $h=100; $j < $h ; $j++ )
        {
          if ($c) {
            $T[$i][$j][0]=$colors[$color1][0];
            $T[$i][$j][1]=$colors[$color1][1];
            $T[$i][$j][2]=$colors[$color1][2];
            $c=false;
          }
          else {
            $T[$i][$j][0]=$colors[$color2][0];
            $T[$i][$j][1]=$colors[$color2][1];
            $T[$i][$j][2]=$colors[$color2][2];
            $c=true;
          }
    }
    if ($c) {
            $c=false;
        }
        else {
          $c=true;
        }
  }
}
		pngCreateFromTab($T,$image);
?>