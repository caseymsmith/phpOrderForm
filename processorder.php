<html>
<head>
<title> Bob's Auto Parts - Order Results </title>
</head> 

<body>
<h1>Bob's Auto Parts</h1>
<h2><i>Order Results</i>

<?php

$tireqty=$_POST['tireqty'];
$oilqty=$_POST['oilqty'];
$sparkqty=$_POST['sparkqty'];
echo '<p>Your order is as follows:</p>';
echo $tireqty.' tires<br/>';
echo $oilqty.' bottles of oil<br/>';
echo $sparkqty.' spark plugs<br/>';
$totalqty=0; 
$totalqty=$tireqty+$oilqty+$sparkqty; 

echo 'Items ordered: '.$totalqty.'<br/><br/>';
if($totalqty==0)
 {
	echo 'You did not order anything on the previous page! <br/>';
 }
 else
{
	if($tireqty>0)
	echo $tireqty.' tires<br/>';
	if ($oilqty>0)
	echo $oilqty.' bottles of oil<br/>';
	if($sparkqty>0)
	echo $sparkqty.' spark plugs<br/>';
}

$totalamount=0.00;
define('TIREPRICE', 100);
define('OILPRICE', 10);
define('SPARKPRICE', 4);

$totalamount=(TIREPRICE*$tireqty)+(OILPRICE*$oilqty)+(SPARKPRICE*$sparkqty);
echo 'Subtotal: $'.$totalamount;

?>

</h2>
</body>
</html>
