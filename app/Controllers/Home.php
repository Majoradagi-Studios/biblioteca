<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('inicio');
    }

    public function admin()
    {
        return view('admin/panel');
    }
}
