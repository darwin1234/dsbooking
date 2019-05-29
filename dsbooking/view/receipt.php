<?php 
header ('Content-Type: image/png');
 $qr = file_get_contents("http://gibraltartoursandtaxiservice.com/wp-content/plugins/dsbooking/view/qrcode.php");
 $info = file_get_contents("http://gibraltartoursandtaxiservice.com/wp-content/plugins/dsbooking/view/info.php");
 echo  $info 
 //echo  $qr;
 //$image = imagecreatefromstring($qr);
 //$frame = imagecreatefromstring($info);


 //imagecopymerge($image, $frame,0, 0, 10, 0, 200, 40, 100);

 //imagepng($image)
  
 ?>