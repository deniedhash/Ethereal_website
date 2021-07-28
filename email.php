<?php
if(isset($_POST['submit'])){


echo("Thank you for contacting us ".$_POST['fname']);

$Name = "Name:".$_POST['fname']."
";
$Phone = "Phone:".$_POST['phone']."
";
$Email = "Email:".$_POST['email']."
";
$Subject = "Subject:".$_POST['subject']."
";
$Message = "Message:".$_POST['message']."
";
$file=fopen("saved.txt", "a+");
fwrite($file, $Name);
fwrite($file, $Phone);
fwrite($file, $Email);
fwrite($file, $Subject);
fwrite($file, $Message);
fwrite($file, "\n");
fclose($file);



}
?>