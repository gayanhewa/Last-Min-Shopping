<?php
/**
 * Created by Gayan Hewa
 * User: Gayan
 * Date: 10/7/13
 * Time: 10:00 AM
 */

class Magelk_Finalshop_Model_Mysql4_Product_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    protected  function _construct()
    {
        $this->_init('finalshop/product');
    }
}