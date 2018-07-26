<?php
class Sekeresh_Action_Adminhtml_ActionController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function newAction()
    {
        $this->_forward('edit');
    }

    public function editAction()
    {
        $id = $this->getRequest()->getParam('id');
        $model = Mage::getModel('sekeresh_action/action')->load($id);

        Mage::register('sekeresh_action', $model);

        $this->loadLayout();
        $this->renderLayout();
    }

    public function saveAction()
    {

        $id = $this->getRequest()->getParam('id');

        $model = null;
        if ($id) {
            $model = Mage::getModel('sekeresh_action/action')->load($id);
        } else {
            $model = Mage::getModel('sekeresh_action/action');
        }

        $data = $this->getRequest()->getPost();
        if (!array_key_exists('status',$data)) {
            $data['status'] = 0;
        }
        $model->addData($data);

        $backToEdit = (bool)$this->getRequest()->getParam('save_and_continue');
        $success = false;
        try {
            $model->save();

            $this->_getSession()->addSuccess($this->__('Action was saved successfully'));
            $success = true;

        }  catch (Exception $e) {
            $this->_getSession()->addError($this->__('Error occurred while saving action'));
            Mage::logException($e);
        }

        if (!$success || $backToEdit) {
            $this->_redirect('*/*/edit', array('id' => $model->getId()));
        } else {
            $this->_redirect('*/*/index');
        }
    }

    public function deleteAction()
    {
        $id = $this->getRequest()->getParam('id');

        // TODO

        $this->_redirect('*/*/index');
    }

    public function massDeleteAction() {

        $ids = $this->getRequest()->getParam('ids', null);
        // TODO

        $this->_redirect('*/*');
    }

    public function categorytabAction() {
        $id = $this->getRequest()->getParam('id');

        $model = null;
        if ($id) {
            $model = Mage::getModel('sekeresh_action/action')->load($id);
        } else {
            $model = Mage::getModel('sekeresh_action/action');
        }

        Mage::register('sekeresh_action', $model);

        $this->loadLayout();
        $this->renderLayout();
    }

    public function categorygridAction() {
        $id = $this->getRequest()->getParam('id');

        $model = null;
        if ($id) {
            $model = Mage::getModel('sekeresh_action/action')->load($id);
        } else {
            $model = Mage::getModel('sekeresh_action/action');
        }

        Mage::register('sekeresh_action', $model);

        $this->loadLayout();
        $this->renderLayout();
    }

    protected function _isAllowed()
    {
        return Mage::getSingleton('admin/session')->isAllowed('admin/sekeresh_action');
    }

}