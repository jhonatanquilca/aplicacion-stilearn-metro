<?php
// Prevenir que jquery se cargue dos veces
Yii::app()->clientScript->scriptMap['jquery.js'] = false;
Yii::app()->clientScript->scriptMap['bootstrap.css'] = false;
/** @var CltDeudaController $this */
/** @var CltDeuda $model */
/** @var AweActiveForm $form */
$form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'tx-trasaccion-form',
    'type' => 'horizontal',
    'enableAjaxValidation' => true,
    'clientOptions' => array('validateOnSubmit' => false, 'validateOnChange' => true,),
    'enableClientValidation' => false,
        ));
?>
<div class = "modal-header">
    <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">&times;
    </button>
    <h3 id = "sampleModal1"><i class="aweso-dollar"> <?php echo TxTrasaccion::label() ?></i></h3>
</div>
<div class = "modal-body">
    <?php
    $this->widget('bootstrap.widgets.TbDetailView', array(
        'data' => $model,
        'attributes' => array(
            'id',
            'monto_cuota',
            'tipo',
            'observaciones',
            'usuario_creacion_id',
            'fecha_creacion',
            'usuario_actualizacion_id',
            'fecha_actualizacion',
            array(
                'name' => 'clt_deuda_id',
                'value' => ($model->cltDeuda !== null) ? CHtml::link($model->cltDeuda, array('/cltDeuda/view', 'id' => $model->cltDeuda->id)) . ' ' : null,
                'type' => 'html',
            ),
            array(
                'name' => 'tx_descripcion_palntilla_id',
                'value' => ($model->txDescripcionPalntilla !== null) ? CHtml::link($model->txDescripcionPalntilla, array('/txDescripcionPalntilla/view', 'id' => $model->txDescripcionPalntilla->id)) . ' ' : null,
                'type' => 'html',
            ),
        ),
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

<?php $this->endWidget(); ?>
          