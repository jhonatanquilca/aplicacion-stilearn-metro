<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>




<?php if (!empty($this->header)): ?>

    <!--<header class="content-header">-->
    <header class="content-header no-border">

        <ul class="page-header">
            <!-- content title-->
            <div class="page-header">


                <h1><?php echo $this->header ?></h1>

            </div>

        </ul>
        <!-- header extra -->
        <!--        <ul class="header-ext ">
                        <li>
                            <span data-chart="sparklines" data-height="32px" data-color="#76608A">1,2,3,4,5,6,7</span>
                            <div class="header-ext-text color-mauve"><span class="muted">Traffic</span> 76,567</div>
                        </li>
                        <li>
                            <span data-chart="sparklines" data-height="32px" data-color="#647687">7,6,5,4,3,2,1</span>
                            <div class="header-ext-text color-steel"><span class="muted">Orders</span> 9,537</div>
                        </li>
                        <li>
                            <span data-chart="sparklines" data-height="32px" data-color="#6D8764">1,2,3,4,5,6,7</span>
                            <div class="header-ext-text color-olive"><span class="muted">Ballance</span> 4,5M$</div>
                        </li>
                    </ul>-->



    </header>
<?php endif; ?>

<!--<article class="content-page">-->
<div class="content-page row-fluid">
    <div class="main-page">
        <div class="content-inner">
            <?php if ($this->menu): ?>
                <div class="content-action">
                    <!--<div class="">-->
                    <!--<ul class="content-action pull-right">-->
                    <!--<li>-->
                    <?php foreach ($this->menu as $menu) : ?>
                        <?php
                        $this->widget(
                                'bootstrap.widgets.TbButtonGroup', array(
                            'buttons' => array($menu),
                                )
                        );
                        ?>
                    <?php endforeach; ?>
                    <!--</li>-->
                    <!--</ul>-->
                    <!--</div>-->
                </div>

            <?php endif; ?>
            <?php echo $content; ?>
        </div>
    </div>
</div>
<!--</article>-->

<?php $this->endContent(); ?>