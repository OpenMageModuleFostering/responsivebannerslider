<?php
class Manv_Responsivebannerslider_Model_Mysql4_Responsivebanner extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {
        $this->_init("responsivebannerslider/responsivebanner", "id");
    }
}