<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Ejemplares;
use App\Models\Libros;

class EjemploController extends Controller{

    public function adminlistarejemplo()
    {
        $ejemplar = new Ejemplares();

        $datos['ejemplares'] = $ejemplar->orderBy('idEjemplar','ASC')->findAll();
        return view('/admin/ejemploejemplar/listar', $datos);
    }

    public function admincrearejemplo()
    {
        $libros = new Libros();
        $datos['libros'] = $libros->orderBy('idLibro','ASC')->findAll();
        return view('/admin/ejemploejemplar/create', $datos);
    }

    public function adminguardarejemplo()
    {
        $ejemplar = new Ejemplares();
        $datos = [
            'ejemplar'=>$this->request->getVar('ejemplar'),
            'estado'=> 'Disponible',
            'idLibro'=>$this->request->getVar('idLibro'),
        ];
        $ejemplar->insert($datos);
        return $this->response->redirect(base_url('/admin/ejemploejemplar/listar'));
    }

    public function adminborrarejemplo($idEjemplo)
    {
        $ejemplar = new Ejemplares();
        $datos=$ejemplar->where('idEjemplar', $idEjemplo)->first();
        $ejemplar->where('idEjemplar',$idEjemplo)->delete($idEjemplo);
        return $this->response->redirect(base_url('/admin/ejemploejemplar/listar'));
    }

    public function admineditarejemplo($idEjemplo)
    {
        $ejemplar = new Ejemplares();
        $datos['ejemplar']=$ejemplar->where('idEjemplar', $idEjemplo)->first();
        return view('/admin/ejemploejemplar/edit', $datos);
    }

    public function adminactualizarejemplo()
    {
        $ejemplar = new Ejemplares();
        $datos = [
            'ejemplar'=>$this->request->getVar('ejemplar'),
            'estado'=> $this->request->getVar('estado'),
            'idLibro'=>$this->request->getVar('idLibro'),
        ];
        $idEjemplar = $this->request->getVar('idEjemplar');
        $ejemplar->update($idEjemplar, $datos);
        return $this->response->redirect(base_url('/admin/ejemploejemplar/listar'));
    }

}