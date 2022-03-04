<?php
//we need to define the page that we are on as the page
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

switch(THIS_PAGE) {
    case 'index.php':
        $title = 'Our Home';
        $body = 'home';
        break;
    case 'about.php':
        $title = 'About Page';
        break;
    case 'daily.php':
        $title = 'Our Daily Page';
        $body = 'daily inner';
        break;
    case 'people.php':
        $title = 'People Page';
        break;
    case 'contact.php':
        $title = 'Our Contact Page';
        $body = 'daily inner';
        break;
    case 'gallery.php':
        $title = 'Gallery Page';
        break;
    case 'thx.php':
        $title = 'Thank You Page';
        break;
}

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['people.php'] = 'People';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

ob_start();
date_default_timezone_set('America/Los_Angeles');//sets timezone


//GLOBAL VARIABLE are capitallized and start with $_GET
if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

/* Switch page */
switch($today) {
    case 'Thursday': 
        $philosopher = 'Marcus Aurelius';
        $pic = 'marcus.jpg';
        $alt = 'Scupture of Marcus Aurelius\'s head';
        $divClass = 'skyBlue';
        $quote = '“The soul becomes dyed with the colour of its thoughts”';
        $content = '<b>Marcus Aurelius</b>was a Roman emperor from 161 to 180 and a Stoic philosopher. He was the last of the rulers known as the Five Good Emperors (a term coined some 13 centuries later by Niccolò Machiavelli), and the last emperor of the Pax Romana (27 BC to 180 AD), an age of relative peace and stability for the Roman Empire. He served as Roman consul in 140, 145, and 161.';
        break;
    case 'Friday': 
        $philosopher = 'Seneca';
        $pic = 'seneca.jpg';
        $alt = 'Scupture of Seneca\'s head';
        $divClass = 'helio';
        $quote = '“Luck is what happens when preparation meets opportunity”';
        $content = '<b>Lucius Annaeus Seneca the Younger</b>was born in Cordoba in Hispania, and raised in Rome, where he was trained in rhetoric and philosophy. His father was Seneca the Elder, his elder brother was Lucius Junius Gallio Annaeanus, and his nephew was the poet Lucan. In AD 41, Seneca was exiled to the island of Corsica under emperor Claudius, but was allowed to return in 49 to become a tutor to Nero. When Nero became emperor in 54, Seneca became his advisor and the praetorian prefect Sextus Afranius Burrus, provided competent government for the first five years of Nero\'s reign. Seneca\'s influence over Nero declined with time, and in 65 Seneca was forced to take his own life for alleged complicity in the Pisonian conspiracy to assassinate Nero, in which he was likely to have been innocent. His stoic and calm suicide has become the subject of numerous paintings.';
        break;
    case 'Saturday': 
        $philosopher = 'Immanuel Kant'; 
        $pic = 'kant.jpg';
        $alt = 'Scupture of Immanuel Kant\'s head';
        $divClass = 'slateBlue';
        $quote = '“All our knowledge begins with the senses, proceeds then to the understanding, and ends with reason. There is nothing higher than reason';
        $content = '<b>Immanuel Kant</b> was a German philosopher and one of the central Enlightenment thinkers.Born in Königsberg, Kant\'s comprehensive and systematic works in epistemology, metaphysics, ethics, and aesthetics have made him one of the most influential figures in modern Western philosophy.';
        break;
    case 'Sunday': 
        $philosopher = 'Confucius'; 
        $pic = 'confusious.jpg';
        $alt = 'Scupture of Confusious';
        $divClass = 'camelot';
        $quote = '“The man who asks a question is a fool for a minute, the man who does not ask is a fool for life.”';
        $content = '<b>Confucius</b>  was a Chinese philosopher, poet and politician of the Spring and Autumn period who was traditionally considered the paragon of Chinese sages. Confucius\'s teachings and philosophy formed the basis of East Asian culture and society, and continues to remain influential across China and East Asia as of today.';

        break;
    case 'Monday': 
        $philosopher = 'Plato'; 
        $pic = 'plato.jpg';
        $alt = 'Scupture of Plato\'s head';
        $divClass = 'olive';
        $quote = '“Do not train a child to learn by force or harshness; but direct them to it by what amuses their minds, so that you may be better able to discover with accuracy the peculiar bent of the genius of each.”';
        $content = '<b>Plato</b> was an Athenian philosopher during the Classical period in Ancient Greece, founder of the Platonist school of thought and the Academy, the first institution of higher learning in the Western world';
        break;
    case 'Tuesday': 
        $philosopher = 'Epictetus'; 
        $pic = 'epictetus.jpg';
        $alt = 'Scupture of Epictetus\'s head';
        $divClass = 'raz';
        $quote = '“He who laughs at himself never runs out of things to laugh at.”';
        $content = '<b>Epictetus</b>  was a Greek Stoic philosopher. He was born into slavery at Hierapolis, Phrygia (present day Pamukkale, Turkey) and lived in Rome until his banishment, when he went to Nicopolis in northwestern Greece for the rest of his life. His teachings were written down and published by his pupil Arrian in his Discourses and Enchiridion';

        break;
    case 'Wednesday': 
        $philosopher = 'Aristotle'; 
        $pic = 'aristotle.jpg';
        $alt = 'Scupture of Aristotle\'s head';
        $divClass = 'empress';
        $quote = '“Excellence is an art won by training and habituation. We do not act rightly because we have virtue or excellence, but we rather have those because we have acted rightly. We are what we repeatedly do. Excellence, then, is not an act but a habit.”';
        $content = '<b>Aristotle</b> was a Greek philosopher and polymath during the Classical period in Ancient Greece. Taught by Plato, he was the founder of the Lyceum, the Peripatetic school of philosophy, and the Aristotelian tradition. His writings cover many subjects including physics, biology, zoology, metaphysics, logic, ethics, aesthetics, poetry, theatre, music, rhetoric, psychology, linguistics, economics, politics, meteorology, geology and government. Aristotle provided a complex synthesis of the various philosophies existing prior to him. It was above all from his teachings that the West inherited its intellectual lexicon, as well as problems and methods of inquiry. As a result, his philosophy has exerted a unique influence on almost every form of knowledge in the West and it continues to be a subject of contemporary philosophical discussion.';
        break;
}

