<?php
/* @var $this SiteController */

//$this->pageTitle = Yii::app()->name;
?>

<!-- content header -->
<header class="content-header no-border">
    <!-- content title-->
    <div class="page-header"><h3><i class="aweso-home"></i> Dashboard</h3></div>

    <!-- header extra -->
    <!--    <ul class="header-ext">
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
        </ul>-->
</header> 
<!--/ content header -->

<!-- content page -->
<article class="content-page">


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
                            </div><!--/item -->
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