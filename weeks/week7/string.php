<?php
//our str_replace and substr functions
//substr(string,start,length)
//use substring to cut word length

$statement = 'Presently, I am reading the looming tower';
echo $statement;
echo '<br>';
echo substr($statement,0);
echo '<br>';
echo substr($statement,1);
echo '<br>';
echo substr($statement,10);
echo '<h2>Now, I would like to display just the words - I am reading</h2>';
echo '<br>';
echo substr($statement,10,13);


echo '<h2>What if I would like to display looming?</h2>';
echo substr($statement,-14,8);//you can cut from list backwards starting with -1
echo '<br>';
echo substr($statement,4,11);
echo '<br>';
echo substr($statement,-20,2);
echo '<br>';
echo '<h2>Now for the str_replace function!</h2>';
echo '<br>';

$statement2 = 'Hulu\'s rendition of the Looming Tower is based on the book named the Looming Tower!  ';

echo str_replace('the','The', $statement2);
?>