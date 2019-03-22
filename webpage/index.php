<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<?php
	$name = "  ";
	$email = "asd@das.rr";
	$username ="      ";
	$password="        "; 
	$confirm=$password;
	$date_of_Birt="21.03.2019";
	$address="     ";
	$city=" ";
	$Postal_Code="221234";
	$Home_Phone = "222222222";
	$Mobile_Phone="222222222";
	$Credit_Card_Numbe="1234123412341234";
	$Credit_Card_Expiry_Date="23.03.2019";
	$Monthly_Salar="UZS 200000.00";
	$Web_Site_UR="http://github.com";
	$Overall_GPA="4.5";


	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$name = $_POST["name"];
		$email = $_POST["email"];
		$username = $_POST["username"];
		$confirm = $_POST["confirm"];
		$date_of_Birt = $_POST["date_of_Birt"];
		$address = $_POST["address"];
		$city = $_POST["city"];
		$Postal_Code=$_POST["Postal_Code"];
		$Home_Phone = $_POST["Home_Phone"];
		$Mobile_Phone = $_POST["Mobile_Phone"];
		$Credit_Card_Numbe = $_POST["Credit_Card_Numbe"];
		$Credit_Card_Expiry_Date = $_POST["Credit_Card_Expiry_Date"];
		$Monthly_Salar = $_POST["Monthly_Salar"];
		$Web_Site_UR = $_POST["Web_Site_UR"];
		$Overall_GPA = $_POST["Overall_GPA"];

	}
?>

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Validating Forms</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<h1>Registration Form</h1>

		<p>
			This form validates user input and then displays "Thank You" page.
		</p>
		
		<hr />
		
		<h2>Please, fill below fields correctly</h2>
		<form method="post">
		<dl>
			<dt>Name</dt>
			<dd>
				<span class="error"><?= strlen($name)>1 ? "":"Error" ?></span>
				<input type="text" placeholder="Name" name="name">
			</dd>
			
			<!-- Write other fiels similar to Name as specified in lab6.pdf -->

			<dt>Email</dt>
			<dd>
				<span class="error"><?= (preg_match('/^([a-zA-Z0-9])+@[a-z]+\.[a-z]/', $email)) ? "":"Error" ?></span>
				<input type="text" placeholder="Email" name="email">
			</dd>

			<dt>Username</dt>
			<dd>
				<span class="error"><?= strlen($username)>4 ? "":"Error" ?></span>
				<input type="text" placeholder="Username" name="username">
			</dd>

			<dt>Password</dt>
			<dd>
				<span class="error"><?= strlen($password)>7 ? "":"Error" ?></span>
				<input type="Password" placeholder="Password" name="password">
			</dd>

			<dt>Conﬁrm Password</dt>
			<dd>
				<span class="error"><?= ($confirm == $password) ? "":"Error" ?></span>
				<input type="Password" placeholder="Conﬁrm Password" name="confirm">
			</dd>

			<dt>Date of Birt</dt>
			<dd>
				<span class="error"><?= (preg_match('/^[0-9]{2}+\.+[0-9]{2}+\.+[0-9]{4}$/', $date_of_Birt))? "":"Error" ?></span>
				<input type="text" placeholder="Date of Birt" name="date_of_Birt">
			</dd>
			
			<dt>Gender</dt>
			<dd>
				<select name="Gender">
					<option>Male</option>
					<option>Female</option>
				</select>
			</dd>

			<dt>Marital Status </dt>
			<dd>
				<select name="Marital_Status">
					<option>Single</option>
					<option>Married</option>
					<option>Divorced</option>
					<option>Widowed</option>
				</select>
			</dd>

			<dt>Address</dt>
			<dd>
				<span class="error"><?= strlen($address)>0? "":"Error" ?></span>
				<input type="text" name="address">
			</dd>
			

			<dt>City</dt>
			<dd>
				<span class="error"><?= strlen($city)>0? "":"Error" ?></span>
				<input type="text" name="city">
			</dd>
			

			<dt>Postal Code</dt>
			<dd>
				<span class="error"><?= (preg_match('/[0-9]{6}/', $Postal_Code))? "":"Error" ?></span>
				<input type="text" name="Postal_Code">
			</dd>

			<dt>Home Phone</dt>
			<dd>
				<span class="error"><?= (preg_match('/[0-9]{9}/', $Home_Phone))? "":"Error" ?></span>
				<input type="text" name="Home_Phone">
			</dd>

			<dt>Mobile Phone</dt>
			<dd>
				<span class="error"><?= (preg_match('/[0-9]{9}/', $Mobile_Phone))? "":"Error" ?></span>
				<input type="text" name="Mobile_Phone">
			</dd>

			<dt>Credit Card Numbe</dt>
			<dd>
				<span class="error"><?= (preg_match('/^[0-9]{16}$/', $Credit_Card_Numbe))? "":"Error" ?></span>
				<input type="text" name="Credit_Card_Numbe">
			</dd>

			<dt>Credit Card Expiry Date</dt>
			<dd>
				<span class="error"><?= (preg_match('/^[0-9]{2}+\.+[0-9]{2}+\.+[0-9]{4}$/', $Credit_Card_Expiry_Date))? "":"Error" ?></span>
				<input type="text" name="Credit_Card_Expiry_Date">
			</dd>

			<dt>Monthly Salar</dt>
			<dd>
				<span class="error"><?= (preg_match('/^(UZS )+[0-9]{3,9}+\.+[0-9]{2}$/', $Monthly_Salar))? "":"Format  UZS 200,000.00" ?></span>
				<input type="text" name="Monthly_Salar">
			</dd>

			<dt>Web Site UR</dt>
			<dd>
				<span class="error"><?= (preg_match('/^(http:)\/\/+[a-zA-Z0-9].[a-z]/', $Web_Site_UR))? "":"Error" ?></span>
				<input type="text" name="Web_Site_UR">
			</dd>

			<dt>Overall GPA</dt>
			<dd>
				<span class="error"><?= ($Overall_GPA>0 && $Overall_GPA<=4.5)? "":"Error" ?></span>
				<input type="text" name="Overall_GPA">
			</dd>

			<dt><input type="submit" value="Register"></dt>
		</dl>
		</form>

	</body>
</html>