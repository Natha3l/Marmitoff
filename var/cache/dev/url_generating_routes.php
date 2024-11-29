<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/home']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_user_guard_index' => [[], ['_controller' => 'App\\Controller\\UserGuardController::index'], [], [['text', '/user/guard']], [], [], []],
    'app_user_guard_new' => [[], ['_controller' => 'App\\Controller\\UserGuardController::new'], [], [['text', '/user/guard/new']], [], [], []],
    'app_user_guard_show' => [['id'], ['_controller' => 'App\\Controller\\UserGuardController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/guard']], [], [], []],
    'app_user_guard_edit' => [['id'], ['_controller' => 'App\\Controller\\UserGuardController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user/guard']], [], [], []],
    'app_user_guard_delete' => [['id'], ['_controller' => 'App\\Controller\\UserGuardController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/guard']], [], [], []],
    'App\Controller\HomeController::index' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/home']], [], [], []],
    'App\Controller\RegistrationController::register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'App\Controller\SecurityController::login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'App\Controller\SecurityController::logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'App\Controller\UserGuardController::index' => [[], ['_controller' => 'App\\Controller\\UserGuardController::index'], [], [['text', '/user/guard']], [], [], []],
    'App\Controller\UserGuardController::new' => [[], ['_controller' => 'App\\Controller\\UserGuardController::new'], [], [['text', '/user/guard/new']], [], [], []],
    'App\Controller\UserGuardController::show' => [['id'], ['_controller' => 'App\\Controller\\UserGuardController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/guard']], [], [], []],
    'App\Controller\UserGuardController::edit' => [['id'], ['_controller' => 'App\\Controller\\UserGuardController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user/guard']], [], [], []],
    'App\Controller\UserGuardController::delete' => [['id'], ['_controller' => 'App\\Controller\\UserGuardController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/guard']], [], [], []],
];