<?php

namespace Config;


// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
// $routes->get('/welcome/index', 'Welcome::index');
$routes->get('/welcome', 'Welcome');
$routes->get('/welcome/test', 'Welcome::test');
$routes->get('/welcome/shop', 'Welcome::shop');
$routes->get('/welcome/admincheck', 'Welcome::admincheck');
//$routes->get('/admin', 'Welcome::index');
//$routes->get('/admin/shop', 'Welcome::shop');
$routes->get("welcome/test/(:any)", "Welcome::test/$1");
$routes->get('/home/validation', 'Home::validation');

$routes->group('admin', function ($routes){
    $routes->add('welcome','admin\Welcome::index');
    $routes->add('shop','admin\Welcome::shop');
    $routes->add('test/(:any)','admin\Welcome::test/$1');

    //BLOG ROUTES
    $routes->add('blog','admin\Blog::index');
    $routes->get('blogform','admin\Blog::blogform');
    $routes->post('blogform','admin\Blog::saveblogform');
    $routes->add('bloglist/(:any)','admin\Blog::bloglist/$1');
});

//blog outside admin
$routes->add('blog','Blog::index');
$routes->add('blog/post','Blog::post');




/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
