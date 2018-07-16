<?php
$installer = $this;

$installer->startSetup();

$tableNameActionProduct = $installer->getTable('sekeresh_action/action_product');
$actionTable = $installer->getTable('sekeresh_action/action');
$ProductTable = $installer->getTable('catalog/product');

$table = $installer->getConnection()->newTable($tableNameActionProduct)
    ->addColumn('id',Varien_Db_Ddl_Table::TYPE_INTEGER,NULL,array(
        'identity' => true,
        'primary' => true,
        'unsigned' => true,
        'nullable' => false,
    ),'ID')
    ->addColumn('action_id',Varien_Db_Ddl_Table::TYPE_INTEGER,NULL,array(
        'nullable' => false,
        'primary' => true,
        'unsigned' => true,
    ),'Action ID')
    ->addColumn('product_id',Varien_Db_Ddl_Table::TYPE_INTEGER,NULL,array(
        'nullable' => false,
        'primary' => true,
        'unsigned' => true,
    ), 'Product ID')
    ->addForeignKey('FK_ACT_PRD_ACT','action_id',$actionTable, 'action_id', Varien_Db_Ddl_Table::ACTION_CASCADE, Varien_Db_Ddl_Table::ACTION_CASCADE)
    ->addForeignKey('FK_ACT_PRD_PRD','product_id',$ProductTable, 'entity_id', Varien_Db_Ddl_Table::ACTION_CASCADE, Varien_Db_Ddl_Table::ACTION_CASCADE);

$installer->getConnection()->createTable($table);

$installer->endSetup();