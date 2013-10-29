<?php
/**
 * @access public
 * @package Controller
 */
class CRicerca {
     
    private $_viaggi_per_pagina=4;
    
    public function index() {
        $view = USingleton::getInstance('VRicerca');
        $view->setLayout('prova');
        return $view->processaTemplate();
    }
   
    public function ultimiViaggi(){
        $view=USingleton::getInstance('VRicerca');
        $this->_viaggi_per_pagina=4;
        $FViaggio=new FViaggio();
        $limit=4;
        $risultato=$FViaggio->search(array(), '`num_viaggio`', $limit);
        if ($risultato!=false) {
            $array_risultato=array();
            foreach ($risultato as $dato) {
                $viaggio=$FViaggio->load($dato->num_viaggio);
                $array_risultato[]=array_push($array_risultato, $viaggio);
            }
            
        }
        $view->impostaDati('dati',$array_risultato);
        return $view->processaTemplate();
        
    }
    
    public function inserisciViaggio() {
        $session=USingleton::getInstance('USession');
        $username=$session->leggi_valore('username');
        if ($username!=false) {
            $view=Usingleton::getInstance('VRicerca');
            $EViaggio=new EViaggio();
            $EViaggio->citta_partenza=$view->getCittaPartenza();
            $EViaggio->citta_arrivo=$view->getCittaArrivo();
            $EViaggio->data_partenza=$view->getDataPartenza();
            $EViaggio->note=$view->getNote();
            $FViaggio=new FViaggio();
            $FViaggio->store($EViaggio);
            $num_viaggio=$FViaggio->getUltimoNumViaggio();
            return $this->riepilogoViaggio($num_viaggio);
        }
    }
    
    public function riepilogoViaggio($num_viaggio){
            $FViaggio=new FViaggio();
            $viaggio=$FViaggio->load($num_viaggio);
            $view=USingleton::getInstance('VRicerca');
            $view->impostaDati('num_viaggio',$viaggio->num_viaggio);
            $view->impostaDati('citta_partenza',$viaggio->citta_partenza);
            $view->impostaDati('citta_arrivo',$viaggio->citta_arrivo);
            $view->impostaDati('data_partenza',$viaggio->data_partenza);
            $view->impostaDati('note',$viaggio->note);
            $view->setLayout('riepilogo');
            return $view->processaTemplate();
            
     }
     
     public function inserimentoViaggio(){
        $session=USingleton::getInstance('USession');
        $username=$session->leggi_valore('username');
        if ($username!=false) {
            $view=USingleton::getInstance('VRicerca');
            $view->setLayout('inserisci');
     }
        else {
            $view=USingleton::getInstance('VRicerca');
            $view->setLayout('errore');
        }
        return $view->processaTemplate();
     }
     
    
    /**
     * Smista le richieste ai vari metodi
     *
     * @return mixed
     */
    public function smista() {
        $view=USingleton::getInstance('VRegistrazione');
        switch ($view->getTask()) {
            case 'inserimento':
                return $this->inserimentoViaggio();
            case 'inserisci':
                return $this->inserisciViaggio();
        }
    }
}
?>
