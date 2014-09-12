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
        <!--<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/select2/select2-metro.css" rel="stylesheet" />-->
        <!--<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/morrisjs/morris.css" rel="stylesheet" />-->
<!--        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/datatables/DT_bootstrap.css" rel="stylesheet" />-->
        <!--<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/fullcalendar/fullcalendar.css" rel="stylesheet" />-->


        <!--extra necesarios-->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/empty-model.css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/form-actions-float.css" rel="stylesheet" />


        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/lte-ie7.js"></script>
        <![endif]-->

        <!-- fav -->
        <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/ico/faviconf.png" />

        <style>

        </style>
        <script>
            var baseUrl = "<?php echo Yii::app()->baseUrl . '/'; ?>";
            var themeUrl = "<?php echo Yii::app()->theme->baseUrl . '/'; ?>";
            var user_id = "<?php echo Yii::app()->user->id; ?>";
        </script>
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

                        <!--this btn-navbar contains the menu on the side-left, will be seen on portrait tablet and less. -->
                        <a class="btn btn-navbar help-inline" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>

                        <!-- Your brand here, images or text -->
                        <a class="brand" href="#">
                            <!-- just a sample brand, replace with your own -->
                            <i class="aweso-th-large"></i> Stilearn
                        </a>

                        <!-- Un-collapse nav -->
                        <div class="nav-uncollapse">



                            <!-- pull right menu-->
                            <ul class="nav pull-right">

                                <li class="dropdown hidden">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="aweso-cog"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-extend" data-dropdown="no-propagation" role="menu" aria-labelledby="dropdownMenu">
                                        <li class="dropdown-header">General settings</li>
                                        <li>
                                            <div class="setting-list">
                                                <div class="icon"><i class="aweso-2x aweso-columns"></i></div>
                                                <div class="content">Fluid Layout</div>
                                                <div class="checker">
                                                    <div class="checkbox-slide bg-silver help-block">
                                                        <input class="input-fx" type="checkbox" id="layout-mode" name="layout-mode"  />
                                                        <label for="layout-mode"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="setting-list">
                                                <div class="icon"><i class="aweso-2x aweso-pushpin"></i></div>
                                                <div class="content">Fixed Header</div>
                                                <div class="checker">
                                                    <div class="checkbox-slide bg-silver help-block">
                                                        <input class="input-fx" type="checkbox" id="header-mode" name="header-mode" checked/>
                                                        <label for="header-mode"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="setting-list">
                                                <div class="icon"><i class="aweso-2x aweso-pushpin"></i></div>
                                                <div class="content">Fixed Sidebar</div>
                                                <div class="checker">
                                                    <div class="checkbox-slide bg-silver help-block">
                                                        <input class="input-fx" type="checkbox" id="sidebar-mode" name="sidebar-mode" />
                                                        <label for="sidebar-mode"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="dropdown-footer">
                                            <a tabindex="-1" href="#"><i class="aweso-angle-right pull-right"></i> Settings page</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                                        <i class="aweso-user"></i>
                                        <?php echo Yii::app()->user->name ? Yii::app()->user->name : "Guest" ?> 
                                        <i class="aweso-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                        <?php if (!Yii::app()->user->isGuest): ?>
                                            <li>

                                                <?php echo CHtml::link('<i class="aweso-user"></i>&nbsp;&nbsp;Mi Cuenta', array('/cruge/ui/editprofile')) ?>

                                            </li>
                                            <?php if (Yii::app()->user->checkAccess('admin')): ?>
                                                <li>
                                                    <?php echo CHtml::link('<i class="aweso-cog"></i>&nbsp;&nbsp;Administración', Yii::app()->user->ui->userManagementAdminUrl) ?>
                                                </li>
                                                <li class="divider"></li>
                                            <?php endif; ?>
                                            <li>
                                                <?php echo CHtml::link('<i class="aweso-power-off"></i>&nbsp;&nbsp;Cerrar Sesión', Yii::app()->user->ui->logoutUrl) ?>
                                            </li>
                                        <?php else: ?>
                                            <li>
                                                <?php echo CHtml::link('<i class="aweso-power-off"></i>&nbsp;&nbsp;Iniciar Sesión', Yii::app()->user->ui->loginUrl) ?>
                                            </li>
                                        <?php endif; ?>
                                    </ul>
                                </li>
                            </ul>

                            <!--/pull right menu-->
                        </div><!-- /uncollapse nav -->

                        <!-- Everything you want hidden at 940px or less, leave it blank! (this use when side-left collapse) -->
                        <div id="navbar-collapse" class="nav-collapse collapse hidden-desktop"></div>

                    </div><!--/container-->
                </div><!--/navbar-inner-->

            </div> <!--/ navbar-->
        </header> <!--/ end header-->

        <!-- start section content-->
        <section class="section-content">
            <!-- side left, its part to menu on left-->
            <div id="navside" class="side-left side-left-fixed" data-collapse="navbar" style="min-height: 100%;">
                <!--@form search-->
                <!--                <form class="form-inline search-module" action="?" method="post" >
                                    <div class="input-append input-append-inline">
                                        <input name="search" class="input-block-level" type="text" placeholder="Type to search" />
                                        <button class="btn bg-cyan" type="button">
                                            <i class="aweso-search"></i>
                                        </button>
                                    </div>
                                </form>-->
                <!--nav, this structure create with nav (find the bootstrap doc about .nav list) -->

                <?php
                $this->widget('zii.widgets.CMenu', array(
                    'items' => $this->admin ? Menu::getAdminMenu($this) : Menu::getMenu($this), //                         
                    'encodeLabel' => false,
                    //Descomentar si se necesita que todos los items <li> tengan una sola clase
//                    'itemCssClass' => 'active',
                    'activeCssClass' => 'active',
                    'htmlOptions' => array('class' => 'nav nav-list'),
                    //class  para el submenu
                    'submenuHtmlOptions' => array('class' => 'dropdown-menu')
                ));
                ?>

                <!--/ nav -->
            </div><!--/ side left-->



            <!-- start content -->
            <div class="content">


                <?php echo $content; ?>

            </div>
            <!--/ end content -->

            <!-- MAIN MODAL -->
            <div class="row-fluid">
                <?php
