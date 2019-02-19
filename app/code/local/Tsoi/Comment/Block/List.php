<?php

class Tsoi_Comment_Block_List extends Mage_Core_Block_Template
{
    public function getBlocks()
    {
        return Mage::getModel('tsoi_comment/new')->getCollection();
    }
}