<?php

namespace App\Controllers;

use App\Models\DepartamentosModel;

class DepartamentosController extends BaseController
{
    protected $departamentosModel;

    public function __construct()
    {
        $this->departamentosModel = new DepartamentosModel();
    }

    // Listar todos los departamentos
    public function index()
    {
        $departamentos = $this->departamentosModel->findAll();
        return view('departamentos/index', ['departamentos' => $departamentos]);
    }

    // Mostrar formulario para crear un nuevo departamento
    public function crear()
    {
        return view('departamentos/crear');
    }

    // Guardar un nuevo departamento
    public function guardar()
    {
        $data = [
            'nombre_depto' => $this->request->getPost('nombre_depto'),
            'cod_region'    => $this->request->getPost('cod_region'),
        ];
        

        $this->departamentosModel->save($data);
        return redirect()->to('/departamentos');
    }

    // Mostrar formulario para editar un departamento
    public function editar($id)
    {
        $departamento = $this->departamentosModel->find($id);
        return view('departamentos/editar', ['departamento' => $departamento]);
    }

    // Actualizar un departamento
    public function actualizar()
    {
        $id = $this->request->getPost('cod_depto');
        $data = [
            'nombre_depto' => $this->request->getPost('nombre_depto'),
            'cod_region'   => $this->request->getPost('cod_region'),
        ];

        $this->departamentosModel->update($id, $data);
        return redirect()->to('/departamentos');
    }

    // Eliminar un departamento
    public function eliminar($id)
{
    if ($id) {
        // Llamar al método delete() con el id
        $this->departamentosModel->delete($id);
    }
    return redirect()->to('/departamentos'); // Redirigir a la lista de departamentos
}

}
