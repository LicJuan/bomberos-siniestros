<?php

namespace App\Http\Controllers;

use App\TipoHerramienta;
use Illuminate\Http\Request;

class TipoHerramientaController extends Controller
{

    public function index()
    {
        $tipos = TipoHerramienta::all();
        return response()->json([
            'data' => $tipos
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'descripcion' => 'required'
        ]);
        $newTipo = new TipoHerramienta($request->all());
        $newTipo->save();
        return response()->json([
            "message" => "El recurso ha sido creado"
        ], 201);
    }

    public function show(TipoHerramienta $tipoHerramienta)
    {
        return response()->json([
            'data' => $tipoHerramienta
        ], 200);
    }

    public function update(Request $request, TipoHerramienta $tipoHerramienta)
    {
        $tipoHerramienta->update($request->all());
        return response()->json(["message" => "El recurso ha sido actualizado"], 200);

    }

    public function destroy(TipoHerramienta $tipoHerramienta)
    {
        $tipoHerramienta->delete();
        return response()->json(["message" => "El recurso ha sido eliminado"], 200);
    }
}
