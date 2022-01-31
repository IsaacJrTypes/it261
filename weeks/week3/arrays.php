<?php
//arrays reminds me of a category, a category of fruit, names
//navigation

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
<nav>
<ul>
<?php foreach ($nav as $key => $value) {
    echo '<li style="list-style-type:none; color:red;"><a style="text-decoration:none;"href="'.$key.'">'.$value.'</a></li>';
}?>
</ul>
</nav>