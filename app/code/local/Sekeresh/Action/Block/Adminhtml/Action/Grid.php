<?php
class Sekeresh_Action_Block_Adminhtml_Action_Grid
extends Mage_Adminhtml_Block_Widget_Grid
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

        $this->addColumn('is_active', array(
            'header'    => Mage::helper('sekeresh_action')->__('Is Active'),
            'align'     => 'left',
            'index'     => 'is_active'
        ));

        $this->addColumn('description', array(
            'header'    => Mage::helper('sekeresh_action')->__('Description'),
            'align'     => 'left',
            'index'     => 'description'
        ));

        $this->addColumn('short_description', array(
            'header'    => Mage::helper('sekeresh_action')->__('Short Description'),
            'align'     => 'left',
            'index'     => 'short_description'
        ));

        $this->addColumn('create_datetime', array(
            'header'    => Mage::helper('sekeresh_action')->__('Create Datetime'),
            'align'     => 'left',
            'index'     => 'create_datetime'
        ));

        $this->addColumn('start_datetime', array(
            'header'    => Mage::helper('sekeresh_action')->__('Start Datetime'),
            'align'     => 'left',
            'index'     => 'start_datetime'
        ));

        $this->addColumn('end_datetime', array(
            'header'    => Mage::helper('sekeresh_action')->__('End Datetime'),
            'align'     => 'left',
            'index'     => 'end_datetime'
        ));

        return parent::_prepareColumns();
    }

    protected function _prepareMassaction()
    {
        $this->setMassactionIdField('action_id');
        $this->getMassactionBlock()->setFormFieldName('ids');

        $this->getMassactionBlock()->addItem('delete', array(
            'label' => $this->__('Delete'),
            'url' => $this->getUrl('*/*/massDelete'),
        ));
        return $this;
    }

    public function getRowUrl($row)
    {
        return $this->getUrl('*/*/edit', array('id' => $row->getId()));
    }
}