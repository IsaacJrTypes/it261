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

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/styles.css" type="text/css" rel="stylesheet" />
    <title><?php echo $title; ?></title>
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
                    echo '<li style="list-style-type:none;"><a style="text-decoration:none;"href="'.$key.'">'.$value.'</a></li>';
                }?>
                </ul>
            </nav>
        </div>
        <!-- end inner header -->
        </header>