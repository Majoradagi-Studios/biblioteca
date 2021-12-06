<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Categorias;
class CategoriasController extends Controller{

    public function index()
    {
        $categoria =  new Categorias();
        $datos['categorias']= $categoria->orderBy('idCategoria', 'ASC')->findAll();
        $datos['header'] = view('admin/template/header');
        $datos['sidebar'] = view('admin/template/sidebar');
        $datos['footer'] = view('admin/template/footer');

        return view('/admin/categoria/listar',$datos);
    }

    public function adminlistarcategoria()
    {
        $categoria =  new Categorias();
        $datos['categorias']= $categoria->orderBy('idCategoria', 'ASC')->findAll();
        $datos['header'] = view('admin/template/header');
        $datos['sidebar'] = view('admin/template/sidebar');
        $datos['footer'] = view('admin/template/footer');

        return view('/admin/categoria/listar',$datos);
    }

    public function admincrearcategoria()
    {
        $datos['header'] = view('admin/template/header');
        $datos['sidebar'] = view('admin/template/sidebar');
        $datos['footer'] = view('admin/template/footer');

        return view('admin/categoria/create', $datos);
    }

    public function guardar(){

        $categoria = new categorias();

        $validacion = $this->validate([
            'codigoD'=>'required|min_length[4]',
            'nombreC'=>'required|min_length[6]',
            'descripcion'=>'required|min_length[6]',
        ]);
        if($validacion){
            $sessions = session();
            $sessions->setFlashData('mensaje', 'Faltan datos por agregar');

            return redirect()->back()->withInput();
            //return $this->response->redirect(site_url('/admin/categoria/listar'));
        }

        $datos = [
            'codigoD'=>$this->request->getVar('codigoD'),
            'nombreC'=>$this->request->getVar('nombreC'),
            'descripcion'=>$this->request->getVar('descripcion')
        ];

        $categoria->save($datos);

        return redirect()->to('admin/categoria/listar');
    }

    public function editar($idCategoria){
        $categoria = new categorias();
        $datos ['categoria'] =$categoria->where('idCategoria', $idCategoria)->first();


        return view('/admin/categoria/edit', $datos);
    }

    public function actualizar(){
        $categoria = new categorias();
        $datos = [
            'codigoD'=>$this->request->getVar('codigoD'),
            'nombreC'=>$this->request->getVar('nombreC'),
            'descripcion'=>$this->request->getVar('descripcion')
        ];

        $idCategoria = $this->request->getVar('idCategoria');

        $validacion = $this->validate([
            'codigoD'=>'required|min_length[4]',
            'nombreC'=>'required|min_length[6]',
            'descripcion'=>'required|min_length[6]',
        ]);
        if($validacion){
            $sessions = session();
            $sessions->setFlashData('mensaje', 'Faltan datos por agregar');

            return redirect()->back()->withInput();
            //return $this->response->redirect(site_url('/admin/categoria/listar'));
        }

        $categoria->update($idCategoria, $datos);

        return $this->response->redirect(site_url('/admin/categoria/listar'));
    }

    public function borrar($idCategoria=null){
        $categoria = new categorias();
        $datosCategoria = $categoria->where('idCategoria',$idCategoria)->first();
        
        $categoria->where('idCategoria',$idCategoria)->delete($idCategoria);

        return $this->response->redirect(site_url('/admin/categoria/listar'));
    }

}