<?php

Yii::import('mail.models._base.BaseMail');

class Mail extends BaseMail {

    const ESTADO_PENDIENTE = 'PENDIENTE';
    const ESTADO_ENVIADO = 'ENVIADO';
    const ESTADO_NO_ENVIADO = 'NO_ENVIADO';

    /**
     * @return Mail
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function label($n = 1) {
        return Yii::t('app', 'E-mail|E-mails', $n);
    }

    /* funciones de Base */

    public function attributeLabels() {
        return array(
            'id' => Yii::t('app', 'ID'),
            'asunto' => Yii::t('app', 'Asunto'),
            'contenido' => Yii::t('app', 'Mensaje'),
            'email' => Yii::t('app', 'Email'),
            'fecha_creacion' => Yii::t('app', 'Fecha Creación'),
            'fecha_envio' => Yii::t('app', 'Fecha Envío'),
            'usuario_creacion_id' => Yii::t('app', 'Usuario Creación'),
            'estado' => Yii::t('app', 'Estado'),
            'contacto_id' => Yii::t('app', 'Contacto'),
            'plantilla_id' => Yii::t('app', 'Plantilla'),
            'plantilla' => null,
        );
    }

    public function rules() {
        return array(
            array('contenido, email, usuario_creacion_id, contacto_id', 'required'),
            array('asunto', 'required', 'on' => 'modal'),
            array('usuario_creacion_id, plantilla_id', 'numerical', 'integerOnly' => true),
            array('email', 'email'),
            array('asunto', 'length', 'max' => 200),
//            array('email, contacto_id', 'length', 'max' => 45),
            array('estado', 'length', 'max' => 10),
            array('fecha_envio', 'safe'),
            array('estado', 'in', 'range' => array('PENDIENTE', 'ENVIADO', 'NO_ENVIADO')), // enum,
            array('asunto, fecha_envio, estado, plantilla_id', 'default', 'setOnEmpty' => true, 'value' => null),
            array('id, asunto, contenido, email, fecha_creacion, fecha_envio, usuario_creacion_id, estado, contacto_id, plantilla_id', 'safe', 'on' => 'search'),
        );
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
