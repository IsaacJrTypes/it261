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

$canadian_rate = 0.8;
$canadian_usd = 2000 * $canadian_rate;

$rubles_rate = 0.013;
$rubles_usd = 2000 * $rubles_rate;

$pounds_rate = 1.37;
$pounds_usd = 2000 * $pounds_rate;

$euros_rate = 1.37;
$euros_usd = 2000 * $euros_rate;

$yen_rate = 0.8;
$yen_usd = 2000 * $yen_rate;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Logic</title>
    <style>
    table {
        width: 500px;
        margin: 0 auto;
        border-collapse:collapse;
        border: 1px solid black;

    }
    td {
        text-align:center;
    }
    </style>
</head>
<body>
<table>
    <tr>
        <th>Currency</th>
        <th>US Dollars</th>
    </tr>
    <tr>
        <td>Canadian</td>
        <td><?php echo dollarFormat($canadian_usd); ?></td>
    </tr>
    <tr>
        <td>Rubles</td>
        <td><?php echo dollarFormat($rubles_usd); ?></td>
    </tr>
    <tr>
        <td>Pounds</td>
        <td><?php echo dollarFormat($pounds_usd); ?></td>
    </tr>
    <tr>
        <td>Euros</td>
        <td><?php echo dollarFormat($euros_usd); ?></td>
    </tr>
    <tr>
        <td>Yen</td>
        <td><?php echo dollarFormat($yen_usd); ?></td>
    </tr>
</table>
</body>
</html>
