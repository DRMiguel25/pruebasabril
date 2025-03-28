<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Direccion;
use Illuminate\Http\Request;

class DireccionController extends Controller
{
    public function index(Request $request)
    {
        // Lógica para mostrar todas las direcciones
    }

    public function create(Request $request)
    {
        // Lógica para crear una nueva dirección
    }

    public function show($id)
    {
        // Mostrar dirección específica
    }

    public function update(Request $request, $id)
    {
        // Actualizar dirección
    }

    public function destroy($id)
    {
        // Eliminar dirección
    }
}
