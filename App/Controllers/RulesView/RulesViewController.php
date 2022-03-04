<?php

namespace App\Controllers\RulesView;

//* recurses
use MF\Controller\Action;

class RulesViewController extends Action
{
    public static function getTitle($object, $title)
    {
        return $object->view->title = $title;
    }
}
