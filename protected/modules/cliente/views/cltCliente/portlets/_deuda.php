<?php ?>

<!-- widget button -->
<div class="widget border-green" id="widget-button-deuda">

    <!-- widget header -->
    <div class="widget-header bg-green">
        <!-- widget title -->
        <h4 class="widget-title"><i class="aweso-money"></i> Deuda Total <?php // echo '- ' . $model->nombre_completo                                                        ?></h4>
        <!-- widget action, you can also use btn, btn-group, nav-tabs or nav-pills (also support dropdown). enjoy! -->
        <div class="widget-action">
            <button data-toggle="collapse" data-collapse="#widget-button-deuda" class="btn">
                <i class="aweso-chevron-up color-cyan" data-toggle-icon="aweso-chevron-down  aweso-chevron-up"></i>
            </button>
        </div>
    </div><!-- /widget header -->
    <!-- widget content -->
    <div class="widget-content bg-white">
        <?php $countDeudasCli = $modelDeuda->getCountDeudaByCliente($model->id) > 0; ?>
        <?php if ($countDeudasCli): ?>
            <div style='overflow:auto'> 

                <?php
                $this->widget('ext.selgridview.BootSelGridView', array(
                    'id' => 'clt-deuda-grid',
                    'type' => 'striped bordered hover advance ', // striped bordered hover advance condensed
                    'template' => '{summary}{items}{pager}',
                    'dataProvider' => $modelDeuda->de_cliente($model->id)->search(),
                    'pagerCssClass' => 'pagination text-center',
                    'selectableRows' => 2,
                    //'filter' => $model,
                    'columns' => array(
//                'id',
                        array(
                            'name' => 'monto',
                            'value' => '"$ ".number_format($data->monto, 2,".", " ")." ctv"',
                        ),
                        array(
                            'name' => 'usuario_creacion_id',
                            'value' => 'Yii::app()->user->um->loadUserById($data->usuario_creacion_id )->username',
                            'htmlOptions' => array(
                                'style' => 'text-align:center',
                            ),
                        ),
//                'fecha_creacion',
//                'usuario_actualizacion_id',
                        array(
                            'name' => 'fecha_actualizacion',
                            'value' => 'Util::FormatDate($data->fecha_creacion, "d/m/Y")',
                        ),
//                array(
//                    'name' => 'clt_cliente_id',
//                    'value' => 'isset($data->cltCliente) ? $data->cltCliente : null',
//                    'filter' => CHtml::listData(CltCliente::model()->findAll(), 'id', CltCliente::representingColumn()),
//                ),
                    ),
                ));
                ?>
            </div>
        <?php else: ?>


            <?php
            $this->widget(
                    'bootstrap.widgets.TbButton', array(
                'id' => 'add-Cobranza',
                'label' => '<h3>Generar Deuda Inicial</h3>',
                'encodeLabel' => false,
                'icon' => $countDeudasCli ? 'plus-sign' : 'money',
                'htmlOptions' => array(
                    'onClick' => 'viewModal("cliente/cltDeuda/create/id_cliente/' . $model->id . '",false,function(){'
                    . 'maskAttributes();})',
                    'class' => $countDeudasCli ? '' : 'empty-portlet',
                ),
                    )
            );
            ?>
        <?php endif; ?>
    </div>
</div>