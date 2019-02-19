<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 16/02/2019
 * Time: 10:34
 */
require_once _PS_MODULE_DIR_ . 'devisservice/classes/ServiceDevisModel.php';
require_once _PS_MODULE_DIR_ . 'devisservice/classes/DemandeServiceModel.php';

class  DevisServiceservicepompageModuleFrontController extends ModuleFrontController
{
    public function __construct()
    {
        parent::__construct();
        $this->context = Context::getContext();
    }
    /**
     * @see FrontController::initContent()
     */

    public function initContent()
    {
        $notifications = false;
        $parameters = array();
        $this->context->smarty->assign(array(
            'serviceresidentiel' => 'service-residentiel',
            'notifications' => array('message','nw_error'),
            'devis_controller_url' => $this->context->link->getModuleLink('devisservice', 'servicepompage', $parameters)
        ));

        parent::initContent();
        if (Tools::isSubmit('submitpompage')) {
            $this->processService();
            if (!empty($this->context->controller->errors)) {
                $notifications['messages'] = $this->context->controller->errors;
                $notifications['nw_error'] = true;
            } elseif (!empty($this->context->controller->success)) {
                $notifications['messages'] = $this->context->controller->success;
                $notifications['nw_error'] = false;
            }
            $this->context->smarty->assign(array(
                //'orders' => $this->getProducts(),
                'test' => 'reza',
            ));

        }
        $this->setTemplate('module:devisservice/views/templates/front/servicepompage.tpl');

    }

    public function processService()
    {
        $customer = $this->context->customer;

        $devis = new ServiceDevisModel();
        $devisservice = new DemandeServiceModel();
        $devisservice->id_client = $customer->id;
        $devis->libelle1 = (bool)Tools::getValue('forage');
        $devis->libelle1_1 = Tools::getValue('reponeforage');
        $devis->libelle2 = (bool)Tools::getValue('coupureCheckbox1');
        //$devis->libelle2_1=Tools::getValue('localite2');
        $devis->libelle3 = Tools::getValue('qteDeau');
        $devis->libelle4 = Tools::getValue('localite2');
        $devis->libelle5 = Tools::getValue('appareils');
        $devis->libelle5_1 = Tools::getValue('home');
        $devis->libelle5_1_1 = Tools::getValue('rephome1');
        $devis->libelle5_1_2 = Tools::getValue('rephome2');
        $devis->libelle5_2 = Tools::getValue('frigo-congelateur');
        $devis->libelle5_3 = Tools::getValue('televiseur');
        $devis->libelle5_3_1 = Tools::getValue('puissance');
        $devis->libelle5_3_2 = Tools::getValue('televiseur-quantite-prevoir');
        $devis->libelle5_3_3 = Tools::getValue('televiseur-taille');
        $devis->libelle5_4_1 = Tools::getValue('ventillateur-quantite');
        $devis->libelle5_4_2 = Tools::getValue('ventillateur-quantite-prevoir');
        $devis->typeservice = "service-pompage";
        if ($customer == null) {
            $this->context->controller->errors[] = $this->trans(
                'Veullez Vous connetez.',
                [],
                'Shop.Notifications.Error'
            );
        } else {
            $devis->save();

            $sql = 'SELECT id_devisservicemodel as id FROM `' . _DB_PREFIX_ . 'devisservicemodel` ORDER BY id_devisservicemodel DESC LIMIT 1 ';
            $content = Db::getInstance()->executeS($sql);
            foreach ($content as $co) {
                $devisservice->id_devisservicemodel = $co['id'];
                $devisservice->save();
            }

        }

        // $devis->saveDevis();

    }

}