<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Coin Flipper</title>
</head>

<body>

<?php
$heads = 0;
$tails = 0;

for ($x=0; $x<20; $x++)
{
    $flip = rand(0,1);

    if ($flip == 0)
    {
        echo "<p>Flip $x: Heads <img src=\"images/heads.png\" alt=\"heads\"></p>";
        $heads++;
    }
    else
    {
        echo "<p>Flip $x: Tails <img src=\"images/tails.png\" alt=\"tails\"></p>";
        $tails++;
    }
}

echo "<p>Number of coins flipped heads $heads ("    .   ($heads / 20) * 100 .   "%)</p>";
echo "<p>Number of coins flipped tails $tails ("    .   ($tails / 20) * 100 .   "%)</p>";



?>

</body>
</html> 