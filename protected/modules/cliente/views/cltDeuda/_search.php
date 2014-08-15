<?php
/** @var CltDeudaController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'id'); ?>

<?php echo $form->textFieldRow($model, 'monto'); ?>

<?php echo $form->textFieldRow($model, 'usuario_creacion_id'); ?>

<?php echo $form->textFieldRow($model, 'fecha_creacion'); ?>

<?php echo $form->textFieldRow($model, 'usuario_actualizacion_id'); ?>

<?php echo $form->textFieldRow($model, 'fecha_actualizacion'); ?>

<?php echo $form->dropDownListRow($model, 'clt_cliente_id', array('' => ' -- Seleccione -- ') + CHtml::listData(CltCliente::model()->findAll(), 'id', CltCliente::representingColumn())); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
