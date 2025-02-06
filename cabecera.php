<?php
class Cabecera{
    private $titulo;

    function __construct($titulo){
        $this->titulo=$titulo;
    }

    function imprimeCabecera(){
        echo "<h1 style='text-align: center;'>".$this->titulo."</h1>";

    }
}
?>