<?php
//Introduction to our variables
//As well as syntax!!
//What is a variable?? A variable is a container
function br()
{
    return '<br>';
}
$name = 'Isaac';
echo $name;
echo br();
echo 'My first name is $name';
//teacher prefer single quotes because later on we will be placing php inside our html values <a href=""
echo br();
echo 'My first name is ' . $name . ' ';
echo br();
$temp = 45;
//Another data type is interger
echo 'The temperature today was ' . $temp . ' degrees';
echo br();
$bodyTemp = 98.6;
//Anything with a decimal is called a float
echo $bodyTemp;
echo br();

//Another data type is boolean = true or false, 0 = false, 1 = True
//Another data type is NULL
// <select><option value = ''NULL>Select One</option></select>

$vehicle = 'Truck';
$x = 20;
$y = 30;
//$z = $x * $y;
echo 'results for line 34: ' . $z;
//cicumference of a circle 2 pi r
$pi = 3.14;
$rad = 10;
$circumference = 2 * $pi * $rad;
echo $circumference;
echo br();
$celcius = 4;
$far = ($celcius * 9) / 5 + 32;
$friendly_far = floor($far);
echo $far;
echo br();
echo $friendly_far;
echo br();
echo ceil($far);
//ceil is a built in function that will round up
//floor is a built in function that will round down
echo br();
$money = 10330;
$divide = 71;
$amount = $money / $divide;
echo $amount;
echo br();
// number_format($amount,2)
$friendly_amount = number_format($amount, 2);
echo $friendly_amount;
echo br();
echo '<p>I now have <b>$' . $friendly_amount . '</b> dollars!</p>';
