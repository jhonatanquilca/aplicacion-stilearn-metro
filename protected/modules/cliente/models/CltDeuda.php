<?php

Yii::import('cliente.models._base.BaseCltDeuda');

class CltDeuda extends BaseCltDeuda
{
    /**
     * @return CltDeuda
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'CltDeuda|CltDeudas', $n);
    }

}