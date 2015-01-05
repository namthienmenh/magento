<?php
/**
 * Created by PhpStorm.
 * User: nguyen.cap
 * Date: 12/24/2014
 * Time: 2:35 PM
 */
class Mgroup_Shapeoption_Block_Adminhtml_Catalog_Product_Edit_Tab_Options_Option
    extends Mage_Adminhtml_Block_Catalog_Product_Edit_Tab_Options_Option
{
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('shapeoption/catalog/product/edit/options/option.phtml');
    }
    /**
     * Retrieve html templates for different types of product custom options
     *
     * @return string
     */
    public function getTemplatesHtml()
    {
        $canEditPrice = $this->getCanEditPrice();
        $canReadPrice = $this->getCanReadPrice();

        $this->getChild('shape_option_option_type')
            ->setProduct($this->getProduct())
            ->setCanReadPrice($canReadPrice)
            ->setCanEditPrice($canEditPrice);
        $templates = parent::getTemplatesHtml() . "\n" .
            $this->getChildHtml('shape_option_option_type');
        return $templates;
    }
}