<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 15/02/2019
 * Time: 13:35
 */

class DemandeServiceModel extends ObjectModel
{
    public $id_devisservicemodel;
    public $id_client;
    public static $definition = array(
        'table' => 'devisservice',
        'primary' => 'id_devisservice',
       // 'multilang' => true,
        'fields' => array(
            //'id_shop' =>			array('type' => self::TYPE_NOTHING, 'validate' => 'isUnsignedId'),
            // Lang fields
            'id_client' => array('type' => self::TYPE_INT),
            'id_devisservicemodel'=>array('type' => self::TYPE_INT),
            //'id_service_redentiel'=>array('type' => self::TYPE_INT),
           // 'id_service_backup'=>array('type' => self::TYPE_INT),
            //'id_service_pompage'=>array('type' => self::TYPE_INT),
            //'prix_total'=>array('type' => self::TYPE_FLOAT)
        ),

    );
    public function add($autodate = true, $null_values = false){
        if (!parent::add($autodate, $null_values)) {
            return false;
        }
        return true;
    }
    public function getDevisByID($id_lang = null){
        if (is_null($id_lang))
            $id_lang = (int) Configuration::get('PS_LANG_DEFAULT');

        $sql = 'SELECT d.`id_devisservice`, s.*, c.`firstname` as client
            FROM `' . _DB_PREFIX_ . 'devisservice`d 
            LEFT JOIN `' . _DB_PREFIX_ . 'customer` c ON (d.`id_client` = c.`id_customer`) 
         LEFT JOIN `' . _DB_PREFIX_ . 'devisservicemodel` s ON (s.`id_devisservicemodel` = d.`id_devisservicemodel`) 
         LEFT JOIN `' . _DB_PREFIX_ . 'devisservicemodel_lang` sl ON (s.`id_devisservicemodel` = sl.`id_devisservicemodel`)
         where sl.id_lang='.$id_lang.' and d.id_devisservice='.$this->id_devisservicemodel;



        $content = Db::getInstance()->executeS($sql);

        return $content;
    }
    public function getClient(){
        $client=New Customer($this->id_client);
        return $client;
    }
    public function getService(){
        return new ServiceDevisModel($this->id_devisservicemodel);
    }
    public function getAdresse(){
        $id_ad=Address::getFirstCustomerAddressId($this->id_client);
        return new Address($id_ad);
    }
}