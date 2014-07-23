<?php
/* $model:  es una instancia que implementa a ICrugeField */

$this->pageTitle = Yii::t('app', 'Campos Personalizados');
?>

<br/>
<br/>
<div class="row-fluid">
    <div class="span12">
        <!-- widget button -->
        <div class="widget border-green " id="widget-button">

            <!-- widget header -->
            <div class="widget-header bg-green">
                <!-- widget title -->
                <h4 class="widget-title"><i class="aweso-user"></i>
                    <?php
                    echo ucwords(CrugeTranslator::t(
                                    (($model->isNewRecord == 1) ? "creando nuevo campo personalizado" : "editando campo personalizado")
                    ));
                    ?>
                </h4>
                <!-- widget action, you can also use btn, btn-group, nav-tabs or nav-pills (also support dropdown). enjoy! -->
                <div class="widget-action">
                    <button data-toggle="collapse" data-collapse="#widget-button" class="btn">
                        <i class="aweso-chevron-up color-green" data-toggle-icon="aweso-chevron-down  aweso-chevron-up"></i>
                    </button>
                </div>
            </div><!-- /widget header -->

            <div class="widget-content bg-white">
                <?php
                $form = $this->beginWidget('CActiveForm', array(
//                'type'=>'horizontal',
                    'id' => 'crugefield-form',
                    'enableAjaxValidation' => false,
                    'enableClientValidation' => false,
                    'htmlOptions' => array(
                        'class' => 'form-vertical'
                    ),
                ));
                ?>
                <!--<fieldset>-->
                <div class='separator-form span12'>
                    <?php echo ucfirst(CrugeTranslator::t("datos del campo")); ?>
                    <hr/>
                </div>

                <div class="controls controls-row">

                    <div class='span3'>
                        <?php echo $form->labelEx($model, 'fieldname'); ?>
                        <?php echo $form->textField($model, 'fieldname', array('size' => 15, 'maxlength' => 20)); ?>
                        <?php echo $form->error($model, 'fieldname', array('style' => 'color:#b94a48')); ?>


                    </div>
                    <div class='span3'>
                        <?php echo $form->labelEx($model, 'longname'); ?>
                        <?php echo $form->textField($model, 'longname'); ?>
                        <?php echo $form->error($model, 'longname', array('style' => 'color:#b94a48')); ?>
                    </div>
                    <div class='span3'>
                        <?php echo $form->labelEx($model, 'position'); ?>
                        <?php echo $form->textField($model, 'position', array('size' => 5, 'maxlength' => 3)); ?>
                        <?php echo $form->error($model, 'position', array('style' => 'color:#b94a48')); ?>
                    </div>

                </div>
                <legend></legend>
                <div class="controls controls-row">
                    <div class='span3'>
                        <?php echo $form->labelEx($model, 'required'); ?>
                        <?php echo $form->checkBox($model, 'required'); ?>
                        <?php echo $form->error($model, 'required', array('style' => 'color:#b94a48')); ?>
                    </div>
                    <div class='span3'>
                        <?php echo $form->labelEx($model, 'showinreports'); ?>
                        <?php echo $form->checkBox($model, 'showinreports'); ?>
                        <?php echo $form->error($model, 'showinreports', array('style' => 'color:#b94a48')); ?>
                    </div>
                </div>
                <legend></legend>
                <div class='separator-form span12'>
                    <?php echo ucfirst(CrugeTranslator::t("datos del contenido")); ?>
                    <hr/>
                </div>
                <legend></legend>
                <div class="controls controls-row">



                    <div class='span3'>
                        <?php echo $form->labelEx($model, 'fieldtype'); ?>
                        <?php
                        echo $form->dropDownList($model, 'fieldtype'
                                , Yii::app()->user->um->getFieldTypeOptions());
                        ?>
                        <?php echo $form->error($model, 'fieldtype', array('style' => 'color:#b94a48')); ?>
                    </div>
                    <div class='span3'>
                        <?php echo $form->labelEx($model, 'fieldsize'); ?>
                        <?php echo $form->textField($model, 'fieldsize', array('size' => 5, 'maxlength' => 3)); ?>
                        <?php echo $form->error($model, 'fieldsize', array('style' => 'color:#b94a48')); ?>
                    </div>
                    <div class='span3'>
                        <?php echo $form->labelEx($model, 'maxlength'); ?>
                        <?php echo $form->textField($model, 'maxlength', array('size' => 5, 'maxlength' => 5)); ?>
                        <?php echo $form->error($model, 'maxlength', array('style' => 'color:#b94a48')); ?>
                    </div>
                </div>

                <legend></legend>
                <div class="controls controls-row">
                    <div class='span3'>
                        <?php echo $form->labelEx($model, 'predetvalue'); ?>
                        <?php echo $form->textArea($model, 'predetvalue', array('rows' => 5, 'cols' => 40)); ?>
                        <?php echo $form->error($model, 'predetvalue'); ?>
                        <p class='hint'><?php
                            echo CrugeTranslator::t(
                                    "Si el fieldtype es un Listbox ponga aqui las opciones una por cada linea,
         el valor coloquelo al inicio seguido de una coma, ejemplo:
         <ul style='list-style: none;'>
         <li>1, azul</li>
         <li>2, rojo</li>
         <li>3, verde</li>
         </ul>
        "
                            );
                            ?></p>
                    </div>

                </div>

                <!--<div class="row-fluid form-group">
                        <div class='separator-form span11'><?php echo ucfirst(CrugeTranslator::t("datos de validacion")); ?></div>
                        <div class="clear"></div>
                        <div class='field-group'>
                                <div class='row-fluid'>
                <?php echo $form->labelEx($model, 'useregexp'); ?>
                <?php echo $form->textArea($model, 'useregexp', array('rows' => 5, 'cols' => 40)); ?>
                <?php echo $form->error($model, 'useregexp'); ?>
                                        <p class='hint'><?php echo CrugeTranslator::t("dejar en blanco si no se quiere usar"); ?></p>
                                </div>
                <?php
                echo ucfirst(CrugeTranslator::t(
                                "La expresion regular (regexp) es una lista de caracteres
                                         que validan la sintaxis de lo que el usuario ingrese en este campo.
                                         por ejemplo:"
                ));
                ?>
                <?php
                echo "<br/><u>" . CrugeTranslator::t("telefono:") . "</u><br/>^([0-9-.+ \(\)]{3,20})$";
                echo "<br/><u>" . CrugeTranslator::t("digitos y letras:") . "</u><br/>^([a-zA-Z0-9]+)$";
                ?>
                        </div>
                        <div class='row-fluid'>
                <?php echo $form->labelEx($model, 'useregexpmsg'); ?>
                <?php echo $form->textField($model, 'useregexpmsg', array('size' => 50, 'maxlength' => 512)); ?>
                <?php echo $form->error($model, 'useregexpmsg'); ?>
                        </div>
                </div>-->



                <div class="form-actions">
                    <div class="form-actions-float">
                        <?php
                        $this->widget('bootstrap.widgets.TbButton', array(
                            'buttonType' => 'submit',
                            'type' => 'success',
                            'icon' => 'ok',
                            'label' => CrugeTranslator::t(($model->isNewRecord ? "Crear Campo" : "Actualizar Campo")),
                        ));
                        ?>
                        <?php
                        $this->widget('bootstrap.widgets.TbButton', array(
                            'icon' => 'remove',
                            'label' => Yii::t('AweCrud.app', 'Cancel'),
                            'htmlOptions' => array('onclick' => 'javascript:history.go(-1)')
                        ));
                        ?>
                    </div>
                </div>
                <?php echo $form->errorSummary($model); ?>
                <!--</fieldset>-->
                <?php $this->endWidget(); ?>
            </div>
        </div>
    </div>
</div>

