<?php
class Indus_Region_Block_Adminhtml_Zone_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    /**
     * Init class
     */
    public function __construct()
    {
        $this->_blockGroup = 'indus_region';
        $this->_controller = 'adminhtml_zone';

        parent::__construct();

        $this->_updateButton('save', 'label', $this->__('Save Zone'));
        $this->_updateButton('delete', 'label', $this->__('Delete Zone'));
    }

    /**
     * Get Header text
     *
     * @return string
     */
    public function getHeaderText()
    {
        if (Mage::registry('indus_region')->getId()) {
            return $this->__('Edit Zone');
        }
        else {
            return $this->__('New Zone');
        }
    }
}