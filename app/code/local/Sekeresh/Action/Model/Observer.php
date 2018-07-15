<?php
class Sekeresh_Action_Model_Observer
{
    public function addLinkToTopmenu(Varien_Event_Observer $observer)
    {
        $menu = $observer->getMenu();
        $tree = $menu->getTree();

        $linkNode = new Varien_Data_Tree_Node(array(
            'name' => 'Sekeresh Акції',
            'id' => 'sekeresh_action',
            'url' => Mage::getUrl('sekeresh_action/')
        ), 'id', $tree, $menu);

        $menu->addChild($linkNode);
    }
}