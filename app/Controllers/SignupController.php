<?php 

namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\Usuarios;
  
class SignupController extends Controller
{
    public function index()
    {
        helper(['form']);
        $data = [];
        echo view('Usuarios/signup', $data);
    }
  
    public function store()
    {
        helper(['form']);
        $rules = [
            'matricula'         => 'required|min_length[4]|max_length[100]|is_unique[usuarios.matricula]',
            'nombre'          => 'required|min_length[2]|max_length[50]',
            'apellidoP'          => 'required|min_length[2]|max_length[50]',
            'apellidoM'          => 'required|min_length[2]|max_length[50]',
            'grupo'          => 'required|min_length[2]|max_length[50]',
            'password'      => 'required|min_length[4]|max_length[50]',
            'confirmpassword'  => 'matches[password]'
        ];
          
        if($this->validate($rules)){
            $userModel = new Usuarios();

            $data = [
                'matricula'     => $this->request->getVar('matricula'),
                'nombre'     => $this->request->getVar('nombre'),
                'apellidoP'     => $this->request->getVar('apellidoP'),
                'apellidoM'     => $this->request->getVar('apellidoM'),
                'grupo'    => $this->request->getVar('grupo'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'rol' => 0
            ];

            $userModel->save($data);

            return redirect()->to('/signin');
        }else{
            $data['validation'] = $this->validator;
            echo view('signup', $data);
        }
          
    }
  
}