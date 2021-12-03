<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Categoria;
class CategoriasController extends Controller{

    public function index()
    {
        $categoria =  new Categoria();
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