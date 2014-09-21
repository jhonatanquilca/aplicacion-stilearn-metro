<?php

class Menu {

    private static $_controller;

    public static function getMenu($controller) {
        self::$_controller = $controller;
        $items = array(
//            array('label' => '', 'itemOptions' => array('class' => 'divider '),),
            array('label' => '<i class="aweso-dashboard"></i> Dashboard  ',
                'url' => Yii::app()->homeUrl,
                'access' => 'action_dashboard_index',
                'active_rules' => array('module' => 'principal', 'controller' => 'dashboard')
            ),
            array('label' => '<i class="aweso-group"></i> Clientes ',
                'url' => array('/cliente/cltCliente/admin'),
                'access' => 'action_cltCliente_admin',
                'active_rules' => array('module' => 'cliente', 'controller' => 'cltCliente', 'action' => 'admin')
            ),
            array('label' => '<i class="aweso-envelope"></i>  Mails', 'url' => '#',
                'itemOptions' => array('class' => 'dropdown-list'),
                'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown-list',),
                'items' => array(
                    array('label' => 'E-mails', 'url' => array('/mail/mail/admin'), 'access' => 'action_mail_admin', 'active_rules' => array('module' => 'mail', 'controller' => 'mail', 'action' => 'admin')),
//                    array('label' => 'Motivo', 'url' => array('/incidencias/incidenciaMotivo/admin'), 'access' => 'action_incidenciaMotivo_admin', 'active_rules' => array('module' => 'incidencias', 'controller' => 'incidenciaMotivo')),
//                    array('label' => 'Sub Motivo', 'url' => array('/incidencias/incidenciaSubmotivo/admin'), 'access' => 'action_incidenciaSubmotivo_admin', 'active_rules' => array('module' => 'incidencias', 'controller' => 'incidenciaSubmotivo')),
//                    array('label' => 'Via ingreso', 'url' => array('/incidencias/incidenciaViaIngreso/admin'), 'access' => 'action_incidenciaViaIngreso_admin', 'active_rules' => array('module' => 'incidencias', 'controller' => 'incidenciaViaIngreso')),
//                    array('label' => 'Estado', 'url' => array('/incidencias/incidenciaEstado/admin'), 'access' => 'action_incidenciaEstado_admin', 'active_rules' => array('module' => 'incidencias', 'controller' => 'incidenciaEstado')),
//                    array('label' => 'Prioridad', 'url' => array('/incidencias/incidenciaPrioridad/admin'), 'access' => 'action_incidenciaPrioridad_admin', 'active_rules' => array('module' => 'incidencias', 'controller' => 'incidenciaPrioridad')),
                )),
            array('label' => '<i class="aweso-time"></i> Actividades', 'url' => '#',
                'itemOptions' => array('class' => 'dropdown-list'),
                'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown-list',),
                'items' => array(
                    array('label' => 'Diarias', 'url' => array('/actividades/actividad/adminDirarias/'), 'access' => 'action_actividad_adminDirarias', 'active_rules' => array('module' => 'actividades', 'controller' => 'actividad', 'action' => 'adminDirarias')),
                    array('label' => 'Mes Actual', 'url' => array('/actividades/actividad/adminMensual/'), 'access' => 'action_actividad_adminMensual', 'active_rules' => array('module' => 'actividades', 'controller' => 'actividad', 'action' => 'adminMensual')),
                    array('label' => 'Todas', 'url' => array('/actividades/actividad/admin'), 'access' => 'action_actividad_admin', 'active_rules' => array('module' => 'actividades', 'controller' => 'actividad', 'action' => 'admin')),
                )),
                /* ejemplo menu simple */
//            array('label' => '<i class="aweso-time"></i> Actividades',
//                'url' => array('/actividades/actividad/admin'),
//                'access' => 'action_actividad_admin',
//                'active_rules' => array('module' => 'actividades', 'controller' => 'actividad')
////                'active_rules' => array('module' => 'actividades', 'controller' => 'actividad', 'action' => 'admin')
//            ),
                /* ejemplo menu 2 niveles */
//            array('label' => '<i class=" aweso-book"></i> Reportes',
//                'url' => '#',
//                'itemOptions' => array('class' => 'dropdown-list'),
//                'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown-list',),
//                'items' => array(
//                    array('label' => 'Llamadas', 'url' => array('/llamadas/llamadaReporte'), 'access' => 'action_llamadaReporte_admin', 'active_rules' => array('module' => 'llamadas', 'controller' => 'llamadaReporte')),
//                    array('label' => 'Sms', 'url' => array('/sms/reports/reporteSms'), 'access' => 'action_reporteSms_admin', 'active_rules' => array('module' => 'sms', 'controller' => 'reports/reporteSms')),
//                    array('label' => 'Mail', 'url' => array('/mail/mailReporte'), 'access' => 'action_mailReporte_index', 'active_rules' => array('module' => 'mail', 'controller' => 'reports/mailReporte')),
//                )),
//            array('label' => '', 'itemOptions' => array('class' => 'divider'),),
        );

        return self::generateMenu($items);
    }

    public static function getAdminMenu($controller) {
        self::$_controller = $controller;
        $items = array(
            array('label' => '<i class="aweso-mail-reply"></i> Volver a la App', 'url' => Yii::app()->homeUrl),
            array('label' => '<i class="aweso-user"></i>  Usuarios', 'url' => Yii::app()->user->ui->userManagementAdminUrl, 'access' => 'Cruge.ui.*', 'active_rules' => array('module' => 'cruge')),
            /* ejemplo menu 2 niveles */
            array('label' => '<i class="aweso-envelope"></i>  Mails', 'url' => '#',
                'itemOptions' => array('class' => 'dropdown-list'),
                'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown-list',),
                'items' => array(
                    array('label' => 'Plantilla Mail', 'url' => array('/mail/mailPlantilla/admin'), 'access' => 'action_mailPlantilla_admin', 'active_rules' => array('module' => 'mail', 'controller' => 'mailPlantilla')),
                )),
            array('label' => '<i class="aweso-bookmark"></i>  Transaccion', 'url' => '#',
                'itemOptions' => array('class' => 'dropdown-list'),
                'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown-list',),
                'items' => array(
                    array('label' => 'Plantillas', 'url' => array('/transaccion/txDescripcionPalntilla/admin'), 'access' => 'action_txDescripcionPalntilla_admin', 'active_rules' => array('module' => 'transaccion', 'controller' => 'txDescripcionPalntilla')),
                )),
        );

        return self::generateMenu($items);
    }

    /**
     * Function to create a menu with acces rules and active item
     * @param array $items items to build the menu
     * @return array the formated menu
     */
    private static function generateMenu($items) {
        $menu = array();

        foreach ($items as $k => $item) {
            $access = false;
            $menu_item = $item;

            // Check children access
            if (isset($item['items'])) {
                $menu_item['items'] = array();
                // Check childrens access
                foreach ($item['items'] as $j => $children) {
                    if ($access = Yii::app()->user->checkAccess($children['access'])) {
                        $menu_item['items'][$j] = $children;
                        if (isset($children['active_rules']) && self::getActive2($children['active_rules'])) {
                            $menu_item['items'][$j]['active'] = true;
                            $menu_item['active'] = true;
                        }
                    }
                }
            } else {
                // Check item access
                if (isset($item['access'])) {
                    $access = Yii::app()->user->checkAccess($item['access']);
                } else {
                    $access = true;
                }
                // Check active
                if (isset($item['active_rules'])) {
                    $menu_item['active'] = self::getActive2($item['active_rules']);
                }
            }

            // If acces to the item or any child add to the menu
            if ($access) {
                $menu[] = $menu_item;
            }
        }

        return $menu;
    }

    /**
     * Function to compare the menu active rules with the current url
     * @param array $active_rules the array of rules to compare
     * @return boolean true if the rules match the current url
     */
