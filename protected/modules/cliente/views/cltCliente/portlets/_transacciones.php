<?php ?>

<!-- widget button -->
<div class="widget border-amber" id="widget-button-transaccion">

    <!-- widget header -->
    <div class="widget-header bg-amber">
        <!-- widget title -->
        <h4 class="widget-title"><i class="aweso-dollar"></i> Deuda - Transacciones <?php // echo '- ' . $model->nombre_completo                                                                                                                                               ?></h4>
        <!-- widget action, you can also use btn, btn-group, nav-tabs or nav-pills (also support dropdown). enjoy! -->
        <div class="widget-action">
            <button data-toggle="fullscreen" data-fullscreen="#widget-button-transaccion" class="btn">
                <i class="aweso-resize-full" data-toggle-icon="aweso-resize-full aweso-resize-small"></i>
            </button>
            <button data-toggle="collapse" data-collapse="#widget-button-transaccion" class="btn ">
                <i class="aweso-chevron-up color-cyan" data-toggle-icon="aweso-chevron-down  aweso-chevron-up"></i>
            </button>
        </div>
    </div><!-- /widget header -->
    <!-- widget content -->
    <div class="widget-content bg-white"> 

        <?php $countTransDeuda = $modelTransaccion->getCountTransaccionByDeuda($model->cltDeudas[0]['id']) > 0; ?>

        <?php if ($countTransDeuda): ?>
            <div style='overflow:auto'> 

                <?php
                $modelTransaccion->pageSize = 5;
                //$this->widget('bootstrap.widgets.TbGridView',array(
                $this->widget('ext.selgridview.BootSelGridView', array(
                    'id' => 'tx-trasaccion-grid',
                    'type' => 'striped bordered hover advance ', // striped bordered hover advance condensed
                    'template' => '{summary}{items}{pager}',
                    'dataProvider' => $modelTransaccion->de_deuda($model->cltDeudas[0]['id'])->search(),
                    'pagerCssClass' => 'pagination text-center',
                    'selectableRows' => 2,
                    //'filter' => $model,
                    'columns' => array(
                        array(
                            'name' => 'fecha_creacion',
                            'value' => 'CHtml::link(Util::FormatDate($data->fecha_creacion, "d/m/Y"), "#",'
                            . 'array( "onclick"=>" viewModal(\'transaccion/txTrasaccion/view/id/$data->id\' ,false,function() {maskAttributes();});  "'
                            . '))',
                            'type' => 'raw',
                        ),
//                        'id',
                        'monto_cuota',
                        array(
                            'name' => 'tipo',
                            'filter' => array('ADEUDAR' => 'ADEUDAR', 'PAGAR' => 'PAGAR',),
                        ),
//                        'observaciones',
                        array(
                            'name' => 'usuario_creacion_id',
                            'value' => 'Yii::app()->user->um->loadUserById($data->usuario_creacion_id )->username',
                        ),
//                        'usuario_actualizacion_id',
//                        'fecha_actualizacion',
//                        array(
//                            'name' => 'tx_descripcion_palntilla_id',
//                            'value' => 'isset($data->txDescripcionPalntilla) ? $data->txDescripcionPalntilla : null',
//                            'filter' => CHtml::listData(TxDescripcionPalntilla::model()->findAll(), 'id', TxDescripcionPalntilla::representingColumn()),
//                        ),
                        array(
                            //'class'=>'bootstrap.widgets.TbButtonColumn',
                            'class' => 'CButtonColumn',
                            'template' => '{update}',
                            'deleteConfirmation' => CrugeTranslator::t('admin', 'Are you sure you want to delete this user'),
                            'buttons' => array(
                                'update' => array(
                                    'label' => '<button class="btn btn-info"><i class="aweso-pencil"></i></button>',
                                    'options' => array('title' => Yii::t('AweCrud.app', 'Update')),
                                    'imageUrl' => false,
                                    'url' => '"transaccion/txTrasaccion/update/id/".$data->id',
                                    'click' => 'function(e){e.preventDefault(); viewModal($(this).attr("href"),false,function() {maskAttributes();});  return false; }',
                                ),
                            ),
                            'htmlOptions' => array(
//                                'width' => '206px'
                            )
                        ),
                    ),
                ));
                ?>

            </div>
        <?php endif; ?>


        <?php
        $this->widget(
                'bootstrap.widgets.TbButton', array(
            'id' => 'add-Cobranza',
            'label' => $countTransDeuda ? 'Agregar Transaccion' : '<h3 >Agregar Transaccion</h3>',
            'encodeLabel' => false,
            'icon' => $countTransDeuda ? 'plus-sign' : 'dollar',
            'htmlOptions' => array(
                'onClick' => 'js:viewModal("transaccion/txTrasaccion/create/id_deuda/' . $model->cltDeudas[0]['id'] . '",false,function(){'
                . 'maskAttributes();})',
                'class' => $countTransDeuda ? '' : 'empty-portlet',
            ),
                )
        );
        ?>


    </div>
</div>

