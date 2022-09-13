<?php

$url = "https://cdn5.wyscout.com/photos/area4/public/flat/new/Afghanistan.png";
$dir = "C:/Users/nacho/Desktop/test2";
$lfile = fopen($dir . basename($url), "w");

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1)');
curl_setopt($ch, CURLOPT_FILE, $lfile);

fclose($lfile);
curl_close($ch);

echo "Successfully downloaded";

?>

<!-- Descarga la imagen pero corrupta -->