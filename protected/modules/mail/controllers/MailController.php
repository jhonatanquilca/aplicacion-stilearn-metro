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

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Mail;

        $this->performAjaxValidation($model, 'mail-form');

        if (isset($_POST['Mail'])) {
            $model->attributes = $_POST['Mail'];
            if ($model->save()) {
                $this->redirect(array('view', 'id' => $model->id));
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

    /**
     * sendEmail : Es el metodo que usa la ext.YiiMailer  para el envio del mail.
     * @param $email es el modelo de mail dond tenemos el contenido la direccion
     * @param $att es la variable que recive cuando adjuntamos un archivo
     * @param $imgatt es la variable que recive cuando adjuntamos una imagen     
     */
    function actionSendEmail($email = null, $att = null, $imgatt = null) {
        try {
            $mail = new YiiMailer();
            /* Configuracion para el Envio de Mails */
            $mail->Timeout = 3000;
            $mail->IsSMTP();
            $mail->SMTPAuth = true;
            $mail->CharSet = 'UTF-8';
            $mail->Host = 'smtp.gmail.com:465';
            $mail->SMTPSecure = "ssl";
            $mail->IsHTML(true);
            $mail->Username = 'cyberLadyinfo2014@gmail.com';
            $mail->Password = 'cyberlady2014';

            $mail->clearLayout(); //if layout is already set in config
            $mail->setFrom('jhonatand.quilca@gmail.com', 'Info');
//            $mail->setTo($email->email);
            $mail->setTo('jquilca@tradesystem.com.ec');
//            $mail->setTo('jhosy25000@hotmail.com');
//            $mail->setTo('jhonydavis@facebook.com');
//            $mail->setSubject($email->asunto);
            $mail->setSubject('test');
//            $mail->setBody($email->contenido, 'text/html');
            $mail->setBody('<b>hola como estas</b>', 'text/html');
//            $mail->setAttachment($imgatt); //Añadimos como adjunto la Imagen q nos envio por la variable $imgatt
//            $mail->setAttachment('http://localhost/TruuloCRM/uploads/mail_upload/e143b27b51886fddcb119339deeeaa31.jpg'); //Añadimos como adjunto la Imagen q nos envio por la variable $imgatt
//            $mail->setAttachment($att); //Añadimos al mail como adjunto el Archivo q nos envia por la variable $att
            /* Envia el Mail */
            $mail->send();

            //Actualizar el estado del mail
//            $email->fecha_envio = date('Y-m-d H:i:s');
//            $email->estado = Mail::ESTADO_ENVIADO;
//            $email->save();
            // Crear registro de actividad
//            Actividad::registrarActividad($email, Actividad::TIPO_CREATE);
            $_SESSION['attm'] = null;
            $_SESSION['imgattm'] = null;
            echo 'paso';
            return true;
        } catch (Exception $ex) {
            echo $ex;
//            $email->estado = Mail::ESTADO_NO_ENVIADO;
//            $email->save();
            $_SESSION['attm'] = null;
            $_SESSION['imgattm'] = null;
            return false;
        }
    }

}
