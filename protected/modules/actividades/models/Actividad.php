<?php

Yii::import('actividades.models._base.BaseActividad');

class Actividad extends BaseActividad {

    const TIPO_CREATE = 'CREATE';
    const TIPO_UPDATE = 'UPDATE';
    const TIPO_DELETE = 'DELETE';
    const TIPO_RESTORE = 'RESTORE';
    const ACTIVIDADES_DIARIAS = 'DIARIAS';
    const ACTIVIDADES_MENSUAL = 'MENSUAL';

    public $pageSize = 10;

    /**
     * @return Actividad
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function label($n = 1) {
        return Yii::t('app', 'Actividad|Actividades', $n);
    }

    /* funciones de Base */

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('entidad_tipo', $this->entidad_tipo, true);
        $criteria->compare('entidad_id', $this->entidad_id);
        $criteria->compare('tipo', $this->tipo, true);
        $criteria->compare('usuario_id', $this->usuario_id);
        $criteria->compare('fecha', $this->fecha, true);
        $criteria->compare('detalle', $this->detalle, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'pagination' => array('pageSize' => $this->pageSize,),
        ));
    }

    /* scopes */

    public function scopes() {
        return array(
            'actividaddesDiarias' => array(
                'condition' => 'date_format(t.fecha, "%Y-%m-%d") = :fecha',
                'params' => array('fecha' => Util::FormatDate(Util::FechaActual(), 'Y-m-d'))
            ),
            'actividaddesMensual' => array(
                'condition' => 'date_format(t.fecha, "%Y-%m") = :fecha',
                'params' => array('fecha' => Util::FormatDate(Util::FechaActual(), 'Y-m'))
            ),
            'ordenFecha' => array(
                'order' => 't.fecha DESC',
            ),
        );
    }

    public function deCliente($idCliente) {
        $finalArray = array();
        $deudaClienteCommand = array();
        $clienteCommand = array();
        $transaClienteCommand = array();

//para el cliente
        $params = array(':idCliente' => $idCliente, ':entidadTipo' => CltCliente::model()->tableName());
        $commad = Yii::app()->db->createCommand()
                ->select('*')
                ->from('actividad')
                ->where('entidad_id = :idCliente AND entidad_tipo=:entidadTipo');
        $commad->params = $params;
        $clienteCommand = $commad->queryAll();

        //para el mail de cliente
        $params = array(':idCliente' => $idCliente);
        $commad = Yii::app()->db->createCommand()->select('id')->from('mail')->where('contacto_id=:idCliente');
        $commad->params = $params;
        $mails = $commad->queryAll();
        $clienteMailCommand = array();
        foreach ($mails as $mail) {

            $params = array(':idMail' => $mail['id'], ':entidadTipo' => Mail::model()->tableName());
            $commad = Yii::app()->db->createCommand()
                    ->select('*')
                    ->from('actividad')
                    ->where('entidad_id = :idMail AND entidad_tipo=:entidadTipo');
            $commad->params = $params;
            $clienteMailCommand = array_merge($clienteMailCommand, $commad->queryAll());
        }

//para la deuda
        $cliente = CltCliente::model()->findByPk($idCliente);

        if ($cliente->cltDeudas) {
            $idDeuda = $cliente->cltDeudas['0']['id'];
            $params = array(':idDeuda' => $idDeuda, ':entidadTipo' => CltDeuda::model()->tableName());
            $commad = Yii::app()->db->createCommand()
                    ->select('*')
                    ->from('actividad')
                    ->where('entidad_id = :idDeuda AND entidad_tipo=:entidadTipo');
            $commad->params = $params;
            $deudaClienteCommand = $commad->queryAll();

//PARA LAS TRANSACCIONES

            $deuda = CltDeuda::model()->findByPk($idDeuda);
            $transacciones = $deuda->txTrasaccions;
//            var_dump($transacciones);die();
            $transaClienteCommand = array();
            foreach ($transacciones as $transaccion) {
//            var_dump($transaccion->id);
                $params = array(':idDeuda' => $transaccion->id, ':entidadTipo' => TxTrasaccion::model()->tableName());
                $commad = Yii::app()->db->createCommand()
                        ->select('*')
                        ->from('actividad')
                        ->where('entidad_id = :idDeuda AND entidad_tipo=:entidadTipo');
                $commad->params = $params;
                $transaClienteCommand = array_merge($transaClienteCommand, $commad->queryAll());
            }
        }


        $finalArray = array_merge($deudaClienteCommand, $clienteCommand);
        $finalArray = array_merge($finalArray, $transaClienteCommand);
        $finalArray = array_merge($finalArray, $clienteMailCommand);

        $arrayId = array();
        foreach ($finalArray as $dato) {
            array_push($arrayId, $dato['id']);
        }

        $criteria = new CDbCriteria;

        $criteria->addInCondition('id', $arrayId);
        $criteria->compare('entidad_tipo', $this->entidad_tipo, true);
        $criteria->compare('entidad_id', $this->entidad_id);
        $criteria->compare('tipo', $this->tipo, true);
        $criteria->compare('usuario_id', $this->usuario_id);
        $criteria->compare('fecha', $this->fecha, true);
        $criteria->compare('detalle', $this->detalle, true);
        $criteria->order = 'fecha DESC';

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'pagination' => array('pageSize' => $this->pageSize,),
        ));
    }

    /* funciones exras */

    /**
     * Método estático que permite registrar una actividad
     * @param type $model modelo en donde se realiza la actividad
     * @param type $tipo tipo de actividad (update,create,delete)
     * @param type $usuario_id usuario que realiza la actividad, opcional
     * @param type $detalle mensaje extra sobre el detalle de la actividad, opcional
     * @return type Boolean devuelve un true o false si guarda o no la actividad
     */
    public static function registrarActividad($model, $tipo, $usuario_id = null, $detalle = null) {

        $actividad = new Actividad;
        $actividad->attributes = array(
            'entidad_tipo' => $model->tableName(),
            'entidad_id' => $model->id,
            'tipo' => $tipo,
            'usuario_id' => ($usuario_id ? $usuario_id : $model->usuario_creacion_id),
            'fecha' => Util::FechaActual(),
        );
        $actividad->detalle = $detalle ? $detalle : null;
        return $actividad->save();
    }

    /**
     * Devuelve un mensaje formateado segun el tipo de actividad
     * @param Actividad $actividad objeto de tipo Actividad que se quiere formatear
     * @return string mensaje formateado
     */
    public static function getMensaje($actividad) {
        // El mensaje
        $mensaje = "";
        $icon = "";
        // Primero buscamos el usuario que realizó la accion
        $usuario = Yii::app()->user->um->loadUserById($actividad['usuario_id']);

        if ($usuario) {
            switch ($actividad['entidad_tipo']) {

                // Si es una actividad sobre un cliente
                case CltCliente::model()->tableName():
                    $cliente = CltCliente::model()->findByPk($actividad['entidad_id']);
                    $icon = 'group';
                    if ($actividad['tipo'] == self::TIPO_CREATE) {
                        $mensaje = "<b>" . $usuario->username . "</b> creó el cliente " . CHtml::link($cliente->nombre_completo, array('/cliente/cltCliente/view', 'id' => $cliente->id), array('class' => 'btn btn-small btn-silver'));
                    } elseif ($actividad['tipo'] == self::TIPO_UPDATE) {
                        if ($actividad['detalle'] != null) {
                            $mensaje = "<b>" . $usuario->username . "</b>  " . $actividad['detalle'] . " del contacto " . CHtml::link($cliente->nombre_completo, array('/cliente/cltCliente/view', 'id' => $cliente->id), array('class' => 'btn btn-small btn-silver'));
                        } else {
                            $mensaje = $usuario->username . " actualizó los datos del contacto " . CHtml::link($cliente->nombre_completo, array('/cliente/cltCliente/view', 'id' => $cliente->id), array('class' => 'btn btn-small btn-silver'));
                        }
                    } elseif ($actividad['tipo'] == self::TIPO_DELETE) {
                        $mensaje = "<b>" . $usuario->username . "</b>  movió el contacto \"" . Util::Truncate($cliente->nombre_completo, 15) . "\" a INACTIVOS";
                    } elseif ($actividad['tipo'] == self::TIPO_RESTORE) {
                        $mensaje = "<b>" . $usuario->username . "</b>  movió el contacto \"" . Util::Truncate($cliente->nombre_completo, 15) . "\" a ACTIVOS";
                    }
                    break;
                // Si es una actividad sobre un deuda
                case CltDeuda::model()->tableName():
                    $deuda = CltDeuda::model()->findByPk($actividad['entidad_id']);
                    $icon = 'usd';
                    if ($actividad['tipo'] == self::TIPO_CREATE) {
                        $mensaje = "<b>" . $usuario->username . "</b> agrego la deuda al cliente " . CHtml::link($deuda->cltCliente->nombre_completo, array('/cliente/cltCliente/view', 'id' => $deuda->cltCliente->id), array('class' => 'btn btn-small btn-silver')) . " por la cantidad de $" . $deuda->monto;
                    } elseif ($actividad['tipo'] == self::TIPO_UPDATE) {
                        if ($actividad['detalle'] != null) {
                            $mensaje = "<b>" . $usuario->username . "</b>  " . $actividad['detalle'] . " del contacto " . CHtml::link($deuda->cltCliente->nombre_completo, array('/cliente/cltCliente/view', 'id' => $deuda->cltCliente->id), array('class' => 'btn btn-small btn-silver'));
                        } else {
                            $mensaje = $usuario->username . " actualizó los datos del contacto " . CHtml::link($deuda->cltCliente->nombre_completo, array('/cliente/cltCliente/view', 'id' => $deuda->cltCliente->id), array('class' => 'btn btn-small btn-silver'));
                        }
                    } elseif ($actividad['tipo'] == self::TIPO_DELETE) {
                        $mensaje = "<b>" . $usuario->username . "</b>  eliminó la deuda de \"" . Util::Truncate($deuda->cltCliente->nombre_completo, 15) . "\"";
                    }
                    break;
                // Si es una actividad sobre una Transaccion
                case TxTrasaccion::model()->tableName():
                    $transaccion = TxTrasaccion::model()->findByPk($actividad['entidad_id']);
                    $icon = 'usd';
                    if ($actividad['tipo'] == self::TIPO_CREATE) {
                        $mensaje = "<b>" . $usuario->username . "</b> creao una transaccion de tipo <b>" . $transaccion->tipo . "</b> al cliente " . CHtml::link($transaccion->cltDeuda->cltCliente->nombre_completo, array('/cliente/cltCliente/view', 'id' => $transaccion->cltDeuda->cltCliente->id), array('class' => 'btn btn-small btn-silver')) . " por la cantidad de $" . $transaccion->monto_cuota;
                    } elseif ($actividad['tipo'] == self::TIPO_UPDATE) {
                        if ($actividad['detalle'] != null) {
                            $mensaje = "<b>" . $usuario->username . "</b>  " . $actividad['detalle'] . " del cliente  " . CHtml::link($transaccion->cltCliente->nombre_completo, array('/cliente/cltCliente/view', 'id' => $transaccion->cltDeuda->cltCliente->id), array('class' => 'btn btn-small btn-silver'));
                        } else {
                            $mensaje = "<b>" . $usuario->username . "</b> actualizó una transaccion al tipo <b>" . $transaccion->tipo . "</b> del clienete " . CHtml::link($transaccion->cltDeuda->cltCliente->nombre_completo, array('/cliente/cltCliente/view', 'id' => $transaccion->cltDeuda->cltCliente->id), array('class' => 'btn btn-small btn-silver'));
                        }
                    } elseif ($actividad['tipo'] == self::TIPO_DELETE) {
                        $mensaje = "<b>" . $usuario->username . "</b>  eliminó la transaccion de \"" . Util::Truncate($transaccion->cltDeuda->cltCliente->nombre_completo, 15) . "\"";
                    }

                    $mensaje.= "<br/><p><b>Deuda Todal : $" . number_format($transaccion->cltDeuda->monto, 2, '.', '') . " ctvs.</b></p>";
                    break;

                // Si es una actividad sobre un mail
                case Mail::model()->tableName():
                    $mail = Mail::model()->findByPk($actividad['entidad_id']);
                    if (isset($mail)) {
                        $contacto = CltCliente::model()->findByPk($mail->contacto_id);
                        $icon = 'envelope';

                        if ($actividad['tipo'] == self::TIPO_CREATE) {
                            $mensaje = $usuario->username . " envió un mail a " . CHtml::link($contacto->nombre_completo, array('/cliente/cltCliente/view', 'id' => $contacto->id), array('class' => 'btn btn-small btn-silver'));
                        }
                    }
                    break;

                // Si es una actividad sobre una tarea
//                case Tarea::model()->tableName():
//                    $tarea = Tarea::model()->findByPk($actividad['entidad_id']);
//                    $icon = 'tasks';
//
//                    if ($actividad['tipo'] == self::TIPO_CREATE)
//                        $mensaje = $usuario->username . " creó la tarea " . CHtml::link($tarea->nombre, array('/tareas/tarea/view', 'id' => $tarea->id), array('class' => 'btn btn-small btn-inverse'));
//                    elseif ($actividad['tipo'] == self::TIPO_UPDATE) {
//                        if ($actividad['detalle'] != null) {
//                            $mensaje = $usuario->username . " " . $actividad['detalle'] . " en la tarea " . CHtml::link($tarea->nombre, array('/tareas/tarea/view', 'id' => $tarea->id), array('class' => 'btn btn-small btn-inverse'));
//                        } else {
//                            $mensaje = $usuario->username . " actualizó los datos de la tarea " . CHtml::link($tarea->nombre, array('/tareas/tarea/view', 'id' => $tarea->id), array('class' => 'btn btn-small btn-inverse'));
//                        }
//
////                        var_dump($actividad);
//                    } elseif ($actividad['tipo'] == self::TIPO_DELETE)
//                        $mensaje = $usuario->username . " eliminó la tarea \"" . Util::Truncate($tarea->nombre, 15) . "\"";
//                    break;
                // Si es una actividad sobre una nota
//                case Nota::model()->tableName():
//                    $nota = Nota::model()->findByPk($actividad['entidad_id']);
//                    $icon = 'edit-sign';
////                    var_dump($actividad);
//                    if ($actividad['tipo'] == self::TIPO_CREATE)
//                        $mensaje = $usuario->username . " creó la nota \"" . Util::Truncate($nota->contenido, 15) . "\"";
//                    elseif ($actividad['tipo'] == self::TIPO_DELETE)
//                        $mensaje = $usuario->username . " eliminó la nota \"" . Util::Truncate($nota->contenido, 15) . "\"";
//                    break;
                // Si es una actividad sobre un evento
//                case Evento::model()->tableName():
//                    $evento = Evento::model()->findByPk($actividad['entidad_id']);
//                    $icon = 'calendar';
//
//                    if ($actividad['tipo'] == self::TIPO_CREATE)
//                        $mensaje = $usuario->username . " creó el evento " . CHtml::link($evento->nombre, array('/eventos/evento/view', 'id' => $evento->id), array('class' => 'btn btn-small btn-inverse'));
//                    elseif ($actividad['tipo'] == self::TIPO_UPDATE)
//                        if ($actividad['detalle'] != null) {
//                            $mensaje = $usuario->username . " " . $actividad['detalle'] . " del evento " . CHtml::link($evento->nombre, array('/eventos/evento/view', 'id' => $evento->id), array('class' => 'btn btn-small btn-inverse'));
//                        } else {
//                            $mensaje = $usuario->username . " actualizó los datos del evento " . CHtml::link($evento->nombre, array('/eventos/evento/view', 'id' => $evento->id), array('class' => 'btn btn-small btn-inverse'));
//                        } elseif ($actividad['tipo'] == self::TIPO_DELETE)
//                        $mensaje = $usuario->username . " eliminó el evento \"" . Util::Truncate($evento->nombre, 15) . "\"";
//                    break;
                // Si es una actividad sobre un mail
//                case Mail::model()->tableName():
//                    $mail = Mail::model()->findByPk($actividad['entidad_id']);
//                    if (isset($mail)) {
//                        $contacto = Contacto::model()->findByPk($mail->contacto_id);
//                        $icon = 'envelope';
//
//                        if ($actividad['tipo'] == self::TIPO_CREATE)
//                            $mensaje = $usuario->username . " envió un mail a " . CHtml::link($contacto->nombre_completo, array('/crm/contacto/view', 'id' => $contacto->id), array('class' => 'btn btn-small btn-inverse'));
//                    }
//                    break;
//                case Campania::model()->tableName():
//                    $campania = Campania::model()->findByPk($actividad['entidad_id']);
//                    $icon = 'rocket';
//
//                    if ($actividad['tipo'] == self::TIPO_CREATE) {
//                        if ($actividad['detalle'] == null) {//cuando es null es porque al crear una actividad no se asigna ninguna informacion en la activad
//                            $mensaje = $usuario->username . " creó la campaña " . CHtml::link($campania->nombre, array('/campanias/campania/view', 'id' => $campania->id), array('class' => 'btn btn-small btn-inverse'));
//                        } else {//cuando se agrego  clientes
//                            $mensaje = $usuario->username . " agrego " . $actividad['detalle'] . "  a la campaña";
//                        }
//                    } elseif ($actividad['tipo'] == self::TIPO_UPDATE) {
//                        if ($actividad['detalle'] != null) {
//                            $mensaje = $usuario->username . " " . $actividad['detalle'] . " en la campaña " . CHtml::link($campania->nombre, array('/campanias/campania/view', 'id' => $campania->id), array('class' => 'btn btn-small btn-inverse'));
//                        } else {
//                            $mensaje = $usuario->username . " actualizó los datos de la campaña " . CHtml::link($campania->nombre, array('/campanias/campania/view', 'id' => $campania->id), array('class' => 'btn btn-small btn-inverse'));
//                        }
//                    } elseif ($actividad['tipo'] == self::TIPO_DELETE) {
//                        if ($actividad['detalle'] == null) {
//                            $mensaje = $usuario->username . " eliminó la campaña \"" . Util::Truncate($campania->nombre, 15) . "\"";
//                        } else {//cuando se elimino un usuario o clients
//                            $mensaje = $usuario->username . " eliminó " . $actividad['detalle'] . "  la campaña";
//                        }
//                    }
//
//                    break;
//                
                default:
                    break;
            }

            if ($mensaje) {
                return "<div class='metro_tmtime' datetime='2013-04-10 18:30'>
                            <span class='date'>" . Util::FormatDate($actividad['fecha'], 'd/m/Y') . "</span>
                            <span class='time'>" . Util::FormatDate($actividad['fecha'], 'H:i') . "</span>
                        </div>
                        <div class='metro_tmicon'><i class='aweso-$icon'></i></div>
                        <div class='metro_tmlabel'>$mensaje</div>";
            }
        }
    }

    /**
     * retorna el criteria de actividades 
     * @param type $entidad_tipo
     * @param type $entidad_id
     * @return \CDbCriteria
     */
    public function getCriteriaDP($entidad_tipo, $entidad_id) {
        $arrayParams = array(':entidad_tipo' => $entidad_tipo, ':entidad_id' => $entidad_id);
        $criteria = new CDbCriteria();
        $criteria->alias = 'ac';
        //actividades de la entidad
        $criteria->condition = '(ac.entidad_tipo = :entidad_tipo and ac.entidad_id = :entidad_id)';
        //actividades de notas
        $criteria->condition.= ' OR (ac.entidad_tipo = :entidad_nota and ac.entidad_id in(select nota.id from nota where nota.entidad_tipo = :entidad_tipo and nota.entidad_id = :entidad_id))';
        $arrayParams = array_merge($arrayParams, array(':entidad_nota' => Actividades_Constants::ENTIDAD_TIPO_NOTA));
        //activides de tareas
        $criteria->condition.= ' OR (ac.entidad_tipo = :entidad_tarea and ac.entidad_id in(select tarea.id from tarea where tarea.entidad_tipo = :entidad_tipo and tarea.entidad_id = :entidad_id))';
        $arrayParams = array_merge($arrayParams, array(':entidad_tarea' => Actividades_Constants::ENTIDAD_TIPO_TAREA));
        //actividades de eventos
        $criteria->condition.= ' OR (ac.entidad_tipo = :entidad_evento and ac.entidad_id in(select evento.id from evento where evento.entidad_tipo = :entidad_tipo and evento.entidad_id = :entidad_id))';
        $arrayParams = array_merge($arrayParams, array(':entidad_evento' => Actividades_Constants::ENTIDAD_TIPO_EVENTO));

        //actividade mail
//        $criteria->condition.='OR(ac.entidad_tipo = :entidad_mail AND (ac.entidad_id in (select mail.id from mail where mail.contacto_id = :entidad_id)))';
//        $arrayParams = array_merge($arrayParams, array(':entidad_mail' => Actividades_Constants::ENTIDAD_TIPO_MAIL));
        //filtros de campaña
//        if ($entidad_tipo == Actividades_Constants::ENTIDAD_TIPO_CAMPANIA) {
//            //tareas programadas
//            $criteria->condition.='OR ((ac.entidad_tipo = "campania_tarea_programada" and ac.entidad_id in (select ctp.id from campania_tarea_programada ctp where ctp.campania_id = :entidad_id)))';
//            $entidadesCampania = Campanias_Constants::getActionsCostants();
//            $i = 0;
//            foreach ($entidadesCampania as $entidadCp => $entidadTa) {
//                $criteria->condition.=' OR (ac.entidad_tipo = :entidad_action_' . $i . ' and (ac.entidad_id in (select ce.entidad_id from campania_entidad ce where(ce.entidad_tipo= :campania_entidad_action_' . $i . ' and ce.campania_id = :entidad_id))))';
//                $arrayParams = array_merge($arrayParams, array(':entidad_action_' . $i => $entidadTa,
//                    ':campania_entidad_action_' . $i => $entidadCp));
//                $i++;
//            }
//        }
//        if ($entidad_tipo == Actividades_Constants::ENTIDAD_TIPO_CONTACTO || $entidad_tipo == Actividades_Constants::ENTIDAD_TIPO_CUENTA) {
//            //campo de relación con la entidada de la actividada
//            $campoEntidad = $entidad_tipo == Actividades_Constants::ENTIDAD_TIPO_CONTACTO ? 'contacto_id' : 'cuenta_id';
//            //actividad de oportunidades
//            $criteria->condition.='OR(ac.entidad_tipo = :entidad_oportunidad AND (ac.entidad_id in (select op.id from oportunidad op where op.' . $campoEntidad . ' = :entidad_id)))';
//            $arrayParams = array_merge($arrayParams, array(':entidad_oportunidad' => Actividades_Constants::ENTIDAD_TIPO_OPORTUNIDAD));
//
//            $arrayParams = array_merge($arrayParams, array(':entidad_cobranza' => Actividades_Constants::ENTIDAD_TIPO_COBRANZA));
//            //actividad de incidencia
//            $criteria->condition.='OR(ac.entidad_tipo = :entidad_incidenia AND (ac.entidad_id in (select ic.id from incidencia ic where ic.' . $campoEntidad . ' = :entidad_id)))';
//            $arrayParams = array_merge($arrayParams, array(':entidad_incidenia' => Actividades_Constants::ENTIDAD_TIPO_INCIDENCIA));
//            //filtro para cuentas
//            if ($entidad_tipo == Actividades_Constants::ENTIDAD_TIPO_CUENTA) {
//                //actividade contactos
//                $criteria->condition.='OR(ac.entidad_tipo = :entidad_contacto AND (ac.entidad_id in (select co.id from contacto co where co.cuenta_id = :entidad_id)))';
//                $arrayParams = array_merge($arrayParams, array(':entidad_contacto' => Actividades_Constants::ENTIDAD_TIPO_CONTACTO));
//                //actividad de contactos
//                $criteria->condition.='OR(ac.entidad_tipo = :entidad_contacto AND (ac.entidad_id in (select co.id from contacto co where co.cuenta_id = :entidad_id)))';
//                $arrayParams = array_merge($arrayParams, array(':entidad_contacto' => Actividades_Constants::ENTIDAD_TIPO_CONTACTO));
//            }
//            //filtro para contactos
//            if ($entidad_tipo == Actividades_Constants::ENTIDAD_TIPO_CONTACTO) {
//                //actividad de cobranza
//                $criteria->condition.='OR(ac.entidad_tipo = :entidad_cobranza AND (ac.entidad_id in (select cz.id from cobranza cz where cz.contacto_id = :entidad_id)))';
//                //actividade sms
//                $criteria->condition.='OR(ac.entidad_tipo = :entidad_sms AND (ac.entidad_id in (select sms.id from sms where sms.contacto_id = :entidad_id)))';
//                $arrayParams = array_merge($arrayParams, array(':entidad_sms' => Actividades_Constants::ENTIDAD_TIPO_SMS));
//                //actividade llamada
//                $criteria->condition.='OR(ac.entidad_tipo = :entidad_llamada AND (ac.entidad_id in (select llamada.id from llamada where llamada.contacto_id = :entidad_id)))';
//                $arrayParams = array_merge($arrayParams, array(':entidad_llamada' => Actividades_Constants::ENTIDAD_TIPO_LLAMADA));
//                //actividade mail
//                $criteria->condition.='OR(ac.entidad_tipo = :entidad_mail AND (ac.entidad_id in (select mail.id from mail where mail.contacto_id = :entidad_id)))';
//                $arrayParams = array_merge($arrayParams, array(':entidad_mail' => Actividades_Constants::ENTIDAD_TIPO_MAIL));
//            }
//        }

        $criteria->params = $arrayParams;
        $criteria->order = 'fecha DESC';
        return $criteria;
    }

    public function getCountActividades($tipo = NULL) {

        $command = Yii::app()->db->createCommand()
                ->select('count(id) as total')
                ->from('actividad');


        if ($tipo == self::ACTIVIDADES_DIARIAS) {
            $command->where('date_format(fecha, "%Y-%m-%d") = :fecha', array('fecha' => Util::FormatDate(Util::FechaActual(), 'Y-m-d')));
        }
        if ($tipo == self::ACTIVIDADES_MENSUAL) {
            $command->where('date_format(fecha, "%Y-%m") = :fecha', array('fecha' => Util::FormatDate(Util::FechaActual(), 'Y-m')));
        }

        $result = $command->queryAll();
        return $result[0]['total'];
    }

}
