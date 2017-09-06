<?php

$installer = $this;
$installer->startSetup();
$connection = $installer->getConnection();

$connection->addIndex(
    $installer->getTable('eav/attribute_option_value'),
    $installer->getIdxName(
        'eav/attribute_option_value',
        ['option_id', 'store_id'],
        Varien_Db_Adapter_Interface::INDEX_TYPE_UNIQUE
    ),
    ['option_id', 'store_id'],
    Varien_Db_Adapter_Interface::INDEX_TYPE_UNIQUE
);

$installer->endSetup();
