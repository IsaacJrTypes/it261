<?php
function dollarFormat($value) {
    return '$' . number_format($value, 2);
}

function span($string) {
    return '<span class="error">'.$string.'</span>';
}

function para($string) {
    return '<p>'.$string.'</p>';
}

function br() {
    return '<br>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/calculator.css" type="text/css" rel="stylesheet" />
    <title>Mileage Calculator</title>
</head>
<body>
    <h1>My Travel Calculator</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <label>Name</label>
        <input type="text" name="name"  value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']);?>">

        <label>Total miles driving?</label>
        <input type="number" name="totalMiles"  value="<?php if(isset($_POST['totalMiles'])) echo htmlspecialchars($_POST['totalMiles']);?>">

        <label>How fast do you typically drive?</label>
        <input type="number" name="speed" value="<?php if(isset($_POST['speed'])) echo htmlspecialchars($_POST['speed']);?>">

        <label>How many hours per day do you plan on driving?</label>
        <input type="number" name="hours" value="<?php if(isset($_POST['hours'])) echo htmlspecialchars($_POST['hours']);?>">

        <label>Price of Gas</label>
        <ul>
            <li><input type="radio" name="gasPrice" value="3.00" <?php if(isset($_POST['gasPrice']) && $_POST['gasPrice'] == 3.00) echo 'checked= "checked"'; ?> >$3.00</li>
            <li><input type="radio" name="gasPrice" value="3.50" <?php if(isset($_POST['gasPrice']) && $_POST['gasPrice'] == 3.50) echo 'checked= "checked"'; ?> >$3.50</li>
            <li><input type="radio" name="gasPrice" value="4.00" <?php if(isset($_POST['gasPrice']) && $_POST['gasPrice'] == 4.00) echo 'checked= "checked"'; ?> >$4.00</li>
        </ul>

        <label>Fuel Efficiency</label>
        <select name="mpg">
        <option value="" NULL <?php if(isset($_POST['mpg'])&& $_POST['mpg']== NULL) echo 'selected = "unselected"' ;?> >Select One</option>

        <option value="10.00" <?php if(isset($_POST['mpg'])&& $_POST['mpg'] == 10.00) echo 'selected = "selected"' ;?> >Old Truck @ 10mpg</option>
        
        <option value="22.00" <?php if(isset($_POST['mpg'])&& $_POST['mpg'] == 22.00) echo 'selected = "selected"' ;?> >Average Car @ 22mpg</option>

        <option value="52.00" <?php if(isset($_POST['mpg'])&& $_POST['mpg'] == 52.00) echo 'selected = "selected"' ;?> >Hybrid Car @ 52mpg</option>

        </select>

        <input type="submit" value="Calculate">

        <button><a href="">Reset</a></button>
    </form>

    <?php
    //Check post method, trigger empty field msg
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(empty($_POST['name'])) {
            echo span('Please fill out your name!');
        } else {
            echo 'name empty false';
            echo br();
        }

        if(empty($_POST['totalMiles'])) {
            echo span('Please fill out total miles driving');
        } else {
            echo 'totalMiles empty false';
            echo br();
        }

        if(empty($_POST['speed'])) {
            echo span('Please fill out how fast you typically drive');
        } else {
            echo 'speed empty false';
            echo br();
        }

        if(empty($_POST['hours'])) {
            echo span('Please fill out how many hours per day you plan on driving');
        } else {
            echo 'totalMiles empty false';
            echo br();
        }

        if(empty($_POST['gasPrice'])) {
            echo span('Please choose approximate gas price');
        } else {
            echo 'gasPrice empty false';
            echo br();
        }
        
        if(empty($_POST['mpg'])) {
            echo span('Please select your approximate fuel Efficiency');
        } else {
            echo 'mpg empty false';
            echo br();
        }

        //if all field set, save to vars
        if(isset($_POST['name'],$_POST['totalMiles'],$_POST['speed'],$_POST['hours'],$_POST['gasPrice'],$_POST['mpg'])) {
            $name = $_POST['name'];
            $totalMiles = $_POST['totalMiles'];
            $speed = $_POST['speed'];
            $hrsPerDay = $_POST['hours'];
            $gasPrice = $_POST['gasPrice'];
            $mpg = $_POST['mpg'];

            //calculate TotalDriveHrs from total miles/speed
            $totalDriveHrs = intval($totalMiles)/intval($speed);

            //calculate days from Total drive hours
            $days = $totalDriveHrs/intval($hrsPerDay);

            //calculate gallons for trip
            $gallons = intval($totalMiles)/intval($mpg);

            //calculate cost
            $cost = $gallons * intval($gasPrice);


            echo "name:{$name} <br>";
            echo "Total miles:{$totalMiles} <br>";
            echo "speed:{$speed} <br>";
            echo "Total hrsPerDay:{$hrsPerDay} <br>";
            echo "Total Gas price:{$gasPrice} <br>";
            echo "Miles per Gallon:{$mpg} <br>";
            echo "Total drive hours:{$totalDriveHrs} <br>";
            echo "Total days:{$days} <br>";
            echo "Total gallons:{$gallons} <br>";
            echo "Total cost:{$cost} <br>";
            




            //if vars !empty




        }//end isset



    }//end request set
    
    
    
    ?>

</body>
</html>