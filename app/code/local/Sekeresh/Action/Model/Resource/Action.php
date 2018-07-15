<?php
class Sekeresh_Action_Model_Resource_Action extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('sekeresh_action/action', 'id');
    }
}