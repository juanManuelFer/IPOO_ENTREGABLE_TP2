<?php

//Creo la clase y sus atributos
class ResponsableV{
    private $nroEmpleado;
    private $nroLicencia;
    private $nombre;
    private $apellido;


    //Creo la función constructora
    public function __construct($pnroEmpleado, $pnroLicencia, $pnombre, $papellido){
        $this->nroEmpleado = $pnroEmpleado;
        $this->nroLicencia = $pnroLicencia;
        $this->nombre = $pnombre;
        $this->apellido = $papellido;
    }


    //MODULOS QUE SETEAN LOS VALORES DE LOS ATRIBUTOS

    //Setea el valor de nroEmpleado
    public function setNroEmpleado($nroEmpleado){
        $this->nroEmpleado = $nroEmpleado;
    }
    
    //Seteal el valor de nroLicencia
    public function setNroLicencia($nroLicencia){
        $this->nroLicencia = $nroLicencia;
    }
    
    //Seteal el valor de nombre
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    //Seteal el valor de apellido
    public function setApellido($apellido){
        $this->apellido = $apellido;
    }


    //MODULOS QUE OBTIENEN LOS VALORES DE LOS ATRIBUTOS
    //Obtiene el valor de nroEmpleado
    public function getNroEmpleado(){
        return $this->nroEmpleado;
    }

    //Obtiene el valor de nroLicencia
    public function getNroLicencia(){
        return $this->nroLicencia;
    }

    //Obtiene el valor de nombre
    public function getNombre(){
        return $this->nombre;
    }

    //Obtiene el valor de apellido
    public function getApellido(){
        return $this->apellido;
    }


    public function __toString(){
        $msjToString = "\n  N° empleado: ".$this->getNroEmpleado()."\n\n  N° licencia: ".$this->getNroLicencia()."\n  Nombre: ".$this->getNombre()."\n  Apellido: ".$this->getApellido()."\n";
        return $msjToString;
    }

}
//FIN CLASE RESPONSABLE VIAJE