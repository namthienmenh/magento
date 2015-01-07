<?php
class Mgroup_RoundPrice_Model_Directory_Currency extends Mage_Directory_Model_Currency
{
    public function convert($price, $toCurrency=null)
    {
        if (is_null($toCurrency)) {
            return $this->round_prices($price);
        }
        elseif ($rate = $this->getRate($toCurrency)) {
            return $this->round_prices($price*$rate);
        }
        throw new Exception(Mage::helper('directory')->__('Undefined rate from "%s-%s".', $this->getCode(), $toCurrency->getCode()));
    }
    public static function round_prices($price) {
        $acc = 0.05;
        $e = 0.0000001;
        $r = floor(($price+$acc-$e)/$acc)*$acc;
        return $r;
    }
}
		