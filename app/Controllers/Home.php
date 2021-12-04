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
        $datos['header'] = view('admin/template/header');
        $datos['sidebar'] = view('admin/template/sidebar');
        $datos['footer'] = view('admin/template/footer');

        return view('admin/panel',$datos);
    }

    //ADMINISTRADOR --> EJEMPLAR
    public function adminlistarejemplar()
    {
        return view('admin/ejemplar/listar');
    }

    public function admincrearejemplar()
    {
        return view('admin/ejemplar/create');
    }

    public function admineditarejemplar()
    {
        return view('admin/ejemplar/edit');
    }


    //ADMINISTRADOR --> USUARIOS
    public function adminlistarusuario()
    {
        $datos['header'] = view('admin/template/header');
        $datos['sidebar'] = view('admin/template/sidebar');
        $datos['footer'] = view('admin/template/footer');

        return view('admin/usuario/listar', $datos);
    }

}
