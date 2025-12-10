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
$routes->get('industries/technology', 'Industries::technology');
$routes->get('industries/travel-tourism', 'Industries::travelTourism');
$routes->get('industries/automotive-mobility', 'Industries::automotiveMobility');
$routes->get('process-automation', 'Home::processAutomation');
$routes->get('security', 'Home::security');
$routes->get('about', 'Home::about');
$routes->get('careers', 'Home::career');
$routes->get('press', 'Home::press');
$routes->get('our-work', 'Home::ourWork');
$routes->get('why-startout-ai', 'Home::whyStartoutAI');
$routes->get('resources', 'Home::resources');
