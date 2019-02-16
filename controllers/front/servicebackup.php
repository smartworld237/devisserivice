<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 16/02/2019
 * Time: 10:33
 */
require_once _PS_MODULE_DIR_ . 'devisservice/classes/ServiceDevisModel.php';
require_once _PS_MODULE_DIR_ . 'devisservice/classes/DemandeServiceModel.php';
class  DevisServiceservicebackupModuleFrontController extends ModuleFrontController
{
    /**
     * @see FrontController::initContent()
     */
    public function initContent()
    {
        $parameters = array();
        $this->context->smarty->assign(array(
            //'orders' => $this->getProducts(),
            //'test' => 'reza',
            'serviceresidentiel' => 'service-residentiel',
            'controller' => $this->context->link->getPageLink('service'),
            'devis_controller_url' => $this->context->link->getModuleLink('devisservice', 'service', $parameters)
        ));
        parent::initContent();
        if (Tools::isSubmit('submitservice')) {
            $this->context->smarty->assign(array(
                //'orders' => $this->getProducts(),
                'test' => 'reza',
            ));
            $this->processService();
        }
        if (Tools::getValue('service-backup')) {
            $this->processService();
        }
        $this->setTemplate('module:devisservice/views/templates/front/servicebackup.tpl');

    }

    public function processService()
    {
        $customer = $this->context->customer;

        $devis = new ServiceDevisModel();
        $devisservice = new DemandeServiceModel();
        $devisservice->id_client = $customer->id;
            $devis->libelle1 = Tools::getValue('localite');
            //$devis->libelle1_1=Tools::getValue('coupureCheckbox1');
            $devis->libelle2 = Tools::getValue('coupureCheckbox1');
            //$devis->libelle2_1=Tools::getValue('localite2');
            $devis->libelle3 = Tools::getValue('qte_electrique');
            $devis->libelle4 = Tools::getValue('localite2');
            $devis->libelle5 = Tools::getValue('appareils');
            $devis->libelle5_1 = Tools::getValue('home');
            $devis->libelle5_1_1 = Tools::getValue('rephome1');
            $devis->libelle5_1_2 = Tools::getValue('rephome2');
            $devis->libelle5_2 = Tools::getValue('frigo-congelateur');
            $devis->libelle5_3 = Tools::getValue('televiseur');
            $devis->libelle5_3_1 = Tools::getValue('televiseur-puisance');
            $devis->libelle5_3_2 = Tools::getValue('televiseur-quantite-prevoir');
            $devis->libelle5_3_3 = Tools::getValue('televiseur-taille');
            $devis->libelle5_4_1 = Tools::getValue('ventillateur-quantite');
            $devis->libelle5_4_2 = Tools::getValue('ventillateur-quantite-prevoir');
            $devis->typeserice = "service-backup";
            $devis->save();
        $devisservice->id_service = $devis->id_serviceresidentiel;
        $devisservice->save();

    }

}