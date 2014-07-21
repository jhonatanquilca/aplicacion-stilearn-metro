<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <!--<title>Dashboard #4 - Stilearn Metro Admin Bootstrap</title>-->
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
    <body>
        <!-- start header-->
        <header class="header">
            <!-- start navbar, this navbar on top -->
            <div id="navbar-top" class="navbar navbar-cyan">
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
                        <a class="brand" href="index.html">
                            <!-- just a sample brand, replace with your own -->
                            <i class="aweso-th-large"></i> Stilearn
                        </a>

                        <!-- Un-collapse nav -->
                        <div class="nav-uncollapse">
                            <!-- pull left menu-->
                            <ul class="nav pull-left hidden-phone">
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
                            </ul><!--/pull left menu-->

                            <!-- pull right menu-->
                            <ul class="nav pull-right">
                                <li class="dropdown">
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
                                </li>
                                <li class="dropdown">
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
                                </li>
                                <li class="dropdown">
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
                                                        <input class="input-fx" type="checkbox" id="layout-mode" name="layout-mode" checked="" />
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
                                                        <input class="input-fx" type="checkbox" id="header-mode" name="header-mode" />
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
                                                        <input class="input-fx" type="radio" value="light" id="theme-light" name="theme-mode" checked="" />
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
                                                        <input class="input-fx" type="checkbox" id="syncronize-theme" name="syncronize-theme" checked="" />
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
                                        Bent Doe <i class="aweso-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                        <li><a tabindex="-1" href="#">Profile</a></li>
                                        <li><a tabindex="-1" href="#">Activity</a></li>
                                        <li><a tabindex="-1" href="page-inbox.html">Inbox</a></li>
                                        <li class="divider"></li>
                                        <li><a tabindex="-1" href="page-login.html">Logout</a></li>
                                    </ul>
                                </li>
                            </ul><!--/pull right menu-->
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
            <div id="navside" class="side-left" data-collapse="navbar">
                <form class="form-inline search-module" action="?" method="post" />
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
                <!-- content header -->
                <header class="content-header no-border">
                    <!-- content title-->
                    <div class="page-header"><h3><i class="aweso-home"></i> Dashboard</h3></div>

                    <!-- header extra -->
                    <ul class="header-ext">
                        <li>
                            <span data-chart="sparklines" data-height="32px" data-color="#76608A">4,6,8,6,9,7,8,6,7,6,7,5,9,8,7,9,5,7,8,7</span>
                            <div class="header-ext-text color-mauve"><span class="muted">Traffic</span> 76,567</div>
                        </li>
                        <li>
                            <span data-chart="sparklines" data-height="32px" data-color="#647687">4,6,7,9,5,6,9,5,6,7,6,5,7,8,7,5,7,8,6,5</span>
                            <div class="header-ext-text color-steel"><span class="muted">Orders</span> 9,537</div>
                        </li>
                        <li>
                            <span data-chart="sparklines" data-height="32px" data-color="#6D8764">3,7,8,4,5,9,5,10,5,5,6,7,8,4,7,9,5,5,6,7</span>
                            <div class="header-ext-text color-olive"><span class="muted">Ballance</span> 4,5M$</div>
                        </li>
                    </ul>
                </header> <!--/ content header -->

                <!-- content page -->
                <article class="content-page">
                    <!-- breadcrumb -->
                    <ul class="breadcrumb breadcrumb-block">
                        <li><a href="#">Home</a> <span class="divider"><i class="aweso-angle-right"></i></span></li>
                        <li class="active">Dashboard</li>
                    </ul>

                    <!-- main page, you're application here -->
                    <div class="main-page">
                        <div class="content-inner">
                            <!-- SHORTCUT LINE DASHBOARD
                            ================================================== -->
                            <!-- row #1 -->
                            <div class="shortcut row-fluid">
                                <!-- tile -->
                                <div data-looper="go" data-interval="6000" class="span3 tile bg-cyan looper slide up">
                                    <!-- tile-content -->
                                    <div class="tile-content">
                                        <!-- block looper -->
                                        <div class="looper-inner">
                                            <div class="item">
                                                <a href="#post"><i class="aweso-pencil"></i></a>
                                            </div><!-- /item -->
                                            <div class="item">
                                                <a href="#post1">
                                                    <div class="text-based">
                                                        <p class="lead">10 Best Design With Twitter Bootstrap</p>
                                                    </div>
                                                </a>
                                            </div><!-- /item -->
                                            <div class="item">
                                                <a href="#post2">
                                                    <div class="text-based">
                                                        <p class="lead">How To Master Your Habits</p>
                                                    </div>
                                                </a>
                                            </div><!-- /item -->
                                            <div class="item">
                                                <a href="#post3">
                                                    <div class="text-based">
                                                        <p class="lead">Beyond The Inspiration</p>
                                                    </div>
                                                </a>
                                            </div><!-- /item -->
                                        </div><!-- /block looper -->
                                    </div><!-- /tile-content -->

                                    <div class="tile-peek">
                                        <span class="brand">Posts & pages</span>
                                        <span class="badge">12</span>
                                    </div><!-- /tile-peek -->
                                </div><!-- /tile -->

                                <!-- tile -->
                                <div data-looper="go" data-interval="9000" class="span3 tile bg-magenta looper slide up">
                                    <!-- tile-content -->
                                    <div class="tile-content">
                                        <!-- block looper -->
                                        <div class="looper-inner">
                                            <div class="item">
                                                <a href="#message"><i class="aweso-envelope"></i></a>
                                            </div><!-- /item -->
                                            <div class="item">
                                                <a href="#message1">
                                                    <div class="text-based">
                                                        <h4>Re: Dinner Invitation</h4>
                                                        <p>Hi Bent, Vestibulum pellentesque risus wisi orci laoreet. Semper sagittis...</p>
                                                    </div>
                                                </a>
                                            </div><!-- /item -->
                                            <div class="item">
                                                <a href="#message1">
                                                    <div class="text-based">
                                                        <h4>Re: Sales Support</h4>
                                                        <p>Hi Bent, Netus est suspendisse, euismod phasellus aliquam wisi sed...</p>
                                                    </div>
                                                </a>
                                            </div><!-- /item -->
                                        </div><!-- /block looper -->
                                    </div><!-- /tile-content -->

                                    <div class="tile-peek">
                                        <span class="brand">Messages</span>
                                        <span class="badge">3</span>
                                    </div><!-- /tile-peek -->
                                </div><!-- /tile -->

                                <!-- tile -->
                                <div data-looper="go" data-interval="7000" class="span3 tile bg-orange looper slide up">
                                    <!-- tile-content -->
                                    <div class="tile-content">
                                        <!-- block looper -->
                                        <div class="looper-inner">
                                            <div class="item text-center">
                                                <a href="#invoices"><i class="aweso-dollar"></i> </a>
                                            </div><!-- /item -->
                                            <div class="item">
                                                <a href="#invoices1">
                                                    <div class="tabular-based">
                                                        <dl class="dl-horizontal">
                                                            <dt>$25</dt>
                                                            <dd>Wireless keyboard and mouse connector</dd>
                                                            <dt>$18</dt>
                                                            <dd>Internet service</dd>
                                                            <dt>$90</dt>
                                                            <dd>A description list is perfect for defining terms</dd>
                                                            <dt>$30</dt>
                                                            <dd>Donec id elit non mi porta</dd>
                                                        </dl>
                                                    </div>
                                                </a>
                                            </div><!-- /item -->
                                            <div class="item">
                                                <a href="#invoices2">
                                                    <div class="tabular-based">
                                                        <dl class="dl-horizontal">
                                                            <dt>$20</dt>
                                                            <dd>Stilearn metro admin</dd>
                                                            <dt>$4</dt>
                                                            <dd>Simple doc template</dd>
                                                        </dl>
                                                    </div>
                                                </a>
                                            </div><!-- /item -->
                                        </div><!-- /block looper -->
                                    </div><!-- /tile-content -->

                                    <!-- tile-peek -->
                                    <div class="tile-peek">
                                        <span class="brand">Invoices</span>
                                        <span class="badge">5</span>
                                    </div><!-- /tile-peek -->
                                </div><!-- /tile -->

                                <!-- tile -->
                                <div data-looper="go" data-interval="6500" class="span3 tile bg-emerald looper slide up">
                                    <!-- tile-content -->
                                    <div class="tile-content">
                                        <!-- block looper -->
                                        <div class="looper-inner">
                                            <div class="item">
                                                <a href="#comments1">
                                                    <div class="text-based">
                                                        <p>"Non eu arcu, id eget purus et ridiculus, donec integer mauris. Dis mattis proin mauris..."</p>
                                                    </div>
                                                </a>
                                            </div><!-- /item -->
                                            <div class="item">
                                                <a href="#comments2">
                                                    <div class="text-based">
                                                        <p>"Quis eu quis arcu laoreet id, aliquam a est libero, morbi quisque mauris pede condimentum aliquam..."</p>
                                                    </div>
                                                </a>
                                            </div><!-- /item -->
                                            <div class="item">
                                                <a href="#comments3">
                                                    <div class="text-based">
                                                        <p>"Nam quis enim hendrerit. Leo elit dui commodo ipsum, eget orci rutrum tortor ut sit magna..."</p>
                                                    </div>
                                                </a>
                                            </div><!-- /item -->
                                            <div class="item">
                                                <a href="#comments4">
                                                    <div class="text-based">
                                                        <p>"Tincidunt libero vestibulum elementum, vitae interdum ullamcorper ut fusce pellentesque non..."</p>
                                                    </div>
                                                </a>
                                            </div><!-- /item -->
                                        </div><!-- /block looper -->
                                    </div><!-- /tile-content -->

                                    <!-- tile-peek -->
                                    <div class="tile-peek">
                                        <div class="icon"><i class="aweso-comments"></i></div>
                                        <span class="badge">5</span>
                                    </div><!-- /tile-peek -->
                                </div><!-- /tile -->
                            </div> <!-- /row #1 -->




                            <!-- PERFORMANCE #1
                            ================================================== -->
                            <!-- row #2 -->
                            <div id="row2" class="row-fluid">
                                <!-- span -->
                                <div class="span8">
                                    <!-- widget xcharts -->
                                    <div class="widget bg-white bg-steel" id="widget-xchart">
                                        <!-- widget content -->
                                        <div class="widget-content" style="padding-bottom: 20px">

                                            <div class="stats full-widget">
                                                <!-- chart placeholder -->
                                                <div id="sales-performance" style="width: 100%;height: 390px;margin-top:32px;"></div>
                                            </div><!-- /stats -->

                                            <div class="stats-content full-widget">
                                                <div class="stats-help-block">
                                                    <span title="recent update">Today 11:45 <sup>am</sup></span>
                                                    <span class="help-block text-2x">Sales Performance</span>
                                                </div><!-- /stats-help-block -->
                                            </div><!-- /stats-content -->

                                        </div><!-- /widget content -->
                                    </div> <!-- /widget xcharts -->
                                </div><!-- /span -->

                                <!-- span -->
                                <div class="span4">
                                    <!-- widget sales charts #1 -->
                                    <div class="widget">
                                        <!-- widget content -->
                                        <div class="widget-content bg-steel">

                                            <div class="stats full-widget bg-transparent">
                                                <div class="stats-inline-resume">
                                                    Sales performance by region
                                                    <div class="btn-group">
                                                        <a class="btn bg-transparent dropdown-toggle" data-toggle="dropdown" href="#">
                                                            <i class="aweso-angle-down icon-white"></i>
                                                        </a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li class="active"><a href="#">Pekalongan</a></li>
                                                            <li><a href="#">Jakarta</a></li>
                                                            <li><a href="#">Bandung</a></li>
                                                            <li><a href="#">Bali</a></li>
                                                            <li><a href="#">Makasar</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Something Place</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- chart placeholder -->
                                                <div id="sales-byarea" style="height: 200px;"></div>
                                            </div><!-- /stats -->

                                            <div class="stats-content full-widget">
                                                <div class="stats-help-block">
                                                    <span title="recent update">Today 11:45 <sup>am</sup></span>
                                                    <span class="help-block text-2x">
                                                        Coverage area, Pekalongan
                                                    </span>
                                                </div><!-- /stats-help-block -->
                                                <div class="row-fluid">
                                                    <div class="span6">
                                                        <div class="well text-center bg-transparent">

                                                            <strong class="text-2x">750 K</strong> 
                                                            <div class="text-small">Targets</div>
                                                        </div>
                                                    </div>
                                                    <div class="span6">
                                                        <div class="well text-center bg-transparent">
                                                            <strong class="text-2x">648 K</strong> 
                                                            <div class="text-small">Achievement</div>
                                                        </div>
                                                    </div>
                                                </div><!-- /row -->
                                                <div class="row-fluid">
                                                    <div class="span6">
                                                        <p>Weekly</p>
                                                        <div class="well well-small bg-transparent">
                                                            <span class="text-2x"><i class="aweso-long-arrow-down pull-right"></i>&minus;215K</span>
                                                        </div>
                                                    </div>
                                                    <div class="span6">
                                                        <p>Monthly</p>
                                                        <div class="well well-small bg-transparent">
                                                            <span class="text-2x"><i class="aweso-long-arrow-up pull-right"></i>&plus;148K</span>
                                                        </div>
                                                    </div>
                                                </div><!-- /row -->
                                            </div><!-- /stats-content -->

                                        </div><!-- /widget content -->
                                    </div> <!-- /widget sales charts #1 -->
                                </div><!-- /span -->

                            </div><!-- /row #2 -->




                            <!-- PERFORMANCE #2
                            ================================================== -->
                            <!-- row #3 -->
                            <div id="row3" class="row-fluid">
                                <!-- span -->
                                <div class="span8">
                                    <!-- widget tfull -->
                                    <div class="widget bg-mauve" id="widget-tfull">
                                        <!-- widget header -->
                                        <div class="widget-header">
                                            <!-- widget icon -->
                                            <div class="widget-icon"><i class="aweso-user"></i></div>
                                            <!-- widget title -->
                                            <h4 class="widget-title">Sales by employee</h4>
                                            <!-- widget action, you can also use btn, btn-group, nav-tabs or nav-pills (also support dropdown). enjoy! -->
                                            <div class="widget-action">
                                                <button data-toggle="collapse" data-collapse="#widget-tfull" class="btn">
                                                    <i class="aweso-minus" data-toggle-icon="aweso-minus aweso-plus"></i>
                                                </button>
                                            </div>
                                        </div><!-- /widget header -->

                                        <!-- widget content -->
                                        <div class="widget-content">
                                            <table id="sale-employee" class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Code</th>
                                                        <th>Name</th>
                                                        <th>Achievement ($)</th>
                                                        <th>Target ($)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="row_selected">
                                                        <td>JD</td>
                                                        <td>John Doe</td>
                                                        <td>680,000</td>
                                                        <td>876,800</td>
                                                    </tr>
                                                    <tr>
                                                        <td>AW</td>
                                                        <td>Alan Wheel</td>
                                                        <td>487,000</td>
                                                        <td>654,200</td>
                                                    </tr>
                                                    <tr>
                                                        <td>DX</td>
                                                        <td>Daisy Xian</td>
                                                        <td>839,000</td>
                                                        <td>941,855</td>
                                                    </tr>
                                                    <tr>
                                                        <td>HB</td>
                                                        <td>Henry Bird</td>
                                                        <td>877,000</td>
                                                        <td>920,375</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ML</td>
                                                        <td>Mike Loan</td>
                                                        <td>748,000</td>
                                                        <td>674,200</td>
                                                    </tr>
                                                    <tr>
                                                        <td>JS</td>
                                                        <td>Jake Sheet</td>
                                                        <td>675,000</td>
                                                        <td>675,450</td>
                                                    </tr>
                                                    <tr>
                                                        <td>HD</td>
                                                        <td>Harold Dylan</td>
                                                        <td>860,000</td>
                                                        <td>856,790</td>
                                                    </tr>
                                                    <tr>
                                                        <td>PJ</td>
                                                        <td>Prime Jono</td>
                                                        <td>250,000</td>
                                                        <td>235,465</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div><!-- /widget content -->
                                    </div> <!-- /widget tfull -->
                                </div> <!-- /span -->

                                <!-- span -->
                                <div class="span4">
                                    <!-- widget sales charts #2 -->
                                    <div class="widget border-mauve">
                                        <!-- widget content -->
                                        <div class="widget-content" style="padding-bottom: 0;">
                                            <div class="stats bg-white full-widget help-block">
                                                <!-- chart placeholder -->
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="resumeStat">
                                                        <div class="stats-inline-resume lead" id="resume-title"><span class="employee-name">John Doe</span> Resume</div>
                                                        <div id="employee-resume"></div>
                                                    </div>
                                                    <div class="tab-pane" id="progressStat">
                                                        <div class="stats-inline-resume lead" id="progress-title"><span class="employee-name">John Doe</span> Progress</div>
                                                        <div id="employee-progress" style="overflow: hidden"></div>
                                                    </div>
                                                </div>
                                            </div><!-- /stats -->

                                            <div class="coll-helper full-widget">
                                                <div class="coll2">
                                                    <a data-toggle="tab" href="#resumeStat" class="btn btn-block bg-mauve">Resume</a>
                                                </div>
                                                <div class="coll2">
                                                    <a data-toggle="tab" href="#progressStat" class="btn btn-block bg-mauve bordered-left">Progress</a>
                                                </div>
                                            </div><!-- /stats-content -->

                                        </div><!-- /widget content -->
                                    </div> <!-- /widget sales charts #2 -->

                                </div> <!-- /span -->
                            </div> <!-- /row #3 -->






                            <!-- CHAT & CALENDAR
                            ================================================== -->
                            <!-- row #4 -->
                            <div id="row4" class="row-fluid">
                                <!-- calendar -->
                                <div class="span6">
                                    <!-- widget calendar -->
                                    <div class="widget bg-cyan" id="widget-calendar">
                                        <!-- widget header -->
                                        <div class="widget-header">
                                            <!-- widget icon -->
                                            <div class="widget-icon"><i class="aweso-calendar-empty"></i></div>
                                            <!-- widget title -->
                                            <h4 class="widget-title">Calendar</h4>
                                        </div><!-- /widget header -->

                                        <!-- widget content -->
                                        <div class="widget-content">

                                            <div id='calendar'></div>

                                        </div><!-- /widget content -->
                                    </div> <!-- /widget calendar -->
                                </div><!-- /calendar -->

                                <!-- chat -->
                                <div class="span6">
                                    <!-- widget chat -->
                                    <div class="widget bg-cyan" id="widget-chat">
                                        <!-- widget header -->
                                        <div class="widget-header">
                                            <!-- widget icon -->
                                            <div class="widget-icon"><i class="aweso-comment"></i></div>
                                            <!-- widget title -->
                                            <h4 class="widget-title">Chat</h4>
                                            <!-- widget action, you can also use btn, btn-group, nav-tabs or nav-pills (also support dropdown). enjoy! -->
                                            <div class="widget-action">
                                                <button class="btn" data-toggle="add-others">&plus;</button>
                                                <button data-toggle="collapse" data-collapse="#widget-chat" class="btn">
                                                    <i class="aweso-minus" data-toggle-icon="aweso-minus aweso-plus"></i>
                                                </button>
                                            </div>
                                        </div><!-- /widget header -->

                                        <!-- widget content -->
                                        <div class="widget-content">
                                            <div class="add-to-chat bg-silver">
                                                <form id="form-addtochat" />
                                                <select name="addtochat" class="input-large" multiple="">
                                                    <option value="alexis" />Alexis
                                                    <option value="bent" />Bent
                                                    <option value="elissa" />Ellisa
                                                    <option value="bootmask" />Bootmask
                                                    <option value="others" />Other user
                                                </select>
                                                <button class="btn bg-cyan bordered" type="submit">add</button>
                                                </form>
                                            </div>
                                            <!-- chat container, use mscrollbar -->
                                            <div id="chat" class="chat-container" data-scrollbar="mscroll" data-theme="light-thick" data-button="true" style="height: 452px;max-height: 452px">
                                                <!-- chat module -->
                                                <div class="chat-module">
                                                    <!-- chat -->
                                                    <ol class="chats">
                                                        <li class="other">
                                                            <div class="avatar">
                                                                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/demo/2.jpg" alt="" title="john doe" />
                                                            </div>
                                                            <div class="messages bg-transparent">
                                                                <div class="message-box">
                                                                    <p class="color-white">Et malesuada consequat donec morbi. Ridiculus wisi diam velit arcu, fringilla ante, nec et semper convallis, curabitur consectetuer massa sit in, consequat habitasse pede dictumst ornare eu.</p>
                                                                    <time class="color-white" datetime="2013-06-05T20:00">john doe | 51 min</time>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="self">
                                                            <div class="avatar">
                                                                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/demo/1.jpg" alt="" title="me" />
                                                            </div>
                                                            <div class="messages bg-transparent">
                                                                <p class="color-white">Consequat pede integer sit, vestibulum pharetra. Eu nec non nulla non.</p>
                                                                <time class="color-white" datetime="2013-06-05T20:14">37 mins</time>
                                                            </div>
                                                        </li>
                                                        <li class="moderator">
                                                            <div class="messages">
                                                                <p>log: jane smith join to chat | 27 min</p>
                                                            </div>
                                                        </li>
                                                        <li class="other">
                                                            <div class="avatar">
                                                                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/demo/3.jpg" alt="" title="jane smith" />
                                                            </div>
                                                            <div class="messages bg-transparent">
                                                                <p class="color-white">Duis enim parturient semper amet justo rutrum, ac sed neque. Scelerisque id, nulla urna ut donec.</p>
                                                                <time class="color-white" datetime="2013-06-05T20:00">jane smith | 26 min</time>
                                                            </div>
                                                        </li>
                                                        <li class="other">
                                                            <div class="avatar">
                                                                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/demo/2.jpg" alt="" title="john doe" />
                                                            </div>
                                                            <div class="messages bg-transparent">
                                                                <div class="message-box">
                                                                    <p class="color-white">Et malesuada consequat donec morbi. Ridiculus wisi diam velit arcu, fringilla ante, nec et semper convallis</p>
                                                                    <time class="color-white" datetime="2013-06-05T20:00">john doe | 21 min</time>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="self">
                                                            <div class="avatar">
                                                                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/demo/1.jpg" alt="" title="me" />
                                                            </div>
                                                            <div class="messages bg-transparent">
                                                                <p class="color-white">Consequat pede integer sit, vestibulum pharetra. Eu nec non nulla non.</p>
                                                                <time class="color-white" datetime="2013-06-05T20:14">5 mins</time>
                                                            </div>
                                                        </li>
                                                        <li class="other">
                                                            <div class="avatar">
                                                                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/demo/3.jpg" alt="" title="jane smith" />
                                                            </div>
                                                            <div class="messages bg-transparent">
                                                                <p class="color-white">Duis enim parturient semper amet justo rutrum, ac sed neque. Scelerisque id, nulla urna ut donec.</p>
                                                                <time class="color-white" datetime="2013-06-05T20:00">jane smith | just now</time>
                                                            </div>
                                                        </li>
                                                    </ol><!-- /chat -->
                                                </div><!-- /chat module -->
                                            </div><!-- /chat container -->

                                            <!-- chat action -->
                                            <div class="chat-action bg-transparent">
                                                <form id="form-chat" />
                                                <div class="input-append input-append-inline" style="width: 100%">
                                                    <input class="input-block-level" name="chat-text" type="text" autocomplete="off" />
                                                    <button class="btn bg-cyan" type="submit"><i class="aweso-comment-alt"></i></button>
                                                </div>
                                                </form>
                                            </div><!-- /chat action -->

                                        </div><!-- /widget content -->
                                    </div><!-- /widget chat -->
                                </div><!-- /chat -->
                            </div><!-- /row #4 -->


                        </div><!-- /content-inner-->
                    </div><!-- /main-page-->
                </article> <!-- /content page -->

            </div> <!--/ end content -->
        </section> <!-- /end section content-->


        <!-- footer, I place the footer on here. -->
        <footer class="footer">
            <p>Copyright &copy; 2013. All Right Reserved.</p>
        </footer><!--/ footer -->



        <!-- javascript
        ================================================== -->
        <!-- required js -->
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.ui.touch-punch.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.min.js"></script>
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
