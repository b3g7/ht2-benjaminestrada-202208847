<?php

namespace App\Models;

use CodeIgniter\Model;

class MunicipiosModel extends Model
{
    protected $table      = 'municipios';  // Nombre de la tabla en la base de datos
    protected $primaryKey = 'cod_muni';

    protected $allowedFields = ['nombre_municipio', 'cod_depto'];  // Los campos que se pueden insertar/actualizar

    // Otros métodos o configuraciones que necesites
}
