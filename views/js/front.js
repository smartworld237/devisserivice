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
*
* Don't forget to prefix your containers with your own identifier
* to avoid any conflicts with others containers.
*/
$(document).ready(function () {
    var $searchWidget = $('#url');
    //var $searchBox    = $("select[class=dd_select]", $element).val()
    var searchURL     = $searchWidget.attr('data-search-controller-url');
    $('input:radio[name="forage"]').change(function(){
        $('#responseq1').remove();
        if($(this).val() == 'forage1'){
            $('#responseq1').remove();
            $('.besoin').append('<div class="form-group question" id="responseq1"><label>quelle est sa hauteur manométrique totale (profondeur du forage +hauteur\n' +
                'du château)? </label>' +
                '<input id="reponse" type="number" name="reponeforage" class="form-control"/></div></div>');
        }

    });

    $('input:checkbox[name="ampoule"]').click(function(){
       // $('#responseq1').remove();
        $('#quest1').remove();
        $('#questhome').remove();
        $('#questhome1').remove();
        $('#quest_tele4').remove();
        if ( $(this).is( ":checked" ) ){
            $('.contener').append('<div class="question" id="quest1"><label>la maison est-elle déjà installé? </label><div class="form-check form-check-inline">\n' +
                '                    <input name="home" type="radio" value="oui">\n' +
                '                    <label class="form-check-label" for="localiteCheckbox1">oui</label>\n' +
                '                </div>\n' +
                '                <div class="form-check form-check-inline">\n' +
                '                    <input checked="" name="home" type="radio" value="non">\n' +
                '                    <label class="form-check-label" for="localiteCheckbox2">Non</label>\n' +
                '                </div></div>');
            $('input:radio[name="home"]').change(function(){
                $('#questhome').remove();
                $('#questhome1').remove();
                if($(this).val() == 'oui'){
                    $('#questhome').remove();
                    $('#questhome1').remove();
                    $('.contener').append('<div class="form-group question" id="questhome"><label>combien d’ampoules avez-vous au total ? </label>' +
                        '<input id="rephome" name="rephome" class="form-control"/></div>');
                    $('.contener').append('<div class="form-group question" id="questhome1"><label>Quelle est puissance moyenne?(ampoule) </label>' +
                        '<input id="rephome1" name="rephome1" class="form-control"/></div></div>');

                }
            });
        }
        /*  if($(this).val() == 'forage1'){
              $('#responseq1').remove();
              $('.besoin').append('<div class="form-group col-md-6 question" id="responseq1"><label>quelle est sa hauteur manométrique totale (profondeur du forage +hauteur\n' +
                  'du château)? </label>' +
                  '<input id="reponse" type="number" name="reponeforage" class="form-control"/></div></div>');
          }*/

    });
    $('input:checkbox[name="television"]').click(function(){
        $('#quest_tele1').remove();
        $('#quest_tele2').remove();
        $('#quest_tele3').remove();
        $('#quest_tele4').remove();
        if ( $(this).is( ":checked" ) ){
            $('.contener').append('<div class="form-group col-md-6 question" id="quest_tele1"><label>Votre téléviseur écran cathodique ou écran plat ? </label>' +
                '<input id="resp1" class="form-control" name="television-type"/></div>');
            $('.contener').append('<div class="form-group col-md-6 question" id="quest_tele2"><label>Combien en avez-vous ?(téléviseur) </label>' +
                '<input id="resp2" class="form-control" name="television-quantite"/></div>');
            $('.contener').append('<div class="form-group col-md-6 question" id="quest_tele3"><label>Quelle est la taille (pouce) de chacun d’eux ? (téléviseur)</label>' +
                '<input id="resp3" class="form-control" name="television-taille"/></div>');
            $('.contener').append('<div class="form-group col-md-6 question" id="quest_tele4"><label>Quelle est leur puissance globale ? (téléviseur)</label>' +
                '<input id="resp4" class="form-control" name="television-puissance"/></div>');
        }
    });
    $('input:checkbox[name="ventilateur"]').click(function(){
        $('#quest_vent1').remove();
        $('#quest_vent2').remove();
        if ( $(this).is( ":checked" ) ){
            $('.contener').append('<div class="form-group col-md-6 question" id="quest_vent1"><label>Combien en avez-vous ?(ventilateur) </label>' +
                '<input id="respv1" class="form-control" name="ventilateur-quantite"/></div>');
            $('.contener').append('<div class="form-group col-md-6 question" id="quest_vent2"><label>Combien aimeriez-vous faire fonctionner en cas de coupure de courant ?(ventilateur) </label>' +
                '<input id="respv2" class="form-control" name="ventilateur-quantite-prevoir"/></div>');
        }
    });
    $('input:checkbox[name="ordinateur"]').click(function(){
        if ( $(this).is( ":checked" ) ){

        }
    });
    $('input:checkbox[name="radio"]').click(function(){
        if ( $(this).is( ":checked" ) ){

        }
    });
    $('input:checkbox[name="frigo-congelateur"]').click(function(){
        $('#quest_frigo').remove();
        if ( $(this).is( ":checked" ) ){
            $('.contener').append('<div class="form-group question" id="quest_frigo"><label>Combien aimeriez-vous faire fonctionner en cas de coupure de courant ?(frigo ou congelateur) </label>' +
                '<input id="resp1" class="form-control" name="frigo-congelateur-qte"/></div>');

        }
    });
    $('.dd_select').on('change',function(){
        var $searchBox    = $(".dd_select").val();

        if($searchBox == 'ampoule'){
            $('#quest_tele1').remove();
            $('#quest_tele2').remove();
            $('#quest_tele3').remove();
            $('#quest_tele4').remove();
            $('#questhome').remove();
            $('#questhome1').remove();
            $('#quest_vent1').remove();
            $('#quest_vent2').remove();
            $('.contener').append('<div class="col-md-6 question" id="quest1"><label>la maison est-elle déjà installé? </label><div class="form-check form-check-inline">\n' +
                '                    <input name="home" type="radio" value="oui">\n' +
                '                    <label class="form-check-label" for="localiteCheckbox1">oui</label>\n' +
                '                </div>\n' +
                '                <div class="form-check form-check-inline">\n' +
                '                    <input checked="" name="home" type="radio" value="non">\n' +
                '                    <label class="form-check-label" for="localiteCheckbox2">Non</label>\n' +
                '                </div></div>');
            $('input:radio[name="home"]').change(function(){

                if($(this).val() == 'oui'){
                    $('#quest_tele1').remove();
                    $('#quest_tele2').remove();
                    $('#quest_tele3').remove();
                    $('#questhome').remove();
                    $('#questhome1').remove();
                    $('.contener').append('<div class="form-group col-md-6 question" id="questhome"><label>combien d’ampoules avez-vous au total ? </label>' +
                        '<input id="rephome" class="form-control"/></div>');
                    $('.contener').append('<div class="form-group col-md-6 question" id="questhome1"><label>Quelle est puissance moyenne? </label>' +
                        '<input id="rephome1" class="form-control"/></div></div>');

                }
            });
        }else if($searchBox == 'ampoule2'){

        }else if($searchBox == 'television'){
            $('#questhome').remove();
            $('#questhome1').remove();
            $('#quest_tele1').remove();
            $('#quest_tele2').remove();
            $('#quest_tele3').remove();
            $('#quest_tele4').remove();
            $('#quest1').remove();
            $('#quest_vent1').remove();
            $('#quest_vent2').remove();
            $('.contener').append('<div class="form-group col-md-6 question" id="quest_tele1"><label>Votre téléviseur écran cathodique ou écran plat ? </label>' +
                '<input id="resp1" class="form-control" name="televiseur"/></div>');
            $('.contener').append('<div class="form-group col-md-6 question" id="quest_tele2"><label>Combien en avez-vous ? </label>' +
                '<input id="resp1" class="form-control" name="televiseur-quantite"/></div>');
            $('.contener').append('<div class="form-group col-md-6 question" id="quest_tele3"><label>Quelle est la taille (pouce) de chacun d’eux ? </label>' +
                '<input id="resp1" class="form-control" name="televiseur-taille"/></div>');
            $('.contener').append('<div class="form-group col-md-6 question" id="quest_tele4"><label>Quelle est leur puissance globale ? </label>' +
                '<input id="resp1" class="form-control" name="televiseur-puisance"/></div>');
        }else if($searchBox == 'ventilateur'){
            $('#questhome').remove();
            $('#questhome1').remove();
            $('#quest_tele1').remove();
            $('#quest_tele2').remove();
            $('#quest_tele3').remove();
            $('#quest_tele4').remove();
            $('#quest_vent1').remove();
            $('#quest_vent2').remove();
            $('#quest1').remove();
            $('.contener').append('<div class="form-group col-md-6 question" id="quest_vent1"><label>Combien en avez-vous ? </label>' +
                '<input id="resp1" class="form-control" name="ventillateur-quantite"/></div>');
            $('.contener').append('<div class="form-group col-md-6 question" id="quest_vent2"><label>Combien aimeriez-vous faire fonctionner en cas de coupure de courant ? </label>' +
                '<input id="resp1" class="form-control" name="ventillateur-quantite-prevoir"/></div>');

        }else if($searchBox == 'ordinateur'){

        }else if($searchBox == 'radio'){

        }else if($searchBox == 'frigo-congelateur'){
            $('#questhome').remove();
            $('#questhome1').remove();
            $('#quest_tele1').remove();
            $('#quest_tele2').remove();
            $('#quest_tele3').remove();
            $('#quest_tele4').remove();
            $('#quest_vent1').remove();
            $('#quest_vent2').remove();
            $('#quest1').remove();
            $('.contener').append('<div class="form-group col-md-6 question" id="quest_vent2"><label>Combien aimeriez-vous faire fonctionner en cas de coupure de courant ? </label>' +
                '<input id="resp1" class="form-control" name="frigo-congelateur"/></div>');

        }
    });

    $('input:radio[name="postage"]').change(function(){
        if($(this).val() == 'localite2'){
            alert("test");
            // $('.contener').append('</br><div class="col-md-6 question" id="questhome"><label>la maison est-elle déjà installé? </label></div>');
        }
    });

});