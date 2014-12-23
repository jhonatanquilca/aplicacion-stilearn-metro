<?php
$pieReport = new TxTrasaccionReport;
$pieReport = $pieReport->generatePieReport();
//var_dump($pieReport);
//$datosReporte = max($lineports['series'][0]['data']);
?>
<div class="span5 space10">
    <div class="widget border-black" id="widget-button">

        <!-- widget header -->
        <div class="widget-header bg-black">
            <!-- widget title -->
            <h4 class="widget-title"><i class="aweso-money"></i> <?php echo "Informe de Pagos y Deudas" ?></h4>
            <!-- widget action, you can also use btn, btn-group, nav-tabs or nav-pills (also support dropdown). enjoy! -->
            <div class="widget-action">
                <button data-toggle="collapse" data-collapse="#widget-button" class="btn">
                    <i class="aweso-chevron-up color-black" data-toggle-icon="aweso-chevron-down  aweso-chevron-up"></i>
                </button>
            </div>
        </div><!-- /widget header -->
        <!-- widget content -->
        <div class="widget-content bg-white">
            <?php // if (($datosReporte[0] ) != null): ?>
            <?php
            $this->Widget('ext.highcharts.HighchartsWidget', array(
                'scripts' => array(
                    'modules/exporting', // adds Exporting button/menu to chart
                ),
                'options' => $pieReport
            ));
            ?>
            <?php // endif; ?> 
        </div>
    </div>
</div>