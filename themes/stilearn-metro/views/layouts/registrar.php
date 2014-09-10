<!DOCTYPE html>
<html lang="es">
    <head>
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <!--<title>Dashboard #4 - Stilearn Metro Admin Bootstrap</title>-->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=9" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!--<meta name="description" content="stilearn metro admin bootstrap" />-->
        <meta name="author" content="stilearning" />


        <!-- styles -->
        <!--@TODO borrar si no son importantes-->
        <!--<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css" rel="stylesheet" />-->
        <!--<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-responsive.css" rel="stylesheet" />-->

        <!-- default theme -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/metro-bootstrap.css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/metro.css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/metro-responsive.css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/metro-helper.css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/metro-icons.css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/font-awesome.css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/m-scrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" />

        <!-- other -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/looper/looper.css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/select2/select2-metro.css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/morrisjs/morris.css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/datatables/DT_bootstrap.css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/fullcalendar/fullcalendar.css" rel="stylesheet" />


        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/lte-ie7.js"></script>
        <![endif]-->

        <!-- favicon -->
        <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/ico/faviconf.png" />

        <style>

        </style>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <body class="fixed">
        <!-- start header-->
        <header class="header">
            <!-- start navbar, this navbar on top -->
            <div id="navbar-top" class="navbar navbar-cyan  navbar-fixed-top">
                <!-- navbar inner-->
                <div class="navbar-inner">
                    <!-- container-->
                    <div class="container">



                        <!-- Your brand here, images or text -->
                        <a class="brand" href="#">
                            <!-- just a sample brand, replace with your own -->
                            <i class="aweso-th-large"></i> Stilearn
                        </a>

                        <!-- Un-collapse nav -->
                        <div class="nav-uncollapse">
                            <ul class="nav pull-right hidden-phone">                          
                                <li><!--
                                    -->
                                    <a href="<?php echo Yii::app()->user->ui->loginUrl ?>"  >
                                        <i class="aweso-key"></i> <?php echo Yii::t('app', 'Login') ?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- /uncollapse nav -->

                        <!-- Everything you want hidden at 940px or less, leave it blank! (this use when side-left collapse) -->
                        <div id="navbar-collapse" class="nav-collapse collapse hidden-desktop"></div>

                    </div><!--/container-->
                </div><!--/navbar-inner-->

            </div> <!--/ navbar-->
        </header> <!--/ end header-->

        <!-- start section content-->
        <section class="section-content">

            <!-- start content -->
            <!--            <div class="container content ">
                            <div class="pull-left">
            <?php // echo $content; ?>
            
                            </div> -->
            <!--</div> / end content -->

            <article class="content container ">
                <div class="main-page ">
                    <div class="content-inner">
                        <!--<div class="pull-left">-->

                        <?php echo $content; ?>

                        <!--</div>--> 

                    </div>
                </div>
            </article>
        </section> <!-- /end section content-->


        <!-- footer, I place the footer on here. -->
        <footer class="footer" 
                style="
                background: #DBD9D9;
                bottom: 0;
                color: #757575;
                font-size: 12px;
                padding: 5px;
                position: fixed;
                text-align: center;
                width: 100%;
                z-index: 101;
                ">
            <p>Copyright &copy; 2013. All Right Reserved.</p>
        </footer><!--/ footer -->



        <!-- javascript
        ================================================== -->
        <!-- required js -->
        <!--@TODO revisar js problemas con bootstrap-->
        <!--<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.min.js"></script>-->
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.ui.touch-punch.min.js"></script>
        <!--@TODO revisar js bootstrap.min.js dedicado a calendar y hichrats-->
        <!--<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.min.js"></script>-->
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/m-scrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/sparkline/jquery.sparkline.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/looper/looper.min.js"></script> <!-- this required for tile multiple -->

        <!-- morris.js chart -->
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/morrisjs/raphael-min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/morrisjs/morris.min.js"></script>

        <!-- datatables tabletools -->
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/datatables/DT_bootstrap.js"></script>

        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.equalHeight.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/select2/select2.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/fullcalendar/fullcalendar.min.js"></script>

        <!-- metro js, required! -->
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/holder/holder.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/metro-base.js"></script>
        <!-- apps js -->
        <script type="text/ javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/demo/dashboard4.js"></script>

    </body>
</html>
