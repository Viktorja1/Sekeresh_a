<?php
class Sekeresh_Action_Block_Adminhtml_Action_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{

    protected function _prepareForm()
    {
        $model = Mage::registry('sekeresh_action');

        $form = new Varien_Data_Form(
            array('id' => 'edit_form', 'action' => $this->getData('action'), 'method' => 'post')
        );

        $fieldset = $form->addFieldset(
            'base_fieldset',
            array('legend' => Mage::helper('cms')->__('General Information'), 'class' => 'fieldset-wide')
        );

        $fieldset->addField('save_and_continue', 'hidden', array(
            'name' => 'save_and_continue'
        ));

        if ($model->getId()) {
            $fieldset->addField('action_id', 'label', array(
                'name' => 'action_id',
                'label'     => Mage::helper('sekeresh_action')->__('Id'),
                'title'     => Mage::helper('sekeresh_action')->__('Id'),
            ));
        }

        $fieldset->addField('link', 'text', array(
            'name'      => 'link',
            'label'     => Mage::helper('sekeresh_action')->__('Link Url'),
            'title'     => Mage::helper('sekeresh_action')->__('Link Url'),
            'required'  => true,
        ));

        // TODO

        $form->setValues($model->getData());
        $form->setUseContainer(true);
        $this->setForm($form);

        return parent::_prepareForm();
    }
}