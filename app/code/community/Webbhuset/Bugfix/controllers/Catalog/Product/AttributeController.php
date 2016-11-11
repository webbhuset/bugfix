<?php
/**
 * Attribute Controller for Webbhuset Bugfix
 *
 * @copyright Copyright (C) 2016 Webbhuset AB
 * @author Webbhuset AB <info@webbhuset.se>
 */

require_once 'Mage/Adminhtml/controllers/Catalog/Product/AttributeController.php';

class Webbhuset_Bugfix_Catalog_Product_AttributeController extends Mage_Adminhtml_Catalog_Product_AttributeController
{
	/**
     * Filter post data
     *
     * @param array $data
     * @return array
     */
    protected function _filterPostData($data)
    {
    	if ($data) {
            /** @var $helperCatalog Mage_Catalog_Helper_Data */
            $helperCatalog = Mage::helper('catalog');
            //labels
            foreach ($data['frontend_label'] as & $value) {
                if ($value) {
                    $value = $helperCatalog->stripTags($value);
                }
            }

            $isHtmlAllowedOnFrontend = isset($data['is_html_allowed_on_front'])
                && $data['is_html_allowed_on_front'];

            $allowedTags = $isHtmlAllowedOnFrontend ? 
                sprintf('<%s>', implode('><', $this->_getAllowedTags())) : null;

            if (!empty($data['option']) && !empty($data['option']['value']) && is_array($data['option']['value'])) {
                foreach ($data['option']['value'] as $key => $values) {
                    foreach ($values as $storeKey => $value) {
                        $data['option']['value'][$key][$storeKey] = $helperCatalog->stripTags($value, $allowedTags);
                    }
                }
            }
        }

        return $data;
    }
}