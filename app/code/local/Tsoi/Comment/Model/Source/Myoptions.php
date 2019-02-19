<?php

/**
 * Used in creating options for Yes|No config value selection
 *
 */
class Tsoi_Comment_Model_Source_Myoptions
{
    const ENABLED  = 1;
    const DISABLED = 0;

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => self::ENABLED, 'label' => Mage::helper('tsoi_comment')->__('Enabled')),
            array('value' => self::DISABLED, 'label' => Mage::helper('tsoi_comment')->__('Disabled')),
        );
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return array(
            self::DISABLED => Mage::helper('tsoi_comment')->__('Disabled'),
            self::ENABLED  => Mage::helper('tsoi_comment')->__('Enabled'),
        );
    }

}