//    private static function getActive($active_rules) {
//        $current = false;
//
//        if (self::$_controller) {
//            if (is_array(current($active_rules))) {
//                foreach ($active_rules as $rule) {
//                    $operator = isset($rule['operator']) ? $rule['operator'] : '==';
//
//                    if (isset($rule['module']) && self::$_controller->module) {
//                        if ($operator == "==")
//                            $current = self::$_controller->module->id == $rule['module'];
//                        if ($operator == "!=")
//                            $current = self::$_controller->module->id != $rule['module'];
//                    }
//                    if (isset($rule['controller'])) {
//                        if ($operator == "==")
//                            $current = self::$_controller->id == $rule['controller'];
//                        if ($operator == "!=")
//                            $current = self::$_controller->id != $rule['controller'];
//                    }
//                    if (isset($rule['action'])) {
//                        if ($operator == "==")
//                            $current = self::$_controller->action->id == $rule['action'];
//                        if ($operator == "!=")
//                            $current = self::$_controller->action->id != $rule['action'];
//                    }
//
//                    if (!$current)
//                        break;
//                }
//            } else {
//                $operator = isset($active_rules['operator']) ? $active_rules['operator'] : '==';
//
//                if (isset($active_rules['module']) && self::$_controller->module) {
//                    if ($operator == "==")
//                        $current = self::$_controller->module->id == $active_rules['module'];
//                    if ($operator == "!=")
//                        $current = self::$_controller->module->id != $active_rules['module'];
//                }
//                if (isset($active_rules['controller'])) {
//                    if ($operator == "==")
//                        $current = self::$_controller->id == $active_rules['controller'];
//                    if ($operator == "!=")
//                        $current = self::$_controller->id != $active_rules['controller'];
//                }
//                if (isset($active_rules['action'])) {
//                    if ($operator == "==")
//                        $current = self::$_controller->action->id == $active_rules['action'];
//                    if ($operator == "!=")
//                        $current = self::$_controller->action->id != $active_rules['action'];
//                }
//            }
//        }
//        return $current;
//    }

    private static function getActive2($active_rules) {
        $current = false;
        //MODULE
        $module = false;
        //CONTROLLER
        $controller = FALSE;
        //ACTION
        $action = false;
        if (self::$_controller) {
            if (is_array(current($active_rules))) {
                foreach ($active_rules as $rule) {
                    $operator = isset($rule['operator']) ? $rule['operator'] : '==';
                    if (isset($rule['module'])) {
                        if (self::$_controller->module) {
                            $module = self::BooleanOperator($operator, self::$_controller->module->id, $rule['module']);
                        }
                    } else {
                        $module = true;
                    }
                    if (isset($rule['controller'])) {
                        $controller = self::BooleanOperator($operator, self::$_controller->id, $rule['controller']);
                    } else {
                        $controller = true;
                    }
                    if (isset($rule['action'])) {
                        $action = self::BooleanOperator($operator, self::$_controller->action->id, $rule['action']);
                    } else {
                        $action = true;
                    }
                    if (!isset($rule['controller']) && !isset($rule['module']) && !isset($rule['action']))
                        $current = false;
                    else
                        $current = $module && $controller && $action;
                    if (!$current)
                        break;
                }
            } else {
                $operator = isset($active_rules['operator']) ? $active_rules['operator'] : '==';
                if (isset($active_rules['module'])) {
                    if (self::$_controller->module) {
                        $module = self::BooleanOperator($operator, self::$_controller->module->id, $active_rules['module']);
                    }
                } else {
                    $module = true;
                }
                if (isset($active_rules['controller'])) {
                    $controller = self::BooleanOperator($operator, self::$_controller->id, $active_rules['controller']);
                } else {
                    $controller = true;
                }
                if (isset($active_rules['action'])) {
                    $action = self::BooleanOperator($operator, self::$_controller->action->id, $active_rules['action']);
                } else {
                    $action = true;
                }
                if (!isset($active_rules['controller']) && !isset($active_rules['module']) && !isset($active_rules['action']))
                    $current = false;
                else
                    $current = $module && $controller && $action;
//                var_dump($current);
            }
        }
        return $current;
    }

    private static function BooleanOperator($operator, $compare1, $compare2) {
        $result = FALSE;
        if ($operator == "==")
            $result = $compare1 == $compare2;
        if ($operator == "!=")
            $result = $compare1 != $compare2;

        return $result;
    }

}
