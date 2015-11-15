<?php
require 'clases/AutoCarga.php';
$c = Request::get("c");
$imagenes = Array();


$cita = new Cita();

var_dump($cita->buscarCitas($c));