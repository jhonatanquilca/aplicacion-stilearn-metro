<?php
/** @var MailPlantillaController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'id'); ?>

<?php echo $form->textFieldRow($model, 'nombre', array('maxlength' => 64)); ?>

<?php echo $form->textAreaRow($model,'mensaje',array('rows'=>3, 'cols'=>50)); ?>

<?php echo $form->dropDownListRow($model, 'estado', array('ACTIVO' => 'ACTIVO','INACTIVO' => 'INACTIVO',)); ?>

<?php echo $form->textFieldRow($model, 'fecha_creacion'); ?>

<?php echo $form->textFieldRow($model, 'fecha_actualizacion'); ?>

<?php echo $form->textFieldRow($model, 'usuario_creacion_id'); ?>

<?php echo $form->textFieldRow($model, 'usuario_actualizacion_id', array('maxlength' => 45)); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
