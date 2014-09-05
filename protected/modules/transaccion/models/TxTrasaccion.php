<?php

Yii::import('transaccion.models._base.BaseTxTrasaccion');
Yii::import('cliente.models.*');

class TxTrasaccion extends BaseTxTrasaccion {

    const TIPO_ADEUDAR = ' ADEUDAR';
    const TIPO_PAGAR = 'PAGAR';

    public $pageSize = 10;

    /**
     * @return TxTrasaccion
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function label($n = 1) {
        return Yii::t('app', 'Trasaccion|Trasaccions', $n);
    }

    /* funciones de Base */

    public function rules() {
        return array(
            array('monto_cuota, usuario_creacion_id, clt_deuda_id,tipo', 'required'),
            array('usuario_creacion_id, usuario_actualizacion_id, clt_deuda_id, tx_descripcion_palntilla_id', 'numerical', 'integerOnly' => true),
            array('monto_cuota', 'numerical'),
            array('tipo', 'length', 'max' => 7),
            array('observaciones, fecha_actualizacion', 'safe'),
            array('tipo', 'in', 'range' => array('ADEUDAR', 'PAGAR')), // enum,
            array('tipo, observaciones, usuario_actualizacion_id, fecha_actualizacion, tx_descripcion_palntilla_id', 'default', 'setOnEmpty' => true, 'value' => null),
            array('id, monto_cuota, tipo, observaciones, usuario_creacion_id, fecha_creacion, usuario_actualizacion_id, fecha_actualizacion, clt_deuda_id, tx_descripcion_palntilla_id', 'safe', 'on' => 'search'),
        );
    }

    public function attributeLabels() {
        return array(
            'id' => Yii::t('app', 'ID'),
            'monto_cuota' => Yii::t('app', 'Monto'),
            'tipo' => Yii::t('app', 'Tipo'),
            'observaciones' => Yii::t('app', 'Observaciones'),
            'usuario_creacion_id' => Yii::t('app', 'Usuario Creador'),
            'fecha_creacion' => Yii::t('app', 'Fecha Creacion'),
            'usuario_actualizacion_id' => Yii::t('app', 'Usuario Actualizacion'),
            'fecha_actualizacion' => Yii::t('app', 'Fecha Actualizacion'),
            'clt_deuda_id' => Yii::t('app', 'Clt Deuda'),
            'tx_descripcion_palntilla_id' => Yii::t('app', 'Descripción'),
            'cltDeuda' => null,
            'txDescripcionPalntilla' => null,
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('monto_cuota', $this->monto_cuota);
        $criteria->compare('tipo', $this->tipo, true);
        $criteria->compare('observaciones', $this->observaciones, true);
        $criteria->compare('usuario_creacion_id', $this->usuario_creacion_id);
        $criteria->compare('fecha_creacion', $this->fecha_creacion, true);
        $criteria->compare('usuario_actualizacion_id', $this->usuario_actualizacion_id);
        $criteria->compare('fecha_actualizacion', $this->fecha_actualizacion, true);
        $criteria->compare('clt_deuda_id', $this->clt_deuda_id);
        $criteria->compare('tx_descripcion_palntilla_id', $this->tx_descripcion_palntilla_id);



        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'pagination' => array('pageSize' => $this->pageSize,),
        ));
    }

    /* scopes */

    public function scopes() {
        return array(
            'masRecientes' => array(
                'order' => 'fecha_creacion DESC'
            ),
        );
    }

    /*
     * @autor Jhonatan Quilca
     * @$idCliente id de cliente
     * @descripcion scope para obtener solo un cliente 
     */

    public function de_deuda($idCuenta) {
        $this->getDbCriteria()->mergeWith(
                array(
                    'condition' => 't.clt_deuda_id=:idCuenta',
                    'params' => array(
                        ':idCuenta' => $idCuenta
                    ),
                )
        );

        return $this;
    }

    /* funciones exras de atributos del modelo */
    /* funciones exras */

    //todas las transacciones
    public function getCountTransacciones() {
        $command = Yii::app()->db->createCommand()
                ->select('count(t.id) as total')
                ->from('tx_transaccion t');

        $result = $command->queryAll();
        return $result[0]['total'];
    }

    //transacciones por cliente
    public function getCountTransaccionByDeuda($idDeuda) {
        $command = Yii::app()->db->createCommand()
                ->select('count(t.id) as total')
                ->from('tx_trasaccion t')
                ->where('t.clt_deuda_id =' . $idDeuda);

        $result = $command->queryAll();
        return $result[0]['total'];
    }

    public function getNumeroTransaccionByDeuda($idDeuda, $id) {
//        select id,clt_deuda_id from tx_trasaccion where clt_deuda_id=1;
        $numero = 0;
        $command = Yii::app()->db->createCommand()
                ->select('t.id,t.clt_deuda_id')
                ->from('tx_trasaccion t')
                ->where('t.clt_deuda_id =' . $idDeuda);

        $result = $command->queryAll();


        while ($value = current($result)) {

            if ($value['id'] == $id) {
                $numero = key($result) + 1;
                break;
            }


            next($result);
        }
        return $numero;
    }

}
