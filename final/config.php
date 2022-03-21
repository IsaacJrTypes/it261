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
        $headline = 'List of My Favorite Seattle Concert Venues';
        break;
    case 'venue-view.php':
        $title = 'Venue Details';
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

// switch content
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
$nav['venues.php'] = 'Venues';
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

/* Contact Page */
$email = '';
$comments = '';
$fname = '';
$lname = '';
$visitor = '';
$venue = '';
$regions = '';
$privacy = '';

$fNameErr = '';
$lNameErr = '';
$emailErr = '';
$visitorErr = '';
$phoneErr = '';
$venueErr = '';
$regionsErr = '';
$commentsErr = '';
$privacyErr = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(empty($_POST['fname'])) {
        $fNameErr = 'Please enter your first name';
    } else {
        $fname = $_POST['fname'];
    }

    if(empty($_POST['lname'])) {
        $lNameErr = 'Please enter your last name';
    } else {
        $lname = $_POST['lname'];
    }

    if(empty($_POST['email'])) {
        $emailErr = 'Please enter your Email';
    } else {
        $email = $_POST['email'];
    }

    if(empty($_POST['visitor'])) {
        $visitorErr = 'Please choose the type of visitor';
    } else {
        $visitor = $_POST['visitor'];
    }

    if(empty($_POST['phone'])) { // if empty, type in your number
    $phoneErr = 'Your phone number please!';
    } elseif(array_key_exists('phone', $_POST)){
    if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
    { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
    $phoneErr = 'Invalid format!';
    } else{
    $phone = $_POST['phone'];
    } // end else
    } // end main if

    if(empty($_POST['venue'])) {
        $venueErr = 'Please choose atleast one venue';
    } else {
        $venue = $_POST['venue'];
    }

    if($_POST['regions'] == NULL) {
        $regionsErr = 'Please select your region';
    } else {
        $regions = $_POST['regions'];
    }

    if(empty($_POST['comments'])) {
        $commentsErr = 'Your comments, please!!';
    } else {
        $comments = $_POST['comments'];
    }

    if(empty($_POST['privacy'])) {
        $privacyErr = 'You cannot pass go!';
    } else {
        $privacy = $_POST['privacy'];
    }

    //our venue function
    function venue($venue) {
        $my_return = '';
        if(!empty($_POST['venue'])) {
            $my_return = implode(', ', $_POST['venue']);
        } else {
            $venueErr = 'Select atleast 1 programming language';
        }
        return $my_return;
    }//end venue function

    if(isset($_POST['fname'],
             $_POST['lname'],
             $_POST['email'],
             $_POST['visitor'],
             $_POST['phone'],
             $_POST['regions'],
             $_POST['venue'],
             $_POST['comments'],
             $_POST['privacy'])) {
    $to = 'duckhunterjr@gmail.com';
    $subject = 'Test email '.date('m/d/y, h i A');
    $body = '
    First Name: '.$fname.' '.PHP_EOL.'
    Last Name: '.$lname.' '.PHP_EOL.'
    Email: '.$email.' '.PHP_EOL.'
    visitor: '.$visitor.' '.PHP_EOL.'
    Phone Number: '.$phone.' '.PHP_EOL.'
    Regions: '.$regions.' '.PHP_EOL.'
    venue: '.venue($venue).' '.PHP_EOL.'
    Comments: '.$comments.' '.PHP_EOL.'
    ';

        if(!empty($fname&&
                $lname&&
                $visitor&&
                $venue&&
                $regions&&
                $email&&
                $phone&&
                $comments&&
                $privacy)&&preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {
            $headers = array(
            'From'=> 'no-reply@studentswa.com',
            'Reply to:'=>''.$email.'');

            mail($to,$subject,$body,$headers);
            header('Location:thx.php');
        }//close if !empty
    }//close isset

}// END server request

?>