<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function home()
    {
        return view("layout/master");
    }

    public function article()
    {
        return view("article0020");
    }

    public function contact()
    {
        return view("contact");
    }
}