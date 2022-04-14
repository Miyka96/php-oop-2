<?php
class Utenti{
    public $utente_id;
    public $utente_nome;
    public $utente_cognome;
    public $utente_indirizzo;
    public $utente_metodo_pagamento; 

    public function __construct($utente_id, $utente_nome, $utente_cognome, $utente_indirizzo, $utente_metodo_pagamento){
        $this->utente_id = $utente_id;
        $this->utente_nome = $utente_nome;
        $this->utente_cognome = $utente_cognome;
        $this->utente_indirizzo = $utente_indirizzo;
        $this->utente_metodo_pagamento = $utente_metodo_pagamento;
    }
}

class Utenti_registrati extends Utenti {
    public $utente_username;
    public $utente_password;
}