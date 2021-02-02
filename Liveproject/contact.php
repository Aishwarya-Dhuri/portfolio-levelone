<?php
//echo '<pre>';print_r($_REQUEST);exit();// to check if all values are posted
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];


// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <simocorporation@vsnl.net>' . "\r\n";
$headers .= 'aishwaryadhuri456@gmail.com' . "\r\n";

$subject="Message From simocorporation.com";
$to="simocorporation@vsnl.net";

$message='<table border="1">
<tr style="background-color:#EEF;"><td>NAME:</td><td>'.$name.'</td></tr>
<tr><td>Email:</td><td>'.$email.'</td></tr>
<tr style="background-color:#EEF;"><td>COMPANY:</td><td>'.$company.'</td></tr>
<tr><td>Subject</td><td>'.$subject.'</td></tr>
<tr style="background-color:#EEF;"><td>LIST OF PRODUCTS:</td><td>'.$list_of_products.'</td></tr>
<tr><td>MESSAGE:</td><td>'.$message.'</td></tr>
</table>';
mail($to,$subject,$message,$headers);// you can chnage the message as per your need
header ("Location: http://aishwaryadhuriuiwebdesigner.in/Liveproject/index.html/");
?>