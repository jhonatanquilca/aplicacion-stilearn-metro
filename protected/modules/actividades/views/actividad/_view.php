<?php
/** @var ActividadController $this */
/** @var Actividad $data */
?>
<div class="view">
                    
        <?php if (!empty($data->entidad_tipo)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('entidad_tipo')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->entidad_tipo); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->entidad_id)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('entidad_id')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->entidad_id); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->tipo)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->tipo); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->usuario_id)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('usuario_id')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->usuario_id); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->fecha)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo Yii::app()->getDateFormatter()->formatDateTime($data->fecha, 'medium', 'medium'); ?>
            <br/>
                 <?php echo date('D, d M y H:i:s', strtotime($data->fecha)); ?>
                            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->detalle)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('detalle')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->detalle); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>