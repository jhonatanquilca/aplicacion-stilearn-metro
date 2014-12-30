<?php
$lineports = CrugeSession::model()->generateLineReport();
//die(var_dump($lineports));
if ($lineports['series'][0]['data']):
    $datosReporte = max($lineports['series'][0]['data']);
    ?>
    <div class="span7 space10">
        <div class="widget border-cyan" id="widget-button">

            <!-- widget header -->
            <div class="widget-header bg-cyan">
                <!-- widget title -->
                <h4 class="widget-title"><i class="aweso-info"></i> <?php echo "Informe de Sessiones" ?></h4>
                <!-- widget action, you can also use btn, btn-group, nav-tabs or nav-pills (also support dropdown). enjoy! -->
                <div class="widget-action">
                    <button data-toggle="collapse" data-collapse="#widget-button" class="btn">
                        <i class="aweso-chevron-up color-cyan" data-toggle-icon="aweso-chevron-down  aweso-chevron-up"></i>
                    </button>
                </div>
            </div><!-- /widget header -->
            <!-- widget content -->
            <div class="widget-content bg-white">
                <?php if (($datosReporte[0] ) != null): ?>
                    <?php
                    $this->Widget('ext.highcharts.HighchartsWidget', array(
                        'scripts' => array(
                            'modules/exporting', // adds Exporting button/menu to chart
                        ),
                        'options' => $lineports
                    ));
                    ?>
                <?php endif; ?> 
            </div>
        </div>
    </div>
<?php endif; ?> 