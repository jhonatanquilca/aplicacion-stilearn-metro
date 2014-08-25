<?php

class CltClienteController extends AweController {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';
    public $defaultAction = 'admin';

    public function filters() {
        return array(
            array('CrugeAccessControlFilter'),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $model = $this->loadModel($id);
//        $modelDeuda = CltDeuda::model();
//        $modelTransaccion = TxTrasaccion::model();


        $this->render('view', array(
            'model' => $model,
//            'modelDeuda' => $modelDeuda,
//            'modelTransaccion' => $modelTransaccion,
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {

        $model = new CltCliente('create');
        $model->usuario_creacion_id = Yii::app()->user->id;
        $model->estado = CltCliente::ESTADO_ACTIVO;

        $this->performAjaxValidation($model, 'clt-cliente-form');

        if (isset($_POST['CltCliente'])) {
            $model->attributes = $_POST['CltCliente'];
            if ($model->save()) {
//                TODO borrar si no sirver
                $this->redirect(array('view', 'id' => $model->id));
//                $this->redirect(array('admin'));
            }
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);
        $model->usuario_actualizacion_id = Yii::app()->user->id;

        $this->performAjaxValidation($model, 'clt-cliente-form');

        if (isset($_POST['CltCliente'])) {
            $model->attributes = $_POST['CltCliente'];
            if ($model->save()) {
                $this->redirect(array('view', 'id' => $model->id));
            }
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        if (Yii::app()->request->isPostRequest) {
            // we only allow deletion via POST request
            $model = $this->loadModel($id);

            $estado = CltCliente::model()->updateByPk($id, array('estado' => CltCliente::ESTADO_INACTIVO,
                'usuario_actualizacion_id' => Yii::app()->user->id,
            ));

            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('CltCliente');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new CltCliente('search');
        $model->unsetAttributes(); // clear any default values

        if (isset($_GET['search'])) {
            $model->attributes = $this->assignParams($_GET['search']);
        }

//        if (isset($_GET['CltCliente']))
//            $model->attributes = $_GET['CltCliente'];

        if ($model->getCountClientes() > 0) {
            $this->render('admin', array(
                'model' => $model,
            ));
        } else {
            $this->render('empty');
        }
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id, $modelClass = __CLASS__) {
        $model = CltCliente::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model, $form = null) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'clt-cliente-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    /* acction Extras */

    public function actionRestore($id) {
        if (Yii::app()->request->isPostRequest) {
            // we only allow deletion via POST request
            $model = $this->loadModel($id);

            $estado = CltCliente::model()->updateByPk($id, array('estado' => CltCliente::ESTADO_ACTIVO,
                'usuario_actualizacion_id' => Yii::app()->user->id,
            ));

            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    /* funcione extra */

    public function assignParams($params) {
        $result = array();
        if ($params['filters'][0] == 'all') {
            foreach (CltCliente::model()->searchParams() as $param) {
                $result[$param] = $params['value'];
            }
        } else {
            foreach ($params['filters'] as $param) {
                $result[$param] = $params['value'];
            }
        }
        return $result;
    }

    /* acction ajax */
}
