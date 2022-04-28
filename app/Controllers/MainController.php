<?php

namespace App\Controllers;


class MainController extends CoreController
{
       // action home
    public function home($params = [])
    {
        $this->show('home');
    }
}