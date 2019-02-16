<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 15/02/2019
 * Time: 14:05
 */

require_once _PS_MODULE_DIR_ . 'devisservice/classes/DemandeServiceModel.php';
class ServiceDevisModel extends ObjectModel
{
    //public $id_serviceresidentiel;
    public $typeservice;
    public $libelle1; public $libelle1_1; public $libelle2; public $libelle3; public $libelle4;
    public $libelle5; public $libelle5_1;
    public $libelle5_1_1; public $libelle5_1_2; public $libelle5_2;public $libelle5_2_1; public $libelle2_1; public $libelle5_3;
    public $libelle5_3_1; public $libelle5_3_2; public $libelle5_3_3; public $libelle5_4;
    public $libelle5_4_1; public $libelle5_4_2;
    public static $definition = array(
        'table' => 'devisservicemodel',
        'primary' => 'id_devisservicemodel',
        'multilang' => true,
        'fields' => array(
            // Lang fields
            'typeservice' => array('type' => self::TYPE_STRING,'lang' => true),
            'libelle1' => array('type' => self::TYPE_BOOL,'lang' => true),
            'libelle1_1' => array('type' => self::TYPE_STRING,'lang' => true),
            'libelle2' => array('type' => self::TYPE_BOOL,'lang' => true),
            'libelle3' => array('type' => self::TYPE_STRING,'lang' => true),
            'libelle4' => array('type' => self::TYPE_STRING,'lang' => true),
            'libelle5' => array('type' => self::TYPE_STRING,'lang' => true),
            'libelle5_1' => array('type' => self::TYPE_BOOL,'lang' => true),
            'libelle5_1_1' => array('type' => self::TYPE_BOOL,'lang' => true),
            'libelle5_1_2' => array('type' => self::TYPE_STRING,'lang' => true),
            'libelle5_2' => array('type' => self::TYPE_BOOL,'lang' => true),
            'libelle5_2_1' => array('type' => self::TYPE_STRING,'lang' => true),
            'libelle5_3' => array('type' => self::TYPE_BOOL,'lang' => true),
            'libelle5_3_1' => array('type' => self::TYPE_STRING,'lang' => true),
            'libelle5_3_2' => array('type' => self::TYPE_STRING,'lang' => true),
            'libelle5_3_3' => array('type' => self::TYPE_STRING,'lang' => true),
            'libelle5_4' => array('type' => self::TYPE_BOOL,'lang' => true),
            'libelle5_4_1' => array('type' => self::TYPE_STRING,'lang' => true),
            'libelle5_4_2' => array('type' => self::TYPE_STRING,'lang' => true),


        ),

    );
public function saveDevis(){
    $customer = Context::getContext()->customer;
    $devis=new DemandeServiceModel();
    $devis->id_client=$customer->id;
    $devis->id_service=$this->id_serviceresidentiel;
    $devis->save();
}
}