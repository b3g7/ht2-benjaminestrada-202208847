<?php

namespace App\Models;

use CodeIgniter\Model;

class DepartamentosModel extends Model
{
    protected $table      = 'departamentos';
    protected $primaryKey = 'cod_depto';
    
    // Los campos que se pueden insertar o actualizar
    protected $allowedFields = ['nombre_depto', 'cod_region'];

    // Si necesitas hacer auto timestamp, puedes incluir estas configuraciones (opcional)
    protected $useTimestamps = false;

    // Relación con la tabla 'regiones'
    public function getRegion($cod_region)
    {
        return $this->where('cod_region', $cod_region)->first();
    }

    public function delete($id = null, bool $purge = false)
{
    if ($id) {
        // Verifica si el departamento realmente existe antes de eliminarlo
        $departamento = $this->where('cod_depto', $id)->first();
        if ($departamento) {
            return $this->db->table($this->table)->where('cod_depto', $id)->delete();
        } else {
            log_message('error', 'El departamento con ID ' . $id . ' no existe.');
            return false; // Si el departamento no existe, no se realiza la eliminación
        }
    }
    return false;
}

}
