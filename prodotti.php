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