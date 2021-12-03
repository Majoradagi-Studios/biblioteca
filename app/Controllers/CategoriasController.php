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
        $categoria =  new Categorias();
        $datos['categorias']= $categoria->orderBy('idCategoria', 'ASC')->findAll();

        return view('/admin/categoria/listar',$datos);
    }

    public function admincrearcategoria()
    {

        return view('admin/categoria/create');
    }

    public function guardar(){

        $categoria = new categorias();

        $datos = [
            'codigoD'=>$this->request->getVar('codigoD'),
            'nombreC'=>$this->request->getVar('nombreC'),
            'descripcion'=>$this->request->getVar('descripcion')
        ];

        $categoria->save($datos);

        return redirect()->to('admin/categoria/listar');
 
    
    }
}