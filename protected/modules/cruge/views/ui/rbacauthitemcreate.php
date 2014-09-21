<?php
/* $model:  es una instancia que implementa a CrugeAuthItemEditor */

$this->pageTitle = Yii::t('app', 'Roles y Asignaciones');
?>
<br>
<br>
<div class="row-fluid">
    <div class="span12">
        <div class="widget border-cyan" id="widget-button">
            <div class="widget-header bg-cyan">
                <h4 class="widget-title">
                    <i class="aweso-key"></i> <?php echo ucwords(CrugeTranslator::t("Creando") . " " . CrugeTranslator::t($model->categoria)); ?>
                </h4>
                <div class="widget-action">
                    <button data-toggle="collapse" data-collapse="#widget-button" class="btn">
                        <i class="aweso-chevron-up color-cyan" data-toggle-icon="aweso-chevron-down  aweso-chevron-up"></i>
                    </button>
                </div>
            </div>
            <div class="widget-content bg-white">
                <!--<div style='overflow:auto'>--> 
                <?php $this->renderPartial('_authitemform', array('model' => $model), false); ?>

                <!--</div>-->
            </div>
        </div>