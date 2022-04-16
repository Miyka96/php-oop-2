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
            $this->SetScadenza($scadenza); //Funzione per controllo data??
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

    function SetScadenza($scadenza){
       $data= strtotime($scadenza);
       $now = date_create('now')->format('Y-m-d H:i:s');
       $time_now = strtotime($now); 
       if($data > $time_now ){
            $this->scadenza = $scadenza;
       }
       else{
           throw new \Exception("La carta è scaduta");
       }
    //    var_dump($data);
    //    var_dump($now);
    //    var_dump($time_now);
    }

}

// $carta1= new Carta_Credito("1234567891234567","Banca Uno","10 September 2024","Pippo Franco","123");
// var_dump ($carta1);

