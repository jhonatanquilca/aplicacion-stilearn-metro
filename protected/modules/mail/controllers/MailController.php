<?php

class MailController extends AweController {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';
    public $defaultAction = 'admin';
    public $admin = false;

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

    public function actionViewPlantilla() {
        $this->renderPartial('mailer1');
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate($cliente_ids = null) {
        $result = array();
        $model = new Mail;


        $this->performAjaxValidation($model, 'mail-form');
        $validadorPartial = false;
        if (Yii::app()->request->isAjaxRequest) {
            $model->scenario = 'modal';
            if (isset($_POST['Mail'])) {
//                var_dump($_POST['Mail']);
//                die();

                if (is_array($_POST['Mail']['contacto_id'])) {
                    $contactos = $_POST['Mail']['contacto_id'];

                    foreach ($contactos as $id) {
                        $model = new Mail;
                        $model->attributes = $_POST['Mail'];
                        $model->contacto_id = $id;

                        $validadorSend = true;
                        $result['success'] = $this->sendEmail($model);
//                        var_dump($result['success']);
                        if (!$result['success']) {
                            $validadorSend = $validadorSend && $result['success'];
                        } else {
                            Actividad::registrarActividad($model, Actividad::TIPO_CREATE);
                        }
                    }
//                    die();
                    $result['mensage'] = $validadorSend ? "" : "Error al guardar";
                } else {
                    $result['success'] = $this->sendEmail($model);
                    if (!$result['success']) {
                        $result['mensage'] = "Error al guardar";
                    } else {
                        Actividad::registrarActividad($model, Actividad::TIPO_CREATE);
                    }
                }

                $validadorPartial = TRUE;
                echo json_encode($result);
            }
            if (!$validadorPartial) {
                $model->usuario_creacion_id = Yii::app()->user->id;
                //TODO: falta el evio para varios
                if (is_array($cliente_ids)) {
                    $model->contacto_id = json_encode($cliente_ids);
                    $model->email = 'ejemplo@abc.com';
                } else {
                    $model->contacto_id = $cliente_ids;
                    $modelCliente = CltCliente::model()->findByPk($cliente_ids);
                    $model->email = $modelCliente->email_1 ? $modelCliente->email_1 : $modelCliente->email_2;
                }
                $this->renderPartial('_form_modal', array(
                    'model' => $model
                        ), false, true);
            }
        } else {

            if (isset($_POST['Mail'])) {
                $model->attributes = $_POST['Mail'];
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

        $this->performAjaxValidation($model, 'mail-form');

        if (isset($_POST['Mail'])) {
            $model->attributes = $_POST['Mail'];
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
        $dataProvider = new CActiveDataProvider('Mail');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Mail('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['Mail']))
            $model->attributes = $_GET['Mail'];
        if ($model->getCountMails() > 0) {
            $this->render('admin', array(
                'model' => $model,
            ));
        } else {
            $this->render('empty', array(
                'model' => $model,
            ));
        }
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id, $modelClass = __CLASS__) {
        $model = Mail::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model, $form = null) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'mail-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    /*
     */

    function actionAjaxEnvioMailTodos() {
        $result = array();
        $clientes = CltCliente::model()->activos()->findAll();

        $envioClientes = array();

        foreach ($clientes as $cliente) {
            if ($cliente->email_1 || $cliente->email_2) {
                array_push($envioClientes, $cliente);
            }
        }

        if (!empty($envioClientes)) {
            $result['success'] = true;
            $result['message'] = 'Se enviaron ' . count($envioClientes) . ' correos correctamente!';
            foreach ($envioClientes as $cliente) {
                $model = $this->envioEmailSoloPredefinido($cliente->id);
                $envio = $this->sendEmail($model);
                while (!$envio) {
                    $envio = $this->sendEmail($model);
                }
            }
        } else {
            $result['message'] = 'Uno o mas Clientes seleccionados no tienen nungun correo electronico.';
            $result['success'] = false;
        }

        echo json_encode($result);
    }

    function actionAjaxEnvioMailSeleccionados() {
        $result = array();
        $idsClientes = $_POST['id_cliente'];
        $envioClientes = array();

        foreach ($idsClientes as $id) {
            $modelCiente = CltCliente::model()->findByPk($id);

            if ($modelCiente->email_1 || $modelCiente->email_2) {
                array_push($envioClientes, $modelCiente);
            }
        }

        if (!empty($envioClientes)) {
            $result['success'] = true;
            $result['message'] = 'Se enviaron ' . count($envioClientes) . ' correos correctamente!';
            foreach ($envioClientes as $cliente) {
                $model = $this->envioEmailSoloPredefinido($cliente->id);
                $envio = $this->sendEmail($model);
                while (!$envio) {
                    $envio = $this->sendEmail($model);
                }
            }
        } else {
            $result['message'] = 'Uno o mas Clientes seleccionados no tienen nungun correo electronico.';
            $result['success'] = false;
        }

        echo json_encode($result);
    }

    /* envia mail a un solo cliente
     */

    function actionAjaxEnvioMailSolo($id_cliente) {
        $modelCliente = CltCliente::model()->findByPk($id_cliente);
        $result = array();

        $model = $this->envioEmailSoloPredefinido($id_cliente);

        $result['success'] = $this->sendEmail($model);
        if ($result['success']) {
            $result['messaje'] = 'Mail enviado a: ' . $modelCliente->nombre_completo;
        } else {
            $result['error'] = 'Error! No se pudo enviar el email';
        }

        echo json_encode($result);
    }

    /*
     * sendEmail : Es el metodo que usa la ext.YiiMailer  para el envio del mail.
     * @param $email es el modelo de mail dond tenemos el contenido la direccion
     * @param $att es la variable que recive cuando adjuntamos un archivo
     * @param $imgatt es la variable que recive cuando adjuntamos una imagen     
     */

    function envioEmailSoloPredefinido($id_cliente) {
        $mensaje = NULL;
        $titulo = NULL;

        $modelCliente = CltCliente::model()->findByPk($id_cliente);
        $model = new Mail;
        $model->usuario_creacion_id = Yii::app()->user->id;
        $model->asunto = 'NOTIFICACION DE DEUDA';
        $model->contenido = array('nombre' => $modelCliente->nombre_completo, 'monto' => isset($modelCliente->cltDeudas[0]->monto) ? $modelCliente->cltDeudas[0]->monto : 0);
        $model->contacto_id = $id_cliente;
        $model->email = $modelCliente->email_1 ? $modelCliente->email_1 : $modelCliente->email_2;
        return $model;
    }

    function sendEmail($email, $att = null, $imgatt = null) {
        try {
            $mail = new YiiMailer();
            /* Configuracion para el Envio de Mails activar la extension openssl en el wamp */
            $mail->Timeout = 3000;
            $mail->IsSMTP();
            $mail->SMTPAuth = true;
            $mail->CharSet = 'UTF-8';
            $mail->Host = 'smtp.gmail.com:465';
            $mail->SMTPSecure = "ssl";
            $mail->IsHTML(true);
            $mail->Username = 'cyberLadyinfo2014@gmail.com';
//            $mail->Username = '100005388197930@facebook.com';
            $mail->Password = 'cyberlady2014';

//            $mail->Username = 'jhonatand.quilca@gmail.com';
//            $mail->Password = '1004476568';

            $mail->clearLayout(); //if layout is already set in config
            $mail->setFrom('cyberLadyinfo2014@gmail', 'Info - CyberLady');
            $mail->setTo($email->email);
//            $mail->setTo('jhosy25000@hotmail.com');
            $mail->setSubject($email->asunto);
            $mail->setBody(Util::getMensajeMail($email->asunto . ' - CYBERLADY', $email->contenido), 'text/html');
//            $mail->setBody('<b>hola como estas</b> miju', 'text/html');
//            $mail->setAttachment($imgatt); //Añadimos como adjunto la Imagen q nos envio por la variable $imgatt
//            $mail->setAttachment('http://demoapps.url.ph/themes/stilearn-metro/img/images/pic002.jpg'); //Añadimos como adjunto la Imagen q nos envio por la variable $imgatt
//            $mail->setAttachment($att); //Añadimos al mail como adjunto el Archivo q nos envia por la variable $att
            /* Envia el Mail */
            $mail->send();

            //Actualizar el estado del mail

            $email->contenido = is_array($email->contenido) ? 'ESTIMADO/A ' . $email->contenido['nombre'] . ' CYBERLADY TE INFORMA QUE TU DEUDA ES DE $' . $email->contenido['monto'] . ' ctvs.' : $email->contenido;
            $email->fecha_envio = date('Y-m-d H:i:s');
            $email->estado = Mail::ESTADO_ENVIADO;
            $email->save();
            // Crear registro de actividad
            Actividad::registrarActividad($email, Actividad::TIPO_CREATE);
            $_SESSION['attm'] = null;
            $_SESSION['imgattm'] = null;
            return true;
        } catch (Exception $ex) {
            echo $ex;
            $model->contenido = 'ESTIMADO/A ' . $model->contenido['nombre'] . ' CYBERLADY TE INFORMA QUE TU DEUDA ES DE $' . $model->contenido['monto'] . ' ctvs.';
            $email->estado = Mail::ESTADO_NO_ENVIADO;
            $email->save();
            $_SESSION['attm'] = null;
            $_SESSION['imgattm'] = null;
            return false;
        }
    }

}
