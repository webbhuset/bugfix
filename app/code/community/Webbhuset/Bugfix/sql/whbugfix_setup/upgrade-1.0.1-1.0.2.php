<?php
Mage::getModel('sales/order')->getResource()->updateGridRecords(
    Mage::getResourceModel('sales/order_collection')->getAllIds()
);
