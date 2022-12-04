<?php

namespace App\Http\Controllers;

use App\Models\dailybook;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DailybookController extends Controller
{
    public function index()
    {
        $dailybook = Dailybook::all();
        $array = array(
            'status' => 200,
            'msj' => 'consulta exitosa'
        );
        return [
            'data' => $dailybook,
            'response' => $array
        ];
    }
    public function select()
    {
        $dailybook = Dailybook::select('id', 'regBuy')->get();
        return ['data' => $dailybook];
    }
    public function load(Request $request)
    {
        $dailybook = new Dailybook;

        $dailybook->sequence = $request->consec;
        $dailybook->regBuy = $request->compras;
        $dailybook->regExpenses = $request->gastos;
        $dailybook->sequence_Id = $request->consecfact;
        $dailybook->total_Id = $request->totalfact;
        $dailybook->save();
    }
    public function update(Request $request)
    {
        $dailybook = Dailybook::find($request->id);

        $dailybook->sequence = $request->consec;
        $dailybook->regBuy = $request->compras;
        $dailybook->regExpenses = $request->gastos;
        $dailybook->sequence_Id = $request->consecfact;
        $dailybook->total_Id = $request->totalfact;
        $dailybook->save();
    }
    public function delete(Request $request)
    {
        $dailybook = Dailybook::find($request->id);
        $dailybook->delete();
    }
}
