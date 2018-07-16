<?php
$installer = $this;

$installer->startSetup();
$tableName = $installer->getTable('sekeresh_action/action');

$installer->getConnection()
    ->addColumn($tableName,
        'status',
        array(
            'type' => Varien_Db_Ddl_Table::TYPE_SMALLINT,
            'unsigned' => true,
            'nullable' => false,
            'default' => '1',
            'comment' => 'Status'
        )
    );

$installer->endSetup();