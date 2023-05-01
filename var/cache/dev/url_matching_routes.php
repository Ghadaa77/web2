<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/affectation' => [[['_route' => 'app_affectation', '_controller' => 'App\\Controller\\AffectationController::index'], null, null, null, false, false, null]],
        '/affectation/front' => [[['_route' => 'app_affectation_front', '_controller' => 'App\\Controller\\AffectationFrontController::index'], null, null, null, false, false, null]],
        '/categorie' => [[['_route' => 'app_categorie', '_controller' => 'App\\Controller\\CategorieController::index'], null, null, null, false, false, null]],
        '/categorie/front' => [[['_route' => 'app_categorie_front', '_controller' => 'App\\Controller\\CategorieFrontController::index'], null, null, null, false, false, null]],
        '/commande' => [[['_route' => 'app_commande', '_controller' => 'App\\Controller\\CommandeController::index'], null, null, null, false, false, null]],
        '/commande/front' => [[['_route' => 'app_commande_front', '_controller' => 'App\\Controller\\CommandeFrontController::index'], null, null, null, false, false, null]],
        '/feedback' => [[['_route' => 'app_feedback', '_controller' => 'App\\Controller\\FeedbackController::index'], null, null, null, false, false, null]],
        '/feedback/front' => [[['_route' => 'app_feedback_front', '_controller' => 'App\\Controller\\FeedbackFrontController::index'], null, null, null, false, false, null]],
        '/livraison' => [[['_route' => 'app_livraison_index', '_controller' => 'App\\Controller\\LivraisonController::index'], null, ['GET' => 0], null, true, false, null]],
        '/livraison/new' => [[['_route' => 'app_livraison_new', '_controller' => 'App\\Controller\\LivraisonController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/livraison/pdf/livraison' => [[['_route' => 'generator_service', '_controller' => 'App\\Controller\\LivraisonController::pdfService'], null, null, null, false, false, null]],
        '/pointderelais/back' => [[['_route' => 'app_pointderelais_index', '_controller' => 'App\\Controller\\PointderelaisController::index'], null, ['GET' => 0], null, true, false, null]],
        '/stat/stat' => [[['_route' => 'app_cons_stat', '_controller' => 'App\\Controller\\PointderelaisController::yourAction'], null, ['GET' => 0], null, false, false, null]],
        '/pointderelais/front' => [[['_route' => 'app_pointderelais_front_index', '_controller' => 'App\\Controller\\PointderelaisFrontController::index'], null, ['GET' => 0], null, true, false, null]],
        '/pointderelais/front/new' => [[['_route' => 'app_pointderelais_front_new', '_controller' => 'App\\Controller\\PointderelaisFrontController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/produit' => [[['_route' => 'app_produit', '_controller' => 'App\\Controller\\ProduitController::index'], null, null, null, false, false, null]],
        '/produit/front' => [[['_route' => 'app_produit_front', '_controller' => 'App\\Controller\\ProduitFrontController::index'], null, null, null, false, false, null]],
        '/qr-codes' => [[['_route' => 'app_qr_codes', '_controller' => 'App\\Controller\\QrCodeGeneratorController::index'], null, null, null, false, false, null]],
        '/reclamation/new' => [[['_route' => 'reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, null, null, false, false, null]],
        '/reclamation/front' => [[['_route' => 'app_reclamation_front', '_controller' => 'App\\Controller\\ReclamationFrontController::index'], null, null, null, false, false, null]],
        '/reponse' => [[['_route' => 'app_reponse', '_controller' => 'App\\Controller\\ReponseController::index'], null, null, null, false, false, null]],
        '/reponse/front' => [[['_route' => 'app_reponse_front', '_controller' => 'App\\Controller\\ReponseFrontController::index'], null, null, null, false, false, null]],
        '/service' => [[['_route' => 'app_service', '_controller' => 'App\\Controller\\ServiceController::index'], null, null, null, false, false, null]],
        '/service/front' => [[['_route' => 'app_service_front', '_controller' => 'App\\Controller\\ServiceFrontController::index'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/user/front' => [[['_route' => 'app_user_front', '_controller' => 'App\\Controller\\UserFrontController::index'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/livraison/(?'
                    .'|([^/]++)(?'
                        .'|(*:32)'
                        .'|/edit(*:44)'
                        .'|(*:51)'
                    .')'
                    .'|livred/([^/]++)(*:74)'
                    .'|front(*:86)'
                .')'
                .'|/pointderelais/front/([^/]++)(?'
                    .'|(*:126)'
                    .'|/edit(*:139)'
                    .'|(*:147)'
                .')'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:184)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:223)'
                    .'|wdt/([^/]++)(*:243)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:289)'
                            .'|router(*:303)'
                            .'|exception(?'
                                .'|(*:323)'
                                .'|\\.css(*:336)'
                            .')'
                        .')'
                        .'|(*:346)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        32 => [[['_route' => 'app_livraison_show', '_controller' => 'App\\Controller\\LivraisonController::show'], ['idLivraison'], ['GET' => 0], null, false, true, null]],
        44 => [[['_route' => 'app_livraison_edit', '_controller' => 'App\\Controller\\LivraisonController::edit'], ['idLivraison'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        51 => [[['_route' => 'app_livraison_delete', '_controller' => 'App\\Controller\\LivraisonController::delete'], ['idLivraison'], ['POST' => 0], null, false, true, null]],
        74 => [[['_route' => 'livred', '_controller' => 'App\\Controller\\LivraisonController::LivredLivraison'], ['id'], ['GET' => 0], null, false, true, null]],
        86 => [[['_route' => 'app_livraison_front', '_controller' => 'App\\Controller\\LivraisonFrontController::index'], [], null, null, false, false, null]],
        126 => [[['_route' => 'app_pointderelais_front_show', '_controller' => 'App\\Controller\\PointderelaisFrontController::show'], ['idPointderelais'], ['GET' => 0], null, false, true, null]],
        139 => [[['_route' => 'app_pointderelais_front_edit', '_controller' => 'App\\Controller\\PointderelaisFrontController::edit'], ['idPointderelais'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        147 => [[['_route' => 'app_pointderelais_front_delete', '_controller' => 'App\\Controller\\PointderelaisFrontController::delete'], ['idPointderelais'], ['POST' => 0], null, false, true, null]],
        184 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        223 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        243 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        289 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        303 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        323 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        336 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        346 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
