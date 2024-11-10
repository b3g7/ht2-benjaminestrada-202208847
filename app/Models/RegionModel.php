<?php

namespace App\Models;

use CodeIgniter\Model;

class RegionModel extends Model
{
    protected $table      = 'regiones';
    protected $primaryKey = 'cod_region';
    protected $allowedFields = ['cod_region', 'nombre', 'descripcion'];

    // No usar timestamps, ya que la tabla no los tiene
    protected $useTimestamps = false;
}
