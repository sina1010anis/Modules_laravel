<?php

namespace Mod\SDK\User\Http\Controllers;

use Illuminate\Routing\Controller;

class ModUserController extends Controller
{
    public function index ()
    {
        return view('User::mod_user');
    }
}
