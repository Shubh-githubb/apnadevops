<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/get_questions',"Home::getQuizQuestions");
$routes->get('/createTests',"Home::createTests");
$routes->get('/insertOptions',"Home::insert_option");