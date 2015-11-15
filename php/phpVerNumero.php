<?php
require 'clases/AutoCarga.php';
$numero = Request::post("numero");
header("Location: verCitas.php?c=$numero");