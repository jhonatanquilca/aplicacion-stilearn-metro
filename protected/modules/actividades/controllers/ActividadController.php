<?php

class ActividadController extends AweController {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

//    public $defaultAction = 'admin';
//    public $admin = false;

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
     * Manages all models.
     */
    public function actionAdmin($paginacion = NULL) {
        $providerInfinite = new Actividad;
        $pie = null;


        $providerInfinite = Actividad::model()->ordenFecha()->search();
//si hay paginacion
        if ($paginacion) {
            $providerInfinite->model->pageSize = $paginacion;
            $providerInfinite->pagination->pageSize = $paginacion;
        }
        if (Yii::app()->request->isAjaxRequest) {

            $this->renderPartial('noportlet/actividades', array(
                'pie' => $pie,
                'paginacion' => $paginacion,
                'providerInfinite' => $providerInfinite,
                    ), false, true);
        } else {
            if (Actividad::model()->getCountActividades() > 0) {
                $this->render('admin', array(
                    'pie' => $pie,
                    'paginacion' => $paginacion,
                    'providerInfinite' => $providerInfinite,
                ));
            } else {

                $this->render('empty', array(
//                    'model' => $providerInfinite,
                    'model' => new Actividad,
                ));
            }
        }
    }

    public function actionActividadesCliente($paginacion = NULL, $idCliente) {
        $providerInfinite = new Actividad;
        $pie = null;


        $providerInfinite = Actividad::model()->ordenFecha()->deCliente($idCliente);
//            var_dump(sizeof($providerInfinite->criteria->params));
//            die();
//si hay paginacion
        if ($paginacion) {
            $providerInfinite->model->pageSize = $paginacion;
            $providerInfinite->pagination->pageSize = $paginacion;
        }

        if (Yii::app()->request->isAjaxRequest) {

            $this->renderPartial('noportlet/actividades', array(
                'pie' => $pie,
                'paginacion' => $paginacion,
                'providerInfinite' => $providerInfinite,
                    ), false, true);
        } else {
            if (sizeof($providerInfinite->criteria->params) > 0) {
                $this->render('admin', array(
                    'pie' => $pie,
                    'paginacion' => $paginacion,
                    'providerInfinite' => $providerInfinite,
                ));
            } else {
//
                $this->render('empty', array(
                    'model' => $providerInfinite,
                ));
            }
        }
    }

    public function actionAdminDirarias($paginacion = NULL) {
        $providerInfinite = new Actividad;
        $pie = null;

        if ($providerInfinite->getCountActividades(Actividad::ACTIVIDADES_DIARIAS) > 0) {
            $providerInfinite = Actividad::model()->actividaddesDiarias()->ordenFecha()->search();
            $pie = Actividad::ACTIVIDADES_DIARIAS;
//si hay paginacion
            if ($paginacion) {
                $providerInfinite->model->pageSize = $paginacion;
                $providerInfinite->pagination->pageSize = $paginacion;
            }

            $this->render('admin', array(
                'pie' => $pie,
                'paginacion' => $paginacion,
                'providerInfinite' => $providerInfinite,
            ));
        } else {
//
            $this->render('empty', array(
                'model' => $providerInfinite,
            ));
        }
    }

    public function actionAdminMensual($paginacion = NULL) {
        $providerInfinite = new Actividad;
        $pie = null;

        if ($providerInfinite->getCountActividades(Actividad::ACTIVIDADES_MENSUAL) > 0) {
            $providerInfinite = Actividad::model()->actividaddesMensual()->ordenFecha()->search();
            $pie = Actividad::ACTIVIDADES_MENSUAL;
//si hay paginacion
            if ($paginacion) {
                $providerInfinite->model->pageSize = $paginacion;
                $providerInfinite->pagination->pageSize = $paginacion;
            }

            $this->render('admin', array(
                'pie' => $pie,
                'paginacion' => $paginacion,
                'providerInfinite' => $providerInfinite,
            ));
        } else {
//
            $this->render('empty', array(
                'model' => $providerInfinite,
            ));
        }
    }

    public function actionAdminDefault() {
        $model = new Actividad('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['Actividad']))
            $model->attributes = $_GET['Actividad'];
        if ($model->getCountActividades() > 0) {
            $this->render('adminDefault', array(
                'model' => $model,
            ));
        } else {
            $this->render('empty', array(
                'model' => $model,
            ));
        }
    }

    /*     * **************************funciones ajax**************************** */

    /**
     * retorna la lista de actividades por entidada.
     * @param type $entidad_tipo
     * @param type $entidad_id
     * @param type $page
     */
    public function actionAjaxloadingActivities($entidad_tipo = null, $entidad_id = null, $page) {
        $colors = array('green', 'purple', 'red', 'yellow', 'blue', 'orange', 'gray', 'red', 'purple', 'yellow');
        $providerInfinite = Actividad::model()->searchActivites($entidad_tipo, $entidad_id);
        $providerInfinite->pagination->setCurrentPage($page);
        $data = $providerInfinite->getData();
        echo '<ul id="ulActivities_' . $entidad_tipo . '_page-' . $page . '" data-page="' . $page . '" class="metro_tmtimeline ulActivities">';
        $i = 0;
        foreach ($data as $actividad) {
            $mensaje = Actividad::getMensaje($actividad['oldValues']);
            echo '<li class = "' . $colors[$i] . '">';
            echo $mensaje;
            echo '</li>';
            $i++;
            if ($i == count($colors)) {
                $i = 0;
            }
        }
        echo '</ul>';
    }

    /**
     * retornana paginacion de el dataprovider de actividades 
     * @param type $entidad_tipo
     * @param type $entidad_id
     */
    public function actionAjaxGetPagination($entidad_tipo = null, $entidad_id = null) {
        if (Yii::app()->request->isAjaxRequest) {
            $providerInfinite = Actividad::model()->searchActivites($entidad_tipo, $entidad_id);
            $providerInfinite->getData();
            $pagination = $providerInfinite->getPagination();
            echo $pagination->pageCount;
        }
    }

}
