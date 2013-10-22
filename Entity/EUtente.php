<?php
class EUtente {
   public $username;
   public $password;
   public $nome;
   public $cognome;
   public $data_nascita;
   public $citta_nascita;
   public $citta_residenza;
   public $codice_fiscale;
   public $email;
   public $num_telefono;
   public $codice_attivazione;
   public $stato;
   
   public $_guidatore=array();
   public $_passeggero=array();
   public $_veicoli=array();
   
   public function getAccountAttivo() {
        if ($this->stato=='attivo')
            return true;
        else
            return false;
   }
   
   public function generaCodiceAttivazione() {
        $this->codice_attivazione=mt_rand();
    }
   
  
   
}

?>
