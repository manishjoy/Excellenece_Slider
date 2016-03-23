<?php

class Excellence_Slider_Model_Adminhtml_Config_Comment extends Mage_Core_Model_Config_Data
{
    public function getCommentText(Mage_Core_Model_Config_Element $element, $currentValue)
    {
        if($currentValue == 'nivoslider'){
            $result = 'Nivo Slider : http://demo.dev7studios.com/nivo-slider/';
        }elseif($currentValue == 'bxslider'){
            $result = 'BxSlider : http://www.bxslider.com/';
        }elseif($currentValue == 'iscroll'){
            $result = 'IScroll : http://www.cubiq.org/iscroll-5';
        }
        return $result;
    }
}