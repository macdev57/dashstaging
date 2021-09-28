<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
        return view('Dashboards.users.index');
    }

    function profile(){
        return view('Dashboards.users.profile');
    }
    function settings(){
        return view('Dashboards.users.settings');
    }
}