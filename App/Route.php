<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap {

    protected function initRoutes()
    {
        $routes['home'] = array(
            'route'         =>  '/',
            'controller'    =>  'IndexController',
            'action'        =>  'index'
        );

        $routes['login'] = array(
            'route'         =>  '/login',
            'controller'    =>  'LoginController',
            'action'        =>  'login'
        );

        $routes['register'] = array(
            'route'         =>  '/register',
            'controller'    =>  'RegisterController',
            'action'        =>  'register'
        );

        $this->setRoutes($routes);
    }
}