<?php
/** @var ActividadController $this */
/** @var Actividad $model */
Yii::app()->getClientScript()->registerCssFile(Yii::app()->theme->baseUrl . '/css/timeline-component.css');
?>
<script>
    $(function() {
//                                         Infinite Ajax Scroll v2.1.2
        var ias = $('div.widget-tareas').ias({
            container: "#lista-infinita",
            item: "div.itemSelector",
            pagination: "div.pagination",
            delay: 1000,
            html: '<img class="preload-mini" src="' + themeUrl + 'img/preload-6-white.gif" alt=""> Espere...',
            next: "#lista-infinita div.pagination ul.yiiPager li.next:not(.disabled):not(.hidden) a",
        });


        ias.extension(new IASSpinnerExtension({
            html: '<div class="ias-spinner" style="text-align: center;"><img class="preload-mini" src=" ' + themeUrl + 'img/preload-6-black.gif" alt=""><br/><b> Espere...</b></div>', // optionally
        }));
        ias.extension(new IASNoneLeftExtension({
//            text: 'No hay mas datos.'
//            html: '<div class="ias-noneleft" style="text-align: center;"><b>No hay mas datos.</b></div>'
            html: '<p class="alert-danger"style="text-align: center; height:30px"><b>No hay mas datos.</b></p>'
        }));
    })

</script>
<div class="row-fluid">
    <div class="span12">
        <!-- widget button -->
        <div class="widget border-black" id="widget-button" >

            <!-- widget header -->
            <div class="widget-header bg-black">
                <!-- widget title -->
                <h4 class="widget-title"><i class="aweso-user"></i> <?php echo Yii::t('app', 'Historial de') ?> <?php echo Actividad::label(2) ?></h4>
                <!-- widget action, you can also use btn, btn-group, nav-tabs or nav-pills (also support dropdown). enjoy! -->
                <div class="widget-action">
                    <button data-toggle="collapse" data-collapse="widget-button" class="btn">
                        <i class="aweso-chevron-up color-cyan" data-toggle-icon="aweso-chevron-down  aweso-chevron-up"></i>
                    </button>
                </div>
            </div><!-- /widget header -->

            <div class="widget-content bg-white"  data-scrollbar="mscroll"  >

                <div class="widget-tareas"  style="height: <?php echo $paginacion != NULL ? ($paginacion * 47) . 'px' : '470px' ?>; overflow: auto;position: relative; ">
                    <?php
                    $this->widget('ext.bootstrap.widgets.TbListView', array(//TODO: crear widget para scrollinfinito   Infinite Ajax Scroll v2.1.2
                        'id' => 'lista-infinita',
                        'dataProvider' => $providerInfinite,
//                            'viewData' => array('model' => $model, 'modal' => false),
                        'itemView' => 'portlets/_actividades',
                        'template' => '{items}{pager}',
                        'htmlOptions' => array(
                            'style' => 'margin-right: 10px; padding-top: 0px !important'
                        ),
                    ));
                    ?>            
                </div>

            </div>
        </div>
    </div>
</div>