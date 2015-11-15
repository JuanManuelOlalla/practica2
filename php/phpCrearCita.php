<?php
require 'clases/AutoCarga.php';

//private $numero, $fecha, $dni, $imagenes;
$numero = Request::post("numero");
$dia = Request::post("dia");
$mes = Request::post("mes");
$anio = Request::post("anio");
$fecha = $anio+""+$mes+""+$dia;
$dni = Request::post("dni");

if($_FILES["imagen"]===null){
    header("Location: ../index.php?error=selecciona una imagen");
    exit();
}

$subir = new FileUpload("imagen", $numero, $fecha, $dni);
$subir->setDestino("../../../citas/");
$subir->setMaximo(999999999999);
$datos = $subir->subida();
header("Location: verCitas.php?c=$numero&intentos=".$datos["intentos"]."&subidas=".$datos["subidas"]."&nosubidas=".$datos["NoSubidas"]."");