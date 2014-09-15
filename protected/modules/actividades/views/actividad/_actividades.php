<?php
Yii::app()->getClientScript()->registerCssFile(Yii::app()->theme->baseUrl . '/css/timeline-component.css');
$dataProviderActividades = Actividad::model()->search();
$colors = array('green', 'purple', 'red', 'yellow', 'blue', 'orange', 'gray', 'red', 'purple', 'yellow');
$actividades = $dataProviderActividades->getData();
$pagination = $dataProviderActividades->getPagination();
$countTotalPages = $pagination->pageCount;
?>
<script>
    $pages = <?php echo $countTotalPages ?>;
    $entidad_tipo = '<?php echo $model->tableName() ?>';
    $currentPage = 0;
</script>
<?php
Actividades_Util::registerAssetJsUb('_actividades.js', '\modules\actividades')
//$baseThemeUrl = Yii::app()->baseUrl;
//$cs = Yii::app()->getClientScript();
//$cs->registerScriptFile($baseThemeUrl . '/modules/actividades/assets/js/actividad/_actividades.js');
?>

<div id="panelActivities<?php // echo $model->tableName() . '-' . $model->id; widget-tareas                                                                                                      ?>" class="row-fluid " style="height:300px;overflow-y: scroll">
    <ul id="ulActivities_<?php echo $model->tableName() ?>_page-0" data-page="0" class="metro_tmtimeline ulActivities">
        <?php
        $i = 0;
        foreach ($actividades as $actividad):
            $mensaje = Actividad::getMensaje($actividad['oldValues']);
            ?>
            <li class = "<?php echo $colors[$i] ?>">
                <?php echo $mensaje ?>
            </li>
            <?php
            $i++;
            if ($i == count($colors)) {
                $i = 0;
            }
        endforeach;
        ?>
    </ul>
</div>

