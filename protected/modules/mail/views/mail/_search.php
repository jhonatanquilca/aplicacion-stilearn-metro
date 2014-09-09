<?php
/** @var MailController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'id'); ?>

<?php echo $form->textFieldRow($model, 'asunto', array('maxlength' => 200)); ?>

<?php echo $form->textAreaRow($model,'contenido',array('rows'=>3, 'cols'=>50)); ?>

<?php echo $form->textFieldRow($model, 'email', array('maxlength' => 45)); ?>

<?php echo $form->textFieldRow($model, 'fecha_creacion'); ?>

<?php echo $form->textFieldRow($model, 'fecha_envio'); ?>

<?php echo $form->textFieldRow($model, 'usuario_creacion_id'); ?>

<?php echo $form->dropDownListRow($model, 'estado', array('PENDIENTE' => 'PENDIENTE','ENVIADO' => 'ENVIADO','NO_ENVIADO' => 'NO_ENVIADO',)); ?>

<?php echo $form->textFieldRow($model, 'contacto_id', array('maxlength' => 45)); ?>

<?php echo $form->dropDownListRow($model, 'plantilla_id', array('' => ' -- Seleccione -- ') + CHtml::listData(MailPlantilla::model()->findAll(), 'id', MailPlantilla::representingColumn()), array('prompt' => Yii::t('AweApp', 'None'))); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
