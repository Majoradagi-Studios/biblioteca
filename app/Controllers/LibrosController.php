<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Libros;
use App\Models\Autor;
use App\Models\Editorial;
use App\Models\Categorias;

class LibrosController extends Controller{

    public function catalogo()
    {
        //$session = session();
        // echo "Hello : ".$session->get('nombre');
        echo "Cargando...";
        return view('catalogo');
    }

    public function adminlistarlibro() 
    {
        $libros = new Libros();
        $autores = new Autor();
        $editoriales = new Editorial();
        $categorias = new Categorias();
        
        $datos['libros'] = $libros->orderBy('idLibro','ASC')->findAll();
        
        $datos['autores'] = $autores->orderBy('idAutor', 'ASC')->findAll();
        $datos['editoriales'] = $editoriales->orderBy('idEditorial', 'ASC')->findAll();
        $datos['categorias'] = $categorias->orderBy('idCategoria', 'ASC')->findAll();
        
        return view('admin/ejemplolibro/listar', $datos);
    }

    public function admincrearlibro()
    {
        $autores = new Autor();
        $editoriales = new Editorial();
        $categorias = new Categorias();

        $datos['autores'] = $autores->orderBy('idAutor', 'ASC')->findAll();
        $datos['editoriales'] = $editoriales->orderBy('idEditorial', 'ASC')->findAll();
        $datos['categorias'] = $categorias->orderBy('idCategoria', 'ASC')->findAll();

        return view('admin/ejemplolibro/create', $datos);
    }

    public function adminguardarlibro()
    {
        $libros = new Libros();
        $datos=[
            'titulo'=>$this->request->getVar('titulo'),
            'lugarEd'=>$this->request->getVar('lugarEd'),
            'anioPub'=>$this->request->getVar('anioPub'),
            'numPaginas'=>$this->request->getVar('numPaginas'),
            'numEdicion'=>$this->request->getVar('numEdicion'),
            'idAutor'=>$this->request->getVar('idAutor'),
            'idEditorial'=>$this->request->getVar('idEditorial'),
            'idCategoria'=>$this->request->getVar('idCategoria'),
            'imagen'=>$this->request->getVar('imagen')
        ];
        $libros->insert($datos);
        return $this->response->redirect(base_url('admin/libro/listar'));
    }

    public function admineditarlibro()
    {
        return view('admin/ejemplolibro/edit');
    }
}