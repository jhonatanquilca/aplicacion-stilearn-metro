<?php

Yii::import('transaccion.models._base.BaseTxDescripcionPalntilla');

class TxDescripcionPalntilla extends BaseTxDescripcionPalntilla
{
    /**
     * @return TxDescripcionPalntilla
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'TxDescripcionPalntilla|TxDescripcionPalntillas', $n);
    }

}