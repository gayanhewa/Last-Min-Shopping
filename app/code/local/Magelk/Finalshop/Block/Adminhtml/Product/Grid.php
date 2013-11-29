<?php
/**
 * Created by PhpStorm.
 * User: gayan
 * Date: 17/11/13
 * Time: 14:22
 */


class Magelk_Finalshop_Block_Adminhtml_Product_Grid extends Mage_Adminhtml_Block_Widget_Grid
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

        $collection = Mage::getModel('catalog/product')->getCollection()
            ->addAttributeToSelect('sku')
            ->addAttributeToSelect('name')
            ->addAttributeToSelect('attribute_set_id')
            ->addAttributeToSelect('type_id');

        $collection->getSelect()
            ->joinRight(array('product'=>'finalshop_products'), 'e.entity_id = product.product_id', array('product.product_id'));

        $this->setCollection($collection);

        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {
        $this->addColumn('entity_id',
            array(
                'header'=> $this->__('ID'),
                'align' =>'right',
                'index' => 'entity_id'
            )
        );
        $this->addColumn('name',
            array(
                'header'=> $this->__('Name'),
                'align' =>'right',
                'index' => 'name'
            )
        );
        return parent::_prepareColumns();
    }


    //overriden mass actions
    protected function _prepareMassaction()
    {
        $this->setMassactionIdField('entity_id');
        $this->getMassactionBlock()->setFormFieldName('product');

        $this->getMassactionBlock()->addItem('remove', array(
            'label'=> Mage::helper('catalog')->__('Remove'),
            'url'  => $this->getUrl('*/*/massRemove')
        ));

        return $this;
    }


}