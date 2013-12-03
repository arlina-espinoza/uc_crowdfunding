<?php 
$gross = uc_currency_format($uc_cfgross, FALSE, TRUE);
$porcentaje = 100 * $uc_cfgross / $uc_cftarget;
$porcentaje = ($porcentaje > 100) ? 100 : $porcentaje;
$porcentaje = ($porcentaje < 0  ) ? 0   : $porcentaje;
?>

<div id="cf-barra-progreso" class="clear caja-sombreada cf-barra-progreso-<?php print $nid; ?>">
    <div class="cf-barra-avance">
        <div class="cf-barra-avance-inner">
            $<?php print $gross; ?> <span><?php print t('raised'); ?></span>
        </div>
    </div>
    <div class="cf-barra-avance-complemento"></div>
</div>

<script type="text/javascript">

var <?php print "porcentaje_$nid"; ?> = <?php print $porcentaje; ?>;

// Cambiar el texto de lo reacudado al lado contrario
if (<?php print "porcentaje_$nid"; ?> < 50){
    var txt = $('#cf-barra-progreso.cf-barra-progreso-<?php print $nid; ?> .cf-barra-avance-inner').html();
    $('#cf-barra-progreso.cf-barra-progreso-<?php print $nid; ?> .cf-barra-avance-complemento').html(txt);
    $('#cf-barra-progreso.cf-barra-progreso-<?php print $nid; ?> .cf-barra-avance-inner').html('');
}

$('#cf-barra-progreso.cf-barra-progreso-<?php print $nid; ?> .cf-barra-avance').animate({ width: <?php print "porcentaje_$nid"; ?> + '%' }, 3000);

</script>