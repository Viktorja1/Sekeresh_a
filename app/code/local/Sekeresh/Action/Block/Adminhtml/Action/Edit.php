<?php
class Sekeresh_Action_Block_Adminhtml_Action_Edit
extends Mage_Adminhtml_Block_Widget_Form_Container
{
    protected $_blockGroup = 'sekeresh_action';
    protected $_controller = 'adminhtml_action';

    public function __construct()
    {
        parent::__construct();

        $this->_addButton('saveandcontinue', array('label' => Mage::helper('adminhtml')->__('Save and Continue Edit'),
            'onclick' => "$('save_and_continue').value = 1; editForm.submit();",
            'class' => 'save',
        ), -100);
    }
        public function getFormActionUrl()
    {
        return $this->getUrl('*/*/save', array('id' => $this->_getModel()->getId()));
    }

        protected function _getModel()
    {
        $model = Mage::registry('sekeresh_action');
        return $model;
    }
}