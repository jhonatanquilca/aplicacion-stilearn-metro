<?php
/** @var CltClienteController $this */
/** @var CltCliente $model */
$this->breadcrumbs = array(
	'Clt Clientes',
);

$this->menu = array(
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . CltCliente::label(), 'icon' => 'plus', 'url' => array('create')),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend>
        <?php echo Yii::t('AweCrud.app', 'List') ?> <?php echo CltCliente::label(2) ?>    </legend>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider' => $dataProvider,
	'itemView' => '_view',
)); ?>
</fieldset>