<?php
class Cuerpo{
    private $parrafos;
    private $cont;
    function __construct(){
        $this->parrafos=array();
        $this->cont=0;
    }
    function insertarParrafo($texto){
        $this->parrafos[$this->cont]=$texto;
        $this->cont++;
    }
    function muestraParrafo(){
        foreach($this->parrafos as $clave){
            echo "<p>".$clave."<p>";
        }
    }
}
?>