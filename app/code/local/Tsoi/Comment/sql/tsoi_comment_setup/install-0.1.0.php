<?php

/**
 * @var Mage_Core_Model_Resource_Setup $installer
 */
$installer = $this;

$installer->startSetup();
$installer->run("
CREATE TABLE `{$this->getTable('tsoi_comment/new')}` (
	id INT NULL AUTO_INCREMENT,
	title varchar(100) NULL,
	content text NULL,
	tsoi_comment_status TINYINT(1) NULL,
	created_at DATETIME NULL,
	PRIMARY KEY (`id`)
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8
COLLATE=utf8_general_ci;

");
$installer->endSetup();