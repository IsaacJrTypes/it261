<?php
// Exchanges App
//canada 0.80
//rubles 0.013
//pounds 1.37
//euros 1.14
//yen 0.0087
//We have 2000 canadian, rubles, etc

function dollarFormat($value)
{
    return '$' . number_format($value, 2);
}

$canadian = 2000;
$canadian *= 0.8;

$rubles = 4000;
$rubles *= 0.013;

$pounds = 5500;
$pounds *= 1.37;

$euros = 1400;
$euros *= 1.14;

$yen = 12000;
$yen *= 0.0087;

$total = $canadian + $rubles + $pounds + $euros + $yen;
?>
<style>
    table {
        width:500px;
        margin:0 auto;
        border: 1px solid black;
        border-collapse:collapse;
    }
    th {
        /* border:1px solid black; */
    }
    td:first-child {
        border:1px solid black;
        padding-left:20px;
    }
    td:last-child {
        text-align:center;
        border:1px solid black;
    }

</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency</title>
</head>
<body>
<table>
    <tr>
        <th>Currency</th>
        <th>US Dollars</th>
    </tr>
    <tr>
        <td>Canadian</td>
        <td><?php echo dollarFormat($canadian); ?></td>
    </tr>
    <tr>
        <td>Rubles</td>
        <td><?php echo dollarFormat($rubles); ?></td>
    </tr>
    <tr>
        <td>Pounds</td>
        <td><?php echo dollarFormat($pounds); ?></td>
    </tr>
    <tr>
        <td>Euros</td>
        <td><?php echo dollarFormat($euros); ?></td>
    </tr>
    <tr>
        <td>Yen</td>
        <td><?php echo dollarFormat($yen); ?></td>
    </tr>
    <tr>
        <td><b>Total</b></td>
        <td><?php echo '<b>' . dollarFormat($total) . ' US Dollars</b>'; ?></td>
    </tr>
</table>
    
</body>
</html>