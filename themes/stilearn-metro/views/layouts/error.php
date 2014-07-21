<!DOCTYPE html>
<html >
    <head>
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>    
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=9" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="stilearn metro admin bootstrap" />
        <meta name="author" content="stilearning" />


        <!-- styles -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-responsive.css" rel="stylesheet" />
        <!-- default theme -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/metro-bootstrap.css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/metro.css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/metro-responsive.css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/metro-helper.css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/icomoon.css" rel="stylesheet" />


        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/lte-ie7.js"></script>
        <![endif]-->

        <!-- fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo Yii::app()->theme->baseUrl; ?>/ico/apple-touch-icon-144-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo Yii::app()->theme->baseUrl; ?>/ico/apple-touch-icon-114-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo Yii::app()->theme->baseUrl; ?>/ico/apple-touch-icon-72-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" href="<?php echo Yii::app()->theme->baseUrl; ?>/ico/apple-touch-icon-57-precomposed.png" />
        <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/ico/favicon.png" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />




    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <body>
        <!-- start section content-->
        <section class="section-content bg-none">
            <div class="content full-page">
                <header class="content-header no-border">
                    <!-- content title-->
                    <div class="page-header"><h1><a class="color-silver text-4x" href="javascript:window.history.back();" ><i class="icomo-arrow-left"></i></a></h1></div>
                </header> <!--/ content header -->
                <!-- content page -->
                <article class="content-page">
                    <!-- main page, you're application here -->
                    <div class="main-page">
                        <div class="content-inner">
                            <?php echo $content ?>   
                        </div>
                    </div>
                </article>
            </div>
        </section>

    </body>
    <!-- END BODY -->
</html>