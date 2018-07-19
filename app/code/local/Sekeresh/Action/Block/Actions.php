<?php
class Sekeresh_Action_Block_Actions extends Mage_Core_Block_Template implements Mage_Widget_Block_Interface
{
   protected function getCollection()
    {
        $collection = Mage::getModel('sekeresh_action/action')
            ->getCollection();
        $collection->addFieldToFilter('status', 1);
        $collection->addOrder('name');
        var_dump($collection);
        return $collection;
    }
}