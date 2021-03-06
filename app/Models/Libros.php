<?php 
namespace App\Models;

use CodeIgniter\Model;

class Libros extends Model{
    protected $table      = 'libros';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'idLibro';
    protected $allowedFields = [
        'titulo',
        'lugarEd',
        'anioPub',
        'numPaginas',
        'numEdicion',
        'idAutor',
        'idEditorial',
        'idCategoria',
        'imagen'
    ];
}