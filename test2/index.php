<!-- A partir de un Json buscamos obtener los diferentes datos -->

<?php
 
$people_json = file_get_contents('people.json'); //obtiene el contenido del json
 
$decoded_json = json_decode($people_json, false); // lo convierte en objeto
 
echo $decoded_json->name; //obtenemos el nombre
// Ignacio

echo $decoded_json->email; // obtenemos el mail
// nacho@gmail.com
 
echo $decoded_json->age; //obtenemos ela edad
// 21
 
?>