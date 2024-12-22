<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/ingredient' => [[['_route' => 'app_ingredient_index', '_controller' => 'App\\Controller\\IngredientController::index'], null, ['GET' => 0], null, false, false, null]],
        '/ingredient/new' => [[['_route' => 'app_ingredient_new', '_controller' => 'App\\Controller\\IngredientController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/recette' => [[['_route' => 'app_recette_index', '_controller' => 'App\\Controller\\RecetteController::index'], null, ['GET' => 0], null, false, false, null]],
        '/recette/new' => [[['_route' => 'app_recette_new', '_controller' => 'App\\Controller\\RecetteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user/guard' => [[['_route' => 'app_user_guard_index', '_controller' => 'App\\Controller\\UserGuardController::index'], null, ['GET' => 0], null, false, false, null]],
        '/user/guard/new' => [[['_route' => 'app_user_guard_new', '_controller' => 'App\\Controller\\UserGuardController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/ingredient/([^/]++)(?'
                    .'|(*:65)'
                    .'|/edit(*:77)'
                    .'|(*:84)'
                .')'
                .'|/recette/([^/]++)(?'
                    .'|(*:112)'
                    .'|/edit(*:125)'
                    .'|(*:133)'
                .')'
                .'|/user/guard/([^/]++)(?'
                    .'|(*:165)'
                    .'|/edit(*:178)'
                    .'|(*:186)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        65 => [[['_route' => 'app_ingredient_show', '_controller' => 'App\\Controller\\IngredientController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        77 => [[['_route' => 'app_ingredient_edit', '_controller' => 'App\\Controller\\IngredientController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        84 => [[['_route' => 'app_ingredient_delete', '_controller' => 'App\\Controller\\IngredientController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        112 => [[['_route' => 'app_recette_show', '_controller' => 'App\\Controller\\RecetteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        125 => [[['_route' => 'app_recette_edit', '_controller' => 'App\\Controller\\RecetteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        133 => [[['_route' => 'app_recette_delete', '_controller' => 'App\\Controller\\RecetteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        165 => [[['_route' => 'app_user_guard_show', '_controller' => 'App\\Controller\\UserGuardController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        178 => [[['_route' => 'app_user_guard_edit', '_controller' => 'App\\Controller\\UserGuardController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        186 => [
            [['_route' => 'app_user_guard_delete', '_controller' => 'App\\Controller\\UserGuardController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
