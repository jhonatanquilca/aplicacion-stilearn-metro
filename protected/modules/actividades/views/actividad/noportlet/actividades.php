<?php
//var_dump(empty($pie));
//die();
/** @var ActividadController $this */
/** @var Actividad $model */
Yii::app()->clientScript->scriptMap['jquery.js'] = false;
Yii::app()->clientScript->scriptMap['bootstrap.css'] = false;
Yii::app()->clientScript->scriptMap['bootstrap.js'] = false;
Yii::app()->getClientScript()->registerCssFile(Yii::app()->theme->baseUrl . '/css/timeline-component.css');
?>
<script>
    $(function() {
         $("#widget-tareas").mCustomScrollbar({autoHideScrollbar: null, scrollButtons: {enable: false, scrollSpeed: 100}, theme: 'dark'});
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
        var html =
                '<?php
if (empty($pie)) {
    print
            '<div class="itemSelector">'
            . '<ul class="metro_tmtimeline">'
            . '<li class=" green">'
            . '<div class="metro_tmtime" datetime="2013-04-10 18:30">'
            . '<span class="date">&nbsp;</span>'
            . ' <span class="time">&nbsp;</span>'
            . '</div>'
            . ''
            . '<div class="metro_tmicon">'
            . '<i class="aweso-time"></i>'
            . '</div>'
            . '<div class="metro_tmlabel"><h4><b>Origen de los Tiempos</b></h4></div>'
            . '</li>'
            . '</ul>'
            . '</div>';
}
?>';
        html += '<p class="alert-danger"style="text-align: center; height:30px"><b>No hay mas datos.</b></p>';
        ias.extension(new IASNoneLeftExtension({
//            text: 'No hay mas datos.'
//            html: '<div class="ias-noneleft" style="text-align: center;"><b>No hay mas datos.</b></div>'
//            html: '<p class="alert-danger"style="text-align: center; height:30px"><b>No hay mas datos.</b></p>'
            html: html,
        }));
    })

</script>


<div class="widget-tareas" data-scrollbar="mscroll" data-theme="dark-thick" style="height: <?php echo $paginacion != NULL ? ($paginacion * 47) . 'px' : '470px' ?>; overflow: auto;position: relative; ">
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
