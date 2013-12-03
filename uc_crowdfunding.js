// $Id$

Drupal.behaviors.uc_crowdfunding = function(context) {
	$('div.column-tabs').tabs('div.column-tabs-container > .column-tabs-tab');
	var api = $('div.column-tabs').data('tabs');
	$('a.view-all-sponsors').click(function(){
		api.click(2);
	});
    
    // Progress bar
    var porcentage = 100 * Drupal.settings.cf_crowdfunding.uc_cfgross / Drupal.settings.cf_crowdfunding.uc_cftarget;
    porcentage = (porcentage > 100) ? 100 : porcentage;
    porcentage = (porcentage < 0  ) ? 0   : porcentage;
    
    // Cambiar el texto de lo reacudado al lado contrario
    if (porcentage < 50){
        var txt = $('#cf-barra-progreso .cf-barra-avance-inner').html();
        $('#cf-barra-progreso .cf-barra-avance-complemento').html(txt);
        $('#cf-barra-progreso .cf-barra-avance-inner').html('');
    }
    
    $('#cf-barra-progreso .cf-barra-avance').animate({ width: porcentage + '%' }, 3000);
    $('.crowdfunding-sponsor-button').click(function() {
        $('.cf-add-to-cart-container').slideDown('slow', function() {
            $('.crowdfunding-sponsor-button').hide();
        });
    });
}