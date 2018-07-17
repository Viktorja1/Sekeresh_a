<?php
class Sekeresh_Action_Block_Adminhtml_Action_Grid extends Mage_Core_Block_Widget_Grid
{
    protected function _prepareCollection()
    {
        $collection = Mage::getModel('sekeresh_action/action')->getCollection();

        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {
        $this->addColumn('action_id', array(
            'header'    => Mage::helper('sekeresh_action')->__('Action Id'),
            'align'     => 'left',
            'index'     => 'action_id',
            'width'     => '10'
        ));

        $this->addColumn('product_id', array(
            'header'    => Mage::helper('sekeresh_action')->__('Link'),
            'align'     => 'left',
            'index'     => 'link'
        ));

        // TODO

        return parent::_prepareColumns();
    }

    public function getRowUrl($row)
    {
        return $this->getUrl('*/*/edit', array('id' => $row->getId()));
    }
}