<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>HFC Grade Calculator</title>
</head>

<body>

    <h1>Grade Calculator</h1>

<?php
    $hw1 = mb_substr($_POST['hw1'], 0, 2);
    $hw2 = mb_substr($_POST['hw2'], 0, 2);
    $hw3 = mb_substr($_POST['hw3'], 0, 2);
    $q1 = mb_substr($_POST['q1'], 0, 2);
    $q2 = mb_substr($_POST['q2'], 0, 2);
    $q3 = mb_substr($_POST['q3'], 0, 2);
    $q4 = mb_substr($_POST['q4'], 0, 2);
    $q5 = mb_substr($_POST['q5'], 0, 2);
    $ex1 = mb_substr($_POST['ex1'], 0, 2);

    if ($hw1 == "" or $hw2 == "" or $hw3 == "" or $q1 == "" or $q2 == "" or $q3 == "" or $q4 == "" or $q5 == "" or $ex1 == "")
        exit("Invalid Input. <a href=\"javascript:history:go(-1)\">Go Back</a></body></html>");

    $grade = (($hw1+$hw2+$hw3+$q1+$q2+$q3+$q4+$q5+$ex1)/425) * 100;

    $echo "<p>Current course grade is " . round($grade, 0);
?>
</body>
</html>