<?php

class Excellence_Slider_Block_Slider extends Mage_Core_Block_Template {
    
    public function _construct() {
        parent::_construct();
    }

    public function _prepareLayout() {
        $this->getLayout()->getBlock('head')->addJs('jquery/jquery-2.1.1.min.js');
        $this->getLayout()->getBlock('head')->addJs('jquery/noconflict.js');
        return parent::_prepareLayout();
    }

    public function getSlider() {
        if (!$this->hasData('slider')) {
            $this->setData('slider', Mage::registry('slider'));
        }
        return $this->getData('slider');
    }

}
