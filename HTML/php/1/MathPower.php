<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>MathPower</title>
</head>

<body>
<?php
$i = 9;
$j = 4;

function mathpower($i, $j)
{
	$Result = 1;
	$tot = $j + 1;
	
	for($idx = 1; $idx < $tot; $idx++)
	{
		$Result = $Result * $i;
	}
	
	return $Result;
}

$Ans = mathpower($i, $j);

echo "$i <sup> $j </sup> = $Ans"





?>
</body>
</html>