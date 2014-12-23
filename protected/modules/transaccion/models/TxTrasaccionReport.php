<?php

class TxTrasaccionReport extends CModel {

    const TIPO_ADEUDAR = 'ADEUDAR';
    const TIPO_PAGAR = 'PAGAR';

    /**
     * @return TxTrasaccion
     */
    public function attributeNames() {
        
    }

    public static function generatePieReport() {
//        select tt.tipo,count(*) as total from tx_trasaccion tt group by tt.tipo
        $command = Yii::app()->db->createCommand()
                ->select('tt.tipo,count(*) as total')->from('tx_trasaccion tt')
                ->group('tt.tipo');
        $command = $command->queryAll();
//        var_dump($command);
        $data = array();
        foreach ($command as $value) {
            array_push($data, array($value['tipo'] == self::TIPO_PAGAR ? 'PAGOS' : 'DEUDAS', (int) $value['total']));
        }
        $report = array();
        $report['chart'] = array(
            'plotBackgroundColor' => null,
            'plotBorderWidth' => 1, //null,
            'plotShadow' => false,
            'height' => '320',
        );
        $report['plotOptions'] = array(
            'pie' => array(
                'allowPointSelect' => true,
                'cursor' => 'pointer',
                'dataLabels' => array(
                    'enabled' => true,
                    'color' => '#AAAAAA',
                    'connectorColor' => '#AAAAAA',
                ),
                'showInLegend' => true,
            )
        );
        $report['title']['text'] = 'Pagos y Deudas';



        $report['title']['text'] = 'Pagos y Deudas';
        $report['series'][0]['type'] = 'pie';
//        $report['series'][]['name'] = 'Percentage';
        $report['series'][0]['data'] = $data;
//        var_dump($data);

        return $report;
    }

}
