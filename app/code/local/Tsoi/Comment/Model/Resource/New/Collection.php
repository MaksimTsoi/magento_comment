<?php


class Tsoi_Comment_Model_Resource_New_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    /**
     * Initialise collection
     */
    protected function _construct()
    {
        $this->_init('tsoi_comment/new');
    }
}