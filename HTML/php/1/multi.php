<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Testing</title>
</head>

<body>

<?php
$inp = $_POST["num"];


function mul_table($inp)
{
	$a_idx = $inp - 1;
	$mascot = array("Pig","Rabbit","Rabbit with Hopping Shoes","Rabbit with Roller Skates","Rabbit on Scooter","Rabbit on Bicycle","Rabbit on Motorcycle","Rabbit in Sports Car","Rabbit with Jetpack","Rabbit in Jet");
	
	echo "$mascot[$a_idx], Hop: $inp <br>";
	
	for ($j = 1; $j < 11; $j++)
	{
		echo "$inp" . " x " . "$j" . " = " . $inp * $j . "<br>";
	}
}
mul_table($inp);
?>


</body>
</html>