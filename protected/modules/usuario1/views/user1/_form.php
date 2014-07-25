
<div class="row-fluid">
    <div class="span12">
        <!-- widget button -->
        <div class="widget border-cyan" id="widget-button">

            <!-- widget header -->
            <div class="widget-header bg-cyan">
                <!-- widget title -->
                <h4 class="widget-title"><i class="aweso-user"></i> Administrar User1s</h4>
                <!-- widget action, you can also use btn, btn-group, nav-tabs or nav-pills (also support dropdown). enjoy! -->
                <div class="widget-action">
                    <button data-toggle="collapse" data-collapse="#widget-button" class="btn">
                        <i class="aweso-chevron-up color-cyan" data-toggle-icon="aweso-chevron-down  aweso-chevron-up"></i>
                    </button>
                </div>
            </div><!-- /widget header -->
            <div class="widget-content form bg-white">
                <?php
                /** @var User1Controller $this */
                /** @var User1 $model */
                /** @var AweActiveForm $form */
                $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
                'id' => 'user1-form',
                'enableAjaxValidation' => true,
                'enableClientValidation'=> false,
                'type'=>'horizontal',
                )); ?>

                <p class="note">
                    <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
                    <?php echo Yii::t('AweCrud.app', 'are required') ?>.                </p>

                <?php echo $form->errorSummary($model) ?>

                                                                            <?php echo $form->textFieldRow($model, 'username', array('maxlength' => 128)) ?>
                                                        <?php echo $form->passwordFieldRow($model, 'password', array('maxlength' => 128)) ?>
                                                        <?php echo $form->textFieldRow($model, 'email', array('maxlength' => 128)) ?>
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
