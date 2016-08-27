<?php

$installer = $this;
$installer->startSetup();
$connection = $installer->getConnection();

/**
 * Remove UNSIGNED from `position` column. This fixes an issue with category position.
 */
$anchorTmpTables = array(
    $installer->getTable('catalog/category_anchor_products_indexer_idx'),
    $installer->getTable('catalog/category_anchor_products_indexer_tmp'),
);

foreach ($anchorTmpTables as $table) {
    $connection->modifyColumn(
        $table,
        'position',
        array(
            'type'      => Varien_Db_Ddl_Table::TYPE_INTEGER,
            'unsigned'  => false,
        )
    );
}


$installer->endSetup();
