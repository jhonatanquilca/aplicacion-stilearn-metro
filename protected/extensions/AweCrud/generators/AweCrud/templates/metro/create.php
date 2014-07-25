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
<?php
$label = $this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	\$model->label(2) => array('index'),
	Yii::t('AweCrud.app', 'Create'),
);\n";
?>
$this->header='<i class="aweso-paper-clip aweso-2x"></i> '. <?php echo " Yii::t('AweCrud.app', 'Create') " ?><?php echo ".' '.";?> <?php echo "{$this->modelClass}::label() ;\n" ?>
$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List').' '.<?php echo $this->modelClass ?>::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    
    <?php echo "<?php echo \$this->renderPartial('_form', array('model' => \$model)); ?>".PHP_EOL; ?>
</fieldset>