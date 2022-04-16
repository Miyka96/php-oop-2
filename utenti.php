<?php
include_once __DIR__.'./carta_credito.php';
class Utenti{
    public $utente_id;
    public $utente_nome;
    public $utente_cognome;
    public $utente_indirizzo;
    public $utente_metodo_pagamento= []; 

    public function __construct($utente_id, $utente_nome, $utente_cognome, $utente_indirizzo, $utente_metodo_pagamento){
        $this->utente_id = $utente_id;
        $this->utente_nome = $utente_nome;
        $this->utente_cognome = $utente_cognome;
        $this->utente_indirizzo = $utente_indirizzo;
        $this->utente_metodo_pagamento = $utente_metodo_pagamento;
    }

    function aggiungiCarta($numero, $banca,  $scadenza,  $proprietario, $cvc){
        array_push($this->utente_metodo_pagamento, new Carta_Credito($numero,$banca,$scadenza,$proprietario,$cvc) );
    }

    public function rimuoviCarta($numero) {
        foreach($this->utente_metodo_pagamento as $key=>$carta) {
           if($carta->numero === $numero) {
              array_splice($this->carta, $key, 1);
           }
        }
    }

}

class Utenti_registrati extends Utenti {
    private $utente_username;
    private $utente_password;

    public function __construct($utente_id, $utente_nome,$utente_cognome, $utente_indirizzo, $utente_metodo_pagamento,$utente_username, int $utente_password){
        parent::__construct($utente_id, $utente_nome,$utente_cognome, $utente_indirizzo, $utente_metodo_pagamento);
        try{
            $this->setUsername($utente_username);
            $this->setPassword($utente_password);
        }
        catch (exception $e){
            "Errore" . $e->getMessage();
        }
    }

    public function getUsername(){
        return $this->utente_username;
    }

    public function getPassword(){
        return $this->utente_password;
    }

    public function setUsername($utente_username){
        if (is_string($utente_username)){
            $this->utente_username = $utente_username;
        }
        else{
            throw new \Exception("L'username non può essere un numero");
        }
    }

    public function setPassword($utente_password){
        if( is_numeric($utente_password)){
            $this->utente_password = $utente_password;
        }
        else{
            throw new \Exception("La password deve essere composta da numeri");
        }
    }
    
}

$utente= new Utenti_registrati(12,"piero","pieri", "via pierini","carta visa", "piero_65",303030);
// var_dump($utente);




