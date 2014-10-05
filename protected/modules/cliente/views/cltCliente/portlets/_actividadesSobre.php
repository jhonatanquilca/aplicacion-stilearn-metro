<?php
Util::tsRegisterAssetJs('_actividadesSobre.js');
?>
<!--<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/metro-splash.js"></script>--> 
<!-- widget button -->
<div class="widget border-indigo" id="widget-button-transaccion">

    <!-- widget header -->
    <div class="widget-header bg-indigo">
        <!-- widget title -->
        <h4 class="widget-title"><i class="aweso-time"></i><?php echo Actividad::label(2) ?>
        </h4>
        <!-- widget action, you can also use btn, btn-group, nav-tabs or nav-pills (also support dropdown). enjoy! -->
        <div class="widget-action">            
            <button data-toggle="collapse" data-collapse="#widget-button-transaccion" class="btn ">
                <i class="aweso-chevron-up color-cyan" data-toggle-icon="aweso-chevron-down  aweso-chevron-up"></i>
            </button>
        </div>
    </div><!-- /widget header -->
    <!-- widget content -->
    <div id="widget-actividades-sobre" class="widget-content bg-white"  style="height:250px" > 

    </div>
</div>

