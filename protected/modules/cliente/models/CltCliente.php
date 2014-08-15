<?php

Yii::import('cliente.models._base.BaseCltCliente');

class CltCliente extends BaseCltCliente
{
    /**
     * @return CltCliente
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'CltCliente|CltClientes', $n);
    }

}