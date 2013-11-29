<?php
/**
 * Created by PhpStorm.
 * User: gayan
 * Date: 17/11/13
 * Time: 14:20
 *
 *
 *  Core product grid.
 */


class Magelk_Finalshop_Block_Adminhtml_Product_Core extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        //  The blockGroup must match the first half of how we call the block, and controller matches the secondhalf
        // ie. foo_bar/adminhtml_baz
        $this->_blockGroup = 'magelk_finalshop';
        $this->_controller = 'adminhtml_product_core';
        $this->_headerText = $this->__('Select Finalshopping products');

        parent::__construct();
        $this->_removeButton('add');
    }
}