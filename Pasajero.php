<?php

//Creo la clase 
class Pasajero{
    private $cantMaxPasajeros;
    private $colPasajeros;


    //Creo la función constructora
    public function __construct($pcantMaxPasajeros){
        $this->cantMaxPasajeros = $pcantMaxPasajeros;
        $this->colPasajeros = [];
    }


    // MODULOS QUE SETEAN LOS VALORES DE LOS ATRIBUTOS 

    //Seteal el valor de colPasajeros
    public function setCantMaxPasajeros($cantMaxPasajeros){
        $this->cantMaxPasajeros = $cantMaxPasajeros;
    }

    public function setColPasajeros($colPasajeros){
        $this->colPasajeros = $colPasajeros;
    }


    // MODULOS QUE OBTIENEN LOS VALORES DE LOS ATRIBUTOS

    //Obtiene el valor de colPasajeros
    public function getCantMaxPasajeros(){
        return $this->cantMaxPasajeros;
    }
    public function getColPasajeros(){
        return $this->colPasajeros;
    }


    public function __toString(){
        $msjToString = "\n\n".$this->mostrarDatosPasajeros()."\n\n";
        return $msjToString;
    }


    public function mostrarDatosPasajeros(){
        $cadena="";
        $colP = $this->getColPasajeros();
        for($i = 0; $i < count($colP); $i++){
            $nombre = $colP[$i]["nombre"];
            $apellido = $colP[$i]["apellido"];
            $dni = $colP[$i]["dni"];
            $telefono =$colP[$i]["telefono"];
            $cadena = $cadena."  Pasajero ".$i.": ".$nombre." ".$apellido." - DNI N° ".$dni." - Teléfono: ".$telefono."\n\n";
        }
        return $cadena;
    }


    public function buscarPasajero($pdni){
        $colP = $this->getColPasajeros();
        $i = 0;
        $encontro = false; 
        while ($i < count($colP) && !$encontro){
            $encontro = $colP[$i]["dni"] == $pdni;
             $i++; 
        }
        return $i - 1;
    }



    public function modificarPasajero($nuevoNombre, $nuevoApellido, $nuevoDni, $nuevoTelefono, $dniAbuscar){
        $indice = $this->buscarPasajero($dniAbuscar);
        if ($indice >= 0){ //Si encuentra
            $colP = $this->getColPasajeros();
            $colP[$indice]["nombre"] = $nuevoNombre;
            $colP[$indice]["apellido"] = $nuevoApellido;
            $colP[$indice]["dni"] = $nuevoDni;
            $colP[$indice]["telefono"] = $nuevoTelefono;
            $this->setColPasajeros($colP);
        }
        return $indice;
    }


    Public function agregarPasajero($nombreNuevoPasajero, $ApellidoNuevoPasajero, $dniNuevoPasajero, $telefonoNuevoPasajero){
        $colP = $this->getColPasajeros();

        //Hay capacidad para un pasajero más?
        if($this->getCantMaxPasajeros() >= count($colP)){
            $colP[] = ["nombre" => $nombreNuevoPasajero, "apellido" => $ApellidoNuevoPasajero, "dni" => $dniNuevoPasajero, "telefono" => $telefonoNuevoPasajero];
            $this->setColPasajeros($colP);
        }
    }
}
//FIN CLASE PASAJERO