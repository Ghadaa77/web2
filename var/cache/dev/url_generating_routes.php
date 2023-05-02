<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_affectation' => [[], ['_controller' => 'App\\Controller\\AffectationController::index'], [], [['text', '/affectation']], [], [], []],
    'app_affectation_front' => [[], ['_controller' => 'App\\Controller\\AffectationFrontController::index'], [], [['text', '/affectation/front']], [], [], []],
    'app_categorie' => [[], ['_controller' => 'App\\Controller\\CategorieController::index'], [], [['text', '/categorie']], [], [], []],
    'app_categorie_front' => [[], ['_controller' => 'App\\Controller\\CategorieFrontController::index'], [], [['text', '/categorie/front']], [], [], []],
    'app_commande' => [[], ['_controller' => 'App\\Controller\\CommandeController::index'], [], [['text', '/commande']], [], [], []],
    'app_commande_front' => [[], ['_controller' => 'App\\Controller\\CommandeFrontController::index'], [], [['text', '/commande/front']], [], [], []],
    'app_feedback' => [[], ['_controller' => 'App\\Controller\\FeedbackController::index'], [], [['text', '/feedback']], [], [], []],
    'app_feedback_front' => [[], ['_controller' => 'App\\Controller\\FeedbackFrontController::index'], [], [['text', '/feedback/front']], [], [], []],
    'app_livraison_index' => [[], ['_controller' => 'App\\Controller\\LivraisonController::index'], [], [['text', '/livraison/']], [], [], []],
    'app_livraison_new' => [[], ['_controller' => 'App\\Controller\\LivraisonController::new'], [], [['text', '/livraison/new']], [], [], []],
    'app_livraison_show' => [['idLivraison'], ['_controller' => 'App\\Controller\\LivraisonController::show'], [], [['variable', '/', '[^/]++', 'idLivraison', true], ['text', '/livraison']], [], [], []],
    'app_livraison_edit' => [['idLivraison'], ['_controller' => 'App\\Controller\\LivraisonController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idLivraison', true], ['text', '/livraison']], [], [], []],
    'app_livraison_delete' => [['idLivraison'], ['_controller' => 'App\\Controller\\LivraisonController::delete'], [], [['variable', '/', '[^/]++', 'idLivraison', true], ['text', '/livraison']], [], [], []],
    'livred' => [['id'], ['_controller' => 'App\\Controller\\LivraisonController::LivredLivraison'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/livraison/livred']], [], [], []],
    'generator_service' => [[], ['_controller' => 'App\\Controller\\LivraisonController::pdfService'], [], [['text', '/livraison/pdf/livraison']], [], [], []],
    'app_livraison_front' => [[], ['_controller' => 'App\\Controller\\LivraisonFrontController::index'], [], [['text', '/livraison/front']], [], [], []],
    'app_pointderelais_index' => [[], ['_controller' => 'App\\Controller\\PointderelaisController::index'], [], [['text', '/pointderelais/back/']], [], [], []],
    'app_cons_stat' => [[], ['_controller' => 'App\\Controller\\PointderelaisController::yourAction'], [], [['text', '/stat/stat']], [], [], []],
    'app_pointderelais_front_index' => [[], ['_controller' => 'App\\Controller\\PointderelaisFrontController::index'], [], [['text', '/pointderelais/front/']], [], [], []],
    'app_pointderelais_front_new' => [[], ['_controller' => 'App\\Controller\\PointderelaisFrontController::new'], [], [['text', '/pointderelais/front/new']], [], [], []],
    'app_pointderelais_front_show' => [['idPointderelais'], ['_controller' => 'App\\Controller\\PointderelaisFrontController::show'], [], [['variable', '/', '[^/]++', 'idPointderelais', true], ['text', '/pointderelais/front']], [], [], []],
    'app_pointderelais_front_edit' => [['idPointderelais'], ['_controller' => 'App\\Controller\\PointderelaisFrontController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idPointderelais', true], ['text', '/pointderelais/front']], [], [], []],
    'app_pointderelais_front_delete' => [['idPointderelais'], ['_controller' => 'App\\Controller\\PointderelaisFrontController::delete'], [], [['variable', '/', '[^/]++', 'idPointderelais', true], ['text', '/pointderelais/front']], [], [], []],
    'app_produit' => [[], ['_controller' => 'App\\Controller\\ProduitController::index'], [], [['text', '/produit']], [], [], []],
    'app_produit_front' => [[], ['_controller' => 'App\\Controller\\ProduitFrontController::index'], [], [['text', '/produit/front']], [], [], []],
    'app_qr_codes' => [[], ['_controller' => 'App\\Controller\\QrCodeGeneratorController::index'], [], [['text', '/qr-codes']], [], [], []],
    'reclamation_new' => [[], ['_controller' => 'App\\Controller\\ReclamationController::new'], [], [['text', '/reclamation/new']], [], [], []],
    'app_reclamation_front' => [[], ['_controller' => 'App\\Controller\\ReclamationFrontController::index'], [], [['text', '/reclamation/front']], [], [], []],
    'app_reponse' => [[], ['_controller' => 'App\\Controller\\ReponseController::index'], [], [['text', '/reponse']], [], [], []],
    'app_reponse_front' => [[], ['_controller' => 'App\\Controller\\ReponseFrontController::index'], [], [['text', '/reponse/front']], [], [], []],
    'app_service' => [[], ['_controller' => 'App\\Controller\\ServiceController::index'], [], [['text', '/service']], [], [], []],
    'app_service_front' => [[], ['_controller' => 'App\\Controller\\ServiceFrontController::index'], [], [['text', '/service/front']], [], [], []],
    'app_user' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user']], [], [], []],
    'app_user_front' => [[], ['_controller' => 'App\\Controller\\UserFrontController::index'], [], [['text', '/user/front']], [], [], []],
    'qr_code_generate' => [['builder', 'data'], ['_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['data' => '[\\w\\W]+'], [['variable', '/', '[\\w\\W]+', 'data', true], ['variable', '/', '[^/]++', 'builder', true], ['text', '/qr-code']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
];