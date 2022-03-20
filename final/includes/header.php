<?php

//did user log in?
if(!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'You must login first';
    header('Location:login.php');
} 

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" type="text/css" rel="stylesheet" />  
    <title><?=$title?></title>
</head>
<body>

<div id="page-container">
    <header>
        <div id="inner-header">
            <div id="logo">
                <h1>
                    <a href="index.php">
                        <img class="logo" src="images/logo.svg" alt="Website Logo" />
                    </a>
                </h1>
                <?php
                //logic: is session success set?
                if(isset($_SESSION['success'])) :?>
                <div class="success">
                    <h3><?php echo $_SESSION['success'];
                    unset($_SESSION['success']);?></h3>

                </div><!-- close success -->
                <?php endif;?>
            </div><!-- logo div close -->
            <nav>
                <ul>
                    <li>Hi <?= $_SESSION['username']?>!</li>
                    <?= make_links($nav) ?>
                    <li><a href="index.php?logout='1'">logout</a></li>
                </ul>
            </nav>
        </div><!-- inner header close -->
    </header>
    
