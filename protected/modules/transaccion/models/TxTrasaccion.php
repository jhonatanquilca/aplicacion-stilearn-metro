<?php

Yii::import('transaccion.models._base.BaseTxTrasaccion');
Yii::import('cliente.models.*');

class TxTrasaccion extends BaseTxTrasaccion {

    const TIPO_ADEUDAR = ' ADEUDAR';
    const TIPO_PAGAR = 'PAGAR';

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

    /* scopes */

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

}
