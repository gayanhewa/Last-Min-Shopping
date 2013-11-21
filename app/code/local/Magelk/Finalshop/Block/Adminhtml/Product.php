<?php
/**
 * Created by PhpStorm.
 * User: gayan
 * Date: 17/11/13
 * Time: 14:20
 */


class Magelk_Finalshop_Block_Adminhtml_Product extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        // The blockGroup must match the first half of how we call the block, and controller matches the second half
        // ie. foo_bar/adminhtml_baz
        $this->_blockGroup = 'magelk_finalshop';
        $this->_controller = 'adminhtml_product';
        $this->_headerText = $this->__('Select Finalshopping products');

        parent::__construct();
       // $this->_removeButton('add');
    }

    protected function getAddUrl()
    {
        return $this->getUrl('*/core');
    }
}