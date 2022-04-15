<?php
class Prodotto {
    private $prodotto_id;
    protected $prodotto_nome;
    public $prodotto_prezzo;
    public $prodotto_sconto;
    public $prodotto_img;

    function __construct(string $nome, float $prezzo, int $sconto, string $img) {
        $this->prodotto_id++; // increment?? non funziona. Ci proviamo domani mattina.
        $this->prodotto_nome = $nome;
        $this->prodotto_prezzo = $prezzo;
        $this->prodotto_sconto = $sconto;
        $this->prodotto_img = $img;
    }
}

$cuccia = new Prodotto("cuccia", 12.40,0,"immagine_cuccia");
var_dump($cuccia);
$peluche= new Prodotto("peluche", 15.00 ,0,"immagine_peluche");
var_dump($peluche);

class Alimento extends Prodotto {
    public $peso;
    public $tipo;

    function __construct(float $peso, string $tipo){
        $this->peso = $peso;
        $this->tipo = $tipo;
    }
}

class Antipulci extends Prodotto {
    public $razza_animale;
    public $disponibilità = true;

    function __construct($razza_animale , $disponibilità){
        $this->razza_animale = $razza_animale;
        $this->disponibilità = $disponibilità;
    }
}