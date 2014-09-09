<?php

Yii::import('transaccion.models._base.BaseTxDescripcionPalntilla');

class TxDescripcionPalntilla extends BaseTxDescripcionPalntilla {

    const ESTADO_ACTIVO = 'ACTIVO';
    const ESTADO_INACTIVO = 'INACTIVO';

    /**
     * @return TxDescripcionPalntilla
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function label($n = 1) {
        return Yii::t('app', 'Palntilla Transacción|Palntillas  Transaccónes', $n);
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
        );
    }

    /* funciones exras */

    public function getCountDescipcionPlantilla() {
        $command = Yii::app()->db->createCommand()
                ->select('count(id) as total')
                ->from('tx_descripcion_palntilla ');

        $result = $command->queryAll();
        return $result[0]['total'];
    }

}
