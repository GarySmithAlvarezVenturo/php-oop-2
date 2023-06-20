<?php
class Prodotti{
    public $nome;
    public $prezzo;
    public $immagine;
    public $categoria;

    function __construct($_nome, $_prezzo, $_immagine,$_categoria){
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->immagine = $_immagine;
        $this->categoria = $_categoria;
    }
}
?>