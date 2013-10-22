<?php
class FVeicolo extends FDatabase{
    public function __construct() {
        $this->_table='veicolo';
        $this->_key='targa';
        $this->_return_class='EVeicolo';
        USingleton::getInstance('FDatabase');
    }
}

?>
