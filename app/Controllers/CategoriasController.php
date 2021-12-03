<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Categorias;
class CategoriasController extends Controller{

    public function index()
    {
        $categoria =  new Categorias();
        $datos['categorias']= $categoria->orderBy('idCategoria', 'ASC')->findAll();

        return view('/admin/categoria/listar',$datos);
    }

    public function adminlistarcategoria()
    {
        return view('admin/categoria/listar');
    }

    public function admincrearcategoria()
    {
        return view('admin/categoria/create');
    }

    public function guardar(){

     return redirect()->to('/admin/categoria/listar');
         echo view('categoria/create', $datos); 
    }
}