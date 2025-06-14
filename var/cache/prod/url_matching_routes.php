<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/employee' => [[['_route' => 'api_employee_get_all', '_format' => 'json', '_controller' => 'App\\Controller\\EmployeeController::getAll'], null, ['GET' => 0], null, false, false, null]],
        '/api/employee/self' => [[['_route' => 'api_employee_get_self', '_format' => 'json', '_controller' => 'App\\Controller\\EmployeeController::getSelf'], null, ['GET' => 0], null, false, false, null]],
        '/api/event' => [
            [['_route' => 'app_event_get_all', '_format' => 'json', '_controller' => 'App\\Controller\\EventController::getAll'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_event_add', '_format' => 'json', '_controller' => 'App\\Controller\\EventController::add'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/meeting-room' => [
            [['_route' => 'app_meeting_room_get_all', '_controller' => 'App\\Controller\\MeetingRoomController::getAll'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_meeting_room_add', '_format' => 'json', '_controller' => 'App\\Controller\\MeetingRoomController::add'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/office' => [
            [['_route' => 'app_office_get_all', '_format' => 'json', '_controller' => 'App\\Controller\\OfficeController::getAll'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_office_add', '_format' => 'json', '_controller' => 'App\\Controller\\OfficeController::add'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/organization' => [
            [['_route' => 'app_organization_get_all', '_format' => 'json', '_controller' => 'App\\Controller\\OrganizationController::getAll'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_organization_add', '_format' => 'json', '_controller' => 'App\\Controller\\OrganizationController::add'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/push-subscribe' => [[['_route' => 'app_pushsubscription_subscribe', '_format' => 'json', '_controller' => 'App\\Controller\\PushSubscriptionController::subscribe'], null, ['POST' => 0], null, false, false, null]],
        '/api/login_check' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
        '/api/doc' => [[['_route' => 'api_doc', '_controller' => 'nelmio_api_doc.controller.swagger_ui'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api/(?'
                    .'|e(?'
                        .'|mployee/(?'
                            .'|([^/]++)(*:38)'
                            .'|register(*:53)'
                            .'|([^/]++)(?'
                                .'|(*:71)'
                            .')'
                        .')'
                        .'|vent/(?'
                            .'|date/([^/]++)(*:101)'
                            .'|([^/]++)(?'
                                .'|(*:120)'
                            .')'
                        .')'
                    .')'
                    .'|meeting\\-room/([^/]++)(?'
                        .'|(*:156)'
                    .')'
                    .'|o(?'
                        .'|ffice/([^/]++)(?'
                            .'|(*:186)'
                        .')'
                        .'|rganization/([^/]++)(?'
                            .'|(*:218)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => 'api_employee_get_by_id', '_format' => 'json', '_controller' => 'App\\Controller\\EmployeeController::getById'], ['id'], ['GET' => 0], null, false, true, null]],
        53 => [[['_route' => 'api_employee_register', '_format' => 'json', '_controller' => 'App\\Controller\\EmployeeController::register'], [], ['POST' => 0], null, false, false, null]],
        71 => [
            [['_route' => 'api_employee_edit', '_format' => 'json', '_controller' => 'App\\Controller\\EmployeeController::edit'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api_employee_delete', '_format' => 'json', '_controller' => 'App\\Controller\\EmployeeController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        101 => [[['_route' => 'app_event_get_all_by_date', '_format' => 'json', '_controller' => 'App\\Controller\\EventController::getAllByDate'], ['date'], ['GET' => 0], null, false, true, null]],
        120 => [
            [['_route' => 'app_event_get_by_id', '_format' => 'json', '_controller' => 'App\\Controller\\EventController::getById'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_event_edit', '_format' => 'json', '_controller' => 'App\\Controller\\EventController::edit'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'app_event_delete', '_format' => 'json', '_controller' => 'App\\Controller\\EventController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        156 => [
            [['_route' => 'app_meeting_room_by_id', '_format' => 'json', '_controller' => 'App\\Controller\\MeetingRoomController::getById'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_meeting_room_edit', '_format' => 'json', '_controller' => 'App\\Controller\\MeetingRoomController::edit'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'app_meeting_room_delete', '_format' => 'json', '_controller' => 'App\\Controller\\MeetingRoomController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        186 => [
            [['_route' => 'app_office_get_by_id', '_format' => 'json', '_controller' => 'App\\Controller\\OfficeController::getById'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_office_edit', '_format' => 'json', '_controller' => 'App\\Controller\\OfficeController::edit'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'app_office_delete', '_format' => 'json', '_controller' => 'App\\Controller\\OfficeController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        218 => [
            [['_route' => 'app_organization_get_by_id', '_format' => 'json', '_controller' => 'App\\Controller\\OrganizationController::getById'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_organization_edit', '_format' => 'json', '_controller' => 'App\\Controller\\OrganizationController::edit'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'app_organization_delete', '_format' => 'json', '_controller' => 'App\\Controller\\OrganizationController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
