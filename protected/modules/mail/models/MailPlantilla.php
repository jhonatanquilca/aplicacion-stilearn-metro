<?php

Yii::import('mail.models._base.BaseMailPlantilla');

class MailPlantilla extends BaseMailPlantilla {

    /**
     * @return MailPlantilla
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function label($n = 1) {
        return Yii::t('app', 'Plantilla E-mail|Plantillas E-mail', $n);
    }

        /* funciones exras */

    public function getCountMailPlantilla() {
        $command = Yii::app()->db->createCommand()
                ->select('count(id) as total')
                ->from('mail_plantilla ');

        $result = $command->queryAll();
        return $result[0]['total'];
    }

}
