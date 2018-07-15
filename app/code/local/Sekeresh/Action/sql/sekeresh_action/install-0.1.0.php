<?php
$installer = $this;

$installer->startSetup();

$tableName = $installer->getTable('sekeresh_action/action');

$table = $installer->getConnection()->newTable($tableName)
    ->addColumn('id',Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity' => true,
        'unsigned' => true,
        'nullable' => false,
        'primary' => true,
    ), 'ID')
    ->addColumn('is_active', Varien_Db_Ddl_Table::TYPE_BOOLEAN,  array( 'nullable' => false), 'is_active')
    ->addColumn('name', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array('nullable' => false), 'name')
    ->addColumn('description', Varien_Db_Ddl_Table::TYPE_TEXT, array('nullable' => false), 'description')
    ->addColumn('short_description', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array('nullable' => false), 'short_description')
    ->addColumn('image', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array('nullable' => false), 'image')
    ->addColumn('create_datetime', Varien_Db_Ddl_Table::TYPE_DATETIME, array('nullable' => false), 'create_datetime')
    ->addColumn('start_datetime', Varien_Db_Ddl_Table::TYPE_DATETIME, array('nullable' => false), 'start_datetime')
    ->addColumn('end_datetime', Varien_Db_Ddl_Table::TYPE_DATETIME, array('nullable' => false), 'end_datetime');


    $installer->getConnection()->createTable($table);
    $installer->endSetup();
