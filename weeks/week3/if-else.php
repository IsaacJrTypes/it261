<?php
//if/else statments
$temp = 50;
if($temp >= 80) {
    echo 'Life is good';
} elseif($temp<=60) {
    echo 'It is a bit chilly';
} elseif($temp<=70) {
    echo 'We may go to the park';
} elseif($temp<=85) {
    echo 'We may go to the beach';
} else {
    echo 'It is going to be hot!!';
}

echo '<br>';

$salary= 200000; //annual salary
$some_bonus = .10;
$med_bonus = .20;
$big_bonus = .30;
$sales = 145000;
//if sales is greater than 9999, you wll receive some bonus
//if sales is over 120000, you will receive the med bonus
//if sales is over 140000, you will receive the big bonus
if($sales<=99999) {
    echo 'No bonus';
} elseif($sales <= 119999) {
    $salary*=1.10;
    echo 'I just made 10% over my salary $'.$salary.'';
} elseif($sales <=139999) {
    $salary *=1.2;
    echo 'I just made 20% over my salary $'.$salary.'';
} elseif($sales <=150000) {
    $salary *=1.3;
    echo 'I just made 30% over my salary $'.$salary.'';
} else {
    echo 'I am retiring';
}