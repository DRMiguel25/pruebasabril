<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Favoritos;
use Illuminate\Http\Request;

class FavoritosController extends Controller
{
    public function index(Request $request)
    {
        // Paginación y retorno de favoritos
    }

    public function create(Request $request)
    {
        // Lógica para agregar a favoritos
    }

    public function show($id)
    {
        // Mostrar favorito
    }

    public function destroy($id)
    {
        // Eliminar favorito
    }
}
