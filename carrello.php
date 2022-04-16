<?php
include_once __DIR__.'./prodotti.php';
class Carrello{
    public $prodotti =[];
    public $totale;

    public function aggiungiProdotto($nome,$prezzo,$img){
        array_push($this->prodotti, new Prodotto($nome,$prezzo,$img));
        $this->totale+=$prezzo;
    }
}

// $carrellone = new Carrello;
// $carrellone->aggiungiProdotto("oggetto",123,0,"immagine");

// var_dump($carrellone);