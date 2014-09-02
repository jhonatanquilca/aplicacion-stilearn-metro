<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="es"> <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <!--<title>Login - Stilearn Metro Admin Bootstrap</title>-->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=9" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="stilearn metro admin bootstrap" />
        <meta name="author" content="stilearning" />


        <!-- default theme -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/metro-bootstrap.css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/metro.css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/metro-responsive.css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/metro-helper.css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/font-awesome.css" rel="stylesheet" />

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/lte-ie7.js"></script>
        <![endif]-->

        <!-- fav and touch icons -->
        <!--TODO REVISAR-->
        <!--<link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />-->
        <!--<link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />-->
        <!--        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />-->
        <!--<link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />-->
        <link rel="shortcut icon" href="ico/favicon.png" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY --> 
    <body class="login">
        <!-- start section content-->
        <section class="section-content bg-none">
            <!-- start content -->
            <div class="content full-page">
                <!-- content page -->
                <article class="content-page">
                    <!-- main page, you're application here -->
                    <div class="main-page">
                        <div class="content-inner">
                            <div class="row-fluid">
                                <div class="span4 offset4">
                                    <!-- widget login -->
                                    <div class="widget no-border bg-black">
                                        <!-- widget content -->
                                        <div class="widget-content">

                                            <?php echo $content ?>

                                        </div><!-- /widget content -->
                                    </div> <!-- /widget login -->

                                </div><!-- /span offset4 -->
                            </div><!-- /row -->

                        </div><!-- /content-inner -->
                    </div><!-- /main-page -->
                </article> <!-- /content page -->   
            </div> <!--/ end content -->
        </section> <!-- /end section content-->


        <!-- javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->

        <!--<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.min.js"></script>-->
        <!--<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-ui.min.js"></script>-->
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.ui.touch-punch.min.js"></script>
        <!--<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.min.js"></script>-->
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/sparkline/jquery.sparkline.min.js"></script>

        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/metro-base.js"></script>

    </body>
    <!-- END BODY -->
</html>