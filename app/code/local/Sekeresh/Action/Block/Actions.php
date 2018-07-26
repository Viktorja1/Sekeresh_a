<?php
class Sekeresh_Action_Block_Actions extends Mage_Core_Block_Template
{
    public function getCollection()
    {

        $productsCollection = Mage::getModel('action/action')->getCollection()
            ->addAttributeToSelect('*')

            ->addAttributeToFilter('status', 1)
            ->addAttributeToSort('is_active', 1 );

        return $productsCollection;
    }
}