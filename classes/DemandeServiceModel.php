<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 15/02/2019
 * Time: 13:35
 */

class DemandeServiceModel extends ObjectModel
{
    public $id_service_redentiel;
    public $id_service_pompage;
    public $id_service_backup;
    public $id_client;
    public static $definition = array(
        'table' => 'devisservice',
        'primary' => 'id_devisservice',
        'multilang' => true,
        'fields' => array(
            'id_shop' =>			array('type' => self::TYPE_NOTHING, 'validate' => 'isUnsignedId'),
            // Lang fields
            'id_client' => array('type' => self::TYPE_INT),
            'id_service'=>array('type' => self::TYPE_INT),
            //'id_service_redentiel'=>array('type' => self::TYPE_INT),
           // 'id_service_backup'=>array('type' => self::TYPE_INT),
            //'id_service_pompage'=>array('type' => self::TYPE_INT),
            'prix_total'=>array('type' => self::TYPE_FLOAT)
        ),

    );
    public function add($autodate = true, $null_values = false){
        if (!parent::add($autodate, $null_values)) {
            return false;
        }
        return true;
    }
}