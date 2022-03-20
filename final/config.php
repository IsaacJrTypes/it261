<?php
ob_start();  // prevents header errors before reading the whole page!
//define the page that we are on as the page
date_default_timezone_set('America/Los_Angeles');//sets timezone
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

$success = 'You have successfully logged on!!';
$errors = array();

function myError($myFile, $myLine, $errorMsg) {
    if(defined('DEBUG') && DEBUG) {
      echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
    }  else {
      echo ' Houston, we have a problem!';
      die();
    }  
}

//php for page switch
switch(THIS_PAGE) {
    case 'index.php':
        $title = 'Concert Home Page';
        $body = '';
        $headline = 'Welcome to my final project!';
        break;
    case 'daily.php':
        $title = 'Artist Of The Day';
        $body = '';
        $headline = '';
        break;
    case 'about.php':
        $title = 'About Our Screenshots';
        $body = '';
        $headline = 'Screenshot on our concert venue database';
        break;
    case 'register.php':
        $title = 'Register Today!';
        $body = '';
        $headline = 'Register Today!';
        break;
    case 'login.php':
        $title = 'Login Today!';
        $body = '';
        $headline = 'Login Page';
        break;
    case 'venues.php':
        $title = 'Seattle Concert Venues';
        $body = '';
        $headline = 'Database of Best Local Concert Venues';
        break;
    case 'contact.php':
        $title = 'Contact Page';
        $body = '';
        $headline = 'Submit and vote for your favorite venue';
        break;
}

//php for artist switch page
if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today) {
    case 'Sunday':
        $artist = '';
        $hometown = '';
        $pic = '';
        $content = '';
        break;
    case 'Monday':
        $artist = '';
        $hometown = '';
        $pic = '';
        $content = '';
        break;
    case ' Tuesday':
        $artist = '';
        $hometown = '';
        $pic = '';
        $content = '';
        break;
    case 'Wednesday':
        $artist = '';
        $hometown = '';
        $pic = '';
        $content = '';
        break;
    case 'Thursday':
        $artist = '';
        $hometown = '';
        $pic = '';
        $content = '';
        break;
    case 'Friday':
        $artist = '';
        $hometown = '';
        $pic = '';
        $content = '';
        break;
    case 'Saturday':
        $artist = '';
        $hometown = '';
        $pic = '';
        $content = '';
        break;
}

//nav assoc list
$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Switch';
$nav['venue.php'] = 'Venue';
$nav['contact.php'] = 'Contact';

//make link function
function make_links($nav) {
    $my_return = '';
    foreach ($nav as $key => $value) {
        if(THIS_PAGE == $key) {
            $my_return .= '<li><a class="current" href="'.$key.'">'.$value.'</a></li>';
        } else {
            $my_return .='<li><a href="'.$key.'">'.$value.'</a></li>';
        }
    }//end foreach
    return $my_return;
}

?>