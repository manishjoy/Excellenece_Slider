<?php

class Excellence_Slider_Model_Pages extends Varien_Object {

    const CMS_PAGE = 1;
    const CATEGORY_PAGE = 2;
    const PRODUCT_PAGE = 3;
    const CHECKOUT_PAGE = 4;
    const CART_PAGE = 5;

    static public function getOptionArray() {
        return array(
            self::CMS_PAGE => Mage::helper('slider')->__('CMS Page'),
            self::CATEGORY_PAGE => Mage::helper('slider')->__('Category Page'),
            self::PRODUCT_PAGE => Mage::helper('slider')->__('Product Page'),
            self::CHECKOUT_PAGE => Mage::helper('slider')->__('Checkout Page'),
            self::CART_PAGE => Mage::helper('slider')->__('Cart Page')
        );
    }

}
