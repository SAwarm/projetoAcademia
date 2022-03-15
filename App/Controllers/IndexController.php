<?php

namespace App\Controllers;

//* recurses

use App\Controllers\Auth\Logged;
use App\Controllers\RulesView\RulesViewController;
use MF\Model\Container;
use MF\Controller\Action;

class indexController extends Action
{
    public function index()
    {
        RulesViewController::getTitle($this, 'Login - Jr Fitness System');

        Logged::validatedLogged();

        $this->render('index');
    }
}
