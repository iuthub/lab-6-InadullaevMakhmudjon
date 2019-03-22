<?php
	$quickText = "";
	$emailText="";
	$phoneText="";
	$string="";
	$stringline="";

	$isErrorQuick=false;
	$isErrorEmail=false;
	$isErrorPhone=false;

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$quickText=$_POST["quick"];
	$emailText = $_POST["email"];
	$phoneText = $_POST["phone"];
	$string = $_POST["string"];
	$stringline=$_POST["stringline"];

	$isErrorQuick = !preg_match('/(quick)/', $quickText);
	$isErrorEmail = !preg_match('/^([a-zA-Z0-9])+@[a-z]+\.[a-z]/', $emailText);
	$isErrorPhone = !preg_match('/^(\+998)+\-[0-9]{2}+\-[0-9]{3}+\-[0-9]{4}/', $phoneText);

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Valid Form</title>
	    <style media="screen">
      .error {
        color: red;
      }
      .output{
      	color:blue;
      }
    </style>
</head>

<body>
	<form action="regex_valid_form.php" method="post">
		<dl>
			<dt>Text which contains word ’quick’. </dt>
			<span class="error"><?= $isErrorQuick? "Please include word 'quick' ":"" ?></span>
			<dd><input type="text" name="quick" value="<?= $quickText ?>"></dd>

			<dt>Email. </dt>
			<span class="error"><?= $isErrorEmail? "Please enter Email address correctly":"" ?></span>
			<dd><input type="text" name="email" value="<?= $emailText ?>"></dd>

		    <dt>Phone.</dt>
			<span class="error"><?= $isErrorPhone? "Please enter phone format correctly. (+998-##-###-####)":"" ?></span>
			<dd><input type="text" name="phone" value="<?= $phoneText ?>"></dd>

		    <dt>Enter a string.</dt>
			<dd><input type="text" name="string" value="<?= $string ?>"></dd>
			<span class="output"><?= (strlen($string) > 0)? str_replace(' ', '', $string):"" ?></span>

			<dt>Enter text.(for new line \n)</dt>
			<dd><input type="text" name="stringline" value="<?= $stringline ?>"></dd>
			<span class="output"><?= (strlen($stringline) > 0)? str_replace('\n', '', $stringline):"" ?></span>

			<dd><input type="submit" value="Check"></dd>
		</dl>

	</form>
</body>

</html>
