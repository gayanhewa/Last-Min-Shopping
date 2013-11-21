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
}