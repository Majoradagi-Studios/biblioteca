<?php 
namespace App\Models;

use CodeIgniter\Model;

class Ejemplares extends Model{
    protected $table      = 'ejemplares';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'idEjemplar';
    protected $allowedFields = [
        'ejemplar',
        'estado',
        'idLibro'
    ];
}