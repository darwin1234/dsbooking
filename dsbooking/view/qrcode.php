<?php 
session_start();
include('../utilities/phpqrcode/qrlib.php'); 
 // outputs image directly into browser, as PNG stream 

 QRcode::png(md5($_SESSION['qr_code']));



/*header ("Content-type: image/jpeg"); 


 # If you don't know the type of image you are using as your originals.
 $image = imagecreatefromstring(file_get_contents('http://chart.googleapis.com/chart?cht=qr&chs=200x400&chl=1111111111111'));
 $frame = imagecreatefromstring(file_get_contents('https://www.google.com.ph/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png'));

 # If you know your originals are of type PNG.
// $image = imagecreatefrompng($your_original_image);
 //$frame = imagecreatefrompng($your_frame_image);

 imagecopymerge($image, $frame,0, 0, 0, 0, 200, 40, 100);

 //imagecopyresampled($image, $frame, 10, 400, 0, 0, 255, 175, imagesx($image), imagesy($image));
 # Save the image to a file
 //imagepng($image, '/path/to/save/image.png');

 # Output straight to the browser.
 imagepng($image)*/
 
 
?>