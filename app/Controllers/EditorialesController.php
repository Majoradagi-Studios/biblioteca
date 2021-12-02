<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Editorial;

class EditorialesController extends Controller{

    public function index(){

        $editorial = new Editorial();
        $datos['editoriales'] = $editorial->orderBy('idEditorial','ASC')->findAll();

        return view('admin/editorial/listar',$datos);
    }

    public function create(){

        return view('admin/editorial/create');
    }

    public function guardar(){

        helper(['form']);
        $rules = [
            'nombre'=>'required|min_length[3]|max_length[100]'
            
        ];
          
        if($this->validate($rules)){
            $editorial = new editorial();
    
            $datos = [
                'nombreEd'=>$this->request->getVar('nombre')
            ];
    
            $editorial->save($datos);
    
            return redirect()->to('admin/editorial/listar');
        }else{
            $datos['validation'] = $this->validator;
            echo view('editorial/create', $datos);
        }
   
    
    }

    public function edit(){
        
        return view('admin/editorial/edit');
    }

}