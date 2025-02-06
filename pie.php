<?php
class Pie{
    
    private $fin;

    function __construct($fin){
        $this->fin=$fin;
    }

    function imprimePie(){
        echo "<h1 style='text-align: left;font-size: 20px;'>".$this->fin."</h1>";
    }
}
?>