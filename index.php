<?php
require_once 'modelo/empresa.php';
require_once 'modelo/direccion.php';
require_once 'modelo/empleado.php';

$d = new Direccion();
$d->Calle = 'pellegrini';
$d->Ciudad = 'Rosario';

$e = new Empleado();
$e->Nombre = 'Juan';
$e->Puesto = 'operario';

$emp = new Empresa();
$emp->Nombre = 'Juampi';
$emp->Direccion = $d;
$emp->Empleado = $e;

$emp->MostrarEmpresa();
