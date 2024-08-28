<?php 
namespace App\Models;

use CodeIgniter\Model;

class Ciudadanos extends Model{
    protected $table      = 'ciudadanos';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'dpi';
    protected $allowedfields = ['dpi', 'apellido', 'nombre', 'direccion', 'tel_casa', 'tel_movil', 'email', 'fechanac 1', 'cod_nivel_acad', 'lugar_nacimiento'];
}