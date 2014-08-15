<?php
/** @var CltClienteController $this */
/** @var CltCliente $data */
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
                
        <?php if (!empty($data->apellido)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('apellido')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->apellido); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->documento)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('documento')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->documento); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->telefono)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->telefono); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->celular)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('celular')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->celular); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->email_1)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('email_1')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->email_1); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->email_2)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('email_2')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->email_2); ?>
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
    </div>