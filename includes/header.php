<?php
//we need to define the page that we are on as the page
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
    case 'index.php':
        $title = 'Our Home';
        $body = 'home';
        break;
    case 'daily.php':
        $title = 'Our Daily Page';
        $body = 'daily inner';
}

$nav['website/daily.php'] = 'Switch';
$nav['website/troubleshoot.php'] = 'Troubleshoot';
$nav['website/calculator.php'] = 'Calculator';
$nav['email.php'] = 'Email';
$nav['gallery.php'] = 'Gallery';
$nav['database.php'] = 'Database';

date_default_timezone_set('America/Los_Angeles');//sets timezone


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/styles.css" type="text/css" rel="stylesheet" />
    <title><?php echo $title;?></title>
  </head>
<body class="<?php echo $body;?>">
    <header>
        <div id="inner-header">
            <h1 id="logo">
            <a href="index.php">
                <img src="images/php-logo.svg" alt="Php Logo" />
            </a>
            </h1>

           <!--  <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="daily.php">Daily</a></li>
                <li><a href="project.php">Project</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="gallery.php">Gallery</a></li>
            </ul>
            </nav> -->
            <nav>
                <ul>
                <?php foreach ($nav as $key => $value) {
                    if(THIS_PAGE == $key) {
                      echo '<li><a class="current" href="'.$key.'">'.$value.'</a></li>';
                    } else {
                    echo '<li><a href="'.$key.'">'.$value.'</a></li>';
                    }
                    }?>
                </ul>
            </nav>
        </div>
        <!-- end inner header -->
        </header>