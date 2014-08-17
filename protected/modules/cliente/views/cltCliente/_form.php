
<div class="row-fluid">
    <div class="span12">
        <!-- widget button -->
        <div class="widget border-green" id="widget-button">

            <!-- widget header -->
            <div class="widget-header bg-green">
                <!-- widget title -->
                <h4 class="widget-title"><i class="aweso-user"></i> <?php echo Yii::t('AweCrud.app', $model->isNewRecord ? 'Create' : 'Update') . ' ' . CltCliente::label(); ?></h4>
                <!-- widget action, you can also use btn, btn-group, nav-tabs or nav-pills (also support dropdown). enjoy! -->
                <div class="widget-action">
                    <button data-toggle="collapse" data-collapse="#widget-button" class="btn">
                        <i class="aweso-chevron-down color-green" data-toggle-icon="aweso-chevron-down  aweso-chevron-up"></i>
                    </button>
                </div>
            </div><!-- /widget header -->
            <div class="widget-content form bg-white">
                <?php
                /** @var CltClienteController $this */
                /** @var CltCliente $model */
                /** @var AweActiveForm $form */
                $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
                    'id' => 'clt-cliente-form',
                    'type' => 'horizontal',
                    'enableAjaxValidation' => true,
                    'clientOptions' => array('validateOnSubmit' => true, 'validateOnChange' => false,),
                    'enableClientValidation' => true,
                ));
                ?>

                <p class="note">
                    <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
                    <?php echo Yii::t('AweCrud.app', 'are required') ?>.                
                </p>

                <?php // echo $form->errorSummary($model) ?>


                <!--@TODO: Utilizar la estructura comentada si el formulario es de--> 
                <!--type=vertical caso contrario si es hirizontal no cambia-->


                <?php echo $form->textFieldRow($model, 'nombre', array('maxlength' => 32, 'placeholder' => 'Tu Nombre', 'class' => 'span4')) ?>
                <?php echo $form->textFieldRow($model, 'apellido', array('maxlength' => 32, 'placeholder' => 'Tu Apellido', 'class' => 'span4')) ?>


                <?php echo $form->textFieldRow($model, 'documento', array('maxlength' => 20, 'placeholder' => '100200300-4', 'class' => 'documento span4')) ?>
                <?php // echo $form->textFieldRow($model, 'telefono', array('maxlength' => 24, 'placeholder' => '2-222-222', 'class' => 'telefono span4')) ?>

                <div class="control-group">
                    <?php echo $form->labelEx($model, 'telefono', array('class' => 'control-label')); ?>
                    <div class="controls">
                        <div class="input-prepend   input-prepend-inline span12">
                            <?php echo $form->textField($model, 'telefono', array('maxlength' => 24, 'placeholder' => '2-222-222', 'class' => 'telefono span4')) ?>
                            <span class="add-on prepend ">(06)</span>
                            <?php echo $form->error($model, 'telefono') ?> 
                        </div>                                           
                    </div>                                           
                </div>

                <?php echo $form->textFieldRow($model, 'celular', array('maxlength' => 24, 'placeholder' => '0999999999', 'class' => 'celular span4')) ?>
                <?php echo $form->textFieldRow($model, 'email_1', array('maxlength' => 50, 'placeholder' => 'usuario@ejemplo.com', 'class' => 'span4')) ?>

                <?php echo $form->textFieldRow($model, 'email_2', array('maxlength' => 50, 'class' => 'span4')) ?>





                <?php // echo $form->dropDownListRow($model, 'estado', array('ACTIVO' => 'ACTIVO', 'INACTIVO' => 'INACTIVO',)) ?>
                <?php // echo $form->textFieldRow($model, 'usuario_creacion_id') ?>
                <?php // echo $form->textFieldRow($model, 'usuario_actualizacion_id') ?>
                <div class="form-actions bg-silver">
                    <div class="form-actions-float">

                        <?php
                        $this->widget('bootstrap.widgets.TbButton', array(
                            'buttonType' => 'submit',
                            'type' => 'success',
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
                </div>

                <?php $this->endWidget(); ?>
            </div>
        </div>
    </div>
</div>
