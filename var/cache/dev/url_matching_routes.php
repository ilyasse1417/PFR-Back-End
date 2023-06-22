<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/city' => [[['_route' => 'app_city_index', '_controller' => 'App\\Controller\\CityController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/city/new' => [[['_route' => 'app_city_new', '_controller' => 'App\\Controller\\CityController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/craftsman' => [[['_route' => 'app_craftsman_index', '_controller' => 'App\\Controller\\CraftsmanController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/craftsman/new' => [[['_route' => 'app_craftsman_new', '_controller' => 'App\\Controller\\CraftsmanController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profession' => [[['_route' => 'app_profession_index', '_controller' => 'App\\Controller\\ProfessionController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/profession/new' => [[['_route' => 'app_profession_new', '_controller' => 'App\\Controller\\ProfessionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/review' => [[['_route' => 'app_review_index', '_controller' => 'App\\Controller\\ReviewController::index'], null, ['GET' => 0], null, true, false, null]],
        '/review/new' => [[['_route' => 'app_review_new', '_controller' => 'App\\Controller\\ReviewController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|pi(?'
                        .'|/\\.well\\-known/genid/([^/]++)(*:46)'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:81)'
                        .'|/(?'
                            .'|docs(?:\\.([^/]++))?(*:111)'
                            .'|c(?'
                                .'|ontexts/([^.]+)(?:\\.(jsonld))?(*:153)'
                                .'|raftsmen(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:198)'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:224)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:259)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|utocomplete/([^/]++)(*:291)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:328)'
                .'|/c(?'
                    .'|ity/([^/]++)(?'
                        .'|(*:356)'
                        .'|/edit(*:369)'
                        .'|(*:377)'
                    .')'
                    .'|raftsman/([^/]++)(?'
                        .'|(*:406)'
                        .'|/edit(*:419)'
                        .'|(*:427)'
                    .')'
                .')'
                .'|/profession/([^/]++)(?'
                    .'|(*:460)'
                    .'|/edit(*:473)'
                    .'|(*:481)'
                .')'
                .'|/review/([^/]++)(?'
                    .'|(*:509)'
                    .'|/edit(*:522)'
                    .'|(*:530)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:556)'
                    .'|/edit(*:569)'
                    .'|(*:577)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        46 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        81 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        111 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        153 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        198 => [[['_route' => '_api_/craftsmen/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Craftsman', '_api_operation_name' => '_api_/craftsmen/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        224 => [
            [['_route' => '_api_/craftsmen{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Craftsman', '_api_operation_name' => '_api_/craftsmen{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/craftsmen{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Craftsman', '_api_operation_name' => '_api_/craftsmen{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        259 => [[['_route' => '_api_/craftsmen/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Craftsman', '_api_operation_name' => '_api_/craftsmen/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null]],
        291 => [[['_route' => 'ux_entity_autocomplete', '_controller' => 'ux.autocomplete.entity_autocomplete_controller'], ['alias'], null, null, false, true, null]],
        328 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        356 => [[['_route' => 'app_city_show', '_controller' => 'App\\Controller\\CityController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        369 => [[['_route' => 'app_city_edit', '_controller' => 'App\\Controller\\CityController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        377 => [[['_route' => 'app_city_delete', '_controller' => 'App\\Controller\\CityController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        406 => [[['_route' => 'app_craftsman_show', '_controller' => 'App\\Controller\\CraftsmanController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        419 => [[['_route' => 'app_craftsman_edit', '_controller' => 'App\\Controller\\CraftsmanController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        427 => [[['_route' => 'app_craftsman_delete', '_controller' => 'App\\Controller\\CraftsmanController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        460 => [[['_route' => 'app_profession_show', '_controller' => 'App\\Controller\\ProfessionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        473 => [[['_route' => 'app_profession_edit', '_controller' => 'App\\Controller\\ProfessionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        481 => [[['_route' => 'app_profession_delete', '_controller' => 'App\\Controller\\ProfessionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        509 => [[['_route' => 'app_review_show', '_controller' => 'App\\Controller\\ReviewController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        522 => [[['_route' => 'app_review_edit', '_controller' => 'App\\Controller\\ReviewController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        530 => [[['_route' => 'app_review_delete', '_controller' => 'App\\Controller\\ReviewController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        556 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        569 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        577 => [
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
