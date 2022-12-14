<html>
<head>
<title>Kontakt</title>
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

	<div class="login-box">
		<h1> Kontakt aufnehmen </h1>
		<form action="contactform.php" method="POST">
		<label> Name </label>
		<input type="text" name="name" placeholder="">
		<label> Email </label>
		<input type="email" name="mail" placeholder="">
		<label> Ihre Nachricht  </label>
		<textarea name="message" rows="4" cols="50">

		</textarea>
		<input type ="button" value="Submit">
		</form>
	</div>
<div class="footer">
	<h4> &#169; 2021 Dashlane Inc. Alle Rechte vorbehalten.</h4>
	<p>Dashlane und das Dashlane-Logo sind Markenzeichen von Dashlane SAS, eingetragen in den USA und anderen Ländern.</p>
</div>
</body>
</html>