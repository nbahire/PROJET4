<?php

namespace Nbahire\Controllers;

use Nbahire\Core\UsersModel;

class UsersController extends Controller
{
    public function login()
    {
        $this->render('users/login');
    }
}
