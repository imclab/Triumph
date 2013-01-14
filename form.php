<?php 
$to = "abhijeetgoel77@gmail.com";

if(isset($_POST['name']))
{
	$name = $_POST['name'];
}
if(isset($_POST['email']))
{
	$email = $_POST['email'];
}
if(isset($_POST['tel']))
{
	$tel = $_POST['tel'];
}
if(isset($_POST['purpose']))
{
	$purpose = $_POST['purpose'];
}
if(isset($_POST['msg']))
{
	$msg = $_POST['msg'];
}
mail($to,"Subject: $email + $purpose","Message: $msg") or die("could not send mail");
echo "mail sent";
$url = 'http://www.taahmedabad.in';
echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
?>