<?php
// Prevenir que jquery se cargue dos veces
Yii::app()->clientScript->scriptMap['jquery.js'] = false;
Yii::app()->clientScript->scriptMap['bootstrap.css'] = false;
/** @var CltDeudaController $this */
/** @var CltDeuda $model */
/** @var AweActiveForm $form */
$form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'clt-deuda-form',
    'type' => 'horizontal',
//    'action' => Yii::app()->createUrl('/cliente/cltDeuda/create'),
    'enableAjaxValidation' => true,
    'clientOptions' => array('validateOnSubmit' => false, 'validateOnChange' => true,),
    'enableClientValidation' => false,
        ));
?>
<div class = "modal-header">
    <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">&times;
    </button>
    <h3 id = "sampleModal1">Modal Heading</h3>
</div>
<div class = "modal-body">
    <p class="note">
        <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
        <?php echo Yii::t('AweCrud.app', 'are required') ?>.                </p>

    <?php echo $form->errorSummary($model) ?>

    <!--@TODO: Utilizar la estructura comentada si el formulario es de--> 
    <!--type=vertical caso contrario si es hirizontal no cambia-->
    <!--                <div class="control-group">
    <?php // echo $form->labelEx($model, 'nombre', array('class' => 'control-label')); ?>
                        <div class="controls">
    <?php // echo $form->textField($model, 'nombre', array('maxlength' => 64)) ?>
    <?php // echo $form->error($model, 'nombre') ?> 
                        </div>                                           
                    </div>-->

    <?php echo $form->textFieldRow($model, 'monto') ?>
    <?php echo $form->textFieldRow($model, 'usuario_creacion_id') ?>
    <?php echo $form->textFieldRow($model, 'usuario_actualizacion_id') ?>
    <?php echo $form->dropDownListRow($model, 'clt_cliente_id', array('' => ' -- Seleccione -- ') + CHtml::listData(CltCliente::model()->findAll(), 'id', CltCliente::representingColumn())) ?>
</div>
<div class = "modal-footer">
    <?php
    $this->widget('bootstrap.widgets.TbButton', array(
        'type' => 'success',
        'icon' => 'ok',
        'label' => $model->isNewRecord ? Yii::t('AweCrud.app', 'Create') : Yii::t('AweCrud.app', 'Save'),
        'htmlOptions' => array(
            'onClick' => 'js:AjaxAtualizacionInformacion("#clt-deuda-form")')
    ));
    ?>
    <?php
    $this->widget('bootstrap.widgets.TbButton', array(
        'icon' => 'remove',
        'label' => Yii::t('AweCrud.app', 'Cancel'),
        'htmlOptions' => array('data-dismiss' => 'modal')
    ));
    ?>

</div>

<?php $this->endWidget(); ?>
          