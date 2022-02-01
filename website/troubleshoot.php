<html>
<head>
<title>My Adder Assignment</title>
<link href="css/troubleshoot.css" type="text/css" rel="stylesheet" />
</head>
<body>
<h1>Adder.php</h1> 
<form action="" method="post">
<label>Enter the first number:</label>
<input type="number" name="num1"><br>
<label>Enter the second number:</label>
<input type="number" name="num2"><br>

<input type="submit" value="Add Em!!"> 
</form>
<?php
//adder-wrong.php

if (isset($_POST['num1'],$_POST['num2'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $myTotal = intval($num1) + intval($num2);
    
    //If empty, echo msg
    if (empty($_POST['num1']&&$_POST['num2'])) {
        echo 'Not so fast! Please fill out both number fields';
    } else {
        echo '<h2>You added '. $num1 .' and '.$num2.'<h2>';
        echo '<p class="red"> and the answer is: <br>'. $myTotal .'!</p>';
        echo'<p><a href="">Reset page</a>';
    }//end nest

} else {
    echo 'Please fill out number fields';
}//end isset
?>
<!-- Here Are the Errors:
    - php code should be below closing form tag and above closing body tag
    -styles should be in head or link to seperate css file
    - no need for - in -= otherwise mytotal willhold a negative value
    -missing  $_POST['num2'] in parameter in isset()
    -Improper concatination in line 7
    -Improper opening form tag
    -missing method attribute in form
    -missing opening label tag line 21
    -Improper opening label tag line 22
    -type attribute in input should be number
    -Num1 should be num1 in input name attribute and var name in line 6
    -missing double quotation mark after !! line 23
    -php closing tag out of place, has extra meaningless characters



-->

</body>
</html>
