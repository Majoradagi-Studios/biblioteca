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

    public function detalleLibro(){
        $datos['header'] = view('site/template/header');
        $datos['footer'] = view('site/template/footer');
        return view('detalleLibro', $datos);
    }

    public function admin()
    {
        $datos['header'] = view('admin/template/header');
        $datos['sidebar'] = view('admin/template/sidebar');
        $datos['footer'] = view('admin/template/footer');

        return view('admin/panel',$datos);
    }

    


    //ADMINISTRADOR --> USUARIOS
    public function adminlistarusuario()
    {
        $datos['header'] = view('admin/template/header');
        $datos['sidebar'] = view('admin/template/sidebar');
        $datos['footer'] = view('admin/template/footer');

        return view('admin/usuario/listar', $datos);
    }

    public function admineditarusuario()
    {
        $datos['header'] = view('admin/templates/header');
        $datos['footer'] = view('admin/templates/footer');

        return view('admin/usuario/edit', $datos);
    }

}
