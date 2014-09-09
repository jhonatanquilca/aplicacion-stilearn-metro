<?php

Yii::import('mail.models._base.BaseMail');

class Mail extends BaseMail {

    /**
     * @return Mail
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function label($n = 1) {
        return Yii::t('app', 'E-mail|E-mails', $n);
    }

    /* funciones exras */

    public function getCountMails() {
        $command = Yii::app()->db->createCommand()
                ->select('count(id) as total')
                ->from('mail ');

        $result = $command->queryAll();
        return $result[0]['total'];
    }

}
