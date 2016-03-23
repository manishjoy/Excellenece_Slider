<?php

class Excellence_Slider_Block_Bxslider_Slider extends Mage_Core_Block_Template {

    private $bxsliderPosition;
    private $bxsliderId;

    public function _prepareLayout() {
        $head = $this->getLayout()->getBlock('root')->getChild('head');
        $head->addJs('bxslider/jquery.bxslider.js');
        $head->addCss('css/bxslider/jquery.bxslider.css');
        return parent::_prepareLayout();
    }

    public function setSliderData($position, $slider_id) {
        $this->bxsliderPosition = $position;
        $this->bxsliderId = $slider_id;
    }

    public function getSliderData() {
        $data = array("id" => $this->bxsliderId,
            "position" => $this->bxsliderPosition);
        return $data;
    }

}
