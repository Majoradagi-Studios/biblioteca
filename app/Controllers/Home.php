<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return $this->response->redirect(base_url('/catalogo'));
    }

    public function admin()
    {
        $datos['header'] = view('admin/templates/header_panel');
        $datos['footer'] = view('admin/templates/footer_panel');

        return view('admin/panel',$datos);
    }
}
