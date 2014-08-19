<?php

/**
 * This is the model base class for the table "clt_deuda".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "CltDeuda".
 *
 * Columns in table "clt_deuda" available as properties of the model,
 * followed by relations of table "clt_deuda" available as properties of the model.
 *
 * @property integer $id
 * @property double $monto
 * @property integer $usuario_creacion_id
 * @property string $fecha_creacion
 * @property integer $usuario_actualizacion_id
 * @property string $fecha_actualizacion
 * @property integer $clt_cliente_id
 *
 * @property CltCliente $cltCliente
 * @property TxTrasaccion[] $txTrasaccions
 */
abstract class BaseCltDeuda extends AweActiveRecord {

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'clt_deuda';
    }

    public static function representingColumn() {
        return 'fecha_creacion';
    }

    public function rules() {
        return array(
            array('monto, usuario_creacion_id, clt_cliente_id', 'required'),
            array('usuario_creacion_id, usuario_actualizacion_id, clt_cliente_id', 'numerical', 'integerOnly' => true),
            array('monto', 'numerical'),
            array('fecha_actualizacion', 'safe'),
            array('usuario_actualizacion_id, fecha_actualizacion', 'default', 'setOnEmpty' => true, 'value' => null),
            array('id, monto, usuario_creacion_id, fecha_creacion, usuario_actualizacion_id, fecha_actualizacion, clt_cliente_id', 'safe', 'on' => 'search'),
        );
    }

    public function relations() {
        return array(
            'cltCliente' => array(self::BELONGS_TO, 'CltCliente', 'clt_cliente_id'),
            'txTrasaccions' => array(self::HAS_MANY, 'TxTrasaccion', 'clt_deuda_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => Yii::t('app', 'ID'),
            'monto' => Yii::t('app', 'Monto'),
            'usuario_creacion_id' => Yii::t('app', 'Usuario Creacion'),
            'fecha_creacion' => Yii::t('app', 'Fecha Creacion'),
            'usuario_actualizacion_id' => Yii::t('app', 'Usuario Actualizacion'),
            'fecha_actualizacion' => Yii::t('app', 'Fecha Actualizacion'),
            'clt_cliente_id' => Yii::t('app', 'Clt Cliente'),
            'cltCliente' => null,
            'txTrasaccions' => null,
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('monto', $this->monto);
        $criteria->compare('usuario_creacion_id', $this->usuario_creacion_id);
        $criteria->compare('fecha_creacion', $this->fecha_creacion, true);
        $criteria->compare('usuario_actualizacion_id', $this->usuario_actualizacion_id);
        $criteria->compare('fecha_actualizacion', $this->fecha_actualizacion, true);
        $criteria->compare('clt_cliente_id', $this->clt_cliente_id);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function behaviors() {
        return array_merge(array(
            'CTimestampBehavior' => array(
                'class' => 'zii.behaviors.CTimestampBehavior',
                'createAttribute' => 'fecha_creacion',
                'updateAttribute' => 'fecha_actualizacion',
                'timestampExpression' => new CDbExpression('NOW()'),
            )
                ), parent::behaviors());
    }

}