<?php

class Excellence_Slider_Block_Adminhtml_Slidermanager_Edit extends Mage_Adminhtml_Block_Widget_Form_Container {

    public function __construct() {
        parent::__construct();

        $this->_objectId = 'id';
        $this->_blockGroup = 'slider';
        $this->_controller = 'adminhtml_slidermanager';

        $this->_updateButton('save', 'label', Mage::helper('slider')->__('Save Item'));
        $this->_updateButton('delete', 'label', Mage::helper('slider')->__('Delete Item'));

        $this->_addButton('saveandcontinue', array(
            'label' => Mage::helper('adminhtml')->__('Save And Continue Edit'),
            'onclick' => 'saveAndContinueEdit()',
            'class' => 'save',
                ), -100);


        $this->_formScripts[] = "
            
            element1 = document.getElementById('slider_display_page');
            subelement_cms = document.getElementById('slider_specific_display_page_cms');
            subelement_category = document.getElementById('slider_specific_display_page_category');
            subelement_product = document.getElementById('slider_specific_display_page_product');
            $(subelement_cms).up(1).hide();
            $(subelement_category).up(1).hide();
            $(subelement_product).up(1).hide();
            
            if(element1.value > 0){
                showchilddropdown(element1);
            }
             
            function toggleEditor() {
                if (tinyMCE.getInstanceById('slider_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'slider_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'slider_content');
                }
            }

            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
            
            function showchilddropdown(element){
                $(subelement_cms).up(1).hide();
                $(subelement_category).up(1).hide();
                $(subelement_product).up(1).hide();
                if(element.value == '1')
                {
                    $(subelement_cms).up(1).show();
                    subelement_category.value = 0;
                    subelement_product.value = 0;
                }else if(element.value == '2')
                {
                    $(subelement_category).up(1).show();
                    subelement_cms.value = 0;
                    subelement_product.value = 0;
                }else if(element.value == '3')
                {
                    $(subelement_product).up(1).show();
                    subelement_category.value = 0;
                    subelement_cms.value = 0;
                }
            }
        ";
    }

    public function getHeaderText() {
        if (Mage::registry('slider_data') && Mage::registry('slider_data')->getId()) {
            return Mage::helper('slider')->__("Edit Item '%s'", $this->htmlEscape(Mage::registry('slider_data')->getTitle()));
        } else {
            return Mage::helper('slider')->__('Add Item');
        }
    }

}
