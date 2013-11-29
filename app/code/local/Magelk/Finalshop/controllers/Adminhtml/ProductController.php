<?php
/**
 * Created by PhpStorm.
 * User: gayan
 * Date: 17/11/13
 * Time: 14:28
 */

class Magelk_Finalshop_Adminhtml_ProductController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function massRemoveAction()
    {
        $ids = $this->getRequest()->getParam('product');
        foreach ($ids as $id) {
            try {
                $product = Mage::getModel('magelk_finalshop/product');

                $product->load($id)->delete();
            } catch (Exception $ex) {
                Mage::log("Failed with adjustment ".$ex->getMessage());
            }
        }

        $this->_redirect('*/*/index');
    }

    public function newAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
}