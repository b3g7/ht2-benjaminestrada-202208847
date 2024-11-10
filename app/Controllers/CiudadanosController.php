<?php

namespace App\Controllers;

use App\Models\CiudadanosModel;

class CiudadanosController extends BaseController
{
    public function index()
    {
        $ciudadanosModel = new CiudadanosModel();
        $data['ciudadanos'] = $ciudadanosModel->findAll();
        
        return view('ciudadanos/index', $data);
    }
}
