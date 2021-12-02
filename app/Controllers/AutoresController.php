<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Autor;

class  AutoresController extends Controller{
    public function index(){
        //$sesion = session();
        $autor = new Autor();
        $datos['autores']=$autor->orderBy('idAutor','ASC')->findAll();
        return view('Autores/listar',$datos);
        }
}