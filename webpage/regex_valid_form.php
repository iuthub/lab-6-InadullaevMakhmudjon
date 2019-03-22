<?php
	$quickText = "";
	$emailText="";

	$isErrorQuick=false;
	$isErrorEmail=false;

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$quickText=$_POST["quick"];
	$emailText = $_POST["email"];

	$isErrorQuick = !preg_match('/(quick)/', $quickText);
	$isErrorEmail = !preg_match('/^([a-zA-Z0-9])+@[a-z]+\.[a-z]/', $emailText);

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

			<dd><input type="submit" value="Check"></dd>
		</dl>

	</form>
</body>
</html>
