<?php 
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$mailFrom = $_POST['email'];
	$telephone = $_POST['telephone'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	

	$mailTo= "sakulrat.12@outlook.co.th";
	$header= "From: " .$mailFrom."\n".$telephone."\n".$subject."\n\n".$message;
	$text = "You have recive an email by".$name;

mail($mailTo, $text, $header);
header("Location: contact.php?mailsend");



}







 ?>