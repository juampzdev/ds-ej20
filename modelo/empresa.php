<?php

class Empresa
{

    public $Empleado;
    public $Nombre;
    public $Direccion;


    public function MostrarEmpresa()
    {
        echo 'Datos de la empresa: ';
        echo 'Nombre: ' . $this->Nombre;

        echo 'Datos de la dirección: ';
        echo 'Calle: ' . $this->Direccion->Calle;
        echo 'Ciudad: ' . $this->Direccion->Ciudad;


        echo 'Datos del empleado: ';
        echo 'Nombre: ' . $this->Empleado->Nombre;
        echo 'Puesto: ' . $this->Empleado->Puesto;
    }
}
