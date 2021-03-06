<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Ejemplares;
use App\Models\Libros;

class EjemplarController extends Controller{

    public function adminlistarejemplar()
    {
        $ejemplar = new Ejemplares();
        $libros = new Libros();

        $datos['libros'] = $libros;
        $datos['ejemplares'] = $ejemplar->orderBy('ejemplar','ASC')->findAll();

        $datos['header'] = view('admin/template/header');
        $datos['sidebar'] = view('admin/template/sidebar');
        $datos['footer'] = view('admin/template/footer');

        return view('admin/ejemplar/listar', $datos);
    }

    public function admincrearejemplar()
    {
        helper(['form']);
        $libros = new Libros();

        $datos['libros'] = $libros->orderBy('idLibro','ASC')->findAll();

        $datos['header'] = view('admin/template/header');
        $datos['sidebar'] = view('admin/template/sidebar');
        $datos['footer'] = view('admin/template/footer');

        return view('admin/ejemplar/create', $datos);
    }

    public function adminguardarejemplar()
    {
        helper(['form']);
        $rules = [
            'ejemplar'      => 'required|integer|min_length[1]|max_length[3]',
        ];

        if($this->validate($rules)){

        $ejemplar = new Ejemplares();

            $datos = [
                'ejemplar'=>$this->request->getVar('ejemplar'),
                'estado'=> 'Disponible',
                'idLibro'=>$this->request->getVar('idLibro'),
            ];
            $ejemplar->insert($datos);
            return $this->response->redirect(base_url('/admin/ejemplar/listar'));

        }else{
            $libros = new Libros();
    
            $datos['libros'] = $libros->orderBy('idLibro','ASC')->findAll();
            $datos['validation'] = $this->validator;

            $datos['header'] = view('admin/template/header');
            $datos['sidebar'] = view('admin/template/sidebar');
            $datos['footer'] = view('admin/template/footer');
            return view('admin/ejemplar/create', $datos);
        }

    }

    public function adminborrarejemplar($idEjemplar)
    {
        $ejemplar = new Ejemplares();
        $datos=$ejemplar->where('idEjemplar', $idEjemplar)->first();
        $ejemplar->where('idEjemplar',$idEjemplar)->delete($idEjemplar);
        return $this->response->redirect(base_url('/admin/ejemplar/listar'));
    }

    public function admineditarejemplar($idEjemplar)
    {
        $ejemplar = new Ejemplares();
        $datos['ejemplar']=$ejemplar->where('idEjemplar', $idEjemplar)->first();
        $datos['header'] = view('admin/templates/header_edit');
        $datos['footer'] = view('admin/templates/footer_edit');

        return view('admin/ejemplar/edit', $datos);
    }

    public function adminactualizarejemplar()
    {
        $ejemplar = new Ejemplares();
        $datos = [
            'ejemplar'=>$this->request->getVar('ejemplar'),
            'estado'  =>$this->request->getVar('estado'),
            'idLibro' =>$this->request->getVar('idLibro')
        ];
        $idEjemplar = $this->request->getVar('idEjemplar');
        $ejemplar->update($idEjemplar, $datos);
        return $this->response->redirect(base_url('/admin/ejemplar/listar'));
    }

}