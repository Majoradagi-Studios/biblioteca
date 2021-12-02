<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Autores;

class  AutoresController extends Controller{

public function index(){
        return view('Autores/listar');
    }

public function registrar(){
    return view('Autores/registrar');
}
}