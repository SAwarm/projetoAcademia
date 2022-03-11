<?php

namespace App\Controllers;

//* recurses
use App\Controllers\RulesView\RulesViewController;
use MF\Model\Container;
use MF\Controller\Action;

class indexController extends Action
{
    public function index()
    {
        RulesViewController::getTitle($this, 'Login - Jr Fitness System');

        $this->render('index');
    }
}
