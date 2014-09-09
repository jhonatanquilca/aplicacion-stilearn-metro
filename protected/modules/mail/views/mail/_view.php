<?php
/** @var MailController $this */
/** @var Mail $data */
?>
<div class="view">
                    
        <?php if (!empty($data->asunto)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('asunto')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->asunto); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->contenido)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('contenido')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo nl2br($data->contenido); ?>
                            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->email)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::mailto($data->email); ?>
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
                
        <?php if (!empty($data->fecha_envio)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('fecha_envio')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo Yii::app()->getDateFormatter()->formatDateTime($data->fecha_envio, 'medium', 'medium'); ?>
            <br/>
                 <?php echo date('D, d M y H:i:s', strtotime($data->fecha_envio)); ?>
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
                
        <?php if (!empty($data->contacto_id)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('contacto_id')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->contacto_id); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->plantilla->nombre)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('plantilla_id')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->plantilla->nombre); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>