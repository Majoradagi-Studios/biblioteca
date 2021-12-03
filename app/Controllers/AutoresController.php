<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Autor;

class  AutoresController extends Controller{
    public function listarAutor(){
        $autor = new Autor();
        $datos['autores']=$autor->orderBy('idAutor','ASC')->findAll();

        $datos['header'] = view('admin/templates/header');
        $datos['footer'] = view('admin/templates/footer');
        return view('admin/autor/listar',$datos);
    }
    
    public function crearAutor(){
        //$autor = new Autor();
        //$datos['autores']=$autor->orderBy('idAutor','ASC')->findAll();

        $datos['header'] = view('admin/templates/header');
        $datos['footer'] = view('admin/templates/footer');
        return view('admin/autor/create',$datos);
    }

    public function guardar(){
        return view('/admin/autor/listar');
    }
}