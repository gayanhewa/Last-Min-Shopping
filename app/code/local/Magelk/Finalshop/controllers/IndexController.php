<?php
/**
 * Created by Gayan Hewa
 * User: Gayan
 * Date: 10/7/13
 * Time: 8:16 PM
 */

class Magelk_Finalshop_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $params = $this->getRequest()->getParams();

        foreach ($params as $param){
            $cart = Mage::getSingleton('checkout/cart');
            $cart->addProduct($param, 1);
            //force _hasDataChanges to true
            $cart->getQuote()->setData('updated', true);
            $cart->save();
            echo "done";
        }
    }

    public function productAction()
    {
        $this->loadLayout();
        $this->renderLayout();;
    }
}