<?php
class FPasseggero extends FDatabase{
    private $_double_key=array();
    
    public function __construct() {
        $this->_table='passeggero';
        $this->_double_key[]=array('key1'=>'username', 'key2'=>'num_viaggio');
        $this->_return_class='EPasseggero';
        USingleton::getInstance('FDatabase');
    }
    
    
/**
     * Carica in un oggetto lo stato dal database
     *
     * @param mixed $key
     * @return boolean
     */    
    public function load($key1,$key2) {
        $query='SELECT * ' .
                'FROM `'.$this->_table.'` ' .
                'WHERE `'.$this->_double_key['key1'].'` = \''.$key1.'\' AND ' .$this->_double_key['key2'].'` = \''.$key2.'\'';
        $this->query($query);
        return $this->getObject();
    }
    
     /**
     * Cancella dal database lo stato di un oggetto
     *
     * @param object $object
     * @return boolean
     */
    public function delete(& $object) {
        $arrayObject=get_object_vars($object);
        $query='DELETE ' .
                'FROM `'.$this->_table.'` ' .
                'WHERE `'.$this->_double_key['key1'].'` = \''.$arrayObject[$this->_double_key['key1']].'\' AND '
                .$this->_double_key['key2'].'` = \''.$arrayObject[$this->_double_key['key2']].'\'';
        unset($object);
        return $this->query($query);
    }
    
}

?>
