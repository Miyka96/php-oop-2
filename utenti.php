<?php
include_once __DIR__.'./carta_credito.php';
include_once __DIR__.'./carrello.php';
class Utenti{
    public $utente_id;
    public $utente_nome;
    public $utente_cognome;
    public $utente_indirizzo;
    public $utente_metodo_pagamento= []; 
    public $carrello;

    public function __construct($utente_id, $utente_nome, $utente_cognome, $utente_indirizzo){
        $this->utente_id = $utente_id;
        $this->utente_nome = $utente_nome;
        $this->utente_cognome = $utente_cognome;
        $this->utente_indirizzo = $utente_indirizzo;
        $this->carrello = new Carrello;
    }

    function aggiungiCarta($numero, $banca,$scadenza,$proprietario,$cvc){
        array_push($this->utente_metodo_pagamento, new Carta_Credito($numero,$banca,$scadenza,$proprietario,$cvc) );
    }

    public function rimuoviCarta($numero) {
        if (($key = array_search($numero, $this->utente_metodo_pagamento)) !== false) {
            unset($this->utente_metodo_pagamento[$key]);
        }
    }

    public function aggiungiAlCarrello($nome,$prezzo,$img){
        $object = $this->carrello;
        $object->aggiungiProdotto($nome,$prezzo,$img);
    }
}

class Utenti_registrati extends Utenti {
    private $utente_username;
    private $utente_password;

    public function __construct($utente_id, $utente_nome,$utente_cognome, $utente_indirizzo,$utente_username,$utente_password){
        parent::__construct($utente_id, $utente_nome,$utente_cognome, $utente_indirizzo);
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
    // OVERRIDE DELLA FUNZIONE PER APPLICARE SCONTO??? ci proviamo domani.
    public function aggiungiAlCarrello($nome,$prezzo,$img){
        $object = $this->carrello;
        $object->aggiungiProdotto($nome,$prezzo,$img);
        // $prezzo_parziale= $this->prezzo;
        // $prezzo_scontato= ($prezzo_parziale*20) / 100;  
    }
}







