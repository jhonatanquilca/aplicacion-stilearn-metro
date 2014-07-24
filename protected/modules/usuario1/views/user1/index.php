<?php
/** @var User1Controller $this */
/** @var User1 $model */
$this->breadcrumbs = array(
	'User1s',
);

$this->menu = array(
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . User1::label(), 'icon' => 'plus', 'url' => array('create')),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend>
        <?php echo Yii::t('AweCrud.app', 'List') ?> <?php echo User1::label(2) ?>    </legend>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider' => $dataProvider,
	'itemView' => '_view',
)); ?>
</fieldset>