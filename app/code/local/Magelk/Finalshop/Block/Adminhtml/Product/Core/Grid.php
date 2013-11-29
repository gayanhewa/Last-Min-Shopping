<?php
/**
 * Created by PhpStorm.
 * User: gayan
 * Date: 17/11/13
 * Time: 14:22
 */


class Magelk_Finalshop_Block_Adminhtml_Product_Core_Grid extends Mage_Adminhtml_Block_Catalog_Product_Grid
{
    public function __construct()
    {
        parent::__construct();

        // Set some defaults for our grid
        $this->setDefaultSort('entity_id');
        $this->setId('magelk_charity_prod_grid_2');
        $this->setDefaultDir('asc');
        $this->setSaveParametersInSession(true);
        $this->setUseAjax(false);
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

    public function getRowUrl($row)
    {
        // This is where our row data will link to
        return $this->getUrl('*/*/edit', array('id' => $row->getId()));
    }

    //overriden mass actions
    protected function _prepareMassaction()
    {
        $this->setMassactionIdField('entity_id');
        $this->getMassactionBlock()->setFormFieldName('product');

        $this->getMassactionBlock()->addItem('assign', array(
            'label'=> Mage::helper('catalog')->__('Add Last Min. Shopping List'),
            'url'  => $this->getUrl('*/*/massAssign')
            )
        );

        return $this;
    }

    public function getGridUrl()
    {
        return $this->getUrl('*/*/index', array('_current'=>true));
    }

}