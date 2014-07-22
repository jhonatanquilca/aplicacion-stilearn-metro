<?php
/** @var Form $model es una instancia que implementa a ICrugeStoredUser, y debe traer ya los campos extra 	accesibles desde $model->getFields() */
/** @var Boolean $boolIsUserManagement true o false.  si es true indica que esta operandose bajo el action de adminstracion de usuarios, si es false indica que se esta operando bajo 'editar tu perfil' */
$this->pageTitle = Yii::t('app', 'Administrador de Usuarios');
?>
<article class="content-page">
    <!-- main page, you're application here -->
    <div class="main-page">
        <div class="content-inner">
            <!-- widget button -->
            <div class="widget border-green span7" id="widget-button">

                <!-- widget header -->
                <div class="widget-header bg-green">
                    <!-- widget title -->
                    <h4 class="widget-title"><i class="aweso-user"></i> <?php echo ucwords(CrugeTranslator::t($boolIsUserManagement ? "editando usuario" : "editando tu perfil")); ?></h4>
                    <!-- widget action, you can also use btn, btn-group, nav-tabs or nav-pills (also support dropdown). enjoy! -->
                    <div class="widget-action">
                        <button data-toggle="collapse" data-collapse="#widget-button" class="btn">
                            <i class="aweso-chevron-up color-green" data-toggle-icon="aweso-chevron-down  aweso-chevron-up"></i>
                        </button>
                    </div>
                </div><!-- /widget header -->

                <div class="widget-content bg-white">
                    <?php
                    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
                        'id' => 'crugestoreduser-form',
                        'type' => 'horizontal',
                        'enableAjaxValidation' => false,
                        'enableClientValidation' => false,
                    ));
                    ?>
                    <fieldset>
                        <div class="control-group ">
                            <?php echo $form->textFieldRow($model, 'username', array('class' => 'form-control')) ?>
                        </div>
                        <div class="control-group">
                            <?php echo $form->textFieldRow($model, 'email', array('class' => 'form-control')) ?>
                        </div>
                        <div class="control-group">

                            <label class="control-label" for="CrugeStoredUser_newPassword">Clave&nbsp;&nbsp;</label>
                            <div class="controls">
                                <div class="input-append input-append-inline ">

                                    <input  name="CrugeStoredUser[newPassword]" id="CrugeStoredUser_newPassword" type="text" maxlength="20" class="form-control input-medium">

                                    <button class="btn bg-cyan" type="button" onclick="generarPass()"><i class="icon-refresh"></i></button>


                                    <?php
//                        echo $form->textFieldRow($model, 'newPassword', array(
////                            'class' => 'span12',
//                            'append' => CHtml::ajaxLink(
//                                    "<i class='icon-refresh'></i>"
//                                    , Yii::app()->user->ui->ajaxGenerateNewPasswordUrl
//                                    , array('success' => 'js:fnSuccess', 'error' => 'js:fnError')
//                            )
//                        ))
                                    ?>

                                </div>
                            </div>

                        </div>
                        <script>
                            function generarPass() {

                                $.get("<?php echo Yii::app()->user->ui->ajaxGenerateNewPasswordUrl ?>",
                                        null,
                                        function(data) {
                                            $("#CrugeStoredUser_newPassword").val(data);
                                        }
                                )
                            }
                            function fnSuccess(data) {
                                $('#CrugeStoredUser_newPassword').val(data);
                            }
                            function fnError(e) {
                                alert("error: " + e.responseText);
                            }
                        </script>
                    </fieldset>

                    <fieldset>


                        <!--<legend class="section">-->
                               <!--<span class="label label-important"> </span>-->
                        <hr />
                        <!--</legend>-->  
                        <!--<div class="row-fluid form-group">-->
                        <!--<div class='field-group'>-->
                        <!--<div class='col control-group textfield-readonly'>-->
                        <?php // echo $form->labelEx($model, 'regdate');  ?>
                        <?php
                        echo $form->textFieldRow($model, 'regdate', array(
                            'class' => 'form-control',
                            'readonly' => 'readonly',
                            'value' => Yii::app()->user->ui->formatDate($model->regdate),
                        ));
                        ?>
                        <!--</div>-->
                        <!--<div class='col control-group textfield-readonly'>-->
                        <?php // echo $form->labelEx($model, 'actdate');  ?>
                        <?php
                        echo $form->textFieldRow($model, 'actdate', array(
                            'class' => 'form-control',
                            'readonly' => 'readonly',
                            'value' => Yii::app()->user->ui->formatDate($model->actdate),
                        ));
                        ?>
                        <!--</div>-->
                        <!--<div class='col control-group textfield-readonly '>-->
                        <?php // echo $form->labelEx($model, 'logondate');  ?>
                        <?php
                        echo $form->textFieldRow($model, 'logondate', array(
                            'class' => 'form-control',
                            'readonly' => 'readonly',
                            'value' => Yii::app()->user->ui->formatDate($model->logondate),
                                )
                        );
                        ?>
                        <!--</div>-->
                        <!--</div>-->
                        <!--</div>-->

                        <!-- inicio de campos extra definidos por el administrador del sistema -->
                        <?php
                        if (count($model->getFields()) > 0) {
                            echo "<div class='row-fluid form-group'>";
                            echo "<div class='separator-form col-lg-11'>" . ucfirst(CrugeTranslator::t("datos de la cuenta")) . "</div>";
                            echo '<div class="clear"></div>';
                            foreach ($model->getFields() as $f) {
                                // aqui $f es una instancia que implementa a: ICrugeField
                                echo "<div class='col control-group'>";
                                echo Yii::app()->user->um->getLabelField($f);
                                echo Yii::app()->user->um->getInputField($model, $f);
                                echo $form->error($model, $f->fieldname);
                                echo "</div>";
                            }
                            echo "</div>";
                        }
                        ?>
                        <!-- fin de campos extra definidos por el administrador del sistema -->




                        <!-- inicio de opciones avanazadas, solo accesible bajo el rol 'admin' -->

                        <?php
                        if ($boolIsUserManagement) {
                            if (Yii::app()->user->checkAccess('edit-advanced-profile-features'
                                            , __FILE__ . " linea " . __LINE__)) {
                                $this->renderPartial('_edit-advanced-profile-features'
                                        , array('model' => $model, 'form' => $form), false);
                            }
                        }
                        ?>

                        <!-- fin de opciones avanazadas, solo accesible bajo el rol 'admin' -->

                        <div class="form-actions">
                            <div class="form-actions-float">
                                <?php
                                $this->widget('bootstrap.widgets.TbButton', array(
                                    'buttonType' => 'submit',
                                    'type' => 'success',
                                    'icon' => 'ok',
                                    'label' => CrugeTranslator::t("Guardar"),
                                ));
                                ?>
                                <?php
                                $this->widget('bootstrap.widgets.TbButton', array(
                                    'type' => 'warning',
                                    'icon' => 'remove',
                                    'label' => Yii::t('AweCrud.app', 'Cancel'),
                                    'htmlOptions' => array('onclick' => 'javascript:history.go(-1)')
                                ));
                                ?>
                            </div>
                        </div>
                    </fieldset>
                    <?php //echo $form->errorSummary($model);   ?>
                    <?php $this->endWidget(); ?>
                </div>
            </div>
        </div>
    </div>
</article>