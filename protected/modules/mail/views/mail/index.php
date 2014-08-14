<?php
/** @var MailController $this */
/** @var Mail $model */
$this->breadcrumbs = array(
	'Mails',
);

$this->menu = array(
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . Mail::label(), 'icon' => 'plus', 'url' => array('create')),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend>
        <?php echo Yii::t('AweCrud.app', 'List') ?> <?php echo Mail::label(2) ?>    </legend>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider' => $dataProvider,
	'itemView' => '_view',
)); ?>
</fieldset>