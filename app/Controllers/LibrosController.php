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
        $libros = new Libros();
        $categorias = new Categorias();
        $autores = new Autor();
        
        $datos['autores'] = $autores;
        $datos['libros'] = $libros->orderBy('idLibro','ASC')->findAll();
        $datos['categorias'] = $categorias->orderBy('idCategoria', 'ASC')->findAll();
        echo "Cargando...";
        return view('catalogo', $datos);
    }

    public function busqueda($idCategoria)
    {
        $libros = new Libros();
        $categorias = new Categorias();
        $autores = new Autor();

        $datos['libros'] = $libros->where('idCategoria', $idCategoria)->findAll();
        $datos['categoria'] = $categorias->where('idCategoria', $idCategoria)->first();
        $datos['autores'] = $autores;
        
        $datos['header'] = view('site/template/header');
        $datos['footer'] = view('site/template/footer');
        echo "Cargando...";
        return view('busqueda', $datos);
    }

    public function detalleLibro($idLibro)
    {
        $libro = new Libros();
        $autores = new Autor();
        $editoriales = new Editorial();
        $categorias = new Categorias();

        $datos['autores'] = $autores;
        $datos['editoriales'] = $editoriales;
        $datos['categorias'] = $categorias;
        $datos['libro'] = $libro->where('idLibro', $idLibro)->first();
        $datos['header'] = view('site/template/header');
        $datos['footer'] = view('site/template/footer');

        return view('detalleLibro', $datos);
    }

    public function adminlistarlibro() 
    {
        $libros = new Libros();
        $autores = new Autor();
        $editoriales = new Editorial();
        $categorias = new Categorias();
        
        $datos['libros'] = $libros->orderBy('idLibro','ASC')->findAll();
        
    
        $datos['autores'] = $autores;
        $datos['editoriales'] = $editoriales;
        $datos['categorias'] = $categorias;

        $datos['header'] = view('admin/template/header');
        $datos['sidebar'] = view('admin/template/sidebar');
        $datos['footer'] = view('admin/template/footer');
        
        return view('admin/libro/listar', $datos);
    }

    public function admincrearlibro()
    {
        helper(['form']);

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
        helper(['form']);
        $rules = [
            'titulo'      => 'required|min_length[4]|max_length[50]',
            'lugarEd'     => 'required|min_length[5]|max_length[50]',
            'anioPub'     => 'required|integer|min_length[4]|max_length[4]',
            'numPaginas'  => 'required|integer|min_length[1]|max_length[11]',
            'numEdicion'  => 'required|integer|min_length[1]|max_length[11]',
        ];

        if($this->validate($rules)){
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

        }else{
            $autores = new Autor();
            $editoriales = new Editorial();
            $categorias = new Categorias();
    
            $datos['autores'] = $autores->orderBy('idAutor', 'ASC')->findAll();
            $datos['editoriales'] = $editoriales->orderBy('idEditorial', 'ASC')->findAll();
            $datos['categorias'] = $categorias->orderBy('idCategoria', 'ASC')->findAll();

            $datos['validation'] = $this->validator;
            $datos['header'] = view('admin/template/header');
            $datos['sidebar'] = view('admin/template/sidebar');
            $datos['footer'] = view('admin/template/footer');
            return view('admin/libro/create', $datos);
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
        helper(['form']);
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
        helper(['form']);
        $rules = [
            'titulo'      => 'required|min_length[4]|max_length[50]',
            'lugarEd'     => 'required|min_length[5]|max_length[50]',
            'anioPub'     => 'required|integer|min_length[4]|max_length[4]',
            'numPaginas'  => 'required|integer|min_length[1]|max_length[11]',
            'numEdicion'  => 'required|integer|min_length[1]|max_length[11]',
        ];

        if($this->validate($rules)){
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
        }else{
            $autores = new Autor();
            $editoriales = new Editorial();
            $categorias = new Categorias();
    
            $datos['autores'] = $autores->orderBy('idAutor', 'ASC')->findAll();
            $datos['editoriales'] = $editoriales->orderBy('idEditorial', 'ASC')->findAll();
            $datos['categorias'] = $categorias->orderBy('idCategoria', 'ASC')->findAll();

            $datos['validation'] = $this->validator;
            $datos['header'] = view('admin/template/header');
            $datos['sidebar'] = view('admin/template/sidebar');
            $datos['footer'] = view('admin/template/footer');
            return view('admin/libro/create', $datos);
        }
    }
}
