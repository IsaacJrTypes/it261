<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/form.css" type="text/css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <label>First Name</label>
    <input type="text" name="fname"></input>
    
    <label>Last Name</label>
    <input type="text" name="lname"></input>
    <label>Email</label>
    <input type="email" name="email"></input>
    <label>Msg</label>
    <textarea name="msg"></textarea>
    <br>
    <input type="submit" value="send">
    </form>
    <a href="">Reset</a>

    <?php
    if(isset($_POST['fname'],
    $_POST['lname'],
    $_POST['email'],
    $_POST['msg'])) {
        if(empty($_POST['fname'] &&
        $_POST['lname'] &&
        $_POST['email'] &&
        $_POST['msg'])) {
        
        echo '<p class="error">Please fill out the fields</p>';

        } else {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $msg = $_POST['msg'];

        echo '
        <div class="box">
        <h2>Hello '.$fname.' '.$lname.'</h2> <p> We also have your comments as the following: <br>'.$msg.'
        </p>
        
        </div>
        ';
        

        }//end else



    }//end is set
    
    ?>
</body>
</html>