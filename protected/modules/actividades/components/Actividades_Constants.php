<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Actividades_Constants
 *
 * @author WORKSTATION
 */
class Actividades_Constants {

//    const ENTIDAD_TIPO_CAMPANIA = 'campania';
    const ENTIDAD_TIPO_CLIENTE = 'cliente';
//    const ENTIDAD_TIPO_CUENTA = 'cuenta';
//    const ENTIDAD_TIPO_INCIDENCIA = 'incidencia';
    
    const ENTIDAD_TIPO_TAREA = 'tarea';
    const ENTIDAD_TIPO_NOTA = 'nota';
    const ENTIDAD_TIPO_EVENTO = 'evento';
    
//    const ENTIDAD_TIPO_OPORTUNIDAD = 'oportunidad';
//    const ENTIDAD_TIPO_COBRANZA = 'cobranza';
//    
    //constantes de acciones(tabla mail,tabla sms y tabla sms)
    const ENTIDAD_TIPO_LLAMADA = 'llamada';
    const ENTIDAD_TIPO_MAIL = 'mail';
    const ENTIDAD_TIPO_SMS = 'sms';

    public static function getActionsConstams() {
        return array(
            self::ENTIDAD_TIPO_SMS,
            self::ENTIDAD_TIPO_MAIL,
            self::ENTIDAD_TIPO_LLAMADA
        );
    }

}
