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
        '/categorie' => [[['_route' => 'app_categorie_index', '_controller' => 'App\\Controller\\CategorieController::index'], null, ['GET' => 0], null, false, false, null]],
        '/categorie/new' => [[['_route' => 'app_categorie_new', '_controller' => 'App\\Controller\\CategorieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/collecte' => [[['_route' => 'app_collecte_index', '_controller' => 'App\\Controller\\CollecteController::index'], null, ['GET' => 0], null, false, false, null]],
        '/collecte/new' => [[['_route' => 'app_collecte_new', '_controller' => 'App\\Controller\\CollecteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/commande' => [[['_route' => 'app_commande_index', '_controller' => 'App\\Controller\\CommandeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/commande/new' => [[['_route' => 'app_commande_new', '_controller' => 'App\\Controller\\CommandeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/commandes/boutique' => [[['_route' => 'app_commandes_boutique_index', '_controller' => 'App\\Controller\\CommandesBoutiqueController::index'], null, ['GET' => 0], null, false, false, null]],
        '/commandes/boutique/new' => [[['_route' => 'app_commandes_boutique_new', '_controller' => 'App\\Controller\\CommandesBoutiqueController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/depot' => [[['_route' => 'app_depot_index', '_controller' => 'App\\Controller\\DepotController::index'], null, ['GET' => 0], null, false, false, null]],
        '/depot/new' => [[['_route' => 'app_depot_new', '_controller' => 'App\\Controller\\DepotController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/livraison' => [[['_route' => 'app_livraison_index', '_controller' => 'App\\Controller\\LivraisonController::index'], null, ['GET' => 0], null, false, false, null]],
        '/livraison/new' => [[['_route' => 'app_livraison_new', '_controller' => 'App\\Controller\\LivraisonController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/back/order' => [[['_route' => 'back_order', '_controller' => 'App\\Controller\\PageController::indexo'], null, null, null, false, false, null]],
        '/back/dropoff' => [[['_route' => 'back_dropoff', '_controller' => 'App\\Controller\\PageController::indexd'], null, null, null, false, false, null]],
        '/back/blog' => [[['_route' => 'back_blog', '_controller' => 'App\\Controller\\PageController::indexb'], null, null, null, false, false, null]],
        '/back/event' => [[['_route' => 'back_event', '_controller' => 'App\\Controller\\PageController::indexe'], null, null, null, false, false, null]],
        '/front/order' => [[['_route' => 'front_order', '_controller' => 'App\\Controller\\PageController::indexof'], null, null, null, false, false, null]],
        '/front/dropoff' => [[['_route' => 'front_dropoff', '_controller' => 'App\\Controller\\PageController::indexdf'], null, null, null, false, false, null]],
        '/front/blog' => [[['_route' => 'front_blog', '_controller' => 'App\\Controller\\PageController::indexbf'], null, null, null, false, false, null]],
        '/front/event' => [[['_route' => 'front_event', '_controller' => 'App\\Controller\\PageController::indexef'], null, null, null, false, false, null]],
        '/front/products' => [[['_route' => 'back_products', '_controller' => 'App\\Controller\\PageController::indexpf'], null, null, null, false, false, null]],
        '/front/user' => [[['_route' => 'back_user', '_controller' => 'App\\Controller\\PageController::indexf'], null, null, null, false, false, null]],
        '/phase' => [[['_route' => 'app_phase_index', '_controller' => 'App\\Controller\\PhaseController::index'], null, ['GET' => 0], null, false, false, null]],
        '/phase/new' => [[['_route' => 'app_phase_new', '_controller' => 'App\\Controller\\PhaseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/plannig' => [[['_route' => 'app_plannig_index', '_controller' => 'App\\Controller\\PlannigController::index'], null, ['GET' => 0], null, false, false, null]],
        '/plannig/new' => [[['_route' => 'app_plannig_new', '_controller' => 'App\\Controller\\PlannigController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/produitcon' => [[['_route' => 'app_produitcon_index', '_controller' => 'App\\Controller\\ProduitconController::index'], null, ['GET' => 0], null, false, false, null]],
        '/produitcon/new' => [[['_route' => 'app_produitcon_new', '_controller' => 'App\\Controller\\ProduitconController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/produits/boutique' => [[['_route' => 'app_produits_boutique_index', '_controller' => 'App\\Controller\\ProduitsBoutiqueController::index'], null, ['GET' => 0], null, false, false, null]],
        '/produits/boutique/new' => [[['_route' => 'app_produits_boutique_new', '_controller' => 'App\\Controller\\ProduitsBoutiqueController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/role' => [[['_route' => 'app_role_index', '_controller' => 'App\\Controller\\RoleController::index'], null, ['GET' => 0], null, false, false, null]],
        '/role/new' => [[['_route' => 'app_role_new', '_controller' => 'App\\Controller\\RoleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/utilisateur' => [[['_route' => 'app_utilisateur_index', '_controller' => 'App\\Controller\\UtilisateurController::index'], null, ['GET' => 0], null, false, false, null]],
        '/utilisateur/new' => [[['_route' => 'app_utilisateur_new', '_controller' => 'App\\Controller\\UtilisateurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/c(?'
                    .'|ategorie/([^/]++)(?'
                        .'|(*:227)'
                        .'|/edit(*:240)'
                        .'|(*:248)'
                    .')'
                    .'|o(?'
                        .'|llecte/([^/]++)(?'
                            .'|(*:279)'
                            .'|/edit(*:292)'
                            .'|(*:300)'
                        .')'
                        .'|mmande(?'
                            .'|/([^/]++)(?'
                                .'|(*:330)'
                                .'|/edit(*:343)'
                                .'|(*:351)'
                            .')'
                            .'|s/boutique/([^/]++)(?'
                                .'|(*:382)'
                                .'|/edit(*:395)'
                                .'|(*:403)'
                            .')'
                        .')'
                    .')'
                    .'|/([^/]++)(*:423)'
                .')'
                .'|/depot/([^/]++)(?'
                    .'|(*:450)'
                    .'|/edit(*:463)'
                    .'|(*:471)'
                .')'
                .'|/l(?'
                    .'|ivraison/([^/]++)(?'
                        .'|(*:505)'
                        .'|/edit(*:518)'
                        .'|(*:526)'
                    .')'
                    .'|/([^/]++)(*:544)'
                .')'
                .'|/r(?'
                    .'|m(?'
                        .'|d/([^/]++)(*:572)'
                        .'|c/([^/]++)(*:590)'
                    .')'
                    .'|ole/([^/]++)(?'
                        .'|(*:614)'
                        .'|/edit(*:627)'
                        .'|(*:635)'
                    .')'
                .')'
                .'|/p(?'
                    .'|hase/([^/]++)(?'
                        .'|(*:666)'
                        .'|/edit(*:679)'
                        .'|(*:687)'
                    .')'
                    .'|lannig/([^/]++)(?'
                        .'|(*:714)'
                        .'|/edit(*:727)'
                        .'|(*:735)'
                    .')'
                    .'|roduit(?'
                        .'|con/([^/]++)(?'
                            .'|(*:768)'
                            .'|/edit(*:781)'
                            .'|(*:789)'
                        .')'
                        .'|s/boutique/([^/]++)(?'
                            .'|(*:820)'
                            .'|/edit(*:833)'
                            .'|(*:841)'
                        .')'
                    .')'
                .')'
                .'|/utilisateur/([^/]++)(?'
                    .'|(*:876)'
                    .'|/edit(*:889)'
                    .'|(*:897)'
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
        227 => [[['_route' => 'app_categorie_show', '_controller' => 'App\\Controller\\CategorieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        240 => [[['_route' => 'app_categorie_edit', '_controller' => 'App\\Controller\\CategorieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        248 => [[['_route' => 'app_categorie_delete', '_controller' => 'App\\Controller\\CategorieController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        279 => [[['_route' => 'app_collecte_show', '_controller' => 'App\\Controller\\CollecteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        292 => [[['_route' => 'app_collecte_edit', '_controller' => 'App\\Controller\\CollecteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        300 => [[['_route' => 'app_collecte_delete', '_controller' => 'App\\Controller\\CollecteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        330 => [[['_route' => 'app_commande_show', '_controller' => 'App\\Controller\\CommandeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        343 => [[['_route' => 'app_commande_edit', '_controller' => 'App\\Controller\\CommandeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        351 => [[['_route' => 'app_commande_delete', '_controller' => 'App\\Controller\\CommandeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        382 => [[['_route' => 'app_commandes_boutique_show', '_controller' => 'App\\Controller\\CommandesBoutiqueController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        395 => [[['_route' => 'app_commandes_boutique_edit', '_controller' => 'App\\Controller\\CommandesBoutiqueController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        403 => [[['_route' => 'app_commandes_boutique_delete', '_controller' => 'App\\Controller\\CommandesBoutiqueController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        423 => [[['_route' => 'commande_delete', '_controller' => 'App\\Controller\\PageController::deletec'], ['id'], ['POST' => 0], null, false, true, null]],
        450 => [[['_route' => 'app_depot_show', '_controller' => 'App\\Controller\\DepotController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        463 => [[['_route' => 'app_depot_edit', '_controller' => 'App\\Controller\\DepotController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        471 => [[['_route' => 'app_depot_delete', '_controller' => 'App\\Controller\\DepotController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        505 => [[['_route' => 'app_livraison_show', '_controller' => 'App\\Controller\\LivraisonController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        518 => [[['_route' => 'app_livraison_edit', '_controller' => 'App\\Controller\\LivraisonController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        526 => [[['_route' => 'app_livraison_delete', '_controller' => 'App\\Controller\\LivraisonController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        544 => [[['_route' => 'livraison_delete', '_controller' => 'App\\Controller\\PageController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        572 => [[['_route' => 'depot_delete', '_controller' => 'App\\Controller\\PageController::deleted'], ['id'], ['POST' => 0], null, false, true, null]],
        590 => [[['_route' => 'collecte_delete', '_controller' => 'App\\Controller\\PageController::deletep'], ['id'], ['POST' => 0], null, false, true, null]],
        614 => [[['_route' => 'app_role_show', '_controller' => 'App\\Controller\\RoleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        627 => [[['_route' => 'app_role_edit', '_controller' => 'App\\Controller\\RoleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        635 => [[['_route' => 'app_role_delete', '_controller' => 'App\\Controller\\RoleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        666 => [[['_route' => 'app_phase_show', '_controller' => 'App\\Controller\\PhaseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        679 => [[['_route' => 'app_phase_edit', '_controller' => 'App\\Controller\\PhaseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        687 => [[['_route' => 'app_phase_delete', '_controller' => 'App\\Controller\\PhaseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        714 => [[['_route' => 'app_plannig_show', '_controller' => 'App\\Controller\\PlannigController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        727 => [[['_route' => 'app_plannig_edit', '_controller' => 'App\\Controller\\PlannigController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        735 => [[['_route' => 'app_plannig_delete', '_controller' => 'App\\Controller\\PlannigController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        768 => [[['_route' => 'app_produitcon_show', '_controller' => 'App\\Controller\\ProduitconController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        781 => [[['_route' => 'app_produitcon_edit', '_controller' => 'App\\Controller\\ProduitconController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        789 => [[['_route' => 'app_produitcon_delete', '_controller' => 'App\\Controller\\ProduitconController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        820 => [[['_route' => 'app_produits_boutique_show', '_controller' => 'App\\Controller\\ProduitsBoutiqueController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        833 => [[['_route' => 'app_produits_boutique_edit', '_controller' => 'App\\Controller\\ProduitsBoutiqueController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        841 => [[['_route' => 'app_produits_boutique_delete', '_controller' => 'App\\Controller\\ProduitsBoutiqueController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        876 => [[['_route' => 'app_utilisateur_show', '_controller' => 'App\\Controller\\UtilisateurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        889 => [[['_route' => 'app_utilisateur_edit', '_controller' => 'App\\Controller\\UtilisateurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        897 => [
            [['_route' => 'app_utilisateur_delete', '_controller' => 'App\\Controller\\UtilisateurController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
