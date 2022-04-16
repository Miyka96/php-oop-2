<?php
class Prodotto {
    public $prodotto_id;
    public $prodotto_nome;
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
// var_dump($cuccia);
$peluche= new Prodotto("peluche", 15.00 ,0,"immagine_peluche");
// var_dump($peluche);
$pippo= new Prodotto ("Pippo",10.50,20,"immagine Pippo");

class Alimento extends Prodotto {
    public $peso;
    public $tipo;

    function __construct(string $nome, float $prezzo, int $sconto, string $img, float $peso, string $tipo){
        parent::__construct($nome,$prezzo,$sconto,$img);
        $this->peso = $peso;
        $this->tipo = $tipo;
    }
}

$alimento1= new Alimento ("pappa", 12.60, 20, "immagine pappa", 3.50, "croccatini anallergici");
// var_dump($alimento1);

class Antipulci extends Prodotto {
    public $razza_animale;
    public $disponibilità;

    function __construct(string $nome, float $prezzo, int $sconto, string $img ,$razza_animale , $disponibilità){
        parent::__construct($nome,$prezzo,$sconto,$img);
        $this->razza_animale = $razza_animale;
        $this->disponibilità = $disponibilità;
    }
}

$antipulci1= new Antipulci("Addio Pulci", 15.30, 15, "immagine Antipulci","Labrador","Mese: aprile");
// var_dump($antipulci1);