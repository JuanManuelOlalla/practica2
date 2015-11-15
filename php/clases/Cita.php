<?php
class Cita{
    private $numero, $fecha, $dni, $imagenes;
    
    function __construct($numero=null, $fecha=null, $dni=null, $imagenes = Array()) {
        $this->numero = $numero;
        $this->fecha = $fecha;
        $this->dni = $dni;
        $this->imagenes = $imagenes;
    }

    function getNumero() {
        return $this->numero;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getDni() {
        return $this->dni;
    }

    function getImagenes() {
        return $this->imagenes;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setDni($dni) {
        $this->dni = $dni;
    }

    function setImagenes($imagenes) {
        $this->imagenes = $imagenes;
    }
    
    function buscarCitas($numero){
        $ruta = "../../../citas";
        $tam = strlen($numero);
        if ($aux = opendir($ruta)){
            while (($archivo = readdir($aux)) !== false){
                if(substr($archivo, 0, $tam)===$numero){
                    $ruta_completa = $ruta . '/' . $archivo;
                    $this->imagenes[] = $archivo;
                }
            }
            closedir($aux);
            return $this->imagenes;
        }
    }

}
