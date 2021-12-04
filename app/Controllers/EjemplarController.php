<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Ejemplares;
class EjemplarController extends Controller{

    public function adminlistarejemplar()
    {
        $datos['header'] = view('admin/template/header');
        $datos['sidebar'] = view('admin/template/sidebar');
        $datos['footer'] = view('admin/template/footer');

        return view('admin/ejemplar/listar', $datos);
    }


    public function admincrearejemplar()
    {
        $datos['header'] = view('admin/template/header');
        $datos['sidebar'] = view('admin/template/sidebar');
        $datos['footer'] = view('admin/template/footer');

        return view('admin/ejemplar/create', $datos);
    }


    public function admineditarejemplar()
    {
        $datos['header'] = view('admin/templates/header_edit');
        $datos['footer'] = view('admin/templates/footer_edit');

        return view('admin/ejemplar/edit', $datos);
    }

}