/* Contact Page */
$email = '';
$comments = '';
$fname = '';
$lname = '';
$visitor = '';
$pLang = '';
$regions = '';
$privacy = '';

$fNameErr = '';
$lNameErr = '';
$emailErr = '';
$visitorErr = '';
$phoneErr = '';
$pLangErr = '';
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

    if(empty($_POST['pLang'])) {
        $pLangErr = 'Please choose atleast one programming language';
    } else {
        $pLang = $_POST['pLang'];
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

    //our plang function
    function pLang($pLang) {
        $my_return = '';
        if(!empty($_POST['pLang'])) {
            $my_return = implode(', ', $_POST['pLang']);
        } else {
            $pLangErr = 'Select atleast 1 programming language';
        }
        return $my_return;
    }//end pLang function

    if(isset($_POST['fname'],
             $_POST['lname'],
             $_POST['email'],
             $_POST['visitor'],
             $_POST['phone'],
             $_POST['regions'],
             $_POST['pLang'],
             $_POST['comments'],
             $_POST['privacy'])) {
    $to = 'szemeo@mystudentswa.com';
    $subject = 'Test email '.date('m/d/y, h i A');
    $body = '
    First Name: '.$fname.' '.PHP_EOL.'
    Last Name: '.$lname.' '.PHP_EOL.'
    Email: '.$email.' '.PHP_EOL.'
    visitor: '.$visitor.' '.PHP_EOL.'
    Phone Number: '.$phone.' '.PHP_EOL.'
    Regions: '.$regions.' '.PHP_EOL.'
    pLang: '.pLang($pLang).' '.PHP_EOL.'
    Comments: '.$comments.' '.PHP_EOL.'
    ';

        if(!empty($fname&&
                $lname&&
                $visitor&&
                $pLang&&
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

/* Index.php image page */
$photos[0] = 'aristotle';
$photos[1] = 'epictetus';
$photos[2] = 'marcus';
$photos[3] = 'plato';
$photos[4] = 'seneca';

function random_images($photos) {
    $my_return = '';
    $i = rand(0,4);
    $selected_image = ''.$photos[$i].'.jpg'; 
    return $my_return = '<img src="images/'.$selected_image.'" alt="'.$photos[$i].'">';
}

/* Associated list of wrestlers */
$wrestler['Kenny_Omega'] = 'kenny_Winnipeg, Canada.altKen.';
$wrestler['Thunder_Rosa'] = 'thund_Tijuana, Mexico.altThu.';
$wrestler['CM_Punk'] = 'cmPun_Chicago, Illinois.altCmp.';
$wrestler['Adam_Page'] = 'adamP_Halifax, Virginia.altAda.';
$wrestler['Britt_Baker_D.M.D'] = 'britt_Punxsutawney, Pennsylvania.altBri.';

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

?>