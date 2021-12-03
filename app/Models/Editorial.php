<?php 
namespace App\Models;

use CodeIgniter\Model;

class Editorial extends Model{
    protected $table      = 'Editoriales';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'idEditorial';
    protected $allowedFields = ['nombreEd'];
}