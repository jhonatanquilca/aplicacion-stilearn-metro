<?php
/**
 * The following variables are available in this template:
 * - $this: the BootCrudCode object
 */
/** @var AweCrudCode $this */
?>
<?php echo "<?php\n" ?>
/** @var <?php echo $this->controllerClass; ?> $this */
/** @var <?php echo $this->modelClass; ?> $model */
/** @var AweActiveForm $form */
$form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
'id' => '<?php echo $this->class2id($this->modelClass) ?>-form',
'type'=>'horizontal',                
'enableAjaxValidation' => <?php echo $this->validation == 1 || $this->validation == 3 ? 'true' : 'false' ?>,
'clientOptions' => array('validateOnSubmit' => <?php echo $this->validation == 2 || $this->validation == 3 ? 'true' : 'false' ?>, 'validateOnChange' => <?php echo $this->validation == 1 || $this->validation == 3 ? 'true' : 'false' ?>,),
'enableClientValidation' => <?php echo $this->validation == 2 || $this->validation == 3 ? 'true' : 'false' ?>,

)); ?>
<div class="row-fluid">
    <div class="span12">
        <!-- widget button -->
        <div class="widget border-cyan" id="widget-button">

            <!-- widget header -->
            <div class="widget-header bg-cyan">
                <!-- widget title -->
                <h4 class="widget-title"><i class="aweso-user"></i> <?php echo "<?php echo Yii::t('AweCrud.app'," . '$model->isNewRecord' . " ? 'Create' : 'Update') . ' ' . {$this->modelClass}::label(); ?>" ?></h4>
                <!-- widget action, you can also use btn, btn-group, nav-tabs or nav-pills (also support dropdown). enjoy! -->
                <div class="widget-action">
                    <button data-toggle="collapse" data-collapse="#widget-button" class="btn">
                        <i class="aweso-chevron-up color-cyan" data-toggle-icon="aweso-chevron-down  aweso-chevron-up"></i>
                    </button>
                </div>
            </div><!-- /widget header -->
            <div class="widget-content form bg-white">


                <p class="note">
                    <?php echo "<?php echo Yii::t('AweCrud.app', 'Fields with') ?>" ?> <span class="required">*</span>
                    <?php echo "<?php echo Yii::t('AweCrud.app', 'are required') ?>." ?>
                </p>

                <?php echo "<?php echo \$form->errorSummary(\$model) ?>\n" ?>

                <?php echo' <!--@TODO: Utilizar la estructura comentada si el formulario es de--> 
                <!--type=vertical caso contrario si es hirizontal no cambia-->
                <!--                <div class="control-group">
                <?php // echo $form->labelEx($model, \'nombre\', array(\'class\' => \'control-label\')); ?>
                                    <div class="controls">
                <?php // echo $form->textField($model, \'nombre\', array(\'maxlength\' => 64)) ?>
                <?php // echo $form->error($model, \'nombre\') ?> 
                                    </div>                                           
                                </div>-->
                                ' ?>

                <?php foreach ($this->tableSchema->columns as $column): ?>
                    <?php
                    if ($column->autoIncrement || in_array($column->name, array_merge($this->create_time, $this->update_time))) {
                        continue;
                    }
                    //skip many to many relations, they are rendered below, this allows handling of nm relationships
                    foreach ($this->getRelations() as $relation) {
                        if ($relation[2] == $column->name && $relation[0] == 'CManyManyRelation') {
                            continue 2;
                        }
                    }
                    ?>
                    <?php echo "<?php echo " . $this->generateActiveField($this->modelClass, $column) . " ?>\n"; ?>
                <?php endforeach; ?>
                <?php
                foreach ($this->getRelations() as $relatedModelClass => $relation) {
                    if ($relation[0] == 'CManyManyRelation') {
                        echo "<div class=\"row nm_row\">\n";
                        echo $this->getNMField($relation, $relatedModelClass, $this->modelClass);
                        echo "</div>\n\n";
                    }
                }
                ?>
                <div class="form-actions bg-silver">
                    <div class="form-actions-float">
                        <?php echo "" ?>
                        <?php echo "<?php \$this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>\$model->isNewRecord ? Yii::t('AweCrud.app', 'Create') : Yii::t('AweCrud.app', 'Save'),
		)); ?>\n" ?>
                        <?php echo "<?php \$this->widget('bootstrap.widgets.TbButton', array(
			//'buttonType'=>'submit',
			'label'=> Yii::t('AweCrud.app', 'Cancel'),
			'htmlOptions' => array('onclick' => 'javascript:history.go(-1)')
		)); ?>\n" ?>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</div>
<?php echo "<?php \$this->endWidget(); ?>\n" ?>
