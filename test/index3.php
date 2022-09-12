<?php

curl_setopt($ch, CURLOPT_URL, $URLImage);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_BINARYTRANSFER,1);
$raw=curl_exec($ch);
curl_close ($ch);
$fp = fopen(‘./’.$nombre.’.jpg’,’x’);
fwrite($fp, $raw);
fclose($fp);

?>