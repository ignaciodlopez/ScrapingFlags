<?php

$data = file_get_contents("http://localhost/scrapingFlags/test/alumnos.json");
$notas = json_decode($data, true);

foreach ($notas as $nota)
{
    $nombre = "";
    foreach ($nota as $key => $value){
        switch ($key) {
            case 'nombre':
                $nombre = $value;
                break;
            case 'apellidos':
                $apellidos = $value;
                break;
            case 'nota':
                $nota_final = $value;
                break;
        }
    }
    echo "<p>Alumno: " . $nombre . " " . $apellidos . " -> " . $nota_final . "</p>";

}
echo "<p>Codigo fuera del bucle</p>";

?>