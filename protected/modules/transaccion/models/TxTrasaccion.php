<?php

Yii::import('transaccion.models._base.BaseTxTrasaccion');
Yii::import('cliente.models.*');

class TxTrasaccion extends BaseTxTrasaccion
{
    /**
     * @return TxTrasaccion
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'TxTrasaccion|TxTrasaccions', $n);
    }

}