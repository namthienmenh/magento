<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Mgroup_Shapeoption_Adminhtml_Block_Catalog_Product_Edit_Tab_Options_Type_Date extends
    Mage_Adminhtml_Block_Catalog_Product_Edit_Tab_Options_Type_Abstract
{
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('shapeoption/catalog/product/edit/options/type/date.phtml');
    }

}
