<?php
//var_dump($model->attributes);
// Prevenir que jquery se cargue dos veces
Yii::app()->clientScript->scriptMap['jquery.js'] = false;
Yii::app()->clientScript->scriptMap['bootstrap.css'] = false;
Yii::app()->clientScript->scriptMap['bootstrap.js'] = false;

//var_dump($model->attributes);
Util::tsRegisterAssetJs('_form_modal.js');
/** @var CltDeudaController $this */
/** @var CltDeuda $model */
/** @var AweActiveForm $form */
$form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'mail-form',
    'type' => 'horizontal',
    'enableAjaxValidation' => true,
    'clientOptions' => array('validateOnSubmit' => true, 'validateOnChange' => true,),
    'enableClientValidation' => false,
        ));
?>
<div class = "modal-header">
    <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">&times;
    </button>
    <h3 id = "sampleModal1" >
        <i class="aweso-dollar "> 
            <?php echo $model->isNewRecord ? Yii::t('AweCrud.app', 'Create') : Yii::t('AweCrud.app', 'Update'); ?>             
        </i>
    </h3>
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
    <?php echo $form->textFieldRow($model, 'contacto_id', array('maxlength' => 45)) ?>
    <?php echo $form->textFieldRow($model, 'asunto', array('maxlength' => 200)) ?>
    <?php echo $form->textAreaRow($model, 'contenido', array('rows' => 3, 'cols' => 50)) ?>
    <?php echo $form->hiddenField($model, 'email', array('maxlength' => 45)) ?>
    <?php // echo $form->textFieldRow($model, 'fecha_envio') ?>
    <?php echo $form->hiddenField($model, 'usuario_creacion_id') ?>
    <?php // echo $form->dropDownListRow($model, 'estado', array('PENDIENTE' => 'PENDIENTE', 'ENVIADO' => 'ENVIADO', 'NO_ENVIADO' => 'NO_ENVIADO',)) ?>

    <?php // echo $form->dropDownListRow($model, 'plantilla_id', array('' => ' -- Seleccione -- ') + CHtml::listData(MailPlantilla::model()->findAll(), 'id', MailPlantilla::representingColumn()), array('prompt' => Yii::t('AweApp', 'None'))) ?>
</div>
<div class = "modal-footer">
    <?php
    $this->widget('bootstrap.widgets.TbButton', array(
        'type' => 'success',
        'icon' => 'ok',
        'label' => $model->isNewRecord ? Yii::t('AweCrud.app', 'Create') : Yii::t('AweCrud.app', 'Save'),
        'htmlOptions' => array(
            'onClick' => 'js:AjaxAtualizacionInformacion("#mail-form")'
        )
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