<?php
/** @var TxTrasaccionController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'id'); ?>

<?php echo $form->textFieldRow($model, 'monto_cuota'); ?>

<?php echo $form->dropDownListRow($model, 'tipo', array('ADEUDAR' => 'ADEUDAR','PAGAR' => 'PAGAR',)); ?>

<?php echo $form->textAreaRow($model,'observaciones',array('rows'=>3, 'cols'=>50)); ?>

<?php echo $form->textFieldRow($model, 'usuario_creacion_id'); ?>

<?php echo $form->textFieldRow($model, 'fecha_creacion'); ?>

<?php echo $form->textFieldRow($model, 'usuario_actualizacion_id'); ?>

<?php echo $form->textFieldRow($model, 'fecha_actualizacion'); ?>

<?php echo $form->dropDownListRow($model, 'clt_deuda_id', array('' => ' -- Seleccione -- ') + CHtml::listData(CltDeuda::model()->findAll(), 'id', CltDeuda::representingColumn())); ?>

<?php echo $form->dropDownListRow($model, 'tx_descripcion_palntilla_id', array('' => ' -- Seleccione -- ') + CHtml::listData(TxDescripcionPalntilla::model()->findAll(), 'id', TxDescripcionPalntilla::representingColumn()), array('prompt' => Yii::t('AweApp', 'None'))); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
