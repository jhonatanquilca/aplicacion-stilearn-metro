<?php

Yii::import('cliente.models._base.BaseCltCliente');

class CltCliente extends BaseCltCliente {

    const ESTADO_ACTIVO = 'ACTIVO';
    const ESTADO_INACTIVO = 'INACTIVO';

    private $nombre_completo;
    public $cantidad_mails;
    public $monto;

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
            array('telefono,celular,email_1,documento', 'unique', 'on' => 'create'),
//            array('nombre', 'unique', 'on' => 'create'),
            array('nombre+apellido', 'application.extensions.uniqueMultiColumnValidator.uniqueMultiColumnValidator', 'message' => 'Nombre y Apellido ya estan registrados.'),
            array('usuario_creacion_id, usuario_actualizacion_id', 'numerical', 'integerOnly' => true),
            array('nombre, apellido', 'length', 'max' => 32),
            array('documento', 'length', 'max' => 20),
            array('telefono, celular', 'length', 'max' => 24),
            array('email_1, email_2', 'email', 'message' => 'Ingrese su email correctamente.'),
            array('email_1, email_2', 'length', 'max' => 255),
            array('estado', 'length', 'max' => 8),
            array('fecha_actualizacion', 'safe'),
            array('estado', 'in', 'range' => array('ACTIVO', 'INACTIVO')), // enum,
            array('documento, telefono, celular, email_1, email_2, estado, usuario_actualizacion_id, fecha_actualizacion', 'default', 'setOnEmpty' => true, 'value' => null),
            array('id, nombre, apellido, documento, telefono, celular, email_1, email_2, estado, usuario_creacion_id, usuario_actualizacion_id, fecha_creacion, fecha_actualizacion,nombre_completo', 'safe', 'on' => 'search'),
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
            'nombre_completo' => Yii::t('app', 'Nombre'),
            'cantidad_mails' => Yii::t('app', 'Mails Enviados'),
            'monto' => Yii::t('app', 'Deuda'),
            'nombre_completo' => Yii::t('app', 'Nombre'),
            'cltDeudas' => null,
        );
    }

    public function search() {
        $criteria = new CDbCriteria;
        $sort = new CSort;
        $sort->multiSort = true;
//        $criteria->compare('id', $this->id);
//        $criteria->compare('nombre', $this->nombre, true);
//        $criteria->compare('apellido', $this->apellido, true);
//        ;
        $criteria->select = 't.*,(select count(*) from mail m where m.estado=:estado_mail and m.contacto_id=t.id) as cantidad_mails,'
                . '(select monto from clt_deuda where clt_cliente_id=t.id) as monto';
        $criteria->compare('CONCAT(CONCAT(t.nombre," "),t.apellido)', $this->nombre_completo, true, 'OR');
        $criteria->compare('t.documento', $this->documento, true, 'OR');
        $criteria->compare('t.telefono', $this->telefono, true, 'OR');
        $criteria->compare('t.celular', $this->celular, true, 'OR');
        $criteria->compare('t.email_1', $this->email_1, true, 'OR');
        $criteria->compare('t.email_2', $this->email_2, true, 'OR');
        $criteria->compare('t.estado', $this->estado, true, 'OR');
        $criteria->compare('t.usuario_creacion_id', $this->usuario_creacion_id, true, 'OR');
        $criteria->compare('t.usuario_actualizacion_id', $this->usuario_actualizacion_id, true, 'OR');
        $criteria->compare('t.fecha_creacion', $this->fecha_creacion, true, 'OR');
        $criteria->compare('t.fecha_actualizacion', $this->fecha_actualizacion, true, 'OR');

        if (!Yii::app()->request->isAjaxRequest) {
            $criteria->order = 'CONCAT(CONCAT(t.nombre," "),t.apellido)  ASC';
        }

        $Params = array(':estado_mail' => Mail::ESTADO_ENVIADO);
        $criteria->params = array_merge($criteria->params, $Params);

        $sort->attributes = array(
            '*',
            'nombre_completo' => array(
                'asc' => 'CONCAT(CONCAT(t.nombre," "),t.apellido) asc',
                'desc' => 'CONCAT(CONCAT(t.nombre," "),t.apellido) desc',
                'default' => 'desc',
            ),
            'cantidad_mails' => array(
//                'asc' => '(select count(*) from mail m where m.estado=:estado_mail and m.contacto_id=t.id) asc',
                'asc' => 'cantidad_mails  asc',
                'desc' => 'cantidad_mails desc',
            ),
            'monto' => array(
                'asc' => 'monto  asc',
                'desc' => 'monto desc',
            ),

        );

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'pagination' => array(
                'pageSize' => 7,
            ),
            'sort' => $sort,
        ));
    }

    /* scopes */

    function scopes() {
        return array(
            'activos' => array(
                'condition' => 't.estado=:estado',
                'params' => array(':estado' => self::ESTADO_ACTIVO),
            ),
            'inactivos' => array(
                'condition' => 't.estado=:estado',
                'params' => array(':estado' => self::ESTADO_INACTIVO),
            ),
            'conCorreo' => array(
                'condition' => 't.email_1 is not null or t.email_2 is not null',
            ),
        );
    }

    /* funciones exras de atributos del modelo */

    public function searchParams() {
        return array(
            'nombre_completo',
            'documento',
            'telefono',
            'celular',
            'email_1',
        );
    }

    public function getNombre_completo() {
        if (!$this->nombre_completo)
            $this->nombre_completo = $this->nombre . ($this->nombre ? ' ' : '') . $this->apellido;
        return $this->nombre_completo;
    }

    public function setNombre_completo($nombre_completo) {
        $this->nombre_completo = $nombre_completo;
        return $this->nombre_completo;
    }

    /* funciones exras */

    public function getCountClientes() {
        $command = Yii::app()->db->createCommand()
                ->select('count(t.id) as total')
                ->from('clt_cliente t');

        $result = $command->queryAll();
        return $result[0]['total'];
    }

}
