<?php
//Class exercise
//it is thursday, it will be pumpkin late day
//we will start with the isset() function, checks if var is set and returns boolean
//Global variable
//Switch
// $var = 'Life is good';
// if (isset($var)) {
//     echo 'Yippy-skippy';
// } else {
//     echo 'Not';
// }

//starting the switch
//if something is set, $today, then all is well
//else, today is TODAY
date_default_timezone_set('America/Los_Angeles');//sets timezone
//GLOBAL VARIABLE are capitallized and start with $_GET
if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

function backgroundColor($color) {
    return 'background:'.$color.';';
}

//switch
switch($today) {
    case 'Thursday': 
        $coffee = '<h2>Today is Cappucino Day!</h2>';
        $pic = 'cap.jpg';
        $alt = 'Cappucino';
        $class = 'brown';
        $content = 'A <b>cappuccino</b> is an espresso-based coffee drink that originated in Austria with later development taking place in Italy, and is prepared with steamed milk foam. Variations of the drink involve the use of cream instead of milk, using non-dairy milk substitutes and flavoring with cinnamon or chocolate powder.';
        break;
    case 'Friday': 
        $coffee = '<h2>Today is Americano!</h2>';
        $pic = 'americano.jpg';
        $alt = 'americano';
        $class = 'darkbrown';
        $content = 'Caffè <b>Americano</b> is a type of coffee drink prepared by diluting an espresso with hot water, giving it a similar strength to, but different flavor from, traditionally brewed coffee. Its strength varies with the number of shots of espresso and amount of water added.';
        break;
    case 'Saturday': 
        $coffee = '<h2>Today is Brewed Coffee Day!</h2>'; 
        $pic = 'coffee.png';
        $alt = 'Brewed Coffee';
        $class = 'lightyellow';
        $content = '<b>Brewed coffee</b> is made by pouring hot water onto ground coffee beans, then allowing to brew. There are several methods for doing this, including using a filter, a percolator, and a French press';
        break;
    case 'Sunday': 
        $coffee = '<h2>Today is Green Tea Latte!</h2>'; 
        $pic = 'green-tea.jpg';
        $alt = 'Green Tea Latte';
        $class = 'lightgreen';
        $content = 'Smooth and creamy matcha sweetened just right and served with steamed milk. This favorite will transport your senses to pure green delight.';

        break;
    case 'Monday': 
        $coffee = '<h2>Today is Caramel Frappuccino Day!</h2>'; 
        $pic = 'frap.jpg';
        $alt = 'Caramel Frappuccino';
        $class = 'caramel';
        $content = 'Frappuccino is a line of blended iced coffee drinks sold by Starbucks. It consists of coffee or crème base, blended with ice and ingredients such as flavored syrups and usually topped with whipped cream and or spices.';
        break;
    case 'Tuesday': 
        $coffee = '<h2>Today is Pupmkin Spice Latte Day!</h2>'; 
        $pic = 'pumpkin.jpg';
        $alt = 'Pumpkin Spice Latte';
        $class = 'lightorange';
        $content = 'The <b>Pumpkin Spice Latte</b> is a coffee drink made with a mix of traditional autumn spice flavors, steamed milk, espresso, and often sugar, topped with whipped cream and pumpkin pie spice. The beverage is most commonly associated with Starbucks, which first offered the drink in 2003, and the season of fall.';

        break;
    case 'Wednesday': 
        $coffee = '<h2>Today is Espresso Day!</h2>'; 
        $pic = 'espresso.jpg';
        $alt = 'espresso';
        $class = 'coffee';
        $content = '<b>Espresso</b> is a coffee-brewing method of Italian origin, in which a small amount of nearly boiling water is forced under 9–10 bars of pressure through finely-ground coffee beans. Espresso coffee can be made with a wide variety of coffee beans and roast degrees';
        break;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Classwork Exercise</title>
    <style>
        #wrapper {
            width:940px;
            margin: 20px auto;
        }
        .brown {
         background:BurlyWood;   
        }
        .darkbrown {
         background:Chocolate;   
        }
        .lightyellow {
         background:Beige;   
        }
        .lightgreen {
         background:DarkSeaGreen;   
        }
        .caramel {
         background:Peru;   
        }
        .lightorange {
         background:DarkOrange;   
        }
        .coffee {
         background:SaddleBrown; 
        }
        p {
            width:60ch;
        }
    </style>
</head>
<body class="<?php echo $class?>">
    <div id="wrapper" >
    <h1>Switch Classwork Exercise</h1>
    <?php echo $coffee;?>
    <img src="../../images/<?php echo $pic;?>" alt="<?php echo $alt;?>">
    <p><?php echo $content; ?>
    </p>

    <h2>Check out our Daily Specials</h2>
    <ul>
        <li><a href="switch.php?today=Thursday">Thursday</a></li>
        <li><a href="switch.php?today=Friday">Friday</a></li>
        <li><a href="switch.php?today=Saturday">Saturday</a></li>
        <li><a href="switch.php?today=Sunday">Sunday</a></li>
        <li><a href="switch.php?today=Monday">Monday</a></li>
        <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
        <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
    </ul>
    </div><!-- End Wrapper -->
</body>
</html>