// El modal de la página
                $this->beginWidget('bootstrap.widgets.TbModal', array('id' => 'mainModal', 'options' => array('backdrop' => 'static')));

                $this->endWidget();
                ?>
            </div>
            <!-- END MAIN MODAL -->
        </section> <!-- /end section content-->


        <!-- footer, I place the footer on here. -->

        <footer class="footer" >

            <p>Copyright &copy; 2013. All Right Reserved.</p>
        </footer><!--/ footer -->



        <!-- javascript
        ================================================== -->
        <!-- required js -->
        <!--@TODO revisar js problemas con bootstrap-->
<!--        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.min.js"></script>  preoblema confiltro de grid-->
        <!--problema con  tile de botones de grid-->

        <!--@TODO revisar js bootstrap.min.js dedicado a calendar y hichrats-->
        <!--<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.min.js"></script>-->

        <!-- javascript necesario
 ================================================== -->
        <!--widgwra desplegablea-->
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-ui.min.js"></script>

        <!--<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.ui.touch-punch.min.js"></script>-->



        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/looper/looper.min.js"></script>        
        <!--this required for tile multiple--> 

        <!-- morris.js chart -->
        <!--<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/morrisjs/raphael-min.js"></script>-->
        <!--<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/morrisjs/morris.min.js"></script>-->

        <!-- datatables tabletools -->
        <!--<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/datatables/jquery.dataTables.min.js"></script>-->
        <!--<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/datatables/DT_bootstrap.js"></script>-->

        <!--<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.equalHeight.js"></script>-->
        <!--<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/select2/select2.min.js"></script>-->
        <!--<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/fullcalendar/fullcalendar.min.js"></script>-->

        <!-- metro js, required! -->
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/holder/holder.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/metro-base.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/m-scrollbar/jquery.mCustomScrollbar.min.js"></script>

        <!-- apps js -->
        <!--<script type="text/ javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/demo/dashboard4.js"></script>-->

        <!--extra js necesarios-->
        <!--<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/sparkline/jquery.sparkline.min.js"></script> chart del header-->
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/common-scripts.js"></script>  
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.mask.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.selectBox.js" type="text/javascript"></script>
        <!--scroll infinito-->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-ias.min.js" type="text/javascript"></script> 
    </body>
</html>
