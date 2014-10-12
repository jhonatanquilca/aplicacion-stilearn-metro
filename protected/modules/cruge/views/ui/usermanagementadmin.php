<?php
/** @var FormController $this */
/** @var Form $model */
$this->pageTitle = Yii::t('app', 'Administrador de Usuarios');
?>

<br/>
<br/>
<div class="row-fluid">
    <div class="span12">
        <!-- widget button -->
        <div class="widget border-green" id="widget-button">

            <!-- widget header -->
            <div class="widget-header bg-green">
                <!-- widget title -->
                <h4 class="widget-title"><i class="aweso-user"></i> <?php echo ucwords(CrugeTranslator::t('admin', 'Manage Users')); ?></h4>
                <!-- widget action, you can also use btn, btn-group, nav-tabs or nav-pills (also support dropdown). enjoy! -->
                <div class="widget-action">
                    <button data-toggle="collapse" data-collapse="#widget-button" class="btn">
                        <i class="aweso-chevron-up color-green" data-toggle-icon="aweso-chevron-down  aweso-chevron-up"></i>
                    </button>
                </div>
            </div><!-- /widget header -->
            <!-- widget content -->
            <div class="widget-content bg-white">
                <?php
                /*
                  para darle los atributos al CGridView de forma de ser consistente con el sistema Cruge
                  es mejor preguntarle al Factory por los atributos disponibles, esto es porque si se decide
                  cambiar la clase de CrugeStoredUser por otra entonces asi no haya dependenci directa a los
                  campos.
                 */
                $cols = array();

                // presenta los campos de ICrugeStoredUser
//                var_dump($model->findAll());
//                die();
                foreach (Yii::app()->user->um->getSortFieldNamesForICrugeStoredUser() as $key => $fieldName) {
                    $value = null; // default
                    $filter = null; // default, textbox
                    $type = 'text';
                    if ($fieldName == 'state') {
                        $value = '$data->getStateName()';
                        $filter = Yii::app()->user->um->getUserStateOptions();
                    }
                    if ($fieldName == 'logondate') {
                        $type = 'datetime';
                        $value = ' strtotime ( "-4 hour" , $data->logondate ) ';
                    }
                    if ($fieldName != 'iduser') {
                        $cols[] = array('name' => $fieldName, 'value' => $value, 'filter' => $filter, 'type' => $type);
                    }
                }

                $cols[] = array(
                    'class' => 'CButtonColumn',
                    'template' => '{update}',
                    'deleteConfirmation' => CrugeTranslator::t('admin', 'Are you sure you want to delete this user'),
                    'buttons' => array(
                        'update' => array(
                            'label' => '<button class="btn btn-info"><i class="aweso-pencil"></i></button>',
                            'options' => array('title' => CrugeTranslator::t('admin', 'Update User')),
                            'url' => 'array("usermanagementupdate","id"=>$data->getPrimaryKey())',
                            'imageUrl' => false,
                        ),
                    ),
                );
                ?>
                <div style='overflow:auto'> 
                    <?php
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
        </div>
    </div>
</div>

