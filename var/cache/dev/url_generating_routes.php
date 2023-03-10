<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
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
    'addProduct' => [[], ['_controller' => 'App\\Controller\\AdminController::addProduct'], [], [['text', '/addProduct']], [], [], []],
    'listProduct' => [[], ['_controller' => 'App\\Controller\\AdminController::listProduct'], [], [['text', '/listProduct']], [], [], []],
    'editProduct' => [['id'], ['_controller' => 'App\\Controller\\AdminController::editProduct'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/editProduct']], [], [], []],
    'deleteProduct' => [['id'], ['_controller' => 'App\\Controller\\AdminController::deleteProduct'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deleteProduct']], [], [], []],
    'category' => [[], ['_controller' => 'App\\Controller\\AdminController::category'], [], [['text', '/category']], [], [], []],
    'editCategory' => [['id'], ['id' => null, '_controller' => 'App\\Controller\\AdminController::category'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/editCategory']], [], [], []],
    'deleteCategory' => [['id'], ['_controller' => 'App\\Controller\\AdminController::deleteCategory'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deleteCategory']], [], [], []],
    'subCategory' => [[], ['_controller' => 'App\\Controller\\AdminController::subCategory'], [], [['text', '/subCategory']], [], [], []],
    'editSubCategory' => [['id'], ['id' => null, '_controller' => 'App\\Controller\\AdminController::subCategory'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/editSubCategory']], [], [], []],
    'deleteSubCategory' => [['id'], ['_controller' => 'App\\Controller\\AdminController::deleteSubCategory'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deleteSubCategory']], [], [], []],
    'listOrder' => [[], ['_controller' => 'App\\Controller\\AdminController::listOrder'], [], [['text', '/listOrder']], [], [], []],
    'detailOrder' => [['id'], ['_controller' => 'App\\Controller\\AdminController::detailOrder'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/detailOrder']], [], [], []],
    'listPromo' => [[], ['_controller' => 'App\\Controller\\AdminController::listPromo'], [], [['text', '/listPromo']], [], [], []],
    'addPromo' => [['param'], ['_controller' => 'App\\Controller\\AdminController::addPromo'], [], [['variable', '/', '[^/]++', 'param', true], ['text', '/addPromo']], [], [], []],
    'editPromo' => [['id', 'param'], ['_controller' => 'App\\Controller\\AdminController::editPromo'], [], [['variable', '/', '[^/]++', 'param', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/editPromo']], [], [], []],
    'app_admin_editpromo' => [[], ['_controller' => 'App\\Controller\\AdminController::editPromo'], [], [['text', '/editParam']], [], [], []],
    'deletePromo' => [['id'], ['_controller' => 'App\\Controller\\AdminController::deletePromo'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deletePromo']], [], [], []],
    'stock' => [['id'], ['_controller' => 'App\\Controller\\AdminController::stock'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/stock']], [], [], []],
    'listStock' => [[], ['_controller' => 'App\\Controller\\AdminController::listStock'], [], [['text', '/listStock']], [], [], []],
    'searchRef' => [[], ['_controller' => 'App\\Controller\\AdminController::searchRef'], [], [['text', '/searchRef']], [], [], []],
    'listSuppliers' => [[], ['_controller' => 'App\\Controller\\AdminController::addSuppliers'], [], [['text', '/listSuppliers']], [], [], []],
    'editSuppliers' => [['id'], ['id' => null, '_controller' => 'App\\Controller\\AdminController::addSuppliers'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/editSuppliers']], [], [], []],
    'deleteSuppliers' => [['id'], ['_controller' => 'App\\Controller\\AdminController::deleteSuppliers'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deleteSuppliers']], [], [], []],
    'listSize' => [[], ['_controller' => 'App\\Controller\\AdminController::listSize'], [], [['text', '/listSize']], [], [], []],
    'editSize' => [['id'], ['id' => null, '_controller' => 'App\\Controller\\AdminController::listSize'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/editSize']], [], [], []],
    'deleteSize' => [['id'], ['_controller' => 'App\\Controller\\AdminController::deleteSize'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deleteSize']], [], [], []],
    'color' => [[], ['_controller' => 'App\\Controller\\AdminController::color'], [], [['text', '/color']], [], [], []],
    'editColor' => [['id'], ['id' => null, '_controller' => 'App\\Controller\\AdminController::color'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/editColor']], [], [], []],
    'deleteColor' => [['id'], ['_controller' => 'App\\Controller\\AdminController::deleteColor'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deleteColor']], [], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::home'], [], [['text', '/']], [], [], []],
    'emailForm' => [[], ['_controller' => 'App\\Controller\\HomeController::emailForm'], [], [['text', '/emailForm']], [], [], []],
    'emailSend' => [[], ['_controller' => 'App\\Controller\\HomeController::emailSend'], [], [['text', '/emailSend']], [], [], []],
    'addCart' => [['id', 'param'], ['_controller' => 'App\\Controller\\HomeController::addCart'], [], [['variable', '/', '[^/]++', 'param', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/addCart']], [], [], []],
    'cart' => [[], ['_controller' => 'App\\Controller\\HomeController::cart'], [], [['text', '/cart']], [], [], []],
    'removeCart' => [['id'], ['_controller' => 'App\\Controller\\HomeController::removeCart'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/removeCart']], [], [], []],
    'deleteCart' => [['id'], ['_controller' => 'App\\Controller\\HomeController::deleteCart'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deleteCart']], [], [], []],
    'destroyCart' => [[], ['_controller' => 'App\\Controller\\HomeController::destroyCart'], [], [['text', '/destroyCart']], [], [], []],
    'filterProduct' => [['param'], ['param' => null, '_controller' => 'App\\Controller\\HomeController::filterProduct'], [], [['variable', '/', '[^/]++', 'param', true], ['text', '/filterProduct']], [], [], []],
    'filterValidate' => [[], ['_controller' => 'App\\Controller\\HomeController::filterProduct'], [], [['text', '/filterValidate']], [], [], []],
    'verifPromo' => [[], ['_controller' => 'App\\Controller\\HomeController::verifPromo'], [], [['text', '/verifPromo']], [], [], []],
    'detailProduct' => [['id', 'size', 'color'], ['size' => null, 'color' => null, '_controller' => 'App\\Controller\\HomeController::detailProduct'], [], [['variable', '/', '[^/]++', 'color', true], ['variable', '/', '[^/]++', 'size', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/detailProduct']], [], [], []],
    'detailProducta' => [['id', 'color', 'size'], ['size' => null, 'color' => null, '_controller' => 'App\\Controller\\HomeController::detailProduct'], [], [['variable', '/', '[^/]++', 'size', true], ['variable', '/', '[^/]++', 'color', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/detailProducta']], [], [], []],
    'addTempColor' => [['id', 'color', 'size'], ['size' => null, '_controller' => 'App\\Controller\\HomeController::addTempColor'], [], [['variable', '/', '[^/]++', 'size', true], ['variable', '/', '[^/]++', 'color', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/addTempColor']], [], [], []],
    'addTempSize' => [['id', 'size', 'color'], ['color' => null, '_controller' => 'App\\Controller\\HomeController::addTempSize'], [], [['variable', '/', '[^/]++', 'color', true], ['variable', '/', '[^/]++', 'size', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/addTempSize']], [], [], []],
    'addTempToCart' => [['id'], ['_controller' => 'App\\Controller\\HomeController::addTempToCart'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/addTempToCart']], [], [], []],
    'order' => [[], ['_controller' => 'App\\Controller\\HomeController::order'], [], [['text', '/order']], [], [], []],
    'profil' => [[], ['_controller' => 'App\\Controller\\HomeController::profil'], [], [['text', '/profil']], [], [], []],
    'register' => [[], ['_controller' => 'App\\Controller\\SecurityController::register'], [], [['text', '/register']], [], [], []],
    'modifProfil' => [[], ['_controller' => 'App\\Controller\\SecurityController::modifProfil'], [], [['text', '/modifProfil']], [], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'resetForm' => [[], ['_controller' => 'App\\Controller\\SecurityController::resetForm'], [], [['text', '/resetForm']], [], [], []],
    'resetToken' => [[], ['_controller' => 'App\\Controller\\SecurityController::resetForm'], [], [['text', '/resetToken']], [], [], []],
    'resetPassword' => [['token', 'id'], ['token' => null, 'id' => null, '_controller' => 'App\\Controller\\SecurityController::resetPassword'], [], [['variable', '/', '[^/]++', 'id', true], ['variable', '/', '[^/]++', 'token', true], ['text', '/resetPassword']], [], [], []],
    'finalReset' => [[], ['_controller' => 'App\\Controller\\SecurityController::resetPassword'], [], [['text', '/finalReset']], [], [], []],
    'modifPassword' => [[], ['_controller' => 'App\\Controller\\SecurityController::modifPassword'], [], [['text', '/modifPassword']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
];
