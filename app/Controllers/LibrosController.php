<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\libros;
class LibrosController extends Controller{

    public function index()
    {
        return view('catalogo');
    }
}