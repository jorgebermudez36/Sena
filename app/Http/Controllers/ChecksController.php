<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\checks;
use Illuminate\Http\Request;

class ChecksController extends Controller
{
    /**
     * Create a new flight instance.
     *
     * @param  Request  $request
     * @return Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $checks = Checks::all();
        $array = array(
            'status' => 200,
            'msj' => 'consulta exitosa'
        );
        return [
            'data' => $checks,
            'response' => $array
        ];
    }

    public function select()
    {
        $checks = Checks::select('id', 'nameItem_Id')->get();
        return ['data' => $checks];
    }

    public function load(Request $request)
    {
        $checks = new Checks;
        $checks->sequence = $request->consec;
        $checks->qtyItem = $request->cantItem;
        $checks->subtotal = $request->subtotal;
        $checks->discount = $request->descuento;
        $checks->total = $request->total;

        $checks->dniC_Id = $request->cedClien;
        $checks->nameC_Id = $request->nameClien;
        $checks->surnameC_Id = $request->apellClien;
        $checks->nameItem_Id = $request->nombreItem;
        $checks->dniE_id = $request->cedEmploy;
        $checks->nameE_id = $request->nameEmploy;

        $checks->save();
    }

    public function update(Request $request)
    {
        $checks = Checks::find($request->id);
        $checks->sequence = $request->consec;
        $checks->qtyItem = $request->cantItem;
        $checks->subtotal = $request->subtotal;
        $checks->discount = $request->descuento;
        $checks->total = $request->total;
        $checks->dniC_Id = $request->cedClien;
        $checks->nameC_Id = $request->nameClien;
        $checks->surnameC_Id = $request->apellClien;
        $checks->nameItem_Id = $request->nombreItem;
        $checks->dniE_id = $request->cedEmploy;
        $checks->nameE_id = $request->nameEmploy;

        $checks->save();
    }

    public function delete(Request $request)
    {
        $checks = Checks::find($request->id);
        $checks->delete();
    }
}
