<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/calculator.css" type="text/css" rel="stylesheet" />
    <title>Mileage Calculator</title>
</head>
<body class="<?php if(isset($_POST['weather'])) echo htmlspecialchars($_POST['weather']);?>">
    <h1>My Travel Calculator --Extra Credit</h1>
    <h2>Friendly Reminder</h2>

    <ul class="subheader">
        <li>Cannot speed over 79 miles per hour</li>
        <li>Based on weather condtions (Other than sunny), the speed is reduced</li>
    </ul>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <label>Name</label>
        <input type="text" name="name"  value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']);?>">

        <label>Total miles driving?</label>
        <input type="number" name="totalMiles" min="0"  value="<?php if(isset($_POST['totalMiles'])) echo htmlspecialchars($_POST['totalMiles']);?>">

        <label>How fast do you typically drive?</label>
        <input type="number" name="speed" min="0" value="<?php if(isset($_POST['speed'])) echo htmlspecialchars($_POST['speed']);?>">

        <label>Weather Forcast</label>
        <ul>
            <li><input type="radio" name="weather" value="Sunny" <?php if(isset($_POST['weather']) && $_POST['weather'] == 'Sunny') echo 'checked= "checked"'; ?> >Sunny</li>
            <li><input type="radio" name="weather" value="Raining" <?php if(isset($_POST['weather']) && $_POST['weather'] == 'Raining') echo 'checked= "checked"'; ?> >Raining</li>
            <li><input type="radio" name="weather" value="Snowing" <?php if(isset($_POST['weather']) && $_POST['weather'] == 'Snowing') echo 'checked= "checked"'; ?> >Snowing</li>
            <li><input type="radio" name="weather" value="Icy" <?php if(isset($_POST['weather']) && $_POST['weather'] == 'Icy') echo 'checked= "checked"'; ?> >Icy</li>
            <li><input type="radio" name="weather" value="White-Out" <?php if(isset($_POST['weather']) && $_POST['weather'] == 'White-Out') echo 'checked= "checked"'; ?> >White Out</li>
        </ul>

        <label>How many hours per day do you plan on driving?</label>
        <input type="number" name="hours" min="0" value="<?php if(isset($_POST['hours'])) echo htmlspecialchars($_POST['hours']);?>">

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

        <p><a href="">Reset</a></p>
    </form>

    <?php
    function dollarFormat($value) {
        return '$' . number_format($value, 2);
    }
    
    function dformat($number) {
        return number_format($number,2);
    }
    
    function span($string) {
        return '<span class="error">'.$string.'</span>';
    }
    
    function msg($name,$totalDriveHrs,$days,$gallons,$cost) {
        echo'
        <div class="box">
        <p>Hello '.$name.',</p>
        <p>You will be travelling a total of <b>'.dformat($totalDriveHrs).' hours</b> and  
        taking <b>'.dformat($days).' days</b>. Given the distance, you will be using <b>'.dformat($gallons).' gallons</b> of gas, costing you <b>'.dollarFormat($cost).'</b>.</p>
        </div>
        ';
    }

    function weatherAlert($weather,$speed,$addMsg) {
        echo'
        <div class="box">
        <h2>Severe Weather Alert</h2>
        <p>Due to <strong>'.$weather.' conditions</strong>, we recommend that you reduce your speed to <b>'.$speed.' miles per hour</b> which will affect your total hours as well</p>
        '.$addMsg.'
        </div>
        ';
    }


    //Check post method, trigger empty field msg
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(empty($_POST['name'])) {
            echo span('Please fill out your name!');
        } 

        if(empty($_POST['totalMiles'])) {
            echo span('Please fill out total miles driving');
        } 

        if(empty($_POST['speed'])) {
            echo span('Please fill out how fast you typically drive');
        } 

        if(empty($_POST['hours'])) {
            echo span('Please fill out how many hours per day you plan on driving');
        } 

        if(empty($_POST['gasPrice'])) {
            echo span('Please choose approximate gas price');
        } 
        
        if(empty($_POST['mpg'])) {
            echo span('Please select your approximate fuel Efficiency');
        } 

        //if all field set, save to vars
        if(isset($_POST['name'],$_POST['totalMiles'],$_POST['speed'],$_POST['hours'],$_POST['gasPrice'],$_POST['mpg'])) {
            $name = $_POST['name'];
            $totalMiles = $_POST['totalMiles'];
            $speed = $_POST['speed'];
            $hrsPerDay = $_POST['hours'];
            $gasPrice = $_POST['gasPrice'];
            $mpg = $_POST['mpg'];

            //if !empty, print info
            if(!empty($name&&$totalMiles&&$speed&&$hrsPerDay&&$gasPrice&&$mpg)) {

                //if speed <80  conditions 
                if ($speed <= 79){
                    //if weather set, set $weather and pass
                    if (isset($_POST['weather'])) {
                    $weather = $_POST['weather'];


                    if ($speed>=65 && $weather=='Raining') {
                        $speed = 65;
                        $addMsg ='';
                        echo weatherAlert($weather,$speed,$addMsg);
                    }//end rain
                    
                    if ($speed>=60 && $weather=='Snowing') {
                        $speed = 60;
                        $addMsg = '<p>Snow tires or chains are <b>Recommended</b>!!</p>';
                        echo weatherAlert($weather,$speed,$addMsg);
                    }//end snow

                    if ($speed>=50 && $weather=='Icy') {
                        $speed = 50;
                        $addMsg = '<p>Snow tires or chains are <b>Highly Recommended</b>!!</p>';
                        echo weatherAlert($weather,$speed,$addMsg);
                    }//end icy
                    
                    if ($speed>=10 && $weather=='White-Out') {
                        $speed = 10;
                        $addMsg ='<p>Snow tires or chains are <b>Essential</b>!!</p>';
                        echo weatherAlert($weather,$speed,$addMsg);
                    }//end white-out

                    }//end weather conditons

                 //calculate TotalDriveHrs from total miles/speed
                 $totalDriveHrs = intval($totalMiles)/intval($speed);

                 //calculate days from Total drive hours
                 $days = $totalDriveHrs/intval($hrsPerDay);
 
                 //calculate gallons for trip
                 $gallons = intval($totalMiles)/intval($mpg);
 
                 //calculate cost
                 $cost = $gallons * intval($gasPrice);

                 echo msg($name,$totalDriveHrs,$days,$gallons,$cost);

                } else {
                   echo span('Speed is too fast!!');
                   echo span('High probablity of getting a speeding ticket!!');
                }// end speed

            }//end !empty


        }//end isset



    }//end request set
    
    
    
    ?>

</body>
</html>