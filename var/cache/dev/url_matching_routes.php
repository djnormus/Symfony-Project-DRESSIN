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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/addProduct' => [[['_route' => 'addProduct', '_controller' => 'App\\Controller\\AdminController::addProduct'], null, null, null, false, false, null]],
        '/listProduct' => [[['_route' => 'listProduct', '_controller' => 'App\\Controller\\AdminController::listProduct'], null, null, null, false, false, null]],
        '/category' => [[['_route' => 'category', '_controller' => 'App\\Controller\\AdminController::category'], null, null, null, false, false, null]],
        '/subCategory' => [[['_route' => 'subCategory', '_controller' => 'App\\Controller\\AdminController::subCategory'], null, null, null, false, false, null]],
        '/listOrder' => [[['_route' => 'listOrder', '_controller' => 'App\\Controller\\AdminController::listOrder'], null, null, null, false, false, null]],
        '/listPromo' => [[['_route' => 'listPromo', '_controller' => 'App\\Controller\\AdminController::listPromo'], null, null, null, false, false, null]],
        '/editParam' => [[['_route' => 'app_admin_editpromo', '_controller' => 'App\\Controller\\AdminController::editPromo'], null, null, null, false, false, null]],
        '/listStock' => [[['_route' => 'listStock', '_controller' => 'App\\Controller\\AdminController::listStock'], null, null, null, false, false, null]],
        '/searchRef' => [[['_route' => 'searchRef', '_controller' => 'App\\Controller\\AdminController::searchRef'], null, null, null, false, false, null]],
        '/listSuppliers' => [[['_route' => 'listSuppliers', '_controller' => 'App\\Controller\\AdminController::addSuppliers'], null, null, null, false, false, null]],
        '/listSize' => [[['_route' => 'listSize', '_controller' => 'App\\Controller\\AdminController::listSize'], null, null, null, false, false, null]],
        '/color' => [[['_route' => 'color', '_controller' => 'App\\Controller\\AdminController::color'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::home'], null, null, null, false, false, null]],
        '/emailForm' => [[['_route' => 'emailForm', '_controller' => 'App\\Controller\\HomeController::emailForm'], null, null, null, false, false, null]],
        '/emailSend' => [[['_route' => 'emailSend', '_controller' => 'App\\Controller\\HomeController::emailSend'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'cart', '_controller' => 'App\\Controller\\HomeController::cart'], null, null, null, false, false, null]],
        '/destroyCart' => [[['_route' => 'destroyCart', '_controller' => 'App\\Controller\\HomeController::destroyCart'], null, null, null, false, false, null]],
        '/filterValidate' => [[['_route' => 'filterValidate', '_controller' => 'App\\Controller\\HomeController::filterProduct'], null, null, null, false, false, null]],
        '/verifPromo' => [[['_route' => 'verifPromo', '_controller' => 'App\\Controller\\HomeController::verifPromo'], null, null, null, false, false, null]],
        '/order' => [[['_route' => 'order', '_controller' => 'App\\Controller\\HomeController::order'], null, null, null, false, false, null]],
        '/profil' => [[['_route' => 'profil', '_controller' => 'App\\Controller\\HomeController::profil'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\SecurityController::register'], null, null, null, false, false, null]],
        '/modifProfil' => [[['_route' => 'modifProfil', '_controller' => 'App\\Controller\\SecurityController::modifProfil'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/resetForm' => [[['_route' => 'resetForm', '_controller' => 'App\\Controller\\SecurityController::resetForm'], null, null, null, false, false, null]],
        '/resetToken' => [[['_route' => 'resetToken', '_controller' => 'App\\Controller\\SecurityController::resetForm'], null, null, null, false, false, null]],
        '/finalReset' => [[['_route' => 'finalReset', '_controller' => 'App\\Controller\\SecurityController::resetPassword'], null, null, null, false, false, null]],
        '/modifPassword' => [[['_route' => 'modifPassword', '_controller' => 'App\\Controller\\SecurityController::modifPassword'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/edit(?'
                    .'|Pro(?'
                        .'|duct/([^/]++)(*:195)'
                        .'|mo/([^/]++)/([^/]++)(*:223)'
                    .')'
                    .'|C(?'
                        .'|ategory(?:/([^/]++))?(*:257)'
                        .'|olor(?:/([^/]++))?(*:283)'
                    .')'
                    .'|S(?'
                        .'|u(?'
                            .'|bCategory(?:/([^/]++))?(*:323)'
                            .'|ppliers(?:/([^/]++))?(*:352)'
                        .')'
                        .'|ize(?:/([^/]++))?(*:378)'
                    .')'
                .')'
                .'|/de(?'
                    .'|lete(?'
                        .'|Pro(?'
                            .'|duct/([^/]++)(*:420)'
                            .'|mo/([^/]++)(*:439)'
                        .')'
                        .'|C(?'
                            .'|a(?'
                                .'|tegory/([^/]++)(*:471)'
                                .'|rt/([^/]++)(*:490)'
                            .')'
                            .'|olor/([^/]++)(*:512)'
                        .')'
                        .'|S(?'
                            .'|u(?'
                                .'|bCategory/([^/]++)(*:547)'
                                .'|ppliers/([^/]++)(*:571)'
                            .')'
                            .'|ize/([^/]++)(*:592)'
                        .')'
                    .')'
                    .'|tail(?'
                        .'|Order/([^/]++)(*:623)'
                        .'|Product(?'
                            .'|/([^/]++)(?:/([^/]++)(?:/([^/]++))?)?(*:678)'
                            .'|a/([^/]++)(?:/([^/]++)(?:/([^/]++))?)?(*:724)'
                        .')'
                    .')'
                .')'
                .'|/add(?'
                    .'|Promo/([^/]++)(*:756)'
                    .'|Cart/([^/]++)/([^/]++)(*:786)'
                    .'|Temp(?'
                        .'|Color/([^/]++)/([^/]++)(?:/([^/]++))?(*:838)'
                        .'|Size/([^/]++)/([^/]++)(?:/([^/]++))?(*:882)'
                        .'|ToCart/([^/]++)(*:905)'
                    .')'
                .')'
                .'|/stock/([^/]++)(*:930)'
                .'|/re(?'
                    .'|moveCart/([^/]++)(*:961)'
                    .'|setPassword(?:/([^/]++)(?:/([^/]++))?)?(*:1008)'
                .')'
                .'|/filterProduct(?:/([^/]++))?(*:1046)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        195 => [[['_route' => 'editProduct', '_controller' => 'App\\Controller\\AdminController::editProduct'], ['id'], null, null, false, true, null]],
        223 => [[['_route' => 'editPromo', '_controller' => 'App\\Controller\\AdminController::editPromo'], ['id', 'param'], null, null, false, true, null]],
        257 => [[['_route' => 'editCategory', 'id' => null, '_controller' => 'App\\Controller\\AdminController::category'], ['id'], null, null, false, true, null]],
        283 => [[['_route' => 'editColor', 'id' => null, '_controller' => 'App\\Controller\\AdminController::color'], ['id'], null, null, false, true, null]],
        323 => [[['_route' => 'editSubCategory', 'id' => null, '_controller' => 'App\\Controller\\AdminController::subCategory'], ['id'], null, null, false, true, null]],
        352 => [[['_route' => 'editSuppliers', 'id' => null, '_controller' => 'App\\Controller\\AdminController::addSuppliers'], ['id'], null, null, false, true, null]],
        378 => [[['_route' => 'editSize', 'id' => null, '_controller' => 'App\\Controller\\AdminController::listSize'], ['id'], null, null, false, true, null]],
        420 => [[['_route' => 'deleteProduct', '_controller' => 'App\\Controller\\AdminController::deleteProduct'], ['id'], null, null, false, true, null]],
        439 => [[['_route' => 'deletePromo', '_controller' => 'App\\Controller\\AdminController::deletePromo'], ['id'], null, null, false, true, null]],
        471 => [[['_route' => 'deleteCategory', '_controller' => 'App\\Controller\\AdminController::deleteCategory'], ['id'], null, null, false, true, null]],
        490 => [[['_route' => 'deleteCart', '_controller' => 'App\\Controller\\HomeController::deleteCart'], ['id'], null, null, false, true, null]],
        512 => [[['_route' => 'deleteColor', '_controller' => 'App\\Controller\\AdminController::deleteColor'], ['id'], null, null, false, true, null]],
        547 => [[['_route' => 'deleteSubCategory', '_controller' => 'App\\Controller\\AdminController::deleteSubCategory'], ['id'], null, null, false, true, null]],
        571 => [[['_route' => 'deleteSuppliers', '_controller' => 'App\\Controller\\AdminController::deleteSuppliers'], ['id'], null, null, false, true, null]],
        592 => [[['_route' => 'deleteSize', '_controller' => 'App\\Controller\\AdminController::deleteSize'], ['id'], null, null, false, true, null]],
        623 => [[['_route' => 'detailOrder', '_controller' => 'App\\Controller\\AdminController::detailOrder'], ['id'], null, null, false, true, null]],
        678 => [[['_route' => 'detailProduct', 'size' => null, 'color' => null, '_controller' => 'App\\Controller\\HomeController::detailProduct'], ['id', 'size', 'color'], null, null, false, true, null]],
        724 => [[['_route' => 'detailProducta', 'size' => null, 'color' => null, '_controller' => 'App\\Controller\\HomeController::detailProduct'], ['id', 'color', 'size'], null, null, false, true, null]],
        756 => [[['_route' => 'addPromo', '_controller' => 'App\\Controller\\AdminController::addPromo'], ['param'], null, null, false, true, null]],
        786 => [[['_route' => 'addCart', '_controller' => 'App\\Controller\\HomeController::addCart'], ['id', 'param'], null, null, false, true, null]],
        838 => [[['_route' => 'addTempColor', 'size' => null, '_controller' => 'App\\Controller\\HomeController::addTempColor'], ['id', 'color', 'size'], null, null, false, true, null]],
        882 => [[['_route' => 'addTempSize', 'color' => null, '_controller' => 'App\\Controller\\HomeController::addTempSize'], ['id', 'size', 'color'], null, null, false, true, null]],
        905 => [[['_route' => 'addTempToCart', '_controller' => 'App\\Controller\\HomeController::addTempToCart'], ['id'], null, null, false, true, null]],
        930 => [[['_route' => 'stock', '_controller' => 'App\\Controller\\AdminController::stock'], ['id'], null, null, false, true, null]],
        961 => [[['_route' => 'removeCart', '_controller' => 'App\\Controller\\HomeController::removeCart'], ['id'], null, null, false, true, null]],
        1008 => [[['_route' => 'resetPassword', 'token' => null, 'id' => null, '_controller' => 'App\\Controller\\SecurityController::resetPassword'], ['token', 'id'], null, null, false, true, null]],
        1046 => [
            [['_route' => 'filterProduct', 'param' => null, '_controller' => 'App\\Controller\\HomeController::filterProduct'], ['param'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
