<?php
$this->pageTitle = Yii::t('app', 'Campos Personalizados');
?>

<br/>
<br/>
<!-- widget button -->
<div class="widget border-orange" id="widget-button">

    <!-- widget header -->
    <div class="widget-header bg-orange">
        <!-- widget title -->
        <h4 class="widget-title"><i class="aweso-list-alt"></i> <?php echo ucwords(CrugeTranslator::t("campos personalizados")); ?></h4>
        <!-- widget action, you can also use btn, btn-group, nav-tabs or nav-pills (also support dropdown). enjoy! -->
        <div class="widget-action">
            <button data-toggle="collapse" data-collapse="#widget-button" class="btn">
                <i class="aweso-chevron-up color-orange" data-toggle-icon="aweso-chevron-down  aweso-chevron-up"></i>
            </button>
        </div>
    </div><!-- /widget header -->
    <!-- widget content -->
    <div class="widget-content bg-white">
        <?php
        $cols = array();
        // presenta los campos de ICrugeField
        foreach (Yii::app()->user->um->getSortFieldNamesForICrugeField() as $key => $fieldName) {
            $value = null;
            if ($fieldName == 'required')
                $value = '$data->getRequiredName()';
            $cols[] = array('name' => $fieldName, 'value' => $value);
        }
        $cols[] = array(
            'class' => 'CButtonColumn',
            'template' => '{update} {delete}',
            'deleteConfirmation' => CrugeTranslator::t("Esta seguro de eliminar este campo ?"),
            'buttons' => array(
                'update' => array(
                    'label' => '<button class="btn btn-info"><i class="aweso-pencil"></i></button>',
                    'options' => array('title' => CrugeTranslator::t("editar campo")),
                    'url' => 'array("fieldsadminupdate","id"=>$data->getPrimaryKey())',
                    'imageUrl' => false,
                ),
                'delete' => array(
                    'label' => '<button class="btn btn-danger"><i class="aweso-trash"></i></button>',
                    'options' => array('title' => CrugeTranslator::t("eliminar campo")),
                    'url' => 'array("fieldsadmindelete","id"=>$data->getPrimaryKey())',
                    'imageUrl' => false,
                ),
            ),
            'htmlOptions' => array(
                'width' => '80px'
            )
        );
        //$this->widget(Yii::app()->user->ui->CGridViewClass, array(
        //    'dataProvider'=>$dataProvider,
        //    'columns'=>$cols,
        //	'filter'=>$model,
        //));

        $this->widget('bootstrap.widgets.TbGridView', array(
            'id' => 'llamada-grid',
            'type' => 'striped condensed',
            'dataProvider' => $model->search(),
            'filter' => $model,
            'columns' => $cols
        ));
        ?>
    </div>
</div>