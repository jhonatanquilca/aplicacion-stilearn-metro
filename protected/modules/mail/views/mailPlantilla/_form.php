
<div class="row-fluid">
    <div class="span12">
        <!-- widget button -->
        <div class="widget border-cyan" id="widget-button">

            <!-- widget header -->
            <div class="widget-header bg-cyan">
                <!-- widget title -->
                <h4 class="widget-title"><i class="aweso-user"></i> <?php echo Yii::t('AweCrud.app', 'Create') . ' ' . MailPlantilla::label(); ?></h4>
                <!-- widget action, you can also use btn, btn-group, nav-tabs or nav-pills (also support dropdown). enjoy! -->
                <div class="widget-action">
                    <button data-toggle="collapse" data-collapse="#widget-button" class="btn">
                        <i class="aweso-chevron-up color-cyan" data-toggle-icon="aweso-chevron-down  aweso-chevron-up"></i>
                    </button>
                </div>
            </div><!-- /widget header -->
            <div class="widget-content form bg-white">
                <?php
                /** @var MailPlantillaController $this */
                /** @var MailPlantilla $model */
                /** @var AweActiveForm $form */
                $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
                    'id' => 'mail-plantilla-form',
                    'type' => 'vertical',
                    'enableAjaxValidation' => false,
                    'enableAjaxValidation' => true,
                    'clientOptions' => array('validateOnSubmit' => false, 'validateOnChange' => true,),
                    'enableClientValidation' => false,
                ));
                ?>

                <p class="note">
                    <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
                    <?php echo Yii::t('AweCrud.app', 'are required') ?>.                </p>

                <?php // echo $form->errorSummary($model) ?>

                <div class="control-group">
                    <?php echo $form->labelEx($model, 'nombre', array('class' => 'control-label')); ?>
                    <div class="controls">
                        <?php echo $form->textField($model, 'nombre', array('maxlength' => 64)) ?>
                        <?php echo $form->error($model, 'nombre') ?> 
                    </div>                                           
                </div>

                <?php echo $form->textAreaRow($model, 'mensaje', array('rows' => 3, 'cols' => 50)) ?>
                <?php echo $form->dropDownListRow($model, 'estado', array('ACTIVO' => 'ACTIVO', 'INACTIVO' => 'INACTIVO',)) ?>
                <?php echo $form->textFieldRow($model, 'usuario_creacion_id') ?>
                <?php echo $form->textFieldRow($model, 'usuario_actualizacion_id', array('maxlength' => 45)) ?>
                <div class="form-actions">
                    <?php
                    $this->widget('bootstrap.widgets.TbButton', array(
                        'buttonType' => 'submit',
                        'type' => 'primary',
                        'label' => $model->isNewRecord ? Yii::t('AweCrud.app', 'Create') : Yii::t('AweCrud.app', 'Save'),
                    ));
                    ?>
                    <?php
                    $this->widget('bootstrap.widgets.TbButton', array(
                        //'buttonType'=>'submit',
                        'label' => Yii::t('AweCrud.app', 'Cancel'),
                        'htmlOptions' => array('onclick' => 'javascript:history.go(-1)')
                    ));
                    ?>
                </div>

<?php $this->endWidget(); ?>
            </div>
        </div>
    </div>
</div>
