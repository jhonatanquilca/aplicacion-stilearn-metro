<?php

class CltDeudaController extends AweController {

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
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate($id_cliente = null) {
        $result = array();
        $model = new CltDeuda;

        $model->usuario_creacion_id = Yii::app()->user->id;
        $model->usuario_actualizacion_id = Yii::app()->user->id;
        $model->clt_cliente_id = $id_cliente;


        $this->performAjaxValidation($model, 'clt-deuda-form');

        $validadorPartial = false;
        if (Yii::app()->request->isAjaxRequest) {
//            

            if (isset($_POST['CltDeuda'])) {

                $model->attributes = $_POST['CltDeuda'];



                $result['success'] = $model->save();

                if (!$result['success']) {

                    $result['mensage'] = "Error al guardar";
                } else {
                    Actividad::registrarActividad($model, Actividad::TIPO_CREATE);
                }

                $validadorPartial = TRUE;
                echo json_encode($result);
            }

            if (!$validadorPartial) {

                $this->renderPartial('_form_modal', array(
                    'model' => $model
                        ), false, true);
            }
        } else {
            if (isset($_POST['CltDeuda'])) {
                $model->attributes = $_POST['CltDeuda'];

                if ($model->save()) {
                    Actividad::registrarActividad($model, Actividad::TIPO_CREATE);
                    $this->redirect(array('view', 'id' => $model->id));
                }
            }
            $this->render('create', array(
                'model' => $model,
            ));
        }
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        $this->performAjaxValidation($model, 'clt-deuda-form');

        if (isset($_POST['CltDeuda'])) {
            $model->attributes = $_POST['CltDeuda'];
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
            $this->loadModel($id)->delete();

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
        $dataProvider = new CActiveDataProvider('CltDeuda');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new CltDeuda('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['CltDeuda']))
            $model->attributes = $_GET['CltDeuda'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id, $modelClass = __CLASS__) {
        $model = CltDeuda::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model, $form = null) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'clt-deuda-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    /*     * ********AJAX********** */

    public function actionAjaxGetMonto($id) {
        $result = array();
        if (Yii::app()->request->isAjaxRequest) {


            $model = $this->loadModel($id);
            $result['monto'] = $model->monto;
            echo json_encode($result);
        }
    }

}
