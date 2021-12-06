<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $datos['header'] = view('site/template/header');
        $datos['footer'] = view('site/template/footer');
        return view('inicio', $datos);
    }

    public function admin()
    {
        $datos['header'] = view('admin/templates/header_panel');
        $datos['footer'] = view('admin/templates/footer_panel');

        return view('admin/panel',$datos);
    }
}
