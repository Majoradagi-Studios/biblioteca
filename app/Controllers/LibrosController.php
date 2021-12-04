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
        
        $datos['libros'] = $libros->orderBy('idLibro','ASC')->findAll();
        
        //Falta por saber como poner nombres en vez de id en las FK
        $autores = new Autor();
        $editoriales = new Editorial();
        $categorias = new Categorias();
        //echo $autores->where('idAutor',$libros['idAutor'])->first();
        $datos['autores'] = $autores->orderBy('idAutor', 'ASC')->findAll();
        $datos['editoriales'] = $editoriales->orderBy('idEditorial', 'ASC')->findAll();
        $datos['categorias'] = $categorias->orderBy('idCategoria', 'ASC')->findAll();
        //---------------------------------------------------------

        $datos['header'] = view('admin/template/header');
        $datos['sidebar'] = view('admin/template/sidebar');
        $datos['footer'] = view('admin/template/footer');
        
        return view('admin/libro/listar', $datos);
    }

    public function admincrearlibro()
    {
        $autores = new Autor();
        $editoriales = new Editorial();
        $categorias = new Categorias();

        $datos['autores'] = $autores->orderBy('idAutor', 'ASC')->findAll();
        $datos['editoriales'] = $editoriales->orderBy('idEditorial', 'ASC')->findAll();
        $datos['categorias'] = $categorias->orderBy('idCategoria', 'ASC')->findAll();

        $datos['header'] = view('admin/template/header');
        $datos['sidebar'] = view('admin/template/sidebar');
        $datos['footer'] = view('admin/template/footer');

        return view('admin/libro/create', $datos);
    }

    public function adminguardarlibro()
    {
        $libros = new Libros();

        if($imagen=$this->request->getFile('imagen')){
            $nuevoTitulo = $imagen->getRandomName();
            $imagen->move('../public/uploads/',$nuevoTitulo);

            $datos=[
                'titulo'=>$this->request->getVar('titulo'),
                'lugarEd'=>$this->request->getVar('lugarEd'),
                'anioPub'=>$this->request->getVar('anioPub'),
                'numPaginas'=>$this->request->getVar('numPaginas'),
                'numEdicion'=>$this->request->getVar('numEdicion'),
                'idAutor'=>$this->request->getVar('idAutor'),
                'idEditorial'=>$this->request->getVar('idEditorial'),
                'idCategoria'=>$this->request->getVar('idCategoria'),
                'imagen'=>$nuevoTitulo
            ];
            $libros->insert($datos);
            return $this->response->redirect(base_url('admin/libro/listar'));
        }else{
            return $this->response->redirect(base_url('admin/libro/listar'));
        }

    }

    public function adminborrarlibro($idLibro)
    {
        $libro = new Libros();

        $datos=$libro->where('idLibro', $idLibro)->first();
        $ruta=('../public/uploads/'.$datos['imagen']);
        unlink($ruta);

        $libro->where('idLibro',$idLibro)->delete($idLibro);
        return $this->response->redirect(base_url('admin/libro/listar'));

    }

    public function admineditarlibro($idLibro)
    {   
        $libro = new Libros();

        $autores = new Autor();
        $editoriales = new Editorial();
        $categorias = new Categorias();

        $datos['libro'] = $libro->where('idLibro',$idLibro)->first();

        $datos['autores'] = $autores->orderBy('idAutor', 'ASC')->findAll();
        $datos['editoriales'] = $editoriales->orderBy('idEditorial', 'ASC')->findAll();
        $datos['categorias'] = $categorias->orderBy('idCategoria', 'ASC')->findAll();

        $datos['header'] = view('admin/templates/header_edit');
        //$datos['sidebar'] = view('admin/templates/sidebar');
        $datos['footer'] = view('admin/templates/footer_edit');
        
        return view('admin/libro/edit', $datos);
    }

    public function adminactualizarlibro()
    {
        $libros = new Libros();

        if($imagen=$this->request->getFile('imagen')){
            $nuevoTitulo = $imagen->getRandomName();
            $imagen->move('../public/uploads/',$nuevoTitulo);

            $datos=[
                'titulo'=>$this->request->getVar('titulo'),
                'lugarEd'=>$this->request->getVar('lugarEd'),
                'anioPub'=>$this->request->getVar('anioPub'),
                'numPaginas'=>$this->request->getVar('numPaginas'),
                'numEdicion'=>$this->request->getVar('numEdicion'),
                'idAutor'=>$this->request->getVar('idAutor'),
                'idEditorial'=>$this->request->getVar('idEditorial'),
                'idCategoria'=>$this->request->getVar('idCategoria'),
                'imagen'=>$nuevoTitulo
            ];
            $idLibro = $this->request->getVar('idLibro');
            $libros->update($idLibro, $datos);
            return $this->response->redirect(base_url('admin/libro/listar'));
        }else{
            return $this->response->redirect(base_url('admin/libro/edit'));
        }

    }
}
