<?php if (Yii::app()->user->hasFlash('loginflash')): ?>
    <div class="alert alert-error">
        <?php echo Yii::app()->user->getFlash('loginflash'); ?>
    </div>
<?php else: ?>



    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'logon-form',
        'htmlOptions' => array(
            'class' => 'no-margin',
        ),
        'enableClientValidation' => false,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
    ));
    ?>

    <div class="text-center color-silver">
        <h1>
            <a href="index.html" class="help-block" title="your logo"><i class="aweso-th-large text-4x"></i></a>
            <!--Stilearn Metro-->
            <h3 class="form-title"><?php echo CrugeTranslator::t('logon', 'Login to your account') ?></h3>
        </h1>
    </div>
    <div class="control-group">
        <label for="CrugeLogon_username">Usuario</label>
        <div class="controls">
    <!--            <span class="input-group-addon">
                <i class="icon-user"></i>
            </span>-->
            <?php
            echo $form->textField($model, 'username', array(
                'placeholder' => CrugeTranslator::t(
                        'logon', 'Username'
                ), 'class' => 'input-block-level')
            );
            ?>

        </div>
        <?php echo $form->error($model, 'username', array('style' => 'color:#FF0000')); ?>
    </div>
    <div class="control-group">
        <label for="CrugeLogon_password">Password</label>
        <div class="controls">
        <!--            <span class="input-group-addon">
            <i class="icon-lock"></i>
        </span>-->
            <?php
            echo $form->passwordField($model, 'password', array(
                'placeholder' => CrugeTranslator::t(
                        'logon', "Password"
                ), 'class' => 'input-block-level'
            ));
            ?>

        </div>
        <?php echo $form->error($model, 'password', array('style' => 'color:#FF0000')); ?>
    </div>

    <div class="control-group">
        <div class="controls">
            <label class="checkbox">
                <div class="checker">
                    <span>
                        <?php echo $form->checkBox($model, 'rememberMe'); ?>
                    </span>
                </div>
                Recordarme más tarde
            </label>

            <button class="btn btn-large btn-block bg-cyan" type="submit">
                <?php echo CrugeTranslator::t('logon', "Login") ?>
                <i class="m-icon-swapright m-icon-white"></i>                  
            </button>
            <script type="text/javascript">

                $('div.forgot>a').attr('class', 'forgot');
            </script>
            <div class="forgot">
                <?php echo Yii::app()->user->ui->passwordRecoveryLink; ?>
            </div>
        </div>
    </div>



    <?php
    /* if(Yii::app()->user->um->getDefaultSystem()->getn('registrationonlogin')===1)
      echo Yii::app()->user->ui->registrationLink; */
    ?>
    <?php
    //	si el componente CrugeConnector existe lo usa:
    //
        if (Yii::app()->getComponent('crugeconnector') != null) {
        if (Yii::app()->crugeconnector->hasEnabledClients) {
            ?>
            <div class='crugeconnector'>
                <span><?php echo CrugeTranslator::t('logon', 'You also can login with'); ?>:</span>
                <ul>
                    <?php
                    $cc = Yii::app()->crugeconnector;
                    foreach ($cc->enabledClients as $key => $config) {
                        $image = CHtml::image($cc->getClientDefaultImage($key));
                        echo "<li>" . CHtml::link($image, $cc->getClientLoginUrl($key)) . "</li>";
                    }
                    ?>
                </ul>
            </div>

            <?php
        }
    }
    ?>


    <?php $this->endWidget(); ?>
<?php endif; ?>
   