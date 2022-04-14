<?php
class Prodotto {
    public $prodotto_id;
    public $prodotto_nome;
    public $prodotto_prezzo;
    public $prodotto_sconto;

    function __construct(int $id, string $nome, float $prezzo, int $sconto){
        $this->prodotto_id = $id;
        $this->prodotto_nome = $nome;
        $this->prodotto_prezzo = $prezzo;
        $this->prodotto_sconto = $sconto;
    }
}

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