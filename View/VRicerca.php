<?php
/**
 * File VHome.php contenente la classe VHome
 *
 * @package view
 */
/**
 * Classe VHome, estende la classe view del package System e gestisce la visualizzazione e formattazione del sito, inoltre imposta i principali contenuti della pagina, suddivisi in contenuti principali (main_content) e contenuti della barra laterale (side_content)
 *
 * @package View
 */
class VRicerca extends View {
    /**
     * @var string _layout
     */
    private $_layout='default';
    /**
     * restituisce la citta di partenza passata per GET o POST
     * @return string
     */
    public function getCittaPartenza() {
        if (isset($_REQUEST['citta_partenza'])) {
            return $_REQUEST['citta_partenza'];
        } else
            return 0;
    }
    /**
     * restituisce la citta di arrivo passata per GET o POST
     * @return string
     */
    public function getCittaArrivo() {
        if (isset($_REQUEST['citta_arrivo'])) {
            return $_REQUEST['citta_arrivo'];
        } else
            return 0;
    }
    /**
     * restituisce la data di partenza passata per GET o POST
     * @return string
     */
    public function getDataPartenza() {
        if (isset($_REQUEST['data_partenza'])) {
            return $_REQUEST['data_partenza'];
        } else
            return 0;
    }
    /**
     * restituisce il campo note passato per GET o POST
     * @return string
     */
    public function getNote() {
        if (isset($_REQUEST['note'])) {
            return $_REQUEST['note'];
        } else
            return 0;
    }
    /**
     * Processa il layout scelto nella variabile _layout
     *
     * @return string
     */
    public function processaTemplate() {
        return $this->fetch('ricerca_'.$this->_layout.'.tpl');
    }
    
    public function processaTemplateParziale() {
        $this->display('ricerca_'.$this->_layout.'.tpl');
    }

        /**
     * Imposta i dati nel template identificati da una chiave ed il relativo valore
     *
     * @param string $key
     * @param mixed $valore
     */
    public function impostaDati($key,$valore) {
        $this->assign($key,$valore);
    }
    
    /**
     * @param string $layout
     */
    public function setLayout($layout) {
        $this->_layout=$layout;
    }
    
    public function mostraListaViaggi($viaggi){
        $this->assign('viaggi', $viaggi);
        $this->display('ricerca_elenco.tpl');
    }
    
    public function mostraListaUltimiViaggi($viaggi){
        $this->assign('viaggi', $viaggi);
        $this->setLayout('ultimi');
    }
    
    
    /**
     * restituisce il numero della pagina (utilizzato nella visualizzazione dei libri) passato per GET o POST
     * @return int
     */
    public function getPage() {
        if (isset($_REQUEST['page'])) {
            return $_REQUEST['page'];
        } else
            return 0;
    }
    /**
     * restituisce il voto passato tramite GET o POST
     *
     * @return mixed
     */
    public function getVoto() {
        if (isset($_REQUEST['voto'])) {
            return $_REQUEST['voto'];
        } else
            return false;
    }
    
}

?>