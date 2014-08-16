<?php

Yii::import('cliente.models._base.BaseCltCliente');

class CltCliente extends BaseCltCliente {

    /**
     * @return CltCliente
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function label($n = 1) {
        return Yii::t('app', 'Cliente|Clientes', $n);
    }

    /* funciones de Base */

    public function rules() {
        return array(
            array('nombre, apellido, usuario_creacion_id', 'required'),
            array('nombre,telefono,celular,email_1,documento', 'unique'),
            array('usuario_creacion_id, usuario_actualizacion_id', 'numerical', 'integerOnly' => true),
            array('nombre, apellido', 'length', 'max' => 32),
            array('documento', 'length', 'max' => 20),
            array('telefono, celular', 'length', 'max' => 24),
            array('email_1, email_2', 'length', 'max' => 255),
            array('estado', 'length', 'max' => 8),
            array('fecha_actualizacion', 'safe'),
            array('estado', 'in', 'range' => array('ACTIVO', 'INACTIVO')), // enum,
            array('documento, telefono, celular, email_1, email_2, estado, usuario_actualizacion_id, fecha_actualizacion', 'default', 'setOnEmpty' => true, 'value' => null),
            array('id, nombre, apellido, documento, telefono, celular, email_1, email_2, estado, usuario_creacion_id, usuario_actualizacion_id, fecha_creacion, fecha_actualizacion', 'safe', 'on' => 'search'),
        );
    }

    public function attributeLabels() {
        return array(
            'id' => Yii::t('app', 'ID'),
            'nombre' => Yii::t('app', 'Nombre'),
            'apellido' => Yii::t('app', 'Apellido'),
            'documento' => Yii::t('app', 'Documento'),
            'telefono' => Yii::t('app', 'Teléfono'),
            'celular' => Yii::t('app', 'Celular'),
            'email_1' => Yii::t('app', 'Email Principal'),
            'email_2' => Yii::t('app', 'Email Secundario'),
            'estado' => Yii::t('app', 'Estado'),
            'usuario_creacion_id' => Yii::t('app', 'Usuario Creador'),
            'usuario_actualizacion_id' => Yii::t('app', 'Usuario Actualización'),
            'fecha_creacion' => Yii::t('app', 'Fecha de Creación'),
            'fecha_actualizacion' => Yii::t('app', 'Fecha de Actualización'),
            'cltDeudas' => null,
        );
    }

    /* scopes */


    /* funciones exras */

    public function getCountClientes() {
        $command = Yii::app()->db->createCommand()
                ->select('count(t.id) as total')
                ->from('clt_cliente t');

        $result = $command->queryAll();
        return $result[0]['total'];
    }

}
