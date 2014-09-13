

<?php
$colores = array('green', 'purple', 'red', 'yellow', 'blue', 'orange','blue', 'red', 'purple', 'yellow');
//$xi = 0;
//if ($modal) {
//    Yii::app()->clientScript->scriptMap['jquery.js'] = false;
//}
?>


<!--ITEMS-->
<div class="itemSelector"> 
    <ul class="metro_tmtimeline">
        <li class="<?php echo $colores[rand(0,9)] ?>">
            <?php echo Actividad::getMensaje($data); ?>
        </li>
    </ul>
</div>
<?php
?>