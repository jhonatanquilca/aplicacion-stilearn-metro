<?php
/** @var CltClienteController $this */
/** @var CltCliente $model */
$this->breadcrumbs = array(
    'Clt Clientes' => array('index'),
    $model->id,
);
$this->pageTitle = CltCliente::label(2);

$this->header = '<div style="overflow:auto"> <i class="aweso-user aweso-2x"></i> ' . $model->nombre_completo . '&nbsp;&nbsp;<strong id="totalDeuda">Deuda Total ' . ($model->cltDeudas ? '$ ' . number_format($model->cltDeudas['0']['monto'], 2, ".", " ") : '$ 0.00') . ' ctvs.</strong></div>';
$this->menu = array(
//array('label' => Yii::t('AweCrud.app', 'List') . ' ' . CltCliente::label(2), 'icon' => 'list', 'url' => array('index')),
//array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . CltCliente::label(), 'icon' => 'plus', 'url' => array('create')),
//array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id)),
//array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
//array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<div class="row-fluid span5">
    <?php echo $this->renderPartial('portlets/_info', array('model' => $model,)); ?>
    <?php echo $this->renderPartial('portlets/_deuda', array('model' => $model, 'modelDeuda' => CltDeuda::model())); ?>

</div>

<div class="row-fluid span7 ">

    <?php echo $model->cltDeudas ? $this->renderPartial('portlets/_transacciones', array('model' => $model, 'modelTransaccion' => TxTrasaccion::model())) : ''; ?>   
    <?php // echo $this->renderPartial('portlets/_actividades', array()); ?>   
    <?php echo $this->renderPartial('portlets/_actividadesSobre', array()); ?>  
</div>

<script type="text/javascript">
    var idCliente = '<?php echo $model->id ?>';

</script>
