<?php
/** @var TxDescripcionPalntillaController $this */
/** @var TxDescripcionPalntilla $model */


?>



<?php 
$this->header='<i class="aweso-dashboard aweso-2x"></i> '.  Yii::t('AweCrud.app', 'Manage') .' '. TxDescripcionPalntilla::label(2) ;
$this->menu = array(
array('label' => Yii::t('AweCrud.app', 'List') . ' ' . TxDescripcionPalntilla::label(2), 'icon' => 'list', 'url' => array('index')),
array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . TxDescripcionPalntilla::label(), 'icon' => 'plus', 'url' => array('create')),
);
?>

<fieldset>    

    <div class="row-fluid">
        <div class="span12">
            <!-- widget button -->
            <div class="widget border-cyan" id="widget-button">

                <!-- widget header -->
                <div class="widget-header bg-cyan">
                    <!-- widget title -->
                    <h4 class="widget-title"><i class="aweso-user"></i> <?php echo Yii::t('AweCrud.app', 'Manage') ?> <?php echo TxDescripcionPalntilla::label(2) ?></h4>
                    <!-- widget action, you can also use btn, btn-group, nav-tabs or nav-pills (also support dropdown). enjoy! -->
                    <div class="widget-action">
                        <button data-toggle="collapse" data-collapse="#widget-button" class="btn">
                            <i class="aweso-chevron-up color-cyan" data-toggle-icon="aweso-chevron-down  aweso-chevron-up"></i>
                        </button>
                    </div>
                </div><!-- /widget header -->
                <!-- widget content -->
                <div class="widget-content bg-white">
                    <?php                    //$this->widget('bootstrap.widgets.TbGridView',array(
                    $this->widget('ext.selgridview.BootSelGridView',array(                    
                    'id' => 'tx-descripcion-palntilla-grid',
                    'type' => 'striped bordered hover advance ', // striped bordered hover advance condensed
                    'template' => '{summary}{items}{pager}',
                    'dataProvider' => $model->search(),
                    'pagerCssClass' => 'pagination text-center',
                    'selectableRows' => 2,
                    //'filter' => $model,
                    'columns' => array(
                                            'id',
                                                'nombre',
                                                'descripcion',
                                                array(
                    'name' => 'estado',
                    'filter' => array('ACTIVO'=>'ACTIVO','INACTIVO'=>'INACTIVO',),
                ),
                                            array(
                    //'class'=>'bootstrap.widgets.TbButtonColumn',
                    'class'=>'CButtonColumn',
                    'template' => '{view} {update} {delete}',
                    'deleteConfirmation' => CrugeTranslator::t('admin', 'Are you sure you want to delete this user'),
                    'buttons' => array(
                    'view' => array(
                    'label' => '<button class="btn btn-success"><i class="aweso-eye-open"></i></button>',
                    'options' => array('title' => Yii::t('AweCrud.app', 'View')),
                    // 'url' => 'array("tu-controlador","id"=>$data->getPrimaryKey())',
                    'imageUrl' => false,
                    ),
                    'update' => array(
                    'label' => '<button class="btn btn-info"><i class="aweso-pencil"></i></button>',
                    'options' => array('title' => Yii::t('AweCrud.app', 'Update')),
                    // 'url' => 'array("tu-controlador","id"=>$data->getPrimaryKey())',
                    'imageUrl' => false,
                    ),
                    'delete' => array(
                    'label' => '<button class="btn btn-danger"><i class="aweso-trash"></i></button>',
                    'options' => array('title' => Yii::t('AweCrud.app','Delete')),
                    // 'url' => 'array("tu-controlador","id"=>$data->getPrimaryKey())',
                    'imageUrl' => false,
                    ),
                    ),
                    'htmlOptions' => array(
                    'width' => '206px'
                    )
                    ),
                    ),
                    )); ?>
                </div>
            </div>
        </div>
    </div>
</fieldset>