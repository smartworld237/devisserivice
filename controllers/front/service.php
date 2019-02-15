<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 14/02/2019
 * Time: 13:51
 */

class DevisServiceServiceModuleFrontController extends ModuleFrontController
{
    /**
     * @see FrontController::initContent()
     */
    public function initContent()
    {  $parameters = array();
        $this->context->smarty->assign(array(
            //'orders' => $this->getProducts(),
            //'test' => 'reza',
            'controller'=>$this->context->link->getPageLink('service'),
            'devis_controller_url' => $this->context->link->getModuleLink('devisservice','service',$parameters)
        ));
        parent::initContent();

        $this->setTemplate('module:devisservice/views/templates/front/servicedevis.tpl');

    }
    public function processServiceResidentiel(){

    }
}