<?php

Yii::import('actividades.models._base.BaseActividad');

class Actividad extends BaseActividad {

    /**
     * @return Actividad
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function label($n = 1) {
        return Yii::t('app', 'Actividad|Actividades', $n);
    }

    /* funciones exras */

    public function getCountActividades() {
        $command = Yii::app()->db->createCommand()
                ->select('count(id) as total')
                ->from('actividad');

        $result = $command->queryAll();
        return $result[0]['total'];
    }

}
