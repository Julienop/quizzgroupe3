<?php

namespace App\Controller;

use App\Utils\Tools;
use App\View\ViewAccueil;
use App\View\ViewHeader;
use App\View\ViewFooter;


class HomeController
{
    public function __construct() {}
    public function home()
    {
        Tools::renderView('ViewHeader.php');
        Tools::renderView('ViewAccueil.php');
        Tools::renderView('ViewFooter.php');
    }
    public function test($message)
    {
        Tools::JsonResponse(["Message" => $message], 200);
    }
}

