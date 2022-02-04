<?php
echo '<h2>What will be the answer?? A is not NULL, because _ is false</h2>';
$a = 0;
echo 'a is '.is_null($a).'';

echo '<h2>What will be the answer? B is NULL, because 1 = True</h2>';
$b = null;
echo 'b is '.is_null($b).'';

echo '<h2>What will be the answer? c is not null, string is not empty</h2>';
$c = "null";
echo 'c is '.is_null($c).'';

echo '<h2>D is null, because 1 = True</h2>';
$d = NULL;
echo 'd is '.is_null($d).'';

echo '<h2>E is not NULL</h2>';
$e = "";
echo 'e is '.is_null($e).'';

?>