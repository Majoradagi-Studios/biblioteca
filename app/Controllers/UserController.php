<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Usuarios;
class UserController extends Controller{

    public function index()
    {
        return view('Usuarios/login');
    }

    public function login()
    {
        
        return view('Usuarios/listar');
    }

}