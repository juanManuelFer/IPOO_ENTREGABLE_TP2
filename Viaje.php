<?php

/*
TP1 Enunciado.
La empresa de Transporte de Pasajeros “Viaje Feliz” quiere registrar la información referente a sus viajes. De cada viaje se precisa almacenar el código del mismo, destino, cantidad máxima de pasajeros y los pasajeros del viaje.

Realice la implementación de la clase Viaje e implemente los métodos necesarios para modificar los atributos de dicha clase (incluso los datos de los pasajeros). Utilice un array que almacene la información correspondiente a los pasajeros. Cada pasajero es un array asociativo con las claves “nombre”, “apellido” y “numero de documento”.

Implementar un script testViaje.php que cree una instancia de la clase Viaje y presente un menú que permita cargar la información del viaje, modificar y ver sus datos.
___________________________________________________________________________________
___________________________________________________________________________________

TP2 Enunciado.
Modificar la clase Viaje para que ahora los pasajeros sean un objeto que tenga los atributos nombre, apellido, numero de documento y teléfono. El viaje ahora contiene una referencia a una colección de objetos de la clase Pasajero. También se desea guardar la información de la persona responsable de realizar el viaje, para ello cree una clase ResponsableV que registre el número de empleado, número de licencia, nombre y apellido. La clase Viaje debe hacer referencia al responsable de realizar el viaje.

Volver a implementar las operaciones que permiten modificar el nombre, apellido y teléfono de un pasajero. Luego implementar la operación que agrega los pasajeros al viaje, solicitando por consola la información de los mismos. Se debe verificar que el pasajero no este cargado mas de una vez en el viaje. De la misma forma cargue la información del responsable del viaje.
*/

//Creo la clase y sus atributos
class Viaje{
    private $codigo;
    private $destino;
    private $cantMaxPasajeros;
    private $pasajero;
    private $responsable;


    //Creo la funcion constructora
    public function __construct($codigo, $destino, $cantMaxPasajeros, $pasajero, $responsable){
        $this -> codigo = $codigo;
        $this -> destino = $destino;
        $this -> cantMaxPasajeros = $cantMaxPasajeros;
        $this -> pasajero = $pasajero;
        $this -> responsable = $responsable;
    }


    // Setea el valor de codigo
    public function setCodigo($codigo){
        $this -> codigo = $codigo;
    }

    // Setea el valor de destino
    public function setDestino($destino){
        $this -> destino = $destino;
    }

     // Setea el valor de cantMaxPasajeros
    public function setCantMaxPasajeros($cantMaxPasajeros){
        $this -> cantMaxPasajeros = $cantMaxPasajeros;
    }

    // Setea el valor de pasajero
    public function setPasajero($pasajero){
        $this -> pasajero = $pasajero;
    }

    // Setea el valor de responsable
    public function setResponsable($responsable){
        $this -> responsable = $responsable;
    }

    // Obtiene el valor de codigo
    public function getCodigo(){
        return $this -> codigo;
    }

    // Obtiene el valor de pdestinoB
    public function getDestino(){
        return $this -> destino;
    }

    // Obtiene el valor de cantMaxPasajeros
    public function getCantMaxPasajeros(){
        return $this -> cantMaxPasajeros;
    }

    // Obtiene el valor de pasajero
    public function getPasajero(){
        return $this -> pasajero;
    }

    // Obtiene el valor de responsable
    public function getResponsable(){
        return $this -> responsable;
    }



    public function __toString(){
        $cadena = "\nCódigo viaje: ".$this->getCodigo()."\nDestino: ".$this->getDestino()."\nCant Máx de Pasajeros: ".$this->getCantMaxPasajeros()."\nLos datos de los pasajero son: ".$this->getPasajero()."\nLos datos del responsable son: ".$this->getResponsable()."\n";
        return $cadena;
    }
    
}
//FIN CLASE VIAJE