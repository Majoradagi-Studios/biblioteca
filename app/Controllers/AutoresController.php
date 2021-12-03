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

    public function guardarAutor(){  
        $autor = new Autor();
        $datos=[
            'nombreA'=>$this->request->getVar('nombreA'),
            'apellidoA'=>$this->request->getVar('apellidoA')  
        ];
        $autor->insert($datos);
    }

    public function eliminarAutor($id=null){
        
        $autor = new Autor();
        //$datosAutor = $autor->where('idAutor',$id)->first();

        $autor->where('idAutor',$id)->delete($id);
        
        return $this->response->redirect(site_url('/admin/autor/listar'));
    }
}