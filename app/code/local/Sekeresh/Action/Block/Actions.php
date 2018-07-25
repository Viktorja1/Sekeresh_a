<?php
class Sekeresh_Action_Block_Actions extends Mage_Core_Block_Template implements Mage_Widget_Block_Interface
{
   protected function getCollection()
    {
      /*  $collection = Mage::getModel('sekeresh_action/action')
            ->getCollection();
        $collection->addFieldToFilter('status', 1);
        $collection->addOrder('name');
        var_dump($collection);
        return $collection;*/
    }

    /**
     * Add data to the widget.
     * Retains previous data in the widget.
     *
     * @param array $arr
     * @return Mage_Widget_Block_Interface
     */
    public function addData(array $arr)
    {
        // TODO: Implement addData() method.
    }

    /**
     * Overwrite data in the widget.
     *
     * $key can be string or array.
     * If $key is string, the attribute value will be overwritten by $value.
     * If $key is an array, it will overwrite all the data in the widget.
     *
     * @param string|array $key
     * @param mixed $value
     * @return Varien_Object
     */
    public function setData($key, $value = null)
    {
        // TODO: Implement setData() method.
    }
}