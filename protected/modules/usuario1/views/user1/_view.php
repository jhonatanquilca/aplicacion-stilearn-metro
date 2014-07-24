<?php
/** @var User1Controller $this */
/** @var User1 $data */
?>
<div class="view">
                    
        <?php if (!empty($data->username)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->username); ?>
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
    </div>