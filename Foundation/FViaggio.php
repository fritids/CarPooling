<?php
class FViaggio extends FDatabase{
    public function __construct() {
        $this->_table='viaggio';
        $this->_key='num_viaggio';
        $this->_auto_increment=true;
        $this->_return_class='EViaggio';
        USingleton::getInstance('FDatabase');
    }
    
    public function getUltimoNumViaggio(){
        $query="SELECT `num_viaggio` FROM `viaggio` WHERE `num_viaggio`=(SELECT max(`num_viaggio`) FROM `viaggio`) ORDER BY `num_viaggio`";
        $this->query($query);
        $array=$this->getResultAssoc();
        return $array[0]['num_viaggio'];
    }
    
    public function cercaViaggio($citta_partenza,$citta_arrivo,$data_partenza){
        $query="SELECT `citta_partenza`,`citta_arrivo`,`data_partenza`,`costo`,`posti_disponibili` FROM `viaggio` WHERE `citta_partenza`='$citta_partenza' AND `citta_arrivo`='$citta_arrivo' AND `data_partenza`='$data_partenza'";
        $this->query($query);
        $array=$this->getResultAssoc();
        return $array;
        }
}

?>
