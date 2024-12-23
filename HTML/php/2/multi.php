<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>2-Digit Calculator</title>
</head>

<body>
<?php
$inp = $_POST["num"];
$j = $_POST["2num"];

echo "$inp" . " x " . "$j" . " = " . $inp * $j;
	

?>

</body>
</html>