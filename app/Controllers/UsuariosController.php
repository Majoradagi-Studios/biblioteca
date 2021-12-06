<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Usuarios;

class UsuariosController extends Controller{

    public function adminlistarusuario()
    {
        $usuarios =  new Usuarios();

        $datos['usuarios'] = $usuarios->orderBy('matricula','DESC')->findAll();
        $datos['header'] = view('admin/template/header');
        $datos['sidebar'] = view('admin/template/sidebar');
        $datos['footer'] = view('admin/template/footer');

        return view('/admin/usuario/listar', $datos);
    }

    public function admincrearusuario()
    {
        helper(['form']);

        $datos['header'] = view('admin/template/header');
        $datos['sidebar'] = view('admin/template/sidebar');
        $datos['footer'] = view('admin/template/footer');

        return view('admin/usuario/create', $datos);
    }

    public function adminguardarusuario()
    {
        
        helper(['form']);
        $rules = [
            'matricula'       => 'required|min_length[8]|max_length[10]|is_unique[usuarios.matricula]',
            'nombre'          => 'required|min_length[3]|max_length[100]',
            'apellidoP'       => 'required|min_length[3]|max_length[50]',
            'apellidoM'       => 'required|min_length[3]|max_length[50]',
            'grupo'           => 'required|min_length[2]|max_length[15]',
            'password'        => 'required|min_length[8]|max_length[150]',
            'confirmpassword' => 'matches[password]',
        ];

        if($this->validate($rules)){
            $usuario = new Usuarios();

            $datos = [
                'matricula'     => $this->request->getVar('matricula'),
                'nombre'     => $this->request->getVar('nombre'),
                'apellidoP'     => $this->request->getVar('apellidoP'),
                'apellidoM'     => $this->request->getVar('apellidoM'),
                'grupo'    => $this->request->getVar('grupo'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'rol' => $this->request->getVar('idCategoria'),
            ];

            $usuario->save($datos);

            return redirect()->to('/admin/usuario/listar');
        }else{
            $datos['validation'] = $this->validator;
            $datos['header'] = view('admin/template/header');
            $datos['sidebar'] = view('admin/template/sidebar');
            $datos['footer'] = view('admin/template/footer');
            return view('admin/usuario/create', $datos);
        }

    }

    public function adminborrarusuario($idUsuario)
    {
        $usuario = new Usuarios();
        $datos=$usuario->where('idUsuario', $idUsuario)->first();
        $usuario->where('idUsuario',$idUsuario)->delete($idUsuario);
        return $this->response->redirect(base_url('/admin/usuario/listar'));
    }

}