<?php
$to = $_GET['to'];
$subject = $_GET['subject'];
$txt = $_GET['txt'];
$headers = "From: ".$_GET['from'] . "\r\n" .
"CC: ".$_GET['cc'];
if( mail($to,$subject,$txt,$headers))
echo "Sent"; else echo "SomeProblem";
?>
