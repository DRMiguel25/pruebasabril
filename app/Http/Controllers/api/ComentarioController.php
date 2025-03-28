<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Comentario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComentarioController extends Controller
{
    public function index(Request $request)
    {
        // Paginación y retorno de comentarios
    }

    public function create(Request $request)
    {
        // Validación y creación de comentario
    }

    public function show($id)
    {
        // Mostrar un comentario
    }

    public function update(Request $request, $id)
    {
        // Actualización de comentario
    }

    public function destroy($id)
    {
        // Eliminación de comentario
    }
}
