<?php

class Excellence_Slider_Model_Mysql4_Slider extends Mage_Core_Model_Mysql4_Abstract {

    public function _construct() {
        // Note that the slider_id refers to the key field in your database table.
        $this->_init('slider/slider', 'slider_id');
    }

    public function getSliderData($id) {

        $num = 1;
        $table = $this->getMainTable();
        $wheree = $this->_getReadAdapter()->quoteInto("status = ? AND ", $num).$this->_getReadAdapter()->quoteInto("slider_name = ?", $id);
        $selectt = $this->_getReadAdapter()->select()->from($table)->where($wheree)->order('image_position');
        return $sliderData = $this->_getReadAdapter()->fetchAll($selectt);
    }

}
