<?php
/**
 * Created by Gayan Hewa
 * User: Gayan
 * Date: 10/6/13
 * Time: 7:58 PM
 */
/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();

$sql = "
CREATE TABLE IF NOT EXISTS `finalshop_products` (
  `entity_id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `product_id` int NOT NULL
) COMMENT='';
";

$installer->run($sql);

$installer->endSetup();
