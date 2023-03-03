<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\inventories;
use Illuminate\Http\Request;

class InventoriesController extends Controller
{
    /**
     * Create a new flight instance.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index()
    {
        $inventories = Inventories::all();
        $array = array(
            'status' => 200,
            'msj' => 'consulta exitosa'
        );
        return [
            'data' => $inventories,
            'response' => $array
        ];
    }

    public function select()
    {
        $inventories = Inventories::select('id', 'nameItem')->get();
        return ['data' => $inventories];
    }

    public function load(Request $request)
    {
        $inventories = new Inventories;
        $inventories->nameItem = $request->Item;
        $inventories->quantity = $request->Cantidad;
        $inventories->appearance = $request->presentacion;
        $inventories->unit = $request->unidad;
        $inventories->inQty = $request->entrada;
        $inventories->outQty = $request->salida;
        $inventories->balanceItem = $request->existencia;
        $inventories->purchasePrice = $request->Preciobuy;
        $inventories->salePrice = $request->Preciosale;

        $inventories->save();
    }

    public function update(Request $request)
    {
        $inventories = Inventories::find($request->id);
        $inventories->nameItem = $request->Item;
        $inventories->quantity = $request->Cantidad;
        $inventories->appearance = $request->presentacion;
        $inventories->unit = $request->unidad;
        $inventories->inQty = $request->entrada;
        $inventories->outQty = $request->salida;
        $inventories->balanceItem = $request->existencia;
        $inventories->purchasePrice = $request->Preciobuy;
        $inventories->salePrice = $request->Preciosale;

        $inventories->save();
    }

    public function delete(Request $request)
    {
        $inventories = Inventories::find($request->id);
        $inventories->delete();
    }
}
