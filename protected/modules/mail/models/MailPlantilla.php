<?php

Yii::import('mail.models._base.BaseMailPlantilla');

class MailPlantilla extends BaseMailPlantilla
{
    /**
     * @return MailPlantilla
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'MailPlantilla|MailPlantillas', $n);
    }

}