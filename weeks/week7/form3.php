<?php
//reads entire page, delays sending header
ob_start();

$email = '';
$comments = '';
$fname = '';
$lname = '';
$gender = '';
$wines = '';
$regions = '';
$privacy = '';

$fNameErr = '';
$lNameErr = '';
$emailErr = '';
$genderErr = '';
$phoneErr = '';
$winesErr = '';
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
        $lNameErr = 'Please enter your name';
    } else {
        $lname = $_POST['lname'];
    }

    if(empty($_POST['email'])) {
        $emailErr = 'Please enter your Email';
    } else {
        $email = $_POST['email'];
    }

    if(empty($_POST['gender'])) {
        $genderErr = 'Please choose your gender';
    } else {
        $gender = $_POST['gender'];
    }

    if(empty($_POST['phone'])) {
        $phoneErr = 'Please enter your phone number';
    } else {
        $phone = $_POST['phone'];
    }

    if(empty($_POST['wines'])) {
        $winesErr = 'Please choose a wine';
    } else {
        $wines = $_POST['wines'];
    }

    if($_POST['regions'] == NULL) {
        $regionsErr = 'Please select your regions';
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

    //our wine function
    function my_wines($wines) {
        $my_return = '';
        if(!empty($_POST['wines'])) {
            $my_return = implode(', ', $_POST['wines']);
        } else {
            $winesErr = 'Please choose a wine';
        }
        return $my_return;
    }//end wine function

    if(isset($_POST['fname'],
             $_POST['lname'],
             $_POST['email'],
             $_POST['gender'],
             $_POST['phone'],
             $_POST['regions'],
             $_POST['wines'],
             $_POST['comments'],
             $_POST['privacy'])) {
    $to = 'duckhunterjr@gmail.com';
    $subject = 'Test email '.date('m/d/y, h i A');
    $body = '
    First Name: '.$fname.' '.PHP_EOL.'
    Last Name: '.$lname.' '.PHP_EOL.'
    Email: '.$email.' '.PHP_EOL.'
    Gender: '.$gender.' '.PHP_EOL.'
    Phone Number: '.$phone.' '.PHP_EOL.'
    Regions: '.$regions.' '.PHP_EOL.'
    Wines: '.my_wines($wines).' '.PHP_EOL.'
    Comments: '.$comments.' '.PHP_EOL.'
    ';

        if(!empty($fname&&
                $lname&&
                $gender&&
                $wines&&
                $regions&&
                $email&&
                $phone&&
                $comments&&
                $privacy)) {
            $headers = array(
                'From'=> 'no-reply@studentswa.com',
                'Reply to:'=>''.$email.'');

            mail($to,$subject,$body,$headers);
            header('Location:thx.php');
        }//close if !empty
    }//close isset

}// END server request

?>

<!-- Continue on video #2 21min mark -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/form.css" rel="stylesheet" type="text/css">
    <title>Form Class Exercise</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <fieldset>
    <legend>Contact Isaac</legend>
    
    <label>First Name</label>
    <input type="text" name="fname" value="<?php if(isset($_POST['fname'])) echo htmlspecialchars($_POST['fname']);?>">
    <span class="error"><?= $fNameErr?></span>

    <label>Last Name</label>
    <input type="text" name="lname" value="<?php if(isset($_POST['lname'])) echo htmlspecialchars($_POST['lname']);?>">
    <span class="error"><?= $lNameErr?></span>
    
    <label>Email</label>
    <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>">
    <span class="error"><?= $emailErr?></span>

    <label>Gender</label>
    
    <ul>
        <li><input type="radio" name="gender" value="female" <?php if(isset($_POST['gender'])&&$_POST['gender']=='female') echo 'checked = "checked" ' ?> >Female</li>

        <li><input type="radio" name="gender" value="male" <?php if(isset($_POST['gender'])&&$_POST['gender']=='male') echo 'checked = "checked" ' ?> >Male</li>

        <li><input type="radio" name="gender" value="neither" <?php if(isset($_POST['gender'])&&$_POST['gender']=='neither') echo 'checked = "checked" ' ?> >Neither</li>
    </ul>
    <span class="error"><?= $genderErr?></span>

    <label>Phone</label>
    <input type="tel" name="phone" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']);?>">
    <span class="error"><?= $phoneErr?></span>

    <label>Favorite Wines</label>
    
    <ul>
        <li><input type="checkbox" name="wines[]" value="cab" <?php if(isset($_POST['wines'])&& in_array('cab', $wines)) echo 'checked = "checked" ' ?> >Cabernet</li>

        <li><input type="checkbox" name="wines[]" value="merlot" <?php if(isset($_POST['wines'])&& in_array('merlot', $wines)) echo 'checked = "checked" ' ?> >Merlot</li>

        <li><input type="checkbox" name="wines[]" value="syrah" <?php if(isset($_POST['wines'])&& in_array('syrah', $wines)) echo 'checked = "checked" ' ?> >Syrah</li>

        <li><input type="checkbox" name="wines[]" value="malbec" <?php if(isset($_POST['wines'])&& in_array('malbec', $wines)) echo 'checked = "checked" ' ?> >Malbec</li>
    </ul>

    <span class="error"><?= $winesErr?></span>

    <label>Region</label>
    <select name="regions">
    <option value="" NULL <?php if(isset($_POST['regions'])&& $_POST['regions'] == NULL) echo 'selected = "unselected" ';?> >Select one</option>

    <option value="nw" <?php if(isset($_POST['regions'])&& $_POST['regions'] == 'nw') echo 'selected = "selected" ';?> >Northwest</option>

    <option value="sw" <?php if(isset($_POST['regions'])&& $_POST['regions'] == 'sw') echo 'selected = "selected" ';?> >Southwest</option>

    <option value="mw" <?php if(isset($_POST['regions'])&& $_POST['regions'] == 'mw') echo 'selected = "selected" ';?> >Midwest</option>
    
    <option value="se" <?php if(isset($_POST['regions'])&& $_POST['regions'] == 'se') echo 'selected = "selected" ';?> >Southeast</option>

    </select>
    <span class="error"><?= $regionsErr?></span>

    <label>Comments</label>
    <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']) ;?></textarea>
    <span class="error"><?= $commentsErr?></span>

    <label>Privacy</label>
    
    <ul>
        <li><input type="radio" name="privacy" value="yes" <?php if(isset($_POST['privacy'])&&$_POST['privacy']=='yes') echo 'checked = "checked" ' ?> >You must agree!</li>
    </ul>
    <span class="error"><?= $privacyErr?></span>

    <input type="submit" value="Send it!">
    </fieldset>
    <p><a href="">Reset</a></p>
    </form>
    
    <?php
    



    ?>

</body>
</html>