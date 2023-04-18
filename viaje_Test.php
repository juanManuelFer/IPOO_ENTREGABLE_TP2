<?php

//includo
include_once ("Pasajero.php");
include_once ("ResponsableV.php");
include_once("Viaje.php");

//Creo objetos pasajero, responsable del viaje, viaje
$objPasajero2 = new Pasajero(3);
$objResponsable2 = new ResponsableV("3333", "033-3", "Paolo Alejandro", "Perez");
$objViaje2 = new Viaje(1234, "Cancun", "20", $objPasajero2, $objResponsable2);


// Cargo mi colección de pasajeros
$colPasa[0] = ["nombre" => "Lionel", "apellido" => "Messi", "dni" => "111", "telefono" => "11111111"];
$colPasa[1] = ["nombre" => "lio", "apellido" => "Scaloni", "dni" => "222", "telefono" => "2222222"];


//Ahora le digo a mi objeto que esa es su colección de pasajeros
$objPasajero2->setColPasajeros($colPasa);


//Mis datos iniciales
echo $objViaje2;


//Cambio los datos de un pasajero
$ind = $objPasajero2->modificarPasajero("Perez", "Juan", "111", "22222222222", "333");
if ($ind >= 0){
   echo "Se modifico el pasajero\n".$objPasajero2->mostrarDatosPasajeros()."\n";
}else{
   echo "No se encontraron datos que coincidan con ese pasajero";
}


//Agregar pasajero ---> Debe Sumar un pasajero al array, verificar que la cantidad máxima de pasajeros no sobrepase la cant de pasajeros, y ahí hacer un array_push
$objPasajero2->agregarPasajero("Diego", "Peretti", "999", "999999999");
echo "Agregue pasajero: ".$objPasajero2;
