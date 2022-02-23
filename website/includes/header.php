<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/styles.css" type="text/css" rel="stylesheet" />
    <link href="css/form.css" type="text/css" rel="stylesheet" />
    <title><?php echo $title;?></title>
  </head>
<body class="<?php echo $body;?>">
    <header>
        <div id="inner-header">
            <h1 id="logo">
            <a href="../index.php">
                <img src="images/php-logo.svg" alt="Php Logo" />
            </a>
            </h1>

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