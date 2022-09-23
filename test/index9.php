<?php
/* A partir de un Array de URL de imágenes, podemos descargarlas */

$countriesJson = file_get_contents('Flags.json'); // Cargamos el contenido del JSON en una variable

$decodedJson = json_decode($countriesJson); //Lo convertimos a objeto php para poder utilizarlo.


 $imagenes=array(
    "http://imagenpng.com/wp-content/uploads/2017/01/atardecer-568470fbef6.jpg",
    "http://imagenpng.com/wp-content/uploads/2017/01/Chichen-Itza-piramide.jpg",
    "http://imagenpng.com/wp-content/uploads/2017/01/d87e03a4261b6e0746deb.jpg"
    );

// Destino de las imágenes, para dejarlos en la misma carpeta dejar las comillas vacias
$folder="folder/";
 
foreach($imagenes as $imagen)
{
    // obtenemos el nombre de la juntamos con la carpeta especificada
    $destino=$folder.substr($imagen,strrpos($imagen,"/")+1);
    file_put_contents($destino, file_get_contents($imagen));
}

?>