<?php

namespace Nbahire\Controllers;

class MainController extends Controller
{
    public function index()
    {
        $this->render('main/index', [], 'home');
    }
}
