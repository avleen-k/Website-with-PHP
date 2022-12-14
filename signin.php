<html>
<head>
<title>Registrieren</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<header>
		<a href="main.html" id="logo"> <img src="logo.png" width="172px" height="72px"> </a>
		<ul class="nav-area">
			<li><a href="main.html"> HOME </a></li>
			<li><a href="signin.php"> Registrieren </a></li>
			<li><a href="contact.php"> Kontakt aufnehmen </a></li>
		</ul>
	</header>

	<div class="signup-box">
		<h1> Registrieren </h1>
		<form action="config.php" method="POST">
		<label> Name </label>
		<input type="text" name="username" placeholder="">
		
		<label> Vorname </label>
		<input type="text" name="uservname" placeholder="">
		
		<label> Email </label>
		<input type="email" name="email" placeholder="">
		
		<label> Password </label>
		<input type="password" name="password" placeholder="">
		
		<label> Confirm Password </label>
		<input type="password" name="cpassword" placeholder="">
		
		<label> Website Adresse </label>
		<input type="text" name="weburl" placeholder="">
		
		<label> Website Username </label>
		<input type="text" name="webusername" placeholder="">
		
		<label> Website Password </label>
		<input type="password" name="webpassword" placeholder="">
		
		<input type ="submit" name="submit_2" value="Submit">
		</form>
	</div>
<div class="footer">
	<h4> &#169; 2021 Dashlane Inc. Alle Rechte vorbehalten.</h4>
	<p>Dashlane und das Dashlane-Logo sind Markenzeichen von Dashlane SAS, eingetragen in den USA und anderen Ländern.</p>
</div>

</body>
</html>
