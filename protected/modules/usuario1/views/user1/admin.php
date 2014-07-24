<?php
/** @var User1Controller $this */
/** @var User1 $model */


?>



<?php
$this->menu = array(
array('label' => Yii::t('AweCrud.app', 'List') . ' ' . User1::label(2), 'icon' => 'list', 'url' => array('index')),
array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . User1::label(), 'icon' => 'plus', 'url' => array('create')),
);
?>


<div class="row-fluid">
    <div class="span12">
        <!-- widget button -->
        <div class="widget border-cyan" id="widget-button">

            <!-- widget header -->
            <div class="widget-header bg-cyan">
                <!-- widget title -->
                <h4 class="widget-title"><i class="aweso-user"></i> <?php echo Yii::t('AweCrud.app', 'Manage') ?> <?php echo User1::label(2) ?></h4>
                <!-- widget action, you can also use btn, btn-group, nav-tabs or nav-pills (also support dropdown). enjoy! -->
                <div class="widget-action">
                    <button data-toggle="collapse" data-collapse="#widget-button" class="btn">
                        <i class="aweso-chevron-up color-cyan" data-toggle-icon="aweso-chevron-down  aweso-chevron-up"></i>
                    </button>
                </div>
            </div><!-- /widget header -->
            <!-- widget content -->
            <div class="widget-content bg-white">
                <?php $this->widget('bootstrap.widgets.TbGridView',array(
                'id' => 'user1-grid',
                'type' => 'striped bordered hover advance',
                 'template' => '{items}{summary}{pager}',
                'dataProvider' => $model->search(),
                'selectableRows' => 2,
                'filter' => $model,
                'columns' => array(
                                    'id',
                                        'username',
                                        'password',
                                        'email',
                                    array(
                'class'=>'bootstrap.widgets.TbButtonColumn',
                ),
                ),
                )); ?>
            </div>
        </div>
    </div>
</div>
