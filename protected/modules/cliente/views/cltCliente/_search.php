<?php
/** @var CltClienteController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'id'); ?>

<?php echo $form->textFieldRow($model, 'nombre', array('maxlength' => 32)); ?>

<?php echo $form->textFieldRow($model, 'apellido', array('maxlength' => 32)); ?>

<?php echo $form->textFieldRow($model, 'documento', array('maxlength' => 20)); ?>

<?php echo $form->textFieldRow($model, 'telefono', array('maxlength' => 24)); ?>

<?php echo $form->textFieldRow($model, 'celular', array('maxlength' => 24)); ?>

<?php echo $form->textFieldRow($model, 'email_1', array('maxlength' => 255)); ?>

<?php echo $form->textFieldRow($model, 'email_2', array('maxlength' => 255)); ?>

<?php echo $form->dropDownListRow($model, 'estado', array('ACTIVO' => 'ACTIVO','INACTIVO' => 'INACTIVO',)); ?>

<?php echo $form->textFieldRow($model, 'usuario_creacion_id'); ?>

<?php echo $form->textFieldRow($model, 'usuario_actualizacion_id'); ?>

<?php echo $form->textFieldRow($model, 'fecha_creacion'); ?>

<?php echo $form->textFieldRow($model, 'fecha_actualizacion'); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
