<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Usuarios;

class SigninController extends Controller{

    public function index()
    {
        helper(['form']);
        echo view('Usuarios/signin');
    } 
  
    public function loginAuth()
    {
        $session = session();

        $usuario = new Usuarios();

        $matricula = $this->request->getVar('matricula');
        $password = $this->request->getVar('password');
        
        $data = $usuario->where('matricula', $matricula)->first();
        
        if($data){
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){
                $ses_data = [
                    'idUsuario' => $data['idUsuario'],
                    'nombre' => $data['nombre'],
                    'matricula' => $data['matricula'],
                    'isLoggedIn' => TRUE
                ];

                $session->set($ses_data);
                return redirect()->to('/catalogo');
            
            }else{
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/signin');
            }

        }else{
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('/signin');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/signin');
    }

}