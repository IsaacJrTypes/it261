<?php
//arrays reminds me of a category, a category of fruit, names
//navigation
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$fruits = array(
    'bananas',
    'strawberries',
    'blueberries',
    'oranges',
    'apples',
    'pinapples'
);

$fruits = [
    'bananas',
    'strawberries',
    'blueberries',
    'oranges',
    'apples',
    'pinapples'
];
//index array
$fruits[0] = 'bananas';
$fruits[1] = 'strawberries';
$fruits[2] = 'blueberries';
$fruits[3] = 'oranges';
$fruits[4] = 'apples';
$fruits[5] = 'pinapples';

//we cant echo an array
echo $fruits[2];
echo '<br>';
print_r($fruits);
echo '<br>';
var_dump($fruits);//Used in testing
echo '<br>';
echo '<pre>';//Used to preview code
var_dump($fruits);
echo '</pre>';

$title= 'The handmaid\'s tail';
$author= 'Margaret Atwood';
$character= 'June';
$actor = 'Elizabeth Moss';

$book = array(
    'title' =>'The handmaid\'s tail',
    'author'=>'Margaret Atwood',
    'character'=>'June',
    'actor'=>'Elizabeth Moss',
);
//associative array
//$nav   $key       value
$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

//you can echo an associative array by using a foreach loop
foreach ($nav as $key => $value) {//cannot index
    echo '<a href="'.$key.'">'.$value.'</a> <br>';
}
echo '<br>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .current {
            color:red;
        }
    </style>
</head>
<body>
<nav>
    <ul>
    <!-- Look at line 4
        If we are on THIS_PAGE, we will be styling for this page
        If THIS_PAGE == $key then add styles
    -->
    <?php foreach ($nav as $key => $value) {
        if(THIS_PAGE == $key) {
            echo '<li style="list"><a class="current" href="'.$key.'">'.$value.'</a></li>';
        } else {
            echo '<li><a style="text-decoration:none;"href="'.$key.'">'.$value.'</a></li>';
        }
       
    }?>
    </ul>
</nav>
</body>
</html>
