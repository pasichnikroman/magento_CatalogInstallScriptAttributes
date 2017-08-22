<?php

$installer = $this;
$installer->addAttribute(Mage_Catalog_Model_Product::ENTITY, 'product_video_url', array(
    'group'             => 'General',
    'type'              => 'varchar',
    'backend'           => '',
    'frontend'          => '',
    'label'             => 'Product video url',
    'input'             => 'text',
    'class'             => '',
    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_WEBSITE,
    'visible'           => true,
    'required'          => false,
    'user_defined'      => false,
    'searchable'        => false,
    'filterable'        => false,
    'comparable'        => false,
    'visible_on_front'  => true,
    'unique'            => false,
    'apply_to'          => 'simple,configurable,bundle,grouped',
    'is_configurable'   => false,
));