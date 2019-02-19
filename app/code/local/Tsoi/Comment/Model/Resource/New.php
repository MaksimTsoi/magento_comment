<?php

class Tsoi_Comment_Model_Resource_New extends Mage_Core_Model_Resource_Db_Abstract
{
    /**
     * Initialise resource
     */
    protected function _construct()
    {
        $this->_init('tsoi_comment/new', 'id');
    }
}