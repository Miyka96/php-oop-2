<?php
include_once __DIR__.'./prodotti.php';
include_once __DIR__.'./carta_credito.php';
include_once __DIR__.'./utenti.php';
include_once __DIR__.'./carrello.php';


// Riepilogo cose mancanti:
// 1) DEVO AGGIUNGERE (aggiustare) SCONTO 20% PER UTENTI REGISTRATI
// 2) CONTROLLARE FUNZIONE RIMOZIONE CARTA E PRODOTTO DAL CARRELLO

// ---------------------PROVE------------------------------------------------------//

$utente= new Utenti_registrati(12,"piero","pieri", "via pierini","piero_65",303030);

// Aggiungo carta non scaduta
$utente->aggiungiCarta("1234567891234567","banca","10 September 2024","signor signore",456);


// Prova carta scaduta (10 September 2020): funzionante.
$utente->aggiungiCarta("1234567451234567","altrabanca","10 September 2020","un altro signore",789);


// CONTROLLARE FUNZIONE RIMUOVI CARTA 
$utente->rimuoviCarta("1234567451234567");


// AGGIUNGI AL CARRELLO : FUNZIONANTE
$utente->aggiungiAlCarrello("oggetto aggiunto",300,"immagine");
$utente->aggiungiAlCarrello("Altro oggetto aggiunto", 600,"altra immagine");

print_r($utente);