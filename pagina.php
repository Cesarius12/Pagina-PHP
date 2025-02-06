<?PHP
class Pagina {
    private $cabecera;
    private $cuerpo=new Cuerpo;
    private $pie;

    function __construct($titulo,$pie){
        $this->cabecera=new Cabecera($titulo);
        $this->pie=new Pie($pie);
    }

    public function insertarCuerpo($texto){
        $this->cuerpo->insertarParrafo($texto);
    }

    public function mostrarPagina(){
        $this->cabecera->imprimeCabecera();
        $this->cuerpo->muestraParrafo();
        $this->pie->imprimePie();
    }
}
?>