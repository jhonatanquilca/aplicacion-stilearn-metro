<?php ?>
<!-- widget button -->
<div class="widget border-cyan" id="widget-button-info">

    <!-- widget header -->
    <div class="widget-header bg-cyan">
        <!-- widget title -->
        <h4 class="widget-title"><i class="aweso-info"></i> Informacion General</h4>
        <!-- widget action, you can also use btn, btn-group, nav-tabs or nav-pills (also support dropdown). enjoy! -->
        <div class="widget-action">
            <button data-toggle="collapse" data-collapse="#widget-button-info" class="btn">
                <i class="aweso-chevron-up color-cyan" data-toggle-icon="aweso-chevron-down  aweso-chevron-up"></i>
            </button>
        </div>
    </div><!-- /widget header -->
    <!-- widget content -->
    <div class="widget-content bg-white">

        <?php
        $this->widget('bootstrap.widgets.TbDetailView', array(
            'data' => $model,
            'attributes' => array(
//                            'id',
//                            'nombre',
//                            'apellido',
                'documento',
                'telefono',
                'celular'
                ,
                'email_1',
                'email_2',
                'estado',
//                            'usuario_creacion_id',
//                            'usuario_actualizacion_id',
                array(
                    'name' => 'fecha_creacion',
                    'value' => Yii::app()->dateFormatter->format("dd/mm/yyyy", strtotime('$data->fecha_creacion')),
                ),
//                            'fecha_actualizacion',
            ),
        ));
        ?>
    </div>
</div>