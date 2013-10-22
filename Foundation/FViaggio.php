<?php
class FViaggio extends FDatabase{
    public function __construct() {
        $this->_table='viaggio';
        $this->_key='num_viaggio';
        $this->_return_class='EViaggio';
        USingleton::getInstance('FDatabase');
    }
}

?>
