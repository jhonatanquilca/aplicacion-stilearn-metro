<?php
/** @var ActividadController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'id'); ?>

<?php echo $form->textFieldRow($model, 'entidad_tipo', array('maxlength' => 64)); ?>

<?php echo $form->textFieldRow($model, 'entidad_id'); ?>

<?php echo $form->dropDownListRow($model, 'tipo', array('CREATE' => 'CREATE','UPDATE' => 'UPDATE','DELETE' => 'DELETE',)); ?>

<?php echo $form->textFieldRow($model, 'usuario_id'); ?>

<?php echo $form->textFieldRow($model, 'fecha'); ?>

<?php echo $form->textAreaRow($model,'detalle',array('rows'=>3, 'cols'=>50)); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
