<?php
/**
* 2007-2019 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2019 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/
$sql = array();

$sql[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'devisservice` (
    `id_devisservice` int(11) NOT NULL AUTO_INCREMENT,
     `id_devisservicemodel` int(11) NOT NULL,
      `id_client` int(11) NOT NULL,
    PRIMARY KEY  (`id_devisservice`)
) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8;';

$sql[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'devisservicemodel` (
    `id_devisservicemodel` int(11) NOT NULL AUTO_INCREMENT,
      `typeservice` text NOT NULL,
      `libelle1` tinyint(1) UNSIGNED NOT NULL DEFAULT "1",
  `libelle2` tinyint(1) UNSIGNED NOT NULL DEFAULT "1",
  `libelle5_1` tinyint(1) UNSIGNED NOT NULL DEFAULT "1",
  `libelle5_1_1` tinyint(1) UNSIGNED NOT NULL DEFAULT "1",
  `libelle5_2` tinyint(1) UNSIGNED NOT NULL DEFAULT "1",
  `libelle5_3` tinyint(1) UNSIGNED NOT NULL DEFAULT "1",
  `libelle5_4` tinyint(1) UNSIGNED NOT NULL DEFAULT "1",
    PRIMARY KEY  (`id_devisservicemodel`)
    
) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8;';


$sql[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'devisservicemodel_lang` (
  `id_devisservicemodel` int(11) NOT NULL auto_increment,
  `id_lang` int(11) NOT NULL ,
  `libelle3` text NOT NULL,
  `libelle4` text NOT NULL,
  `libelle5` text NOT NULL,
  `libelle5_1_2` text NOT NULL,
  `libelle5_2_1` text NOT NULL,
  `libelle5_3_1` text NOT NULL,
  `libelle5_3_2` text NOT NULL,
  `libelle5_3_3` text NOT NULL,
  `libelle5_4_1` text NOT NULL,
  `libelle5_4_2` text NOT NULL,
  `libelle1_1` text NOT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP ,
  `modified` datetime DEFAULT CURRENT_TIMESTAMP ,
  PRIMARY KEY (`id_devisservicemodel`,`id_lang`)
) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8';
foreach ($sql as $query) {
    if (Db::getInstance()->execute($query) == false) {
        return false;
    }
}
