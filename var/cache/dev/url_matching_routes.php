<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
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
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/api/(?'
                    .'|e(?'
                        .'|mployee/(?'
                            .'|([^/]++)(*:233)'
                            .'|register(*:249)'
                            .'|([^/]++)(?'
                                .'|(*:268)'
                            .')'
                        .')'
                        .'|vent/(?'
                            .'|date/([^/]++)(*:299)'
                            .'|([^/]++)(?'
                                .'|(*:318)'
                            .')'
                        .')'
                    .')'
                    .'|meeting\\-room/([^/]++)(?'
                        .'|(*:354)'
                    .')'
                    .'|o(?'
                        .'|ffice/([^/]++)(?'
                            .'|(*:384)'
                        .')'
                        .'|rganization/([^/]++)(?'
                            .'|(*:416)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        233 => [[['_route' => 'api_employee_get_by_id', '_format' => 'json', '_controller' => 'App\\Controller\\EmployeeController::getById'], ['id'], ['GET' => 0], null, false, true, null]],
        249 => [[['_route' => 'api_employee_register', '_format' => 'json', '_controller' => 'App\\Controller\\EmployeeController::register'], [], ['POST' => 0], null, false, false, null]],
        268 => [
            [['_route' => 'api_employee_edit', '_format' => 'json', '_controller' => 'App\\Controller\\EmployeeController::edit'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api_employee_delete', '_format' => 'json', '_controller' => 'App\\Controller\\EmployeeController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        299 => [[['_route' => 'app_event_get_all_by_date', '_format' => 'json', '_controller' => 'App\\Controller\\EventController::getAllByDate'], ['date'], ['GET' => 0], null, false, true, null]],
        318 => [
            [['_route' => 'app_event_get_by_id', '_format' => 'json', '_controller' => 'App\\Controller\\EventController::getById'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_event_edit', '_format' => 'json', '_controller' => 'App\\Controller\\EventController::edit'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'app_event_delete', '_format' => 'json', '_controller' => 'App\\Controller\\EventController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        354 => [
            [['_route' => 'app_meeting_room_by_id', '_format' => 'json', '_controller' => 'App\\Controller\\MeetingRoomController::getById'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_meeting_room_edit', '_format' => 'json', '_controller' => 'App\\Controller\\MeetingRoomController::edit'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'app_meeting_room_delete', '_format' => 'json', '_controller' => 'App\\Controller\\MeetingRoomController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        384 => [
            [['_route' => 'app_office_get_by_id', '_format' => 'json', '_controller' => 'App\\Controller\\OfficeController::getById'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_office_edit', '_format' => 'json', '_controller' => 'App\\Controller\\OfficeController::edit'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'app_office_delete', '_format' => 'json', '_controller' => 'App\\Controller\\OfficeController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        416 => [
            [['_route' => 'app_organization_get_by_id', '_format' => 'json', '_controller' => 'App\\Controller\\OrganizationController::getById'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_organization_edit', '_format' => 'json', '_controller' => 'App\\Controller\\OrganizationController::edit'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'app_organization_delete', '_format' => 'json', '_controller' => 'App\\Controller\\OrganizationController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
