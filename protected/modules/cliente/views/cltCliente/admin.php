<?php
/** @var CltClienteController $this */
/** @var CltCliente $model */
Util::tsRegisterAssetJs('admin.js');
$this->pageTitle = CltCliente::label(2);
?>

<?php
//$this->header = '<i class="aweso-dashboard aweso-2x"></i> ' . Yii::t('AweCrud.app', 'Manage') . ' ' . CltCliente::label(2);
$this->menu = array(
//    array('label' => Yii::t('AweCrud.app', 'List') . ' ' . CltCliente::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . CltCliente::label(), 'icon' => 'plus', 'url' => array('create')),
    array(
        'label' => 'Enviar Email ', 'icon' => 'envelope', 'url' => '#',
        'htmlOptions' => array('id' => 'sedMail',),
        'dropdownOptions' => array('class' => 'steel',),
        'items' => array(
            array('label' => 'Todos', 'url' => '#', 'linkOptions' => array(
                    'onclick' => 'enviarMailContactos(true)',
                )),
            array('label' => 'Seleccionados', 'url' => '#', 'linkOptions' => array(
                    'onclick' => 'enviarMailContactos(false)',
                )),
        ),
    ),
);
?>


<div class="row-fluid ">
    <div class="span12">
        <!-- widget button -->
        <div class="widget border-green" id="widget-button">

            <!-- widget header -->
            <div class="widget-header bg-green">
                <!-- widget title -->
                <h4 class="widget-title"><i class="aweso-user"></i> <?php echo Yii::t('AweCrud.app', 'Manage') ?> <?php echo CltCliente::label(2) ?></h4>
                <!-- widget action, you can also use btn, btn-group, nav-tabs or nav-pills (also support dropdown). enjoy! -->
                <div class="widget-action" >

                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#activos" onclick="clickTab('<?php echo CltCliente::ESTADO_INACTIVO ?>')" >ACTIVOS</a></li>
                        <li class=""><a data-toggle="tab" href="#inactivos" onclick="clickTab('<?php echo CltCliente::ESTADO_ACTIVO ?>')" >INACTIVOS</a></li>
                        <!--<li >-->
                        <!--                                <button data-toggle="collapse" data-collapse="#widget-button" class="btn bg-cyan">
                                                            <i class="aweso-chevron-up color-white" data-toggle-icon="aweso-chevron-down  aweso-chevron-up"></i>
                                                        </button>-->
                        <!--</li>-->
                    </ul>


                </div>
            </div><!-- /widget header -->
            <!-- widget content -->
            <div class="widget-content bg-white">
                <div class="tab-content">

                    <div class="tab-pane fade active in" id="activos">
                        <div class="row-fluid">
                            <div class="span6">
                                <?php
                                $this->widget('ext.Search.SearchModule', array(
                                    'model' => $model,
                                    'grid_id' => CltCliente::ESTADO_ACTIVO . '-grid',
                                    'nameInput' => 'input_' . CltCliente::ESTADO_ACTIVO,
                                    'id' => 'form_' . CltCliente::ESTADO_ACTIVO,
                                    'idList' => 'sel_' . CltCliente::ESTADO_ACTIVO,
                                ));
                                ?>
                            </div>
                            <div class="span6">
                                <div class="btn-group  pull-right">
                                    <button class="btn dropdown-toggle" data-toggle="dropdown">Mostrar / Ocultar Columnas <span class="caret"></span></button>
                                    <ul class="dropdown-menu silver" style="padding-top: 0px;height:auto;padding-bottom: 0px;">
                                        <!--<div style="">-->

                                        <?php // var_dump() ?>
                                        <?php
                                        $eColumns = $this->widget('ext.ecolumns.EColumns', array(
                                            'gridId' => CltCliente::ESTADO_ACTIVO . '-grid',
                                            'storage' => 'session', //where to store settings: 'db', 'session', 'cookie'
                                            'model' => $model->activos()->search()->model,
                                            'columns' => array(
                                                array(
                                                    'name' => 'documento',
                                                    'value' => '$data->documento?$data->documento:"-"',
                                                    'htmlOptions' => array(
                                                        'style' => 'text-align:center',
                                                    ),
                                                ),
                                                array(
                                                    'name' => 'celular',
                                                    'value' => '$data->celular?$data->celular:"-"',
                                                    'htmlOptions' => array(
                                                        'style' => 'text-align:center',
                                                    ),
                                                ),
                                                array(
                                                    'header' => 'Email',
                                                    'name' => 'email_1',
                                                    'value' => '$data->email_1?$data->email_1:($data->email_2?$data->email_2:"-")',
                                                    'htmlOptions' => array(
                                                        'style' => 'text-align:center',
                                                    ),
                                                ),
                                                array(
                                                    'name' => 'fecha_creacion',
                                                    'value' => 'Util::FormatDate($data->fecha_creacion, "d/m/Y")',
                                                    'htmlOptions' => array(
                                                        'style' => 'text-align:center',
                                                    ),
                                                ),
                                                array(
//                                        'header' => 'Mails Enviados',
                                                    'name' => 'cantidad_mails',
                                                    'value' => 'CHtml::tag("span", array("class"=>$data->cantidad_mails==0?"badge":"badge badge-success"),$data->cantidad_mails)',
                                                    'type' => 'raw',
                                                    'htmlOptions' => array(
                                                        'style' => 'text-align:center',
                                                    ),
                                                ),
                                                array(
                                                    'name' => 'fecha_actualizacion',
                                                    'value' => 'Util::FormatDate($data->fecha_actualizacion, "d/m/Y")',
                                                    'visible' => false,
                                                    'htmlOptions' => array(
                                                        'style' => 'text-align:center',
                                                    ),
                                                ),
                                                array(
                                                    'name' => 'estado',
                                                    'filter' => array('ACTIVO' => 'ACTIVO', 'INACTIVO' => 'INACTIVO',),
                                                    'visible' => false,
                                                ),
                                                array(
                                                    'name' => 'telefono',
                                                    'value' => '$data->telefono?"(06) ".$data->telefono:"-"',
                                                    'visible' => false,
                                                    'htmlOptions' => array(
                                                        'style' => 'text-align:center',
                                                    ),
                                                ),
                                                array(
                                                    'name' => 'usuario_creacion_id',
                                                    'value' => '$data->usuario_creacion_id?Yii::app()->user->um->loadUserById($data->usuario_creacion_id)->username:""',
                                                    'visible' => false,
                                                    'htmlOptions' => array(
                                                        'style' => 'text-align:center',
                                                    ),
                                                ),
                                                array(
                                                    'name' => 'usuario_actualizacion_id',
                                                    'value' => '$data->usuario_actualizacion_id?Yii::app()->user->um->loadUserById($data->usuario_actualizacion_id)->username:"-"',
                                                    'visible' => false,
                                                    'htmlOptions' => array(
                                                        'style' => 'text-align:center',
                                                    ),
                                                ),
                                            )
                                        ));
                                        ?>
                                        <!--</div>-->                                        
                                    </ul>
                                </div>                                                               
                            </div>
                        </div>
                        <div style='overflow:auto'> 
                            <?php
                            //antes
                            $finalcolumns = array_merge(array(array(
                                    'id' => 'check_id',
                                    'class' => 'CCheckBoxColumn',
                                    'value' => '$data->id',
//                                        'headerTemplate' => '<label>{item}<span></span></label>',
//                                        'htmlOptions' => array('style' => 'width: 20px', 'class' => 'chandran'),
                                ),
                                array(
                                    'name' => 'nombre_completo',
                                    'value' => 'CHtml::link($data->nombre_completo, Yii::app()->createUrl("cliente/cltCliente/view",array("id"=>$data->id)))',
                                    'type' => 'raw',
                                ),
                                array(
                                    'name' => 'monto',
                                    'value' => '"$".number_format($data->monto,2)',
//                                    'type' => 'raw',
//                                    'htmlOptions' => array(
//                                        'style' => 'text-align:center',
//                                    ),
                                )
                                    ), $eColumns->columns());
                            //Despues
                            $finalcolumns = array_merge($finalcolumns, array(
//                            
                                array(
//                                        'class'=>'bootstrap.widgets.TbButtonColumn',
                                    'class' => 'CButtonColumn',
                                    'template' => '{mail} {update} {delete}',
                                    'deleteConfirmation' => CrugeTranslator::t('admin', 'Esta seguro de querer morver a Inactivos.'),
                                    'buttons' => array(
                                        'mail' => array(
                                            'label' => '<button class="btn bg-inverse"><i class="aweso-envelope"></i></button>',
//                                                'label' => '<button class="btn bg-inverse"><span class="badge badge-success"><i class="aweso-envelope"></i> 0</span></button>',
                                            'options' => array('title' => 'Enviar Mail',),
                                            'imageUrl' => false,
                                            'url' => '$data->id',
                                            'visible' => '$data->email_1||$data->email_2?true:false',
                                            'click' => 'function(){enviarMailRow($(this).attr("href"));return false;}',
                                        ),
                                        'update' => array(
                                            'label' => '<button class="btn btn-info"><i class="aweso-pencil"></i></button>',
                                            'options' => array('title' => Yii::t('AweCrud.app', 'Update')),
                                            // 'url' => 'array("tu-controlador","id"=>$data->getPrimaryKey())',
                                            'imageUrl' => false,
                                        ),
                                        'delete' => array(
                                            'label' => '<button class="btn btn-danger"><i class="aweso-remove"></i></button>',
                                            'options' => array('title' => Yii::t('AweCrud.app', 'Delete')),
                                            // 'url' => 'array("tu-controlador","id"=>$data->getPrimaryKey())',
                                            'imageUrl' => false,
                                        ),
                                    ),
                                    'htmlOptions' => array(
                                        'width' => '120px',
                                        'style' => 'text-align:right',
                                    )
                                )
                                    )
                            );
                            ?>
                            <?php
