<?php
Class Carta_Credito {
   public $numero;
   public $banca;
   public $scadenza;
   public $proprietario;
   public $cvc;


    function __construct(string $numero, string $banca, string $scadenza, string $proprietario, string $cvc) {
        try {
            $this->SetNumero($numero);
            $this->SetBanca($banca);
            $this->scadenza = $scadenza; //Funzione per controllo data??
            $this->proprietario = $proprietario;
            $this->SetCvc($cvc);
        }
        catch ( \Exception $e) {
            echo "Errore: " . $e->getMessage();
        }
    }

    function SetNumero($numero) {
        if (is_numeric($numero)) {
            $this->numero = $numero;
        }
        else{
            throw new \Exception("Il numero della carta deve essere composto unicamente da cifre");
        }

        if ( strlen( (string)$numero ) === 16 ) {
            $this->numero = $numero;
        }
        else{
            throw new \Exception("Il numero della carta deve essere composto da 16 cifre");
        }
    }

    function SetBanca($banca){
        if (is_string($banca)){
            $this->banca=$banca;
        }
        else{
            throw new \Exception("Nome banca non valido");
        }
    }

    // function SetScadenza($scadenza){
    //     Devo fare qualcosa per convertire la stringa in data e fare controllo sulla scadenza
    // }

    function SetCvc($cvc){
        if(is_numeric($cvc)){
            $this->cvc = $cvc;
        }
        else{
            throw new \Exception("Il cvc deve essere composto unicamente da cifre");
        }

        if( strlen( (string)$cvc ) === 3 ){
            $this->cvc=$cvc;
        }
        else{
            throw new \Exception("Il cvc deve essere composto da 3 cifre");
        }
    }

}

$carta1= new Carta_Credito("1234567891234567","Banca Uno","12 05 25","Pippo Franco","123");
// var_dump ($carta1);

