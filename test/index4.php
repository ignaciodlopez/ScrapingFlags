<?php
/*
  Descargar imagenes externas con PHP y cURL
*/

function descargarImagen($urlImagenes, $noRepetir = true, $directorioBase)
{
    foreach($urlImagenes as $id => $urlImagen)
    {
        $counter = 1;
        $ch = curl_init(); //iniciamos sesión curl
        curl_setopt($ch, CURLOPT_URL, $urlImagen);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $imagen = curl_exec($ch);
        curl_close($ch);
        $nombreDearchivo = $prefijo.basename($urlImagen);
        if($noRepetir === true && @file_exists($directorioBase.$nombreDearchivo))
        {
            echo 'La imagen '.basename($urlImagen).' ya existe en '.$directorioBase.$nombreDearchivo.'<br />';
        }else{
            $infoDearchivo = pathinfo($urlImagen);
            while(@file_exists($directorioBase.$nombreDearchivo))
            {
                $nombreDearchivo = $prefijo.$infoDearchivo['filename'].$counter.'.'.$infoDearchivo['extension'];
                $counter++;
            }
            $archivo = @fopen($directorioBase.$nombreDearchivo, 'w');
            if($archivo)
            {
                echo 'La imagen '.basename($urlImagen).' ha sido descargada a '.$directorioBase.$nombreDearchivo.'<br />';
                @fwrite($archivo, $imagen);
                @fclose($archivo);
            }else{
                echo 'La imagen '.basename($urlImagen).' no se ha sido podido descargar.<br />';
            }
        }
    }
}
$urlImagenes = array(
                'https://cdn5.wyscout.com/photos/area4/public/flat/new/Afghanistan.png',
                'https://cdn5.wyscout.com/photos/area4/public/flat/new/Afghanistan.png',
                'https://cdn5.wyscout.com/photos/area4/public/flat/new/Afghanistan.png',
                'https://cdn5.wyscout.com/photos/area4/public/flat/new/Afghanistan.png'
);
descargarImagen($urlImagenes, true, '', 'xt3mp_');



?>



