<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Autores;

class  AutoresController extends Controller{
    public function index(){
        $sesion = session();
        return view('Autores/listar');
        }
}