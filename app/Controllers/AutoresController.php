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
        return $this->response->redirect(site_url('/admin/autor/listar'));
    }

    public function eliminarAutor($id=null){
        
        // $autor = new Autor();
        //$datosAutor = $autor->where('idAutor',$id)->first();

        $autor->where('idAutor',$id)->delete($id);
        
        return $this->response->redirect(site_url('/admin/autor/listar'));
    }

    public function editarAutor($id=null){
        // $autor = new Autor();

        // print_r($id);
        $autor = new Autor();
        $datos['autor']=$autor->where('idAutor',$id)->first();
        $datos['header'] = view('admin/templates/header_edit');
        $datos['footer'] = view('admin/templates/footer_edit');
        
        
        return view('admin/autor/edit',$datos);
        // return view('admin/autor/edit',$datos);
        // $autor->where('idAutor',$id)->update($id);
    }

    public function actualizarAutor(){
        $autor = new Autor();
        $datos=[
            'nombreA'=>$this->request->getVar('nombreA'),
            'apellidoA'=>$this->request->getVar('apellidoA')  
        ];
        $id = $this->request->getVar('idAutor');
        $autor->update($id,$datos);
    }

}