//                            $this->widget('zii.widgets.grid.CGridView', array(
//                                'id' => 'grid1',
//                                'dataProvider' => $dataProvider,
//                                'columns' => $dialog->columns(),
//                                'template' => $dialog->link() . "{summary}\n{items}\n{pager}",
//                            ));
                            $this->widget('ext.selgridview.BootSelGridView', array(
                                'id' => CltCliente::ESTADO_ACTIVO . '-grid',
                                'type' => 'striped bordered hover advance condensed', // striped bordered hover advance condensed
                                'template' => '{items}<div class="row-fluid"><div class="span6" style="display: -webkit-box;">{summary}</div><div class="span6">{pager}</div></div>',
//                                'showTableOnEmpty' => false,
                                'dataProvider' => $model->activos()->search(),
                                'afterAjaxUpdate' => 'function(id){ if($("#activos").hasClass("active")){ $.fn.yiiGridView.update("' . CltCliente::ESTADO_INACTIVO . '-grid");} }',
                                'pagerCssClass' => 'pagination text-right',
                                'selectableRows' => 2,
                                'summaryCssClass' => 'label bg-green',
                                //'filter' => $model,                              
                                'columns' => $finalcolumns
                            ));
                            ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="inactivos">
                        <?php
                        $this->widget('ext.Search.SearchModule', array(
                            'model' => $model,
                            'grid_id' => CltCliente::ESTADO_INACTIVO . '-grid',
                            'nameInput' => 'input_' . CltCliente::ESTADO_INACTIVO,
                            'id' => 'form_' . CltCliente::ESTADO_INACTIVO,
                            'idList' => 'sel_' . CltCliente::ESTADO_INACTIVO,
                        ));
                        ?>
                        <div style='overflow:auto'> 
                            <?php
                            $this->widget('ext.selgridview.BootSelGridView', array(
                                'id' => CltCliente::ESTADO_INACTIVO . '-grid',
                                'type' => 'striped bordered hover advance condensed', // striped bordered hover advance condensed
                                'template' => '{summary}{items}{pager}',
//                                'showTableOnEmpty' => false,
                                'dataProvider' => $model->inactivos()->search(),
                                'pagerCssClass' => 'pagination text-center',
                                'afterAjaxUpdate' => 'function(id){if($("#inactivos").hasClass("active")){$.fn.yiiGridView.update("' . CltCliente::ESTADO_ACTIVO . '-grid");}}',
                                'selectableRows' => 2,
                                //'filter' => $model,
                                'columns' => array(
//                            'id',
//                            'nombre',
//                            'apellido',
                                    array(
                                        'name' => 'nombre_completo',
                                        'value' => 'CHtml::link($data->nombre_completo, Yii::app()->createUrl("cliente/cltCliente/view",array("id"=>$data->id)))',
                                        'type' => 'raw',
                                    ),
                                    array(
                                        'name' => 'documento',
                                        'value' => '$data->documento?$data->documento:"-"',
                                        'htmlOptions' => array(
                                            'style' => 'text-align:center',
                                        ),
                                    ),
                                    array(
                                        'name' => 'telefono',
                                        'value' => '$data->telefono?"(06) ".$data->telefono:"-"',
                                        'htmlOptions' => array(
                                            'style' => 'text-align:center',
                                        ),
                                    ),
                                    array(
                                        'name' => 'celular',
                                        'value' => '$data->celular?$data->celular:"-"',
                                        'htmlOptions' => array(
                                            'style' => 'text-align:center',
                                        ),
                                    ),
                                    array(
                                        'header' => 'Email',
                                        'name' => 'email_1',
                                        'value' => '$data->email_1?$data->email_1:($data->email_2?$data->email_2:"-")',
                                        'htmlOptions' => array(
                                            'style' => 'text-align:center',
                                        ),
                                    ),
//                                    array(
//                                        'name' => 'estado',
//                                        'filter' => array('ACTIVO' => 'ACTIVO', 'INACTIVO' => 'INACTIVO',),
//                                    ),
//                                        array(
//                                            'name' => 'usuario_creacion_id',
//                                            'value' => 'Yii::app()->user->um->loadUserById($data->usuario_creacion_id )->username',
//                                            'htmlOptions' => array(
//                                                'style' => 'text-align:center',
//                                            ),
//                                        ),
//                              'usuario_actualizacion_id',
                                    array(
                                        'name' => 'fecha_creacion',
                                        'value' => 'Util::FormatDate($data->fecha_creacion, "d/m/y")',
                                        'htmlOptions' => array(
                                            'style' => 'text-align:center',
                                        ),
                                    ),
//                              'fecha_actualizacion',
//                            
                                    array(
                                        //'class'=>'bootstrap.widgets.TbButtonColumn',
                                        'class' => 'CButtonColumn',
                                        'template' => ' {update} {delete}',
                                        'deleteConfirmation' => CrugeTranslator::t('admin', 'Esta seguro de querer morver a Activos.'),
                                        'buttons' => array(
                                            'update' => array(
                                                'label' => '<button class="btn btn-info"><i class="aweso-pencil"></i></button>',
                                                'options' => array('title' => Yii::t('AweCrud.app', 'Update')),
//                                                 'url' => 'array("tu-controlador","id"=>$data->getPrimaryKey())',
                                                'imageUrl' => false,
                                            ),
                                            'delete' => array(
                                                'label' => '<button class="btn btn-success"><i class="aweso-ok"></i></button>',
                                                'options' => array('title' => Yii::t('AweCrud.app', 'Delete')),
                                                'url' => 'array("restore","id"=>$data->id)',
                                                'imageUrl' => false,
                                            ),
                                        ),
                                        'htmlOptions' => array(
                                            'width' => '100px',
                                            'style' => 'text-align:center',
                                        )
                                    ),
                                ),
                            ));
                            ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
