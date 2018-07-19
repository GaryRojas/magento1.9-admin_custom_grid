<?php
class Indus_Region_Model_Mysql4_Zone extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {
        $this->_init('indus_region/zone', 'id');
    }
}