<?php

class Excellence_Slider_Model_Slides extends Varien_Object {

    const TOP_LEFT = "Top Left";
    const BOTTOM_LEFT = "Bottom Left";
    const TOP_CENTER = "Top Center";
    const BOTTOM_CENTER = "Bottom Center";
    const TOP_RIGHT = "Top Right";
    const BOTTOM_RIGHT = "Bottom Right";
    
    const SELECT = "---Select Page---";
    const CMS = "CMS Page";
    const PRODUCT_PAGE = "Product Page";
    const CATEGORY_PAGE = "Category Page";
    const CHECKOUT_PAGE = "Checkout Page";
    const CART_PAGE = "Shopping Cart Page";

    static public function getOptionArray() {
        return array(
            1 => self::TOP_LEFT,
            2 => self::BOTTOM_LEFT,
            3 => self::TOP_CENTER,
            4 => self::BOTTOM_CENTER,
            5 => self::TOP_RIGHT,
            6 => self::BOTTOM_RIGHT
        );
    }
    
    static public function getPagesArray() {
        return array(
            0 => self::SELECT,
            1 => self::CMS,
            2 => self::CATEGORY_PAGE,
            3 => self::PRODUCT_PAGE,
            4 => self::CHECKOUT_PAGE,
            5 => self::CART_PAGE
        );
    }

}
