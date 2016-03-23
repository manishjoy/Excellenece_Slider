<?php

class Excellence_Slider_Block_Iscroll_Slider extends Mage_Core_Block_Template {

    private $iscrollsliderPosition;
    private $iscrollsliderId;

    public function _prepareLayout() {
        $head = $this->getLayout()->getBlock('root')->getChild('head');
        $head->addJs('iscroll/iscroll.js');
        $head->addCss('css/iscroll/iscroll-slider.css');
        return parent::_prepareLayout();
    }

    public function setSliderData($position, $slider_id) {
        $this->iscrollsliderPosition = $position;
        $this->iscrollsliderId = $slider_id;
    }

    public function getSliderData() {
        $data = array("id" => $this->iscrollsliderId,
            "position" => $this->iscrollsliderPosition);
        return $data;
    }

}
