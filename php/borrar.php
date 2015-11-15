<?php
require 'clases/AutoCarga.php';
$numero = Request::get("numero");
unlink("../../../citas/$numero");
var_dump($_SERVER['HTTP_REFERER']);
$ruta = explode("&", $_SERVER['HTTP_REFERER']);
header("Location: $ruta[0]");