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

    ////ADMINISTRADOR --> EDITORIAL
    //public function adminlistareditorial()
    //{
    //    return view('admin/editorial/listar');
    //}
//
    //public function admincreareditorial()
    //{
    //    return view('admin/editorial/create');
    //}
//
    //public function admineditareditorial()
    //{
    //    return view('admin/editorial/edit');
    //}

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

}
