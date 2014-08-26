<?php

Yii::import('cliente.models._base.BaseCltDeuda');
Yii::import('transaccion.models.*');

class CltDeuda extends BaseCltDeuda {

    /**
     * @return CltDeuda
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function label($n = 1) {
        return Yii::t('app', 'Deuda|Deudas', $n);
    }

    /* funciones de Base */

    /* scopes */

    /*
     * @autor Jhonatan Quilca
     * @$idCliente id de cliente
     * @descripcion scope para obtener solo un cliente 
     */

    public function de_cliente($idCliente) {
        $this->getDbCriteria()->mergeWith(
                array(
                    'condition' => 't.clt_cliente_id=:idcliente',
                    'params' => array(
                        ':idcliente' => $idCliente
                    ),
                )
        );

        return $this;
    }

    /* funciones exras de atributos del modelo */
    /* funciones exras */

    //todas las deudas
    public function getCountDeudas() {
        $command = Yii::app()->db->createCommand()
                ->select('count(t.id) as total')
                ->from('clt_deuda t');

        $result = $command->queryAll();
        return $result[0]['total'];
    }

    //deudas por cliente
    public function getCountDeudaByCliente($idCliente) {
        $command = Yii::app()->db->createCommand()
                ->select('count(t.id) as total')
                ->from('clt_deuda t')
                ->where('t.clt_cliente_id =' . $idCliente);

        $result = $command->queryAll();
        return $result[0]['total'];
    }

}
