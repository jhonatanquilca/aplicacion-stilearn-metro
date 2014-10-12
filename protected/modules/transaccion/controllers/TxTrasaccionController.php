<?php

class TxTrasaccionController extends AweController {

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
        if (Yii::app()->request->isAjaxRequest) {
            $this->renderPartial('_view_modal', array(
                'model' => $this->loadModel($id),
                    ), false, true);
        } else {
            $this->render('view', array(
                'model' => $this->loadModel($id),
            ));
        }
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate($id_deuda = null) {
        $result = array();
        $model = new TxTrasaccion;

        $model->clt_deuda_id = $id_deuda;
        $model->usuario_creacion_id = Yii::app()->user->id;
        $model->fecha_creacion = Util::FechaActual();



        $this->performAjaxValidation($model, 'tx-trasaccion-form');

        $validadorPartial = false;
        if (Yii::app()->request->isAjaxRequest) {
            if (isset($_POST['TxTrasaccion'])) {

                $model->attributes = $_POST['TxTrasaccion'];

                $modelDeudaTotal = CltDeuda::model()->findByPk($model->clt_deuda_id);
                $modelDeudaTotal = floatval($modelDeudaTotal->monto);

                $montoInput = floatval($model->monto_cuota);

                if ($model->tipo == TxTrasaccion::TIPO_ADEUDAR) {
                    CltDeuda::model()->updateByPk($id_deuda, array('monto' => $modelDeudaTotal + $montoInput));
                    $result['success'] = $model->save();
                    if (!$result['success']) {
                        $result['mensage'] = "Error al guardar";
                    } else {
                        Actividad::registrarActividad($model, Actividad::TIPO_CREATE);
                    }
                }
                if ($model->tipo == TxTrasaccion::TIPO_PAGAR) {
                    if ($modelDeudaTotal >= $montoInput) {
                        CltDeuda::model()->updateByPk($id_deuda, array('monto' => $modelDeudaTotal - $montoInput));
                        $result['success'] = $model->save();
                        if (!$result['success']) {
                            $result['mensage'] = "Error al guardar";
                        } else {
                            Actividad::registrarActividad($model, Actividad::TIPO_CREATE);
                        }
                    } else {
                        $result['success'] = false;
                        $result['mensage'] = "EL mono tingresado no puede se mayor a la deuda Total.";
                    }
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
            if (isset($_POST['TxTrasaccion'])) {
                $model->attributes = $_POST['TxTrasaccion'];
                if ($model->save()) {
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
        $result = array();
        $model = $this->loadModel($id);

        $model->usuario_actualizacion_id = Yii::app()->user->id;
        $model->fecha_actualizacion = Util::FechaActual();

        $this->performAjaxValidation($model, 'tx-trasaccion-form');

        $validadorPartial = false;
        if (Yii::app()->request->isAjaxRequest) {
            if (isset($_POST['TxTrasaccion'])) {

                $modelAnt = floatval($model->monto_cuota);
                $modelAntTipo = $model->tipo;

                $model->attributes = $_POST['TxTrasaccion'];

                $modelDeudaTotal = CltDeuda::model()->findByPk($model->clt_deuda_id);
                $modelDeudaTotal = floatval($modelDeudaTotal->monto);

                $montoInput = floatval($model->monto_cuota);

                if ($model->tipo == $modelAntTipo) {
                    if ($model->tipo == TxTrasaccion::TIPO_ADEUDAR) {
                        CltDeuda::model()->updateByPk($model->clt_deuda_id, array('monto' => ($modelDeudaTotal - $modelAnt) + $montoInput));
                        $result['success'] = $model->save();
                        if (!$result['success']) {
                            $result['mensage'] = "Error al guardar";
                        } else {
                            Actividad::registrarActividad($model, Actividad::TIPO_UPDATE);
                        }
                    }

                    if ($model->tipo == TxTrasaccion::TIPO_PAGAR) {
                        if (($modelDeudaTotal + $modelAnt) >= $montoInput) {
                            CltDeuda::model()->updateByPk($model->clt_deuda_id, array('monto' => ($modelDeudaTotal + $modelAnt) - $montoInput));
                            $result['success'] = $model->save();
                            if (!$result['success']) {
                                $result['mensage'] = "Error al guardar";
                            } else {
                                Actividad::registrarActividad($model, Actividad::TIPO_UPDATE);
                            }
                        } else {
                            $result['success'] = false;
                            $result['mensage'] = "EL mono tingresado no puede se mayor a la deuda Total.";
                        }
                    }
                } else {

                    if ($model->tipo == TxTrasaccion::TIPO_ADEUDAR) {

                        CltDeuda::model()->updateByPk($model->clt_deuda_id, array('monto' => ($modelDeudaTotal + $modelAnt) + $montoInput));
                        $result['success'] = $model->save();
                        if (!$result['success']) {
                            $result['mensage'] = "Error al guardar";
                        } else {
                            Actividad::registrarActividad($model, Actividad::TIPO_UPDATE);
                        }
                    }

                    if ($model->tipo == TxTrasaccion::TIPO_PAGAR) {

                        $upMonto = ($modelDeudaTotal - $modelAnt) - $montoInput;

                        if ($modelDeudaTotal >= $montoInput && $upMonto >= 0.00) {
                            CltDeuda::model()->updateByPk($model->clt_deuda_id, array('monto' => $upMonto));
                            $result['success'] = $model->save();
                            if (!$result['success']) {
                                $result['mensage'] = "Error al guardar";
                            } else {
                                Actividad::registrarActividad($model, Actividad::TIPO_UPDATE);
                            }
                        } else {
                            $result['success'] = false;
                            $result['mensage'] = "EL mono tingresado no puede se mayor a la deuda Total.";
                        }
                    }
                }

                $validadorPartial = TRUE;
                echo json_encode($result);
            }

            if (!$validadorPartial) {
                $model->monto_cuota = number_format($model->monto_cuota, 2, '.', '');
                $this->renderPartial('_form_modal', array(
                    'model' => $model
                        ), false, true);
            }
        } else {
            if (isset($_POST['TxTrasaccion'])) {
                $model->attributes = $_POST['TxTrasaccion'];
                if ($model->save()) {
                    $this->redirect(array('view', 'id' => $model->id));
                }
            }

            $this->render('update', array(
                'model' => $model,
            ));
        }
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
        $dataProvider = new CActiveDataProvider('TxTrasaccion');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new TxTrasaccion('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['TxTrasaccion']))
            $model->attributes = $_GET['TxTrasaccion'];

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
        $model = TxTrasaccion::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model, $form = null) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'tx-trasaccion-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
