<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newController extends Controller
{
    public function welcome()
    {
        return view("welcome");
    }
    public function main()
    {
        return view("user.home");
    }
}