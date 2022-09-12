<?php
 
$countries_json = file_get_contents('Flags.json'); // Cargamos el contenido del JSON en una variable

$decoded_json = json_decode($countries_json, false); //Lo convertimos a objeto php para poder utilizarlo.


foreach ($decoded_json->data as $i => $flagFound){ //treamos las flags numneradas desde 0 -> las descargamos
    echo $i. ': '. $flagFound->flag_url;
}
 












    
 
?>

