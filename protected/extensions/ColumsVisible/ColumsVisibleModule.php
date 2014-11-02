<?php

class ColumsVisibleModule extends CWidget {

    public $model;
    public $route;
    public $grid_id;
    public $id = 'searchTruulo';
    public $nameInput = 'inputSearh';
    public $idList = 'ConditionList';
    public $searchParams = null;
    public $modulo;

    public function init() {
        // Create route
        if (!$this->route) {
            if ($this->controller->module) {
                $this->route .= $this->controller->module->id . '/';
            }
            $this->route .= $this->controller->id . '/';
            $this->route .= $this->controller->action->id;
        }
        if ($this->searchParams == null) {
            $this->searchParams = $this->model->allColumns();
        }

        // Add css and js
        $this->publishAssets();
    }

    public function publishAssets() {
        $assets = dirname(__FILE__) . '/assets';
        $baseUrl = Yii::app()->assetManager->publish($assets);
//        
        Yii::app()->clientScript->registerCssFile($baseUrl . '/css/colvis_column.css');

        if ($this->idList != 'ConditionList') {
            Yii::app()->clientScript->registerScript('list' . $this->idList, $this->attr());
        } else {
            Yii::app()->clientScript->registerScriptFile($baseUrl . '/js/colvis_column.js');
        }
    }

    public function run() {
        $this->render('ColumsVisibleModule');
    }

    public function attr() {
        return "
            $('a.ColVis_ref').click(function(e) {
            if(($(this).attr('disabled'))){
            console.log('entro');
            return false;
            }
            var disabled = $('#" . $this->id . "').find(':input:disabled').removeAttr('disabled');
          if($('input#'+$(this).attr('id')+'').is(':checked')) {
          $('input#' + $(this).attr('id') + '').removeAttr('checked');
          $.fn.yiiGridView.update('" . $this->grid_id . "',{
            data:$('#" . $this->id . "').serialize(),
            complete:function(jqXHR, status) {
                    if (status=='success'){
                        console.log('completo');
                    }
                },
            beforeSend:function() {
//                var settings= $.fn.yiiGridView.gridSettings['" . $this->grid_id . "'];
//                    $('#" . $this->grid_id . "').addClass(settings.loadingClass);
                    console.log('enviado');
                },            
          });
        } else {
        $('input#' + $(this).attr('id') + '').attr('checked', 'checked');
            $.fn.yiiGridView.update('" . $this->grid_id . "',{
            data:$('#" . $this->id . "').serialize(),
            complete:function(jqXHR, status) {
                    if (status=='success'){
                        console.log('completo');
                    }
                },
            beforeSend:function() {
//                var settings= $.fn.yiiGridView.gridSettings['" . $this->grid_id . "'];
//                    $('#" . $this->grid_id . "').addClass(settings.loadingClass);
                    console.log('enviado');
                },
            
          });

        }
        disabled.attr('disabled','disabled');
//                     e.preventDefault();
               e.stopPropagation();
//               return false;
    });
    
$('span.ColVis_radio>input').click(function(e){

  $.fn.yiiGridView.update('" . $this->grid_id . "',{
            data:$('#" . $this->id . "').serialize(),
            complete:function(jqXHR, status) {
                    if (status=='success'){
                        console.log('completo');
                    }
                },
            beforeSend:function() {
//                var settings= $.fn.yiiGridView.gridSettings['" . $this->grid_id . "'];
//                    $('#" . $this->grid_id . "').addClass(settings.loadingClass);
                    console.log('enviado');
                },            
          });
               e.stopPropagation();
})
        "
        ;
//        return "$('.display-truulo-search-options').click(function(e) {
//        e.preventDefault();
//        e.stopPropagation();
//        $(this).next('#" . $this->idList . "').toggle();
//    });
//    
//    $('#" . $this->idList . "').click(function(e) {
//        e.stopPropagation();
//    });
//    
//    $('html').click(function() {
//        $(this).parent().find('#" . $this->idList . "').hide();
//    });
//    
//    $('#" . $this->idList . " input.all').click(function(){
//        if($(this).is(':checked')) {
//            $('#" . $this->idList . " input').each(function(){
//                $(this).not('.all').removeAttr('checked');
//            });
//        } else {
//            return false;
//        }
//        
//    });
//    
//    $('#" . $this->idList . " input').not('.all').click(function(){
//        if ($('#" . $this->idList . " input:checked').length == 0) {
//            $('#" . $this->idList . " input.all').trigger('click');
//            $('#" . $this->idList . " input.all').attr('checked', 'checked');
//        } else {
//            $('#" . $this->idList . " input.all').removeAttr('checked');
//        }
//    });";
    }

}
