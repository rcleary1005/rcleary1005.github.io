<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>HFC Tuition Calculator</title>
</head>

<body>
    <h1>Tuition Calculator</h1>
    

    <form action="tuition2.php" method = post>

    <p>Residency</p>
    <select name="residency">
        <option value="1">In District Student</option>
        <option value="2">Out of District Student</option>
        <option value="3">Out of State / International Student</option>
    </select>
   
    <p>Level 100 & 200 credit hours<br>
    <input type="number" name="lower" min="0" max="25" value="0"></p>

    <p>Level 300 & 400 credit hours<br>
    <input type="number" name="upper" min="0" max="25" value="0"></p>

    <p>Would you like information on financial aid?</p>
    <select name="faid">
        <option value="1">No</option>
        <option value="2">Yes</option>
    </select>

    <p><input type = "submit" value="Calculate"></p>

    </form>
</body>
</html>