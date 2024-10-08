<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>HFC Tuition Calculator</title>
</head>

<body>
    <?php
    $residency = mb_substr($_POST['residency'],0,1);
    $lower = mb_substr($_POST['lower'],0,2);
    $upper = mb_substr($_POST['upper'],0,2);
    $faid = mb_substr($_POST['faid'],0,1);

    if ($lower == "")
        $lower = 0;
    if ($upper == "")
        $upper = 0;
    if ($lower == 0 and $upper == 0)
        exit("Invalid input. You must enter at least 1 credit hour. <a
        href=\"javascript:history.go(-1)\">Go back</a>");

    if ($residency == 1)
    {
        $residency = "in-district";
        $tuition = ($lower * 111) + ($upper * 200) + (($lower + $upper) * 18) + 50 + 60;
    }
    elseif ($residency == 2)
    {
        $residency = "out-of-district";
        $tuition = ($lower * 194) + ($upper * 265) + (($lower + $upper) * 18) + 50 + 60;
    }
    elseif ($residency == 3)
    {
        $residency = "out-of-state";
        $tuition = ($lower * 281) + ($upper * 350) + (($lower + $upper) * 18) + 50 + 60;
    }

    echo "<p>Total $residency tuition cost for $lower 100-200 credit hours and $upper 300-400
    credit hours is $" . number_format($tuition, 2) . "</p>";

    if ($faid == 2)
    {
        echo "<p>Financial Aid Information</p>
            <p>
                <ul>
                    <li><a href='https://www.hfcc.edu/financial-aid'>Financial Aid</a></li>
                    <li><a href='https://www.hfcc.edu/tuition-and-payment'>Tuition and Payment</a></li>
                    <li><a href='https://www.hfcc.edu/steps/payment'>Payment</a></li>
                </ul>
            </p>
        </p>";
    }
    ?>
</body>
</html>