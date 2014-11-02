<div class="ColVis">
    <?php
    /** @var CuentaController $this */
    /** @var AweActiveForm $form */
//    var_dump($this->nameInput);
//    die();
    Yii::app()->clientScript->registerScript('colums' . $this->id, "
//           $('a.ColVis_ref').click(function(e) {
//            if(($(this).attr('disabled'))){
//            console.log('entro');
//            return false;
//            }
//            var disabled = $('#" . $this->id . "').find(':input:disabled').removeAttr('disabled');
//          if($('input#'+$(this).attr('id')+'').is(':checked')) {
//          $('input#' + $(this).attr('id') + '').removeAttr('checked');
//          $.fn.yiiGridView.update('" . $this->grid_id . "',{
//            data:$('#" . $this->id . "').serialize(),
//            complete:function(jqXHR, status) {
//                    if (status=='success'){
//                        console.log('completo');
//                    }
//                },
//            beforeSend:function() {
////                var settings= $.fn.yiiGridView.gridSettings['" . $this->grid_id . "'];
////                    $('#" . $this->grid_id . "').addClass(settings.loadingClass);
//                    console.log('enviado');
//                },            
//          });
//        } else {
//        $('input#' + $(this).attr('id') + '').attr('checked', 'checked');
//            $.fn.yiiGridView.update('" . $this->grid_id . "',{
//            data:$('#" . $this->id . "').serialize(),
//            complete:function(jqXHR, status) {
//                    if (status=='success'){
//                        console.log('completo');
//                    }
//                },
//            beforeSend:function() {
////                var settings= $.fn.yiiGridView.gridSettings['" . $this->grid_id . "'];
////                    $('#" . $this->grid_id . "').addClass(settings.loadingClass);
//                    console.log('enviado');
//                },
//            
//          });
//
//        }
//        disabled.attr('disabled','disabled');
////                     e.preventDefault();
//               e.stopPropagation();
////               return false;
//    });
//    
//$('span.ColVis_radio>input').click(function(e){
//
//  $.fn.yiiGridView.update('" . $this->grid_id . "',{
//            data:$('#" . $this->id . "').serialize(),
//            complete:function(jqXHR, status) {
//                    if (status=='success'){
//                        console.log('completo');
//                    }
//                },
//            beforeSend:function() {
////                var settings= $.fn.yiiGridView.gridSettings['" . $this->grid_id . "'];
////                    $('#" . $this->grid_id . "').addClass(settings.loadingClass);
//                    console.log('enviado');
//                },            
//          });
//               e.stopPropagation();
//})
       
    ");
//    $('#searchTruulo >div.truulo-search>div.btn-group > button> i').attr('class','icon-loading')
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
        'id' => $this->id,
        'htmlOptions' => array('style' => 'margin: 0 0 0px !important;'), // for inset effect
    ));
    ?>
    <div class="btn-group">
        <button class="btn dropdown-toggle "  data-toggle="dropdown">Ocultar o Mostrar Columnas <span class="caret"></span></button>

        <ul class="dropdown-menu pull-right silver">
            <?php foreach ($this->model->allColumns() as $param): ?>
                <li >
                    <?php // var_dump($param);die(); ?>
                    <a href="#" class="ColVis_ref"  id="<?php echo $param['attribute'] ?>"   <?php echo isset($param['disabled']) && $param['disabled'] ? 'disabled' : '' ?>>
                        <span class="ColVis_radio" ><input  <?php echo isset($param['disabled']) && $param['disabled'] ? 'disabled' : '' ?> id="<?php echo $param['attribute'] ?>" type="checkbox" <?php echo $param['cheked'] ? 'checked="checked"' : '' ?>  name="table[columns][]" value="<?php echo $param['attribute'] ?>"></span>
                        <span class="ColVis_title" ><?php echo $this->model->getAttributeLabel($param['attribute']) ?></span>
                    </a>
                </li>            
            <?php endforeach; ?>
        </ul>
    </div>
    <?php $this->endWidget(); ?>
</div>