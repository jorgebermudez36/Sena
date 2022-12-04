<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\cargos;
use Illuminate\Http\Request;


class CargosController extends Controller
{
    /**
     * Create a new flight instance.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index()
    {
        $cargos = Cargos::all();
        $array = array(
            'status' => 200,
            'msj' => 'consulta exitosa'
        );
        return [
            'data' => $cargos,
            'response' => $array
        ];
    }

    public function select()
    {
        $cargos = Cargos::select('id', 'cargo')->get();
        return ['data' => $cargos];
    }

    public function load(Request $request)
    {
        $cargo = new cargos;

        $cargo->cargo = $request->name;
        $cargo->descripcion = $request->desc;
        $cargo->save();
    }

    public function update(Request $request)
    {
        $cargo = cargos::find($request->id);

        $cargo->cargo = $request->name;
        $cargo->descripcion = $request->desc;
        $cargo->save();
    }

    public function delete(Request $request)
    {
        $cargo = cargos::find($request->id);
        $cargo->delete();
    }
}
