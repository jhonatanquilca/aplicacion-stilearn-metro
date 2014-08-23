<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>




<?php if (!empty($this->header)): ?>

    <header class="content-header">

        <ul class="page-header">
            <!-- content title-->
            <div class="page-header">


                <h1><?php echo $this->header ?></h1>

            </div>

        </ul>



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