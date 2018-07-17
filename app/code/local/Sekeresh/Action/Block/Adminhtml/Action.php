<?php
 class Sekeresh_Action_Block_Adminhtml_Action extends Mage_Adminhtml_Block_Widget_Grid_Container
 {
     protected $_blockGroup = 'sekeresh_action';
     protected $_controller = 'adminhtml_action';

     protected function _construct()
     {
         parent::_construct();
         $helper = Mage::helper('sekeresh_action');
         $this->_headerText = $helper->__('Sekeresh Action');
     }
 }