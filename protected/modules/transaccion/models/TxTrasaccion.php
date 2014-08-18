<?php

Yii::import('transaccion.models._base.BaseTxTrasaccion');
Yii::import('cliente.models.*');

class TxTrasaccion extends BaseTxTrasaccion {

    /**
     * @return TxTrasaccion
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function label($n = 1) {
        return Yii::t('app', 'TxTrasaccion|TxTrasaccions', $n);
    }

    /* funciones de Base */

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
    public function getCountTransaccionByDeuda($idCliente) {
        $command = Yii::app()->db->createCommand()
                ->select('count(t.id) as total')
                ->from('tx_trasaccion t')
                ->where('t.clt_deuda_id =' . $idCliente);

        $result = $command->queryAll();
        return $result[0]['total'];
    }

}
