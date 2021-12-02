<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\libros;
class LibrosController extends Controller{

    public function index()
    {
        $session = session();
        // echo "Hello : ".$session->get('nombre');
        echo "Cargando...";
        return view('catalogo');
    }
}