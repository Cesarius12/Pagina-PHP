<?php
spl_autoload_register(function ($clase) {
    $fullpath = "./" . $clase . ".php";
    if (file_exists($fullpath))
        require_once $fullpath;
    else
        echo "<p>La clase $fullpath no se encuentra</p>";
});
$pagina=new Pagina("Daw2 Servidores","Cesar Barba Fernandez");
$pagina->insertarCuerpo("Pagina creada por cesar barba como prueba de la clase pagina en PHP");
$pagina->insertarCuerpo("parrafo 2");
$pagina->insertarCuerpo("parrafo 3");
$pagina->mostrarPagina();
?>