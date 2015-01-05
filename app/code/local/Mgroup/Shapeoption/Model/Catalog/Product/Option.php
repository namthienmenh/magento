<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 12/24/2014
 * Time: 10:35 PM
 */
class Mgroup_Shapeoption_Model_Catalog_Product_Option extends Mage_Catalog_Model_Product_Option
{
    const OPTION_GROUP_SHAPE       = 'shape_option';
    const OPTION_TYPE_SHAPE_TYPE   = 'shape_option_type';
    /**
     * Get group name of option by given option type
     *
     * @param string $type
     * @return string
     */
    public function getGroupByType($type = null)
{
    if (is_null($type)) {
        $type = $this->getType();
    }

    $group = parent::getGroupByType($type);
    if( $group === '' && $type = self::OPTION_TYPE_SHAPE_TYPE ){
        $group = self::OPTION_GROUP_SHAPE;
    }
    return $group;
}
    /**
     * Group model factory
     *
     * @param string $type Option type
     * @return Mage_Catalog_Model_Product_Option_Group_Abstract
     */
    public function groupFactory($type)
{
    if( $type === self::OPTION_TYPE_SHAPE_TYPE ){
        return Mage::getModel('shapeoption/catalog_product_option_type_shapetype');
    }
    return parent::groupFactory($type);
}
}