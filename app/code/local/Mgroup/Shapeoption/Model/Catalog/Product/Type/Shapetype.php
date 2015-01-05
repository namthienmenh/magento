<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 12/24/2014
 * Time: 10:38 PM
 */
class Mgroup_Shapeoption_Model_Catalog_Product_Type_Shapetype extends Mage_Catalog_Model_Product_Option_Type_Default
{
    public function isCustomizedView()
    {
        return true;
    }

    public function getCustomizedView($optionInfo)
    {
        $customizeBlock = new Mgroup_Shapeoption_Block_Options_Type_Customview_Shapeoption();
        $customizeBlock->setInfo($optionInfo);
        return $customizeBlock->toHtml();
    }
}