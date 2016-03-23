<?php

class Excellence_Slider_Block_Nivo_Slider extends Mage_Core_Block_Template {

    private $nivosliderPosition;
    private $nivosliderId;

    public function _prepareLayout() {
        $head = $this->getLayout()->getBlock('root')->getChild('head');
        $head->addJs('nivo/jquery.nivo.slider.js');
        $head->addCss('css/nivo/nivo-slider.css');
        $head->addCss('images/nivo/default.css');
        return parent::_prepareLayout();
    }

    public function setSliderData($position, $slider_id) {
        $this->nivosliderPosition = $position;
        $this->nivosliderId = $slider_id;
    }

    public function getSliderData() {
        $data = array("id" => $this->nivosliderId,
            "position" => $this->nivosliderPosition);
        return $data;
    }

}
