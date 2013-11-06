<?php
/**
 * File VHome.php contenente la classe VHome
 *
 * @package view
 */
/**
 * Classe VHome, estende la classe view e gestisce la visualizzazione e formattazione del sito, inoltre imposta i principali contenuti della pagina, suddivisi in contenuti principali (main_content) e contenuti della barra laterale (side_content)
 *
 * @package View
 */
class VHome extends View {
    /**
     * @var string $_main_content
     */
    private $corpo_centrale;
    /**
     * @var array $_main_button
     */
    private $pulsante_menu=array();
    /**
     * @var string $_side_content
     */
    private $colonna_laterale;
    /**
     * @var array $_side_button
     */
    private $menu_laterale;
    /**
     * @var string $_layout
     */
    private $_layout='default';
    /**
     * Aggiunge il modulo di login nella pagina principale, per gli utenti non autenticato
     */
    public function aggiungiModuloLogin() {
        $VRegistrazione=USingleton::getInstance('VRegistrazione');
        $VRegistrazione->setLayout('default');
        $modulo_login=$VRegistrazione->processaTemplate();
        $this->colonna_laterale.=$modulo_login;

    }
    /**
     * Assegna il contenuto al template e lo manda in output
     */
    public function mostraPagina() {
        $this->assign('colonna_laterale',$this->colonna_laterale);
        $this->assign('menu_laterale',$this->menu_laterale);
        $this->display('index_'.$this->_layout.'.tpl');
    }
    
    public function mostraPaginaParziale($template)
    {
        $this->display($template);
    }

    

    /**
     * imposta il contenuto principale alla variabile privata della classe
     */
    public function impostaContenuto($contenuto) {
        $this->corpo_centrale=$contenuto;
    }
    /**
     * Restituisce il controller passato tramite richiesta GET o POST
     *
     * @return mixed
     */
    public function getController() {
        if (isset($_REQUEST['controller']))
            return $_REQUEST['controller'];
        else
            return false;
    }
    /**
     * Imposta la pagina per gli utenti registrati/autenticati
     */
    public function impostaPaginaRegistrato() {
        $session=USingleton::getInstance('USession');
        $username=$session->leggi_valore('username');
        $this->colonna_laterale.="Benvenuto $username";
        $this->assign('corpo_centrale',$this->corpo_centrale);
        //$this->assign('menu',$this->pulsante_menu);
        $this->assign('registrato',true);
        $this->aggiungiTastoLogout();
        
    }
    /*
     * imposta la pagina per gli utenti non registrati/autenticati
     */
    public function impostaPaginaVisitatore() {
        $this->assign('titolo_principale','');
        $this->assign('corpo_centrale',$this->corpo_centrale);
        //$this->assign('menu',$this->pulsante_menu);
        $this->assign('registrato',false);
        $this->aggiungiModuloLogin();
        //$this->aggiungiTastoRegistrazione();
    }
    /**
     * aggiunge il tasto logout al menu laterale
     */
    public function aggiungiTastoLogout() {
    /*    $tasto_logout=array();
        $tasto_logout[]=array('testo' => 'Logout', 'link' => '?controller=registrazione&task=esci'); */
        $VRegistrazione=USingleton::getInstance('VRegistrazione');
        $VRegistrazione->setLayout('logout');
        $tasto_logout=$VRegistrazione->processaTemplate();
        $this->menu_laterale.=$tasto_logout;
    }
    /**
     * aggiunge il tasto per la registrazione nel menu laterale (per gli utenti non autenticati)
     */
    /*public function aggiungiTastoRegistrazione() {
        $menu_registrazione=array();
        $menu_registrazione[]=array('testo' => 'Attivati', 'link' => '?controller=registrazione&task=attivazione');
        $this->menu_laterale[]=array_merge(array('testo' => 'Registrati', 'link' => '?controller=registrazione&task=registra', 'submenu' => $menu_registrazione),$this->menu_laterale);
    }*/
    
}

?>