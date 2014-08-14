<?php
/** @var MailPlantillaController $this */
/** @var MailPlantilla $data */
?>
<div class="view">
                    
        <?php if (!empty($data->nombre)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->nombre); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->mensaje)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('mensaje')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo nl2br($data->mensaje); ?>
                            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->estado)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->estado); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->fecha_creacion)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('fecha_creacion')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo Yii::app()->getDateFormatter()->formatDateTime($data->fecha_creacion, 'medium', 'medium'); ?>
            <br/>
                 <?php echo date('D, d M y H:i:s', strtotime($data->fecha_creacion)); ?>
                            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->fecha_actualizacion)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('fecha_actualizacion')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo Yii::app()->getDateFormatter()->formatDateTime($data->fecha_actualizacion, 'medium', 'medium'); ?>
            <br/>
                 <?php echo date('D, d M y H:i:s', strtotime($data->fecha_actualizacion)); ?>
                            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->usuario_creacion_id)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('usuario_creacion_id')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->usuario_creacion_id); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->usuario_actualizacion_id)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('usuario_actualizacion_id')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->usuario_actualizacion_id); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>