<?php
class Indus_Region_Block_Adminhtml_Zone extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        // The blockGroup must match the first half of how we call the block, and controller matches the second half
        // ie. foo_bar/adminhtml_baz
        $this->_blockGroup = 'indus_region';
        $this->_controller = 'adminhtml_zone';
        $this->_headerText = $this->__('zone');

        parent::__construct();
    }
}