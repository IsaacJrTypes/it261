<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Form</title>
    <link href="css/form.css" type="text/css" rel="stylesheet">
</head>
<body>
    <form action="" method="post">

    <label>Name</label>
    <input type="text" name="name">

    <label>Phone</label>
    <input type="tel" name="tel">

    <label>How many Lattes?</label>
    <input type="number" name="lattes">

    <label>How many Cappuccino?</label>
    <input type="number" name="cappuccino">

    <label>How many Americanos?</label>
    <input type="number" name="americano">

    <label>Special Requests</label>
    <textarea name="msg"></textarea>

    <input type="submit" value="Place my order">

    </form>
    <p><a href="">Reset</a></p>

    <?php 
    date_default_timezone_set('America/Los_Angeles');

    $time = date('H:i');

    //set var for name: name,tel,cappucino,americano,msg
    if (isset($_POST['name'],
                $_POST['tel'],
                $_POST['lattes'],
                $_POST['cappuccino'],
                $_POST['americano'],
                $_POST['msg'])) { //start isset
        if (empty($_POST['name']&&
                    $_POST['tel']&&
                    $_POST['lattes']&&
                    $_POST['cappuccino']&&
                    $_POST['americano'])) {//start nest

            echo 'Please fill out Coffee fields with a name and number to text!';

        } else {
            //define post var
        
            $name = $_POST['name'];
            $tel = $_POST['tel'];
            $lattes = $_POST['lattes'];
            $cappuccino = $_POST['cappuccino'];
            $americano = $_POST['americano'];
            $msg = $_POST['msg'];
            $int_lat = intval($lattes);
            $int_cap = intval($cappuccino);
            $int_ameri = intval($americano);

            $total = $int_lat + $int_cap + $int_ameri;

            if ($time <= 11) {
                echo '<h2>Good Morning, '.$name.' </h2>';

            } elseif ($time <= 17) {
                echo '<h2>Good afternoon, '.$name.' </h2>';

            } else {
                echo '<h2>Good Evening, '.$name.' </h2>';
            }//end elseif time
            echo '<br>';

            echo '
            <p>
                Thank you for your order, we will be texting you at '.$tel.' shortly
            </p>
            <p>You have ordered the following: </p>
            <div class="box">
            <ul>
            <li><b>Lattes:</b> '.$lattes.'</li>
            <li><b>Cappuccino:</b> '.$cappuccino.'</li>
            <li><b>Americano:</b> '.$americano.'</li>
            <li><b>For a total of:</b> '.$total.' beverages</li>
            <li><b>Special Request:</b> '.$msg.'</li>
            </ul>
            </div>
            ';

        }//end else

    }//end isset

    ?>

</body>
</html>