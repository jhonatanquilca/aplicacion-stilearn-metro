<!DOCTYPE html>
<html lang="en">
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

        <!-- fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo Yii::app()->theme->baseUrl; ?>/ico/apple-touch-icon-144-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo Yii::app()->theme->baseUrl; ?>/ico/apple-touch-icon-114-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo Yii::app()->theme->baseUrl; ?>/ico/apple-touch-icon-72-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" href="<?php echo Yii::app()->theme->baseUrl; ?>/ico/apple-touch-icon-57-precomposed.png" />
        <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/ico/favicon.png" />

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
                            <!-- pull left menu-->
                            <!--                            <ul class="nav pull-left hidden-phone">
                                                            <li class="dropdown">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                    <i class="aweso-plus-sign aweso-large"></i> &nbsp;Create <i class="aweso-angle-down"></i>
                                                                </a>
                                                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                                                    <li><a tabindex="-1" href="#">Page</a></li>
                                                                    <li><a tabindex="-1" href="#">Post</a></li>
                                                                    <li><a tabindex="-1" href="#">User</a></li>
                                                                    <li class="divider"></li>
                                                                    <li><a tabindex="-1" href="#">Task</a></li>
                                                                    <li><a tabindex="-1" href="#">Create Something</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <input class="hide" type="file" name="upload-files" />
                                                                <a href="#" data-toggle="upload" data-target="upload-files"><i class="aweso-upload aweso-large"></i> &nbsp;Upload</a>
                                                            </li>
                                                        </ul>
                            -->
                            <!--/pull left menu-->

                            <!-- pull right menu-->
                            <ul class="nav pull-right">
                                <!--                                <li class="dropdown">
                                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                        <div class="label">3</div>
                                                                        <i class="aweso-bell-alt"></i>
                                                                    </a>
                                                                    <ul class="dropdown-menu dropdown-extend" role="menu" aria-labelledby="dropdownMenu">
                                                                        <li class="dropdown-header">You have 4 new notofications</li>
                                                                        <li>
                                                                            <a tabindex="-1" href="#">
                                                                                <div class="media">
                                                                                    <div class="pull-left">
                                                                                        <img class="media-object" data-src="<?php echo Yii::app()->theme->baseUrl; ?>/holder.js/32x32" />
                                                                                    </div>
                                                                                    <div class="media-body">
                                                                                        <h4 class="media-heading"><small class="pull-right">Just Now</small> Update version</h4>
                                                                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque...</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a tabindex="-1" href="#">
                                                                                <div class="media">
                                                                                    <div class="pull-left">
                                                                                        <img class="media-object" data-src="<?php echo Yii::app()->theme->baseUrl; ?>/holder.js/32x32" />
                                                                                    </div>
                                                                                    <div class="media-body">
                                                                                        <h4 class="media-heading"><small class="pull-right">5 minutes</small> Jane Smith</h4>
                                                                                        <p>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit...</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a tabindex="-1" href="#">
                                                                                <div class="media">
                                                                                    <div class="pull-left">
                                                                                        <img class="media-object" data-src="<?php echo Yii::app()->theme->baseUrl; ?>/holder.js/32x32" />
                                                                                    </div>
                                                                                    <div class="media-body">
                                                                                        <h4 class="media-heading"><small class="pull-right">3 hours</small> New comment</h4>
                                                                                        <p>Tellus ac cursus commodo, tortor mauris condimentum nibh...</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li class="dropdown-footer">
                                                                            <a tabindex="-1" href="#"><i class="aweso-angle-right pull-right"></i> See all notifications</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>-->
                                <!--                                <li class="dropdown">
                                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                        <div class="label">5</div>
                                                                        <i class="aweso-tasks"></i>
                                                                    </a>
                                                                    <ul class="dropdown-menu dropdown-extend" role="menu" aria-labelledby="dropdownMenu">
                                                                        <li class="dropdown-header">You have 6 tasks</li>
                                                                        <li>
                                                                            <a tabindex="-1" href="#">
                                                                                <div class="media">
                                                                                    <div class="media-body">
                                                                                        <h4 class="task-label"><small class="pull-right task-status">20%</small> upload some file</h4>
                                                                                        <div class="progress progress-info">
                                                                                            <div class="bar" style="width: 20%"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a tabindex="-1" href="#">
                                                                                <div class="media">
                                                                                    <div class="media-body">
                                                                                        <h4 class="task-label"><small class="pull-right task-status">40%</small>  <span class="text-error">paused!</span> do something</h4>
                                                                                        <div class="progress progress-warning">
                                                                                            <div class="bar" style="width: 40%"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a tabindex="-1" href="#">
                                                                                <div class="media">
                                                                                    <div class="media-body">
                                                                                        <h4 class="task-label"><small class="pull-right task-status">60%</small> do another task</h4>
                                                                                        <div class="progress progress-info">
                                                                                            <div class="bar" style="width: 60%"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a tabindex="-1">
                                                                                <div class="media">
                                                                                    <div class="media-body">
                                                                                        <h4 class="task-label"><small class="pull-right task-status">80%</small> <span class="text-error">failed!</span> upload some file</h4>
                                                                                        <div class="progress progress-danger">
                                                                                            <div class="bar" style="width: 80%"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a tabindex="-1" href="#">
                                                                                <div class="media">
                                                                                    <div class="media-body">
                                                                                        <h4 class="task-label"><small class="pull-right task-status">100%</small> <span class="text-success">done!</span> another task</h4>
                                                                                        <div class="progress progress-success">
                                                                                            <div class="bar" style="width: 100%"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li class="dropdown-footer">
                                                                            <a tabindex="-1" href="#"><i class="aweso-angle-right pull-right"></i> See all tasks</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>-->
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
                                                                        <li class="backgrounds hide">
                                                                            <div class="setting-list">
                                                                                <div class="background-label">Backgrounds</div>
                                                                                <div class="background-choice">
                                                                                    <a href="#" class="bg-item bg-black" data-bg="noimage"></a>
                                                                                    <a href="#" class="bg-item bg-1" data-bg="01.jpg"></a>
                                                                                    <a href="#" class="bg-item bg-2" data-bg="02.jpg"></a>
                                                                                    <a href="#" class="bg-item bg-3" data-bg="03.jpg"></a>
                                                                                    <a href="#" class="bg-item bg-4" data-bg="04.jpg"></a>
                                                                                    <a href="#" class="bg-item bg-5" data-bg="05.jpg"></a>
                                                                                    <a href="#" class="bg-item bg-6" data-bg="06.jpg"></a>
                                                                                    <a href="#" class="bg-item bg-7" data-bg="07.jpg"></a>
                                                                                    <a href="#" class="bg-item bg-8" data-bg="08.jpg"></a>
                                                                                    <a href="#" class="bg-item bg-9" data-bg="09.jpg"></a>
                                                                                    <a href="#" class="bg-item bg-10" data-bg="10.jpg"></a>
                                                                                    <a href="#" class="bg-item bg-11" data-bg="11.jpg"></a>
                                                                                    <a href="#" class="bg-item bg-12" data-bg="12.jpg"></a>
                                                                                    <a href="#" class="bg-item bg-13" data-bg="13.jpg"></a>
                                                                                    <a href="#" class="bg-item bg-14" data-bg="14.jpg"></a>
                                                                                    <a href="#" class="bg-item bg-15" data-bg="15.jpg"></a>
                                                                                    <a href="#" class="bg-item bg-16" data-bg="16.jpg"></a>
                                                                                    <a href="#" class="bg-item bg-17" data-bg="17.jpg"></a>
                                                                                    <a href="#" class="bg-item bg-18" data-bg="18.jpg"></a>
                                                                                    <a href="#" class="bg-item bg-19" data-bg="19.jpg"></a>
                                                                                    <a href="#" class="bg-item bg-20" data-bg="20.jpg"></a>
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
                                                                        <li>
                                                                            <div class="setting-list">
                                                                                <div class="icon"><i class="aweso-2x color-silver aweso-sign-blank"></i></div>
                                                                                <div class="content">Light theme</div>
                                                                                <div class="checker">
                                                                                    <div class="checkbox-slide bg-silver help-block">
                                                                                        <input class="input-fx" type="radio" value="light" id="theme-light" name="theme-mode"  />
                                                                                        <label for="theme-light"></label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="setting-list">
                                                                                <div class="icon"><i class="aweso-2x aweso-sign-blank"></i></div>
                                                                                <div class="content">Dark theme</div>
                                                                                <div class="checker">
                                                                                    <div class="checkbox-slide bg-silver help-block">
                                                                                        <input class="input-fx" type="radio" value="dark" id="theme-dark" name="theme-mode" />
                                                                                        <label for="theme-dark"></label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="setting-list">
                                                                                <div class="icon"><i class="aweso-2x aweso-tint"></i></div>
                                                                                <div class="content">Syncronize</div>
                                                                                <div class="checker">
                                                                                    <div class="checkbox-slide bg-silver help-block">
                                                                                        <input class="input-fx" type="checkbox" id="syncronize-theme" name="syncronize-theme" />
                                                                                        <label for="syncronize-theme"></label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="syncronize">
                                                                            <div class="setting-list">
                                                                                <div class="themes-label">Theme colors</div>
                                                                                <div class="themes-choice">
                                                                                    <a href="#cyan" data-theme="cyan" class="bg-cyan"></a>
                                                                                    <a href="#cobalt" data-theme="cobalt" class="bg-cobalt"></a>
                                                                                    <a href="#indigo" data-theme="indigo" class="bg-indigo"></a>
                                                                                    <a href="#violet" data-theme="violet" class="bg-violet"></a>
                                                                                    <a href="#lime" data-theme="lime" class="bg-lime"></a>
                                                                                    <a href="#green" data-theme="green" class="bg-green"></a>
                                                                                    <a href="#emerald" data-theme="emerald" class="bg-emerald"></a>
                                                                                    <a href="#pink" data-theme="pink" class="bg-pink"></a>
                                                                                    <a href="#magenta" data-theme="magenta" class="bg-magenta"></a>
                                                                                    <a href="#crimson" data-theme="crimson" class="bg-crimson"></a>
                                                                                    <a href="#red" data-theme="red" class="bg-red"></a>
                                                                                    <a href="#orange" data-theme="orange" class="bg-orange"></a>
                                                                                    <a href="#amber" data-theme="amber" class="bg-amber"></a>
                                                                                    <a href="#yellow" data-theme="yellow" class="bg-yellow"></a>
                                                                                    <a href="#brown" data-theme="brown" class="bg-brown"></a>
                                                                                    <a href="#olive" data-theme="olive" class="bg-olive"></a>
                                                                                    <a href="#steel" data-theme="steel" class="bg-steel"></a>
                                                                                    <a href="#mauve" data-theme="mauve" class="bg-mauve"></a>
                                                                                    <a href="#taupe" data-theme="taupe" class="bg-taupe"></a>
                                                                                    <a href="#black" data-theme="inverse" class="bg-black"></a>
                                                                                    <a href="#silver" data-theme="silver" class="bg-silver"></a>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="unsyncronize hide">
                                                                            <div class="setting-list">
                                                                                <div class="themes-label">Navbar colors</div>
                                                                                <div class="themes-choice themes-navbar">
                                                                                    <a href="#cyan" data-theme="cyan" class="bg-cyan"></a>
                                                                                    <a href="#cobalt" data-theme="cobalt" class="bg-cobalt"></a>
                                                                                    <a href="#indigo" data-theme="indigo" class="bg-indigo"></a>
                                                                                    <a href="#violet" data-theme="violet" class="bg-violet"></a>
                                                                                    <a href="#lime" data-theme="lime" class="bg-lime"></a>
                                                                                    <a href="#green" data-theme="green" class="bg-green"></a>
                                                                                    <a href="#emerald" data-theme="emerald" class="bg-emerald"></a>
                                                                                    <a href="#pink" data-theme="pink" class="bg-pink"></a>
                                                                                    <a href="#magenta" data-theme="magenta" class="bg-magenta"></a>
                                                                                    <a href="#crimson" data-theme="crimson" class="bg-crimson"></a>
                                                                                    <a href="#red" data-theme="red" class="bg-red"></a>
                                                                                    <a href="#orange" data-theme="orange" class="bg-orange"></a>
                                                                                    <a href="#amber" data-theme="amber" class="bg-amber"></a>
                                                                                    <a href="#yellow" data-theme="yellow" class="bg-yellow"></a>
                                                                                    <a href="#brown" data-theme="brown" class="bg-brown"></a>
                                                                                    <a href="#olive" data-theme="olive" class="bg-olive"></a>
                                                                                    <a href="#steel" data-theme="steel" class="bg-steel"></a>
                                                                                    <a href="#mauve" data-theme="mauve" class="bg-mauve"></a>
                                                                                    <a href="#taupe" data-theme="taupe" class="bg-taupe"></a>
                                                                                    <a href="#black" data-theme="inverse" class="bg-black"></a>
                                                                                    <a href="#silver" data-theme="silver" class="bg-silver"></a>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="unsyncronize hide">
                                                                            <div class="setting-list">
                                                                                <div class="themes-label">Sidebar colors</div>
                                                                                <div class="themes-choice themes-sidebar">
                                                                                    <a href="#cyan" data-theme="cyan" class="bg-cyan"></a>
                                                                                    <a href="#cobalt" data-theme="cobalt" class="bg-cobalt"></a>
                                                                                    <a href="#indigo" data-theme="indigo" class="bg-indigo"></a>
                                                                                    <a href="#violet" data-theme="violet" class="bg-violet"></a>
                                                                                    <a href="#lime" data-theme="lime" class="bg-lime"></a>
                                                                                    <a href="#green" data-theme="green" class="bg-green"></a>
                                                                                    <a href="#emerald" data-theme="emerald" class="bg-emerald"></a>
                                                                                    <a href="#pink" data-theme="pink" class="bg-pink"></a>
                                                                                    <a href="#magenta" data-theme="magenta" class="bg-magenta"></a>
                                                                                    <a href="#crimson" data-theme="crimson" class="bg-crimson"></a>
                                                                                    <a href="#red" data-theme="red" class="bg-red"></a>
                                                                                    <a href="#orange" data-theme="orange" class="bg-orange"></a>
                                                                                    <a href="#amber" data-theme="amber" class="bg-amber"></a>
                                                                                    <a href="#yellow" data-theme="yellow" class="bg-yellow"></a>
                                                                                    <a href="#brown" data-theme="brown" class="bg-brown"></a>
                                                                                    <a href="#olive" data-theme="olive" class="bg-olive"></a>
                                                                                    <a href="#steel" data-theme="steel" class="bg-steel"></a>
                                                                                    <a href="#mauve" data-theme="mauve" class="bg-mauve"></a>
                                                                                    <a href="#taupe" data-theme="taupe" class="bg-taupe"></a>
                                                                                    <a href="#black" data-theme="inverse" class="bg-black"></a>
                                                                                    <a href="#silver" data-theme="silver" class="bg-silver"></a>
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
                                            <li><?php echo CHtml::link('<i class="icon-user"></i>&nbsp;&nbsp;Mi Cuenta', array('/cruge/ui/editprofile')) ?></a></li>
                                            <?php if (Yii::app()->user->checkAccess('admin')): ?>
                                                <li><?php echo CHtml::link('<i class="icon-cog"></i>&nbsp;&nbsp;Administración', Yii::app()->user->ui->userManagementAdminUrl) ?></li>
                                                <li class="divider"></li>
                                            <?php endif; ?>
                                            <li><?php echo CHtml::link('<i class="aweso-power-off"></i>&nbsp;&nbsp;Cerrar Sesión', Yii::app()->user->ui->logoutUrl) ?></a></li>
                                        <?php else: ?>
                                            <li><?php echo CHtml::link('<i class="aweso-power-off"></i>&nbsp;&nbsp;Iniciar Sesión', Yii::app()->user->ui->loginUrl) ?></a></li>
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
                <form class="form-inline search-module" action="?" method="post" >
                    <div class="input-append input-append-inline">
                        <input name="search" class="input-block-level" type="text" placeholder="Type to search" />
                        <button class="btn bg-cyan" type="button">
                            <i class="aweso-search"></i>
                        </button>
                    </div>
                </form>
                <!--nav, this structure create with nav (find the bootstrap doc about .nav list) -->
                <ul class="nav nav-list">
                    <li class="dropdown-list active"> <!-- example use with dropdown list -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown-list">Dashboard</a>
                        <ul class="dropdown-menu">
                            <li><a href="index.html">Dashboard #1</a></li>
                            <li><a href="index2.html">Dashboard #2</a></li>
                            <li class="active"><a href="index3.html">Dashboard #3</a></li>
                            <li><a href="index4.html">Dashboard #4</a></li>
                        </ul>
                    </li>
                    <li class="dropdown-list">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown-list">
                            Layouts
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="layout-blank.html">Blank</a></li>
                            <li><a href="layout-full-width.html">Full Width</a></li>
                            <li><a href="layout-top-menus.html">Top Menus</a></li>
                        </ul>
                    </li>
                    <li><a href="widgets.html">Widgets</a></li>
                    <li class="dropdown-list">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown-list">
                            Components 
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="ui-general.html">General</a></li>
                            <li><a href="ui-typography.html">Typography</a></li>
                            <li><a href="ui-buttons.html">Buttons</a></li>
                            <li><a href="ui-alert-notify.html">Alert & Notify</a></li>
                            <li><a href="ui-gauge.html">Gauge</a></li>
                            <li><a href="ui-calendar.html">Calendar</a></li>
                            <li><a href="ui-scrollbar.html">Scrollbar</a></li>
                            <li><a href="ui-tabs-collapse.html">Tabs & Collapses</a></li>
                            <li><a href="ui-sliders-bars.html">Sliders & Bars</a></li>
                            <li><a href="ui-tiles.html">Tiles</a></li>
                            <li><a href="ui-appbar.html">Appbar</a></li>
                            <li><a href="ui-splash-page.html">Splash Page</a></li>
                            <li><a href="ui-media-object.html">Media Object</a></li>
                        </ul>
                    </li>
                    <li class="dropdown-list">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown-list">
                            Form 
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="form-widget.html">Form Widget</a></li>
                            <li><a href="form-elements.html">Elements</a></li>
                            <li><a href="form-validation.html">Validation</a></li>
                            <li><a href="form-wizard.html">Wizard</a></li>
                            <li><a href="form-wysiwyg.html">Wysiwyg</a></li>
                            <li><a href="form-code-editor.html">Code editor</a></li>
                        </ul>
                    </li>
                    <li class="dropdown-list">
                        <a href="charts.html" class="dropdown-toggle" data-toggle="dropdown-list">
                            Charts 
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="chart-line.html">Lines Charts</a></li>
                            <li><a href="chart-bar.html">Bar Charts</a></li>
                            <li><a href="chart-pie.html">Pie Charts</a></li>
                            <li><a href="chart-others.html">Other Charts</a></li>
                        </ul>
                    </li>
                    <li><a href="grids.html">Grids</a></li>
                    <li class="dropdown-list">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown-list">
                            Tables 
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="table-basic.html">Basic</a></li>
                            <li><a href="table-datatables.html">DataTables</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="icons.html">
                            <span class="label">3</span>
                            Icons
                        </a>
                    </li>
                    <li class="dropdown-list">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown-list">
                            Pages 
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="page-login.html">Login</a></li>
                            <li class="divider"></li>
                            <li><a href="page-search.html">Search</a></li>
                            <li><a href="page-invoices.html">Invoices</a></li>
                            <li><a href="page-inbox.html">Inbox</a></li>
                            <li><a href="page-gallery.html">Gallery</a></li>
                            <li class="divider"></li>
                            <li><a href="page-error-404.html">Error 404</a></li>
                            <li><a href="page-error-500.html">Error 500</a></li>
                            <li><a href="page-coming-soon.html">Coming Soon</a></li>
                        </ul>
                    </li>
                </ul><!--/ nav -->
            </div><!--/ side left-->



            <!-- start content -->
            <div class="content">
                <?php echo $content; ?>

            </div> <!--/ end content -->
        </section> <!-- /end section content-->


        <!-- footer, I place the footer on here. -->
        <footer class="footer" 
                style="background: #DBD9D9;
                bottom: 0;
                color: #757575;
                font-size: 12px;
                padding: 10px;
                position: fixed;
                text-align: center;
                width: 100%;
                z-index: 101;">
            <p>Copyright &copy; 2013. All Right Reserved.</p>
        </footer><!--/ footer -->



        <!-- javascript
        ================================================== -->
        <!-- required js -->
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.min.js"></script>
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
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/demo/dashboard4.js"></script>

    </body>
</html>
