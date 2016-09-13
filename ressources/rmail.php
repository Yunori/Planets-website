<?php function sendmail($nom, $email, $sujet, $message){
$mail = 'xaroliphe@gmail.com';
$headers = 'From: '.$nom.' <'.$mail.'>'."\n"; 
$headers .= 'MIME-Version: 1.0'."\n";
mail($email,$sujet,$message,$headers);}
sendmail($argv[1],$argv[2],$argv[3],$argv[4]);?>
