<?php
/**
 * Created by Gayan Hewa
 * User: Gayan
 * Date: 10/7/13
 * Time: 9:59 AM
 */

class Magelk_Finalshop_Model_Mysql4_Product extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('magelk_finalshop/product', 'entity_id');
    }
}