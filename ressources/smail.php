<?php function sendmail($nom, $email, $sujet, $message){
$mail = 'xaroliphe@gmail.com';
$headers = 'From: '.$nom.' <'.$email.'>'."\n"; 
$headers .= 'MIME-Version: 1.0'."\n";
mail($mail,$sujet,$message,$headers);}
sendmail($argv[1],$argv[2],$argv[3],$argv[4]);?>