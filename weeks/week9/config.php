<?php
ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

$success = 'You have successfully logged on!!';
$errors = array();

function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo ' Houston, we have a problem!';
      die();
  }  
}

$photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';

function random_images($photos) {
    $my_return = '';
    $i = rand(0,4);
    $selected_image = ''.$photos[$i].'.jpg'; 
    return $my_return = '<img src="../week7/images/'.$selected_image.'" alt="'.$photos[$i].'">';
}

?>