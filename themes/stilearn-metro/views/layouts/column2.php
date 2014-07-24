<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

<?php if ($this->menu): ?>

    <header class="content-header">
        <ul class="content-action pull-right">
            <li>
                <?php foreach ($this->menu as $menu) : ?>
                    <?php
                    $this->widget(
                            'bootstrap.widgets.TbButtonGroup', array(
                        'buttons' => array($menu),
                            )
                    );
                    ?>
                <?php endforeach; ?>
            </li>
        </ul>
    </header>

<?php endif; ?>

<article class="content-page">
    <div class="main-page">
        <div class="content-inner">
            <?php echo $content; ?>
        </div>
    </div>
</article>

<?php $this->endContent(); ?>