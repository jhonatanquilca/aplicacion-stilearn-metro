<?php
// Prevenir que jquery se cargue dos veces
Yii::app()->clientScript->scriptMap['jquery.js'] = false;
Yii::app()->clientScript->scriptMap['bootstrap.css'] = false;
Yii::app()->clientScript->scriptMap['bootstrap.js'] = false;
/** @var CltDeudaController $this */
/** @var CltDeuda $model */
/** @var AweActiveForm $form */
?>

<?php
$attributes = array();

$attributes = array_merge($attributes, array(
//            'id',

    array(
        'name' => 'monto_cuota',
        'value' => "$ " . number_format($model->monto_cuota, 2, ".", "") . " ctv",
    ),
    'tipo',
        ));

if ($model->usuario_actualizacion_id) {
    $attributes = array_merge($attributes, array(
        array(
            'name' => 'usuario_actualizacion_id',
            'value' => Yii::app()->user->um->loadUserById($model->usuario_actualizacion_id)->username,
        ),
        'fecha_actualizacion',
    ));
} else {
    $attributes = array_merge($attributes, array(
        array(
            'name' => 'usuario_creacion_id',
            'value' => Yii::app()->user->um->loadUserById($model->usuario_creacion_id)->username,
        ),
        'fecha_creacion',
    ));
}

$attributes = array_merge($attributes, array(
//            array(
//                'name' => 'clt_deuda_id',
//                'value' => ($model->cltDeuda !== null) ? CHtml::link($model->cltDeuda, array('/cltDeuda/view', 'id' => $model->cltDeuda->id)) . ' ' : null,
//                'type' => 'html',
//            ),
    array(
        'name' => 'tx_descripcion_palntilla_id',
//        'value' => ($model->txDescripcionPalntilla !== null) ? CHtml::link($model->txDescripcionPalntilla, array('/txDescripcionPalntilla/view', 'id' => $model->txDescripcionPalntilla->id)) . ' ' : null,
        'value' => ($model->txDescripcionPalntilla !== null) ? $model->txDescripcionPalntilla->descripcion : null,
//        'type' => 'html',
    ),
    'observaciones',
        ));
?>


<div class = "modal-header">
    <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">&times;
    </button>
    <h3 id = "sampleModal1"><i class="aweso-dollar"> <?php echo TxTrasaccion::label() . ' #Nº ' . $model->getNumeroTransaccionByDeuda($model->clt_deuda_id, $model->id) ?></i></h3>
</div>
<div class = "modal-body">
    <?php
    $this->widget('bootstrap.widgets.TbDetailView', array(
        'data' => $model,
        'attributes' => $attributes,
    ));
    ?>
</div>
<div class = "modal-footer">

    <?php
    $this->widget('bootstrap.widgets.TbButton', array(
        'icon' => 'remove',
        'label' => Yii::t('AweCrud.app', 'Close'),
        'htmlOptions' => array('data-dismiss' => 'modal')
    ));
    ?>



</div>


