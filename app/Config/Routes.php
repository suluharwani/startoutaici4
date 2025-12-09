<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('services/data-annotation', 'Services::dataanotation');
$routes->get('services/trust-safety', 'Services::trustsafety');
$routes->get('services/content-moderation', 'Services::contentModeration');
$routes->get('services/customer-support', 'Services::customersupport');
$routes->get('services/talent-solution', 'Services::talentsolution');
$routes->get('services/social-media', 'Services::socialMedia');
$routes->get('industries/gaming-entertainment', 'Industries::gamingEntertainment');
$routes->get('industries/fintech-banking', 'Industries::fintechBanking');
$routes->get('industries/ecommerce-retail', 'Industries::ecommerceRetail');
