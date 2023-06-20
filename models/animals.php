<?php
class Animali extends Prodotti{
    public $animali;

    public function __construct($_nome, $_prezzo, $_immagine, $_categoria, $_animali){
        parent::__construct($_nome, $_prezzo, $_immagine, $_categoria);
        $this->animali = $_animali;
    }
}
?>