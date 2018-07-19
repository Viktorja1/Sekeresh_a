<?php
class Sekeresh_Action_Block_Adminhtml_Action_Grid extends Mage_Adminhtml_Block_Widget_Grid
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
            'header'    => Mage::helper('sekeresh_action')->__('Is_active'),
            'align'     => 'left',
            'index'     => 'is_active',
            'width'     => '10'
        ));

        $this->addColumn('name', array(
            'header'    => Mage::helper('sekeresh_action')->__('Name'),
            'align'     => 'left',
            'index'     => 'Name'
        ));

        $this->addColumn('description', array(
            'header'    => Mage::helper('sekeresh_action')->__('Description'),
            'align'     => 'left',
            'index'     => 'description'
        ));
        $this->addColumn('short_description', array(
            'header'    => Mage::helper('sekeresh_action')->__('Short_description'),
            'align'     => 'left',
            'index'     => 'short_description'
        ));

        $this->addColumn('image', array(
            'header'    => Mage::helper('sekeresh_action')->__('Image'),
            'align'     => 'left',
            'index'     => 'image'
        ));

        $this->addColumn('create_datetime', array(
            'header'    => Mage::helper('sekeresh_action')->__('Create_datetime'),
            'align'     => 'left',
            'index'     => 'create_datetime'
        ));
        $this->addColumn('start_datetime', array(
            'header'    => Mage::helper('sekeresh_action')->__('start_datetime'),
            'align'     => 'left',
            'index'     => 'start_datetime'
        ));

        $this->addColumn('end_datetime', array(
            'header'    => Mage::helper('sekeresh_action')->__('End_datetime'),
            'align'     => 'left',
            'index'     => 'end_datetime'
        ));
        $this->addColumn('status', array(
            'header'    => Mage::helper('sekeresh_action')->__('Status'),
            'align'     => 'left',
            'index'     => 'status'
        ));

        // TODO

        return parent::_prepareColumns();
    }

    public function getRowUrl($row)
    {
        return $this->getUrl('*/*/edit', array('id' => $row->getId()));
    }
}