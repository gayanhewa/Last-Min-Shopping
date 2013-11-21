<?php
/**
 * Created by PhpStorm.
 * User: gayan
 * Date: 17/11/13
 * Time: 14:22
 */


class Magelk_Finalshop_Block_Adminhtml_Product_Grid extends Mage_Adminhtml_Block_Catalog_Product_Grid
{
    public function __construct()
    {
        parent::__construct();

        // Set some defaults for our grid
        $this->setDefaultSort('entity_id');
        $this->setId('magelk_finalshop_prod_grid');
        $this->setDefaultDir('asc');
        $this->setSaveParametersInSession(true);
    }

    protected function _getCollectionClass()
    {
        // This is the model we are using for the grid
        return 'catalog/product_collection';
    }

    protected function _prepareCollection()
    {
        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {
        return parent::_prepareColumns();
    }


    //overriden mass actions
    protected function _prepareMassaction()
    {
        $this->setMassactionIdField('entity_id');
        $this->getMassactionBlock()->setFormFieldName('product');

        $this->getMassactionBlock()->addItem('assign', array(
            'label'=> Mage::helper('catalog')->__('Assign Org'),
            'url'  => $this->getUrl('*/*/massAssign')
        ));

        return $this;
    }


}