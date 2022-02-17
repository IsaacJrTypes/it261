<?php
//rand() function
echo '<h2>Playing with one dice!</h2>';

$dice = rand(1,6);
echo $dice;

echo '<h2>Playing with two dices</h2>';
$dice1 = rand(1,6);
$dice2 = rand(1,6);

echo '
    <b>Dice 1:</b> '.$dice1.' <br>
    <b>Dice 2:</b> '.$dice2.' <br>
';

echo '<h2>Playing with two dices</h2>
<p>If we get two "sixes.. you are a big winner <br>
If you get doubles, you\'re still a winner <br>
You lose!!!
</p>
';

if ($dice1==6&&$dice2==6) {
    echo 'you\'re a big winner';
} elseif ($dice1==$dice2) {
    echo 'You still won';
} else {
    echo 'Please try again!';
}

echo '<h2>Display Random Images</h2>';

$photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';

// $i = rand(0,4);

// $selected_image = ''.$photos[$i].'.jpg';
// echo '<img src="images/'.$selected_image.'" alt="'.$photos[$i].'">';

function random_images($photos) {
    $my_return = '';
    $i = rand(0,4);
    $selected_image = ''.$photos[$i].'.jpg'; 
    return $my_return = '<img src="images/'.$selected_image.'" alt="'.$photos[$i].'">';
}

echo random_images($photos);
?>