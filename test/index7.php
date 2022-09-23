<!-- Con PHP tomamos un URL y descargamos la imágen que contiene  -->

<?php
  
$url = 'https://cdn5.wyscout.com/photos/area4/public/flat/new/Afghanistan.png'; 
  
$img = 'Afghanistan.png'; 
  
// Function to name the image
file_put_contents($img, file_get_contents($url));
  
echo "File downloaded!"
  
?>