<?php
 
 $countriesJson = file_get_contents('Flags.json'); // Cargamos el contenido del JSON en una variable

 $decodedJson = json_decode($countriesJson); //Lo convertimos a objeto php para poder utilizarlo.

/*

#Obtenemos todos los URL de las Flags, para utilizarlo en el $specificUrl
 foreach ($decodedJson->data as $i => $flagFound){ //traemos el URL de las flags y numeradas desde 0 -> las descargamos
    echo $flagFound->flag_url;
}

*/


#Seleccionamos una Flag URL en particular, o varias separadas con un espacio
$specificUrl = "https://cdn5.wyscout.com/photos/area4/public/flat/new/Afghanistan.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Albania.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Germany.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Saudi-Arabia.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Algeria.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Argentina.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Armenia.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Australia.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Austria.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Azerbaijan.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Bahrain.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Belarus.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Bolivia.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Bosnia-and-Herzegovina.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Brazil.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Bulgaria.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Belgium.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Cambodia.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Cameroon.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Canada.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Chile.png https://cdn5.wyscout.com/photos/area4/public/flat/new/China.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Cyprus.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Colombia.png https://cdn5.wyscout.com/photos/area4/public/flat/new/South-Korea.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Costa-Rica.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Croatia.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Denmark.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Ecuador.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Egypt.png https://cdn5.wyscout.com/photos/area4/public/flat/new/El-Salvador.png https://cdn5.wyscout.com/photos/area4/public/flat/new/United-Arab-Emirates.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Scotland.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Slovakia.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Slovenia.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Spain.png https://cdn5.wyscout.com/photos/area4/public/flat/new/United-States.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Estonia.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Finland.png https://cdn5.wyscout.com/photos/area4/public/flat/new/France.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Wales.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Georgia.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Gibraltar.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Greece.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Honduras.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Hungary.png https://cdn5.wyscout.com/photos/area4/public/flat/new/India.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Indonesia.png https://cdn5.wyscout.com/photos/area4/public/flat/new/England.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Northern-Ireland.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Iran.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Iceland.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Israel.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Italy.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Japan.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Jordan.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Kazakhstan.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Kosovo.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Kuwait.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Kyrgyzstan.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Latvia.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Lithuania.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Luxembourg.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Malaysia.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Malta.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Morocco.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Moldova.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Montenegro.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Mexico.png https://cdn5.wyscout.com/photos/area4/public/flat/new/New-Zealand.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Macedonia.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Norway.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Panama.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Paraguay.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Netherlands.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Peru.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Poland.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Portugal.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Qatar.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Czech-Republic.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Ireland.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Romania.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Russia.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Serbia.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Singapore.png https://cdn5.wyscout.com/photos/area4/public/flat/new/South-Africa.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Sweden.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Switzerland.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Thailand.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Turkey.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Tunisia.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Ukraine.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Uruguay.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Uzbekistan.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Venezuela.png https://cdn5.wyscout.com/photos/area4/public/flat/new/Vietnam.png";

$specificUrl = explode(" ", $specificUrl); // Agregamos un espacio en los strings
$specificUrl; // Elegimos el URL

$folder="folder/"; // Destino de las imágenes, para dejarlos en la misma carpeta dejar las comillas vacias
 
foreach($specificUrl as $imagen)
{
    
    $destino=$folder.substr($imagen,strrpos($imagen,"/")+1); // obtenemos el nombre de la juntamos con la carpeta especificada
    file_put_contents($destino, file_get_contents($imagen));
}

echo "Downloaded!";





// foreach ($decodedJson->data as $i => $flagFound){
    
    

// }





// $img = "foto";

// file_put_contents($img, file_get_contents($flagFound[0]));
  
// echo "File downloaded!"
 

// echo $i. ': '. $flagFound->flag_url;  
// echo $i. ': '. $flagFound->flag_url . " "; //Posee un espacio para mejor lectura en pantalla
// echo $flagFound->flag_url . " ";  //Imprimimos en pantalla solo las URL

/*if($flagFound){
    echo "ok";
}   else {
    echo "error";
}*/


// foreach ($decodedJson->data as $i => $flagFound){ 
//     echo $i. ': '. $flagFound->flag_url . " "; //Posee un espacio para mejor lectura en pantalla
   
// }


// foreach ($decodedJson->data as $i => $flagFound){
//     if ($i == "Afghanistan.png"){
//         echo $flagFound->flag_url . " "; // Print de un pais en específico
//     }

// }




    
 
?>

