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

    //ADMINISTRADOR --> CATEGORIAS
    public function adminlistarcategoria()
    {
        return view('admin/categoria/listar');
    }

    public function admincrearcategoria()
    {
        return view('admin/categoria/create');
    }

    public function admineditarcategoria()
    {
        return view('admin/categoria/edit');
    }

    //ADMINISTRADOR --> AUTOR
    public function adminlistarautor()
    {
        return view('admin/autor/listar');
    }

    public function admincrearautor()
    {
        return view('admin/autor/create');
    }

    public function admineditarautor()
    {
        return view('admin/autor/edit');
    }

    //ADMINISTRADOR --> EDITORIAL
    public function adminlistareditorial()
    {
        return view('admin/editorial/listar');
    }

    public function admincreareditorial()
    {
        return view('admin/editorial/create');
    }

    public function admineditareditorial()
    {
        return view('admin/editorial/edit');
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

    //ADMINISTRADOR --> LIBRO
    public function adminlistarlibro()
    {
        return view('admin/libro/listar');
    }

    public function admincrearlibro()
    {
        return view('admin/libro/create');
    }

    public function admineditarlibro()
    {
        return view('admin/libro/edit');
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
