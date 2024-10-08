<!DOCTYPE html>
<html>
 <head>
	<meta charset="UTF-8">
	<meta name="keywords" content="CIS Restaurant, Lunch Menu">
		<meta name="description" content="CIS Restaurant: Lunch Menu">
	<title>CIS Restaurant Menu</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<div id="container">

<div class="image-wrapper">
	<p><img class="noshow, scale-image" src="header.jpg" alt="Photo of inside of CIS 122 restaurant"></p>
</div>

<?php

    $firstname =mb_substr($_POST['firstname'],0,30);
    $lastname =mb_substr($_POST['lastname'],0,30);
    $phone1 =mb_substr($_POST['phone1'],0,3);
    $phone2 =mb_substr($_POST['phone2'],0,3);
    $phone3 =mb_substr($_POST['phone3'],0,4);
    $email =mb_substr($_POST['email'],0,35);
    $CardType =mb_substr($_POST['CardType'],0,10);
    $CardNumber =mb_substr($_POST['CardNumber'],0,24);
    $zipcode =mb_substr($_POST['zipcode'],0,5);
    $subtotal =mb_substr($_POST['subtotal'],0,7);
    $total =mb_substr($_POST['total'],0,7);
    $taxes =mb_substr($_POST['taxes'],0,7);
    $discount =mb_substr($_POST['discount'],0,7);
    $couponcode =mb_substr($_POST['couponcode'],0,5);

    $date = date('Y-m-d H:i:s');

    include('../../../connect.php');

    try {
        $DBH = new PDO("mysql:host=$host;dbname=$database", $username, $password);
       }
       catch(PDOException $e) {
        echo $e->getMessage();
       }

    $sql =$DBH->prepare("INSERT INTO payment VALUES (NULL, :firstname, :lastname,
    :phone1, :phone2, :phone3, :email, :CardType, :CardNumber, :zipcode, :subtotal, :taxes,
    :discount, :total, :couponcode, :date)");

    $sql->execute( array(':firstname'=>$firstname, ':lastname'=>$lastname,
    ':phone1'=>$phone1, ':phone2'=>$phone2, ':phone3'=>$phone3, ':email'=>$email,
    ':CardType'=>$CardType, ':CardNumber'=>$CardNumber, ':zipcode'=>$zipcode,
    ':subtotal'=>$subtotal, ':taxes'=>$taxes, ':discount'=>$discount, ':total'=>$total,
    ':couponcode'=>$couponcode, ':date'=>$date ) )or die(print_r($sql->errorInfo(),
    true));
    
    $query =$DBH->prepare("SELECT * FROM payment WHERE firstname = :firstname AND
    lastname = :lastname AND orderdate = :date");
    $values = [':firstname' => $firstname, ':lastname' => $lastname, ':date' => $date];
    $query->execute($values);
    $payments = $query->fetchAll(PDO::FETCH_CLASS, 'StdClass');

    foreach ($payments as $payment) {
     $payment_id = $payment->payment_id;
    }

    if (!empty($_POST['wings'])) {
        $wings=$_POST['wings'];
        $sql =$DBH->prepare("INSERT INTO orders VALUES (NULL, :payment_id, 'Boneless
        Wings and Skins Sampler', :wings)");
        $sql->execute( array(':payment_id'=>$payment_id, ':wings'=>$wings) )or
        die(print_r($sql->errorInfo(), true));
        }
    
    echo "<p>Order successfully placed.</p>";
    
    $DBH = null;

?>

</div>

</body>
</html>