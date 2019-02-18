{*
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
*}
<div class="row">
<div class=" col-md-6">
    <div class="panel">
        <div class="panel-heading">
            <i class="icon-user"></i>
            {$customer->firstname}
            {$customer->lastname}
            [{$customer->id|string_format:"%06d"}]
            -
            <a href="mailto:{$customer->email}"><i class="icon-envelope"></i>
                {$customer->email}
            </a>
            <div class="panel-heading-action">
                <a class="btn btn-default" href="{$current|escape:'html':'UTF-8'}&amp;updatecustomer&amp;id_customer={$customer->id|intval}&amp;token={$token|escape:'html':'UTF-8'}&amp;back={$smarty.server.REQUEST_URI|urlencode}">
                    <i class="icon-edit"></i>
                    {l s='Edit' d='Admin.Actions'}
                </a>
            </div>
        </div>
        <p>
            <label class="control-label col-lg-3">{l s='firstname' d='Admin.Global'}</label>:   {$customer->firstname}
        </p>
        <p>
            <label class="control-label col-lg-3">{l s='lastname' d='Admin.Global'}</label>:   {$customer->lastname}
        </p>
        <p>
            <label class="control-label col-lg-3">{l s='email' d='Admin.Global'}</label>:   {$customer->email}
        </p>
        <p>
            <label class="control-label col-lg-3">{l s='birthday' d='Admin.Global'}</label>:   {$customer->birthday}
        </p>
        <p>
            <label class="control-label col-lg-3">{l s='company' d='Admin.Global'}</label>:   {$customer->company}
        </p>
        <p>
            <label class="control-label col-lg-3">{l s='website' d='Admin.Global'}</label>:   {$customer->website}
        </p>
        {*{foreach $detailDevis as $detail}
            <p>{$detail->id_devisservice}</p>
        {/foreach}*}
    </div>
</div>

    <div class=" col-md-6">
        <div class="panel">
            <h3><i class="icon icon-credit-card"></i> {l s='Addresse Du client' mod='devisservice'}</h3>

            {*{foreach $detailDevis as $detail}
                <p>{$detail->id_devisservice}</p>
            {/foreach}*}
        </div>
    </div>


</div>
<div class="panel">
    <h3><i class="icon icon-tags"></i> {l s='Detail du devis Du Service' mod='devisservice'}</h3>
    <p>
        &raquo; {l s='Service' mod='devisservice'} :
        {$detailDevisService->typeservice}
    </p>
    <p>
        <label class="control-label col-lg-8">{l s='Votre localité est-elle alimentée par le courant électrique' mod='devisservice'}</label>: {if $detailDevisService->libelle1}
            <span class="label label-success">
										<i class="icon-check"></i>
                {l s='Oui' d='Admin.Global'}
									</span>
        {else}
            <span class="label label-danger">
										<i class="icon-remove"></i>
                {l s='Non' d='Admin.Global'}
									</span>
        {/if}
    </p>
    <p>
        <label class="control-label col-lg-8">{l s='Votre localité est-elle alimentée par le courant électrique' mod='devisservice'}
        </label>: {if $detailDevisService->libelle1}
            <span class="label label-success">
										<i class="icon-check"></i>
                {l s='Oui' d='Admin.Global'}
									</span>
        {else}
            <span class="label label-danger">
										<i class="icon-remove"></i>
                {l s='Non' d='Admin.Global'}
									</span>
        {/if}
    </p>
    <p>
        <label class="control-label col-lg-8">{l s='Etes-vous victime des coupures intempestives du courant électrique ?' mod='devisservice'}
        </label>: {if $detailDevisService->libelle2}
            <span class="label label-success">
										<i class="icon-check"></i>
                {l s='Oui' d='Admin.Global'}
									</span>
        {else}
            <span class="label label-danger">
										<i class="icon-remove"></i>
                {l s='Non' d='Admin.Global'}
									</span>
        {/if}
    </p>
    <p>
        <label class="control-label col-lg-8">{l s='Combien de temps peut durer une coupure de courant électriques ?' mod='devisservice'}
        </label>:  {$detailDevisService->libelle3['1']}
    </p>
    <p>
        <label class="control-label col-lg-8">{l s='Dans quelle localité vous trouvez vous ?' mod='devisservice'}
        </label>:  {$detailDevisService->libelle4['2']}
    </p>
    <hr>
    <p>
        <label class="control-label col-lg-8">{l s='En cas de délestage quels appareils aimeriez-vous faire fonctionner ?' mod='devisservice'}
        </label>:  {$detailDevisService->libelle5['2']}
    </p>
    {if $detailDevisService->libelle5['2'] eq "ampoule"}
        <p>
            <label class="control-label col-lg-8">{l s='la maison est-elle déjà installé' mod='devisservice'}
            </label>: {if $detailDevisService->libelle5_1}
                <span class="label label-success">
										<i class="icon-check"></i>
                    {l s='Oui' d='Admin.Global'}
									</span>
            {else}
                <span class="label label-danger">
										<i class="icon-remove"></i>
                    {l s='Non' d='Admin.Global'}
									</span>
            {/if}
        </p>
        {if $detailDevisService->libelle5_1}
        <p>
            <label class="control-label col-lg-8">{l s='Si oui combien d’ampoules avez-vous au total ?' mod='devisservice'}
            </label>:  {$detailDevisService->libelle5_1_1['2']}
        </p>
        <p>
            <label class="control-label col-lg-8">{l s='Quelle est puissance moyenne ?' mod='devisservice'}
            </label>:  {$detailDevisService->libelle5_1_2['2']}
        </p>
    {/if}
    {/if}
    {if $detailDevisService->libelle5['2'] eq "television"}
        <p>
            <label class="control-label col-lg-8">{l s='lécran cathodique ou écran plat ?' mod='devisservice'}
            </label>:  {$detailDevisService->libelle5_3_1['2']}
        </p>
        <p>
            <label class="control-label col-lg-8">{l s='Combien en avez-vous ?' mod='devisservice'}
            </label>:  {$detailDevisService->libelle5_3_1['2']}
        </p>
        <p>
            <label class="control-label col-lg-8">{l s='Quelle est la taille (pouce) de chacun d’eux ?' mod='devisservice'}
            </label>:  {$detailDevisService->libelle5_3_2['2']}
        </p>
        <p>
            <label class="control-label col-lg-8">{l s='Quelle est leur puissance globale ?' mod='devisservice'}
            </label>:  {$detailDevisService->libelle5_3_3['2']}
        </p>
    {/if}

    {if $detailDevisService->libelle5["2"] eq "frigo-congelateur"}
        <p>
            <label class="control-label col-lg-8">{l s='de combien de litre ou de quelle taille?' mod='devisservice'}
            </label>:  {$detailDevisService->libelle5_2_1['2']}
        </p>
    {/if}

    {if $detailDevisService->libelle5["2"] eq "ventilateur"}
        <p>
            <label class="control-label col-lg-8">{l s='Combien en avez-vous ?' mod='devisservice'}
            </label>:  {$detailDevisService->libelle5_4_1['2']}
        </p>
        <p>
            <label class="control-label col-lg-8">{l s='Combien aimeriez-vous faire fonctionner en cas de coupure de courant ?' mod='devisservice'}
            </label>:  {$detailDevisService->libelle5_4_2['2']}
        </p>
    {/if}
</div>