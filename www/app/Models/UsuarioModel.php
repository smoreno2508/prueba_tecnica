<?php 
namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model{
    //con estas variables es suficiente para trabajar con el modelo 
    protected $table      = 'usuarios';
   
    protected $primaryKey = 'id';

    protected $allowedFields = ['nombre', 'email', 'fecha_registro'];
}