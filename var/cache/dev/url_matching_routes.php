<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user/guard' => [[['_route' => 'app_user_guard_index', '_controller' => 'App\\Controller\\UserGuardController::index'], null, ['GET' => 0], null, false, false, null]],
        '/user/guard/new' => [[['_route' => 'app_user_guard_new', '_controller' => 'App\\Controller\\UserGuardController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/user/guard/([^/]++)(?'
                    .'|(*:65)'
                    .'|/edit(*:77)'
                    .'|(*:84)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        65 => [[['_route' => 'app_user_guard_show', '_controller' => 'App\\Controller\\UserGuardController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        77 => [[['_route' => 'app_user_guard_edit', '_controller' => 'App\\Controller\\UserGuardController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        84 => [
            [['_route' => 'app_user_guard_delete', '_controller' => 'App\\Controller\\UserGuardController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
