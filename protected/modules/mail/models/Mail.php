<?php

Yii::import('mail.models._base.BaseMail');

class Mail extends BaseMail
{
    /**
     * @return Mail
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Mail|Mails', $n);
    }

}