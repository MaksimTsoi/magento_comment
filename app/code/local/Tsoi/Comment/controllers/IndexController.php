<?php

class Tsoi_Comment_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function paramsAction()
    {
        foreach ($this->getRequest()->getParams() as $key => $value) {
            echo $key . ' => ' . $value . '</br>';
        }
    }
}
