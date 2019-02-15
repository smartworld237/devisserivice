<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 15/02/2019
 * Time: 13:34
 */

class DemandeServiceBakup extends ObjectModel
{
    public $id_servicebakup;
    public static $definition = array(
        'table' => 'servicebakup',
        'primary' => 'id_servicebakup',
        'multilang' => true,
        'fields' => array(
            // Lang fields

            'libelle1' => array('type' => self::TYPE_BOOL,'lang' => true),
            'libelle2' => array('type' => self::TYPE_BOOL,'lang' => true),
            'libelle3' => array('type' => self::TYPE_STRING,'lang' => true),
            'libelle4' => array('type' => self::TYPE_STRING,'lang' => true),
            'libelle5' => array('type' => self::TYPE_BOOL,'lang' => true),
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
}