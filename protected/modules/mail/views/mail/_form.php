
<div class="row-fluid">
    <div class="span12">
        <!-- widget button -->
        <div class="widget border-cyan" id="widget-button">

            <!-- widget header -->
            <div class="widget-header bg-cyan">
                <!-- widget title -->
                <h4 class="widget-title"><i class="aweso-user"></i> <?php echo Yii::t('AweCrud.app', 'Create') . ' ' . Mail::label(); ?></h4>
                <!-- widget action, you can also use btn, btn-group, nav-tabs or nav-pills (also support dropdown). enjoy! -->
                <div class="widget-action">
                    <button data-toggle="collapse" data-collapse="#widget-button" class="btn">
                        <i class="aweso-chevron-up color-cyan" data-toggle-icon="aweso-chevron-down  aweso-chevron-up"></i>
                    </button>
                </div>
            </div><!-- /widget header -->
            <div class="widget-content form bg-white">
                <?php
                /** @var MailController $this */
                /** @var Mail $model */
                /** @var AweActiveForm $form */
                $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
                'id' => 'mail-form',
                'enableAjaxValidation' => true,
                'enableClientValidation'=> false,
                'type'=>'horizontal',
                )); ?>

                <p class="note">
                    <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
                    <?php echo Yii::t('AweCrud.app', 'are required') ?>.                </p>

                <?php echo $form->errorSummary($model) ?>

                                                                            <?php echo $form->textFieldRow($model, 'asunto', array('maxlength' => 200)) ?>
                                                        <?php echo $form->textAreaRow($model,'contenido',array('rows'=>3, 'cols'=>50)) ?>
                                                        <?php echo $form->textFieldRow($model, 'email', array('maxlength' => 45)) ?>
                                                                            <?php echo $form->textFieldRow($model, 'fecha_envio') ?>
                                                        <?php echo $form->textFieldRow($model, 'usuario_creacion_id') ?>
                                                        <?php echo $form->dropDownListRow($model, 'estado', array('PENDIENTE' => 'PENDIENTE','ENVIADO' => 'ENVIADO','NO_ENVIADO' => 'NO_ENVIADO',)) ?>
                                                        <?php echo $form->dropDownListRow($model, 'plantilla_id', array('' => ' -- Seleccione -- ') + CHtml::listData(MailPlantilla::model()->findAll(), 'id', MailPlantilla::representingColumn()), array('prompt' => Yii::t('AweApp', 'None'))) ?>
                                                <div class="form-actions">
                                        <?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? Yii::t('AweCrud.app', 'Create') : Yii::t('AweCrud.app', 'Save'),
		)); ?>
                    <?php $this->widget('bootstrap.widgets.TbButton', array(
			//'buttonType'=>'submit',
			'label'=> Yii::t('AweCrud.app', 'Cancel'),
			'htmlOptions' => array('onclick' => 'javascript:history.go(-1)')
		)); ?>
                </div>

                <?php $this->endWidget(); ?>
            </div>
        </div>
    </div>
</div>
