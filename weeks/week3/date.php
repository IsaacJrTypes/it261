<?php
//Playing with our date function!!
echo date('l')."<br>";
echo date("l,F j,Y h:i");
//day, mounth date year and time
date_default_timezone_set('America/Los_Angeles');
echo date('l')."<br>";
echo date("l,F j,Y h:i");
echo '<br>';

$our_date = date('H:i');
echo $our_date;
echo '<br>';
if ($our_date <=11) {
    echo '<h1>Good Morning</h1>';
} elseif ($our_date <=17) {
    echo '<h1>Good Afternoon</h1>';
} else {
    echo '<h1>Good Evening</h1>';
}