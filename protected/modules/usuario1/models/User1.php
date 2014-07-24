<?php

Yii::import('usuario1.models._base.BaseUser1');

class User1 extends BaseUser1
{
    /**
     * @return User1
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'User1|User1s', $n);
    }

}