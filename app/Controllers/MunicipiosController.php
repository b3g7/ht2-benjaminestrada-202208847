<?php

namespace App\Controllers;

use App\Models\MunicipiosModel;

class MunicipiosController extends BaseController
{
    protected $municipiosModel;

    public function __construct()
    {
        $this->municipiosModel = new MunicipiosModel();
    }

// Método index predeterminado
public function index()
{
    // Lógica para mostrar la lista de municipios
    $municipios = $this->municipiosModel->findAll();

    return view('municipios/index', ['municipios' => $municipios]);
}


    public function crear()
    {
        return view('municipios/crear');
    }

    public function editar($cod_muni)
    {
        // Lógica para editar el municipio
        $municipio = $this->municipiosModel->find($cod_muni);

        if (!$municipio) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('municipios/editar', ['municipio' => $municipio]);
    }
}
