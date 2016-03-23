<?php

class Excellence_Slider_Block_Adminhtml_Slider_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form {

    protected function _prepareForm() {
        $form = new Varien_Data_Form();
        $this->setForm($form);
        $fieldset = $form->addFieldset('slider_form', array('legend' => Mage::helper('slider')->__('Slide information')));
        
        $fieldset->addField('image_name', 'text', array(
            'label' => Mage::helper('slider')->__('Image Name'),
            'class' => 'required-entry',
            'required' => true,
            'name' => 'image_name',
        ));
        
        $fieldset->addField('title', 'text', array(
            'label' => Mage::helper('slider')->__('Caption'),
            'class' => 'required-entry',
            'required' => true,
            'name' => 'title',
        ));

        $fieldset->addField('filename', 'image', array(
            'label' => Mage::helper('slider')->__('File'),
            'required' => true,
            'class' => 'input-file',
            'name' => 'filename',
        ));
        
        $fieldset->addField('image_position', 'text', array(
            'label' => Mage::helper('slider')->__('Image Position'),
            'required' => true,
            'class' => 'required-entry',
            'name' => 'image_position',
        ));
        
        
        $slider = Mage::helper('slider')->getSliderName();
        $fieldset->addField('slider_name', 'select', array(
            'label' => Mage::helper('slider')->__('Show Slides on'),
            'name' => 'slider_name',
            'values' => $slider
        ));
        
        $fieldset->addField('status', 'select', array(
            'label' => Mage::helper('slider')->__('Status'),
            'name' => 'status',
            'values' => array(
                array(
                    'value' => 1,
                    'label' => Mage::helper('slider')->__('Enabled'),
                ),
                array(
                    'value' => 2,
                    'label' => Mage::helper('slider')->__('Disabled'),
                ),
            ),
        ));

        $fieldset->addField('content', 'text', array(
            'name' => 'content',
            'label' => Mage::helper('slider')->__('Url'),
            'title' => Mage::helper('slider')->__('Url'),
            'wysiwyg' => false,
            'required' => true,
        ));
        
        if (Mage::getSingleton('adminhtml/session')->getSliderData()) {
            $form->setValues(Mage::getSingleton('adminhtml/session')->getSliderData());
            Mage::getSingleton('adminhtml/session')->setSliderData(null);
        } elseif (Mage::registry('slider_data')) {
            $form->setValues(Mage::registry('slider_data')->getData());
        }
        return parent::_prepareForm();
    }

}
