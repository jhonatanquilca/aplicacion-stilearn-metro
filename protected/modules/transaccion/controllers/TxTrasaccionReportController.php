<?php

class TxTrasaccionReportController extends AweController {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    public function filters() {
        return array(
            array('CrugeAccessControlFilter'),
        );
    }

    /**
     * Lists all models.
     */
    public function actionPieReport() {
        $model = new TxTrasaccionReport;

        $this->render('pieReport', array(
            'model' => $model,
        ));
    }

}
