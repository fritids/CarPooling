<?php
class FGuidatore extends FDatabase{
    public function __construct() {
        $this->_table='guidatore';
        $this->_key='num_viaggio';
        $this->_return_class='EGuidatore';
        USingleton::getInstance('FDatabase');
    }
}

?>
