<?php
/** @var TxTrasaccionController $this */
/** @var TxTrasaccion $data */
?>
<div class="view">
                    
        <?php if (!empty($data->monto_cuota)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('monto_cuota')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->monto_cuota); ?>
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
                
        <?php if (!empty($data->observaciones)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->observaciones); ?>
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
                
        <?php if (!empty($data->cltDeuda->monto)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('clt_deuda_id')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->cltDeuda->monto); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->txDescripcionPalntilla->nombre)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('tx_descripcion_palntilla_id')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->txDescripcionPalntilla->nombre); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>