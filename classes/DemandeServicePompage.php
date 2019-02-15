<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 15/02/2019
 * Time: 13:33
 */

class DemandeServicePompage extends ObjectModel
{
    public $id_servicepompage;
    public static $definition = array(
        'table' => 'servicepompage',
        'primary' => 'id_servicepompage',
        'multilang' => true,
        'fields' => array(
            // Lang fields

            'libelle1' => array('type' => self::TYPE_BOOL,'lang' => true),
            'libelle1_1' => array('type' => self::TYPE_STRING,'lang' => true),
            'libelle2' => array('type' => self::TYPE_BOOL,'lang' => true),
            'libelle3' => array('type' => self::TYPE_STRING,'lang' => true),
            'libelle4' => array('type' => self::TYPE_STRING,'lang' => true),
            'libelle5' => array('type' => self::TYPE_STRING,'lang' => true),

        ),

    );
}