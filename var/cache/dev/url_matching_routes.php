<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/categorie' => [[['_route' => 'app_categorie_index', '_controller' => 'App\\Controller\\CategorieController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categorie/order_By_Type' => [[['_route' => 'order_By_Type', '_controller' => 'App\\Controller\\CategorieController::order_By_Type'], null, ['GET' => 0], null, false, false, null]],
        '/categorie/new' => [[['_route' => 'app_categorie_new', '_controller' => 'App\\Controller\\CategorieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/categorieFront' => [[['_route' => 'app_categorie_indexFront', '_controller' => 'App\\Controller\\CategorieController::indexFrony'], null, ['GET' => 0], null, true, false, null]],
        '/categorieFront/new' => [[['_route' => 'app_categorie_newFront', '_controller' => 'App\\Controller\\CategorieController::newFront'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/feedback' => [[['_route' => 'app_feedback_index', '_controller' => 'App\\Controller\\FeedbackController::index'], null, ['GET' => 0], null, true, false, null]],
        '/feedback/new' => [[['_route' => 'app_feedback_new', '_controller' => 'App\\Controller\\FeedbackController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/feedbackFront' => [[['_route' => 'app_feedback_indexFront', '_controller' => 'App\\Controller\\FeedbackController::indexFront'], null, ['GET' => 0], null, false, false, null]],
        '/feedbackFront/new' => [[['_route' => 'app_feedback_newFront', '_controller' => 'App\\Controller\\FeedbackController::newFront'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/feedbackp' => [[['_route' => 'app_feedbackp_index', '_controller' => 'App\\Controller\\FeedbackpController::index'], null, ['GET' => 0], null, true, false, null]],
        '/feedbackp/new' => [[['_route' => 'app_feedbackp_new', '_controller' => 'App\\Controller\\FeedbackpController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/feedbackpFront' => [[['_route' => 'app_feedbackp_indexFront', '_controller' => 'App\\Controller\\FeedbackpController::indexFront'], null, ['GET' => 0], null, false, false, null]],
        '/feedbackpFront/new' => [[['_route' => 'app_feedbackp_newFront', '_controller' => 'App\\Controller\\FeedbackpController::newFront'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/service' => [[['_route' => 'app_service_index', '_controller' => 'App\\Controller\\ServiceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/service/pdf' => [[['_route' => 'app_pdf', '_controller' => 'App\\Controller\\ServiceController::pdf'], null, ['GET' => 0], null, false, false, null]],
        '/service/new' => [[['_route' => 'app_service_new', '_controller' => 'App\\Controller\\ServiceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/serviceFront' => [[['_route' => 'app_service_indexFront', '_controller' => 'App\\Controller\\ServiceController::indexFront'], null, ['GET' => 0], null, true, false, null]],
        '/serviceFront/new' => [[['_route' => 'app_service_newFront', '_controller' => 'App\\Controller\\ServiceController::newFront'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/order_By_Nom' => [[['_route' => 'order_By_Nom', '_controller' => 'App\\Controller\\UserController::order_By_Nom'], null, ['GET' => 0], null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/statistics' => [[['_route' => 'app_statistics', '_controller' => 'App\\Controller\\StatisticsController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/categorie(?'
                    .'|/([^/]++)(?'
                        .'|(*:194)'
                        .'|/edit(*:207)'
                        .'|(*:215)'
                    .')'
                    .'|Front/([^/]++)(?'
                        .'|(*:241)'
                        .'|/edit(*:254)'
                        .'|(*:262)'
                    .')'
                .')'
                .'|/feedback(?'
                    .'|/([^/]++)(?'
                        .'|(*:296)'
                        .'|/edit(*:309)'
                        .'|(*:317)'
                    .')'
                    .'|Front/([^/]++)(?'
                        .'|(*:343)'
                        .'|/edit(*:356)'
                        .'|(*:364)'
                    .')'
                    .'|p(?'
                        .'|/([^/]++)(?'
                            .'|(*:389)'
                            .'|/edit(*:402)'
                            .'|(*:410)'
                        .')'
                        .'|Front/([^/]++)(?'
                            .'|(*:436)'
                            .'|/edit(*:449)'
                            .'|(*:457)'
                        .')'
                    .')'
                .')'
                .'|/service(?'
                    .'|/([^/]++)(?'
                        .'|(*:491)'
                        .'|/edit(*:504)'
                        .'|(*:512)'
                    .')'
                    .'|Front/([^/]++)(?'
                        .'|(*:538)'
                        .'|/edit(*:551)'
                        .'|(*:559)'
                    .')'
                .')'
                .'|/user(?'
                    .'|/([^/]++)(?'
                        .'|(*:589)'
                        .'|/edit(?'
                            .'|(*:605)'
                            .'|Front(*:618)'
                        .')'
                        .'|(*:627)'
                    .')'
                    .'|Front/([^/]++)(*:650)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        194 => [[['_route' => 'app_categorie_show', '_controller' => 'App\\Controller\\CategorieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        207 => [[['_route' => 'app_categorie_edit', '_controller' => 'App\\Controller\\CategorieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        215 => [[['_route' => 'app_categorie_delete', '_controller' => 'App\\Controller\\CategorieController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        241 => [[['_route' => 'app_categorie_showFront', '_controller' => 'App\\Controller\\CategorieController::showFront'], ['id'], ['GET' => 0], null, false, true, null]],
        254 => [[['_route' => 'app_categorie_editFront', '_controller' => 'App\\Controller\\CategorieController::editFront'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        262 => [[['_route' => 'app_categorie_deleteFront', '_controller' => 'App\\Controller\\CategorieController::deleteFront'], ['id'], ['POST' => 0], null, false, true, null]],
        296 => [[['_route' => 'app_feedback_show', '_controller' => 'App\\Controller\\FeedbackController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        309 => [[['_route' => 'app_feedback_edit', '_controller' => 'App\\Controller\\FeedbackController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        317 => [[['_route' => 'app_feedback_delete', '_controller' => 'App\\Controller\\FeedbackController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        343 => [[['_route' => 'app_feedback_showFront', '_controller' => 'App\\Controller\\FeedbackController::showFront'], ['id'], ['GET' => 0], null, false, true, null]],
        356 => [[['_route' => 'app_feedback_editFront', '_controller' => 'App\\Controller\\FeedbackController::editFront'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        364 => [[['_route' => 'app_feedback_deleteFront', '_controller' => 'App\\Controller\\FeedbackController::deleteFront'], ['id'], ['POST' => 0], null, false, true, null]],
        389 => [[['_route' => 'app_feedbackp_show', '_controller' => 'App\\Controller\\FeedbackpController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        402 => [[['_route' => 'app_feedbackp_edit', '_controller' => 'App\\Controller\\FeedbackpController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        410 => [[['_route' => 'app_feedbackp_delete', '_controller' => 'App\\Controller\\FeedbackpController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        436 => [[['_route' => 'app_feedbackp_showFront', '_controller' => 'App\\Controller\\FeedbackpController::showFront'], ['id'], ['GET' => 0], null, false, true, null]],
        449 => [[['_route' => 'app_feedbackp_editFront', '_controller' => 'App\\Controller\\FeedbackpController::editFront'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        457 => [[['_route' => 'app_feedbackp_deleteFront', '_controller' => 'App\\Controller\\FeedbackpController::deleteFront'], ['id'], ['POST' => 0], null, false, true, null]],
        491 => [[['_route' => 'app_service_show', '_controller' => 'App\\Controller\\ServiceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        504 => [[['_route' => 'app_service_edit', '_controller' => 'App\\Controller\\ServiceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        512 => [[['_route' => 'app_service_delete', '_controller' => 'App\\Controller\\ServiceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        538 => [[['_route' => 'app_service_showFront', '_controller' => 'App\\Controller\\ServiceController::showFront'], ['id'], ['GET' => 0], null, false, true, null]],
        551 => [[['_route' => 'app_service_editFront', '_controller' => 'App\\Controller\\ServiceController::editFront'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        559 => [[['_route' => 'app_service_deleteFront', '_controller' => 'App\\Controller\\ServiceController::deleteFront'], ['id'], ['POST' => 0], null, false, true, null]],
        589 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        605 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        618 => [[['_route' => 'app_user_editFront', '_controller' => 'App\\Controller\\UserController::editFront'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        627 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        650 => [
            [['_route' => 'app_user_showFront', '_controller' => 'App\\Controller\\UserController::showFront'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
