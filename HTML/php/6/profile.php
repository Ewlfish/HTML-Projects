<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
<style type="text/css">
body {background-color:#CF9}

</style>
</head>

<body>
<?php
if ($_POST[password] == $_POST[confirm_password])
{echo "<dl>";
echo "<dt>First Name: </dt><dd>" . $_POST["fname"] . "</dd>";
echo "<dt>Last Name: </dt><dd>" . $_POST["lname"] . "</dd>";
echo "<dt>Email: </dt><dd>" . $_POST["email"] . "</dd>";
echo "<dt>Gender: </dt><dd>" . $_POST["gender"] . "</dd>";
echo "<dt>Username: </dt><dd>" . $_POST["username"] . "</dd>";
echo "<dt>Password: </dt><dd>" . $_POST["password"] . "</dd>";
echo "<dt>Address: </dt><dd>" . $_POST["address"] . "</dd>";
echo "<dt>State: </dt><dd>" . $_POST["state"] . "</dd>";
echo "<dt>Zipcode: </dt><dd>" . $_POST["zipcode"] . "</dd>";
echo "<dt>Birth Month: </dt><dd>" . $_POST["birth_month"] . "</dd>";
echo "<dt>Birth Day: </dt><dd>" . $_POST["Birth_day"] . "</dd>";
echo "<dt>Birth Year: </dt><dd>" . $_POST["Birth_year"] . "</dd>";
echo "</dl>";}
else
{echo "Error <br>";
echo "Your password does not match :( <br>";
echo "<a href= http://ewlfish.com/ethan/php/6/sign_up.html target=_blank>Click Here to Go Back</a>";
}

?>
</body>
</html>