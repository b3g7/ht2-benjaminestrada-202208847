<?php

namespace App\Controllers;

use App\Models\RegionModel;

class RegionesController extends BaseController
{
    protected $regionModel;

    public function __construct()
    {
        $this->regionModel = new RegionModel();
    }

    public function index()
    {
        $data['regiones'] = $this->regionModel->findAll();
        return view('regiones/index', $data);
    }

    // Otros métodos (crear, guardar, editar, actualizar, eliminar)...
}
