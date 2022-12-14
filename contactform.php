<?php
if (isset($_POST["submit"])) {
	$name=$_POST["name"];
	$mailFrom=$_POST["mail"];
	$message=$_POST["message"];
	
	
}
if(isset($_POST['submit_2'])){
$Name = "Name:".$_POST["name"]."
";
$mailFrom = "Email:".$_POST["mail"]."
";
$message = "message:".$_POST["message"]."
";
$file=fopen("info.txt", "a");
fwrite($file, $Name);
fwrite($file, $mailfrom);
fwrite($file, $message);

fclose($file);
}
header("location: contact.php ");
?>