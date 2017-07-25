<?php

$installer = $this;
$installer->startSetup();
$connection = $installer->getConnection();

$connection->addIndex(
    $installer->getTable('eav/entity_store'),
    $installer->getIdxName(
        'eav/entity_store',
        ['entity_type_id', 'store_id'],
        Varien_Db_Adapter_Interface::INDEX_TYPE_UNIQUE
    ),
    ['entity_type_id', 'store_id'],
    Varien_Db_Adapter_Interface::INDEX_TYPE_UNIQUE
);

$installer->endSetup();
