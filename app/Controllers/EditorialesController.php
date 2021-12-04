<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Editorial;

class EditorialesController extends Controller{

    public function index(){

        $editorial = new Editorial();
        $datos['editoriales'] = $editorial->orderBy('idEditorial','ASC')->findAll();

        $datos['header'] = view('admin/template/header');
        $datos['sidebar'] = view('admin/template/sidebar');
        $datos['footer'] = view('admin/template/footer');

        return view('admin/editorial/listar',$datos);
    }

    public function create(){

        $datos['header'] = view('admin/template/header');
        $datos['sidebar'] = view('admin/template/sidebar');
        $datos['footer'] = view('admin/template/footer');

        return view('admin/editorial/create', $datos);
    }

    public function guardar(){

        $editorial = new Editorial();
        
        $session = session();

        $validacion = $this->validate([
            'nombreEd'=>'required|min_length[3]|max_length[50]'
        ]);

        
            if($nombreEd=$this->request->getVar('nombre')){
                $datos=[
                    'nombreEd'=>$this->request->getVar('nombre')
                ];

                $editorial->insert($datos);

                return $this->response->redirect(base_url('admin/editorial/listar'));
            }else{
                $session->setFlashdata('msg', 'Verifica que hayas llenado el campo y que tenga más de tres caracteres y menos de 50.');
                return $this->response->redirect(base_url('admin/editorial/create'));
            }

            

            
        
        
        }

        
//        helper(['form']);
//        $rules = [
//            'nombre'=>'required|min_length[3]|max_length[100]'
//            
//        ];
//          
//        if($this->validate($rules)){
//            $editorial = new editorial();
//    
//            $datos = [
//                'nombreEd'=>$this->request->getVar('nombre')
//            ];
//    
//            $editorial->save($datos);
//    
//            return redirect()->to('admin/editorial/listar');
//        }else{
//            $datos['validation'] = $this->validator;
//            echo view('admin/editorial/create', $datos);
//        }




//
//        $validacion = $this->validate([
//            'nombreEd'=>'required|min_length[3]|max_length[50]'
//        ]);
//          
//        if(!$validacion){
//            $editorial = new editorial();
//    
//            $datos = [
//                'nombreEd'=>$this->request->getVar('nombre')
//            ];
//   
//            $editorial->save($datos);
//    
//            return $this->response->redirect(base_url('admin/editorial/listar'));
//        }else{
//            $datos['validacion'] = $this->validator;
//            echo view('editorial/create', $datos);
//        }
   
    
//}

    public function borrar($idEditorial=null){
        $editorial = new Editorial();
        $datosEditorial = $editorial->where('idEditorial',$idEditorial)->first();

        $editorial->where('idEditorial',$idEditorial)->delete($idEditorial);

        return $this->response->redirect(base_url('admin/editorial/listar'));

    }

    public function edit($idEditorial=null){

       
        $editorial = new Editorial();
        $datos['editorial'] = $editorial->where('idEditorial',$idEditorial)->first();

        $datos['header'] = view('admin/templates/header_edit');
        $datos['footer'] = view('admin/templates/footer_edit');


        return view('admin/editorial/edit',$datos);
    }

    public function actualizar(){
        $editorial = new editorial();
    
            $datos = [
                'nombreEd'=>$this->request->getVar('nombre')
            ];
            $idEditorial = $this->request->getVar('idEditorial');
            $editorial->update($idEditorial,$datos);

            return $this->response->redirect(base_url('admin/editorial/listar'));
    }


}