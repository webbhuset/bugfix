<?php
require_once '../app/Mage.php';
Mage::app();
$coreResource = Mage::getSingleton('core/resource');
$conn         = $coreResource->getConnection('core_read');
$lastId       = -1;
$select       = $conn->select()
    ->from($coreResource->getTableName('sales/order'), 'entity_id')
    ->limit(10000)
    ->where('entity_id > :id');

while (true) {
    $ids = $conn->fetchCol($select, [':id' => $lastId]);
    if (!$ids) {
        break;
    }
    Mage::getModel('sales/order')->getResource()->updateGridRecords($ids);
    $lastId = end($ids);
}
echo "All records updated \n";
