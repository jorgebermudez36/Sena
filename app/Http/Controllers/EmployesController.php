<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\employes;
use Illuminate\Http\Request;

class EmployesController extends Controller
{
    /**
     * Create a new flight instance.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index()
    {
        $employe = Employes::all();
        $array = array(
            'status' => 200,
            'msj' => 'consulta exitosa'
        );
        return [
            'data' => $employe,
            'response' => $array
        ];
    }

    public function select()
    {
        $employe = Employes::select('id', 'dniE')->get();
        return ['data' => $employe];
    }


    public function load(Request $request)
    {
        $employe = new Employes;
        $employe->dniE = $request->ident;
        $employe->nameE = $request->name;
        $employe->surnameE = $request->surname;
        $employe->addres = $request->addres;
        $employe->email = $request->mail;
        $employe->phone = $request->phone;
        $employe->cargo_id = $request->cargo;
        $employe->save();
    }

    public function update(Request $request)
    {
        $employe = Employes::find($request->id);
        $employe->dniE = $request->ident;
        $employe->nameE = $request->name;
        $employe->surnameE = $request->surname;
        $employe->addres = $request->addres;
        $employe->email = $request->mail;
        $employe->phone = $request->phone;
        $employe->cargo_id = $request->cargo;
        $employe->save();
    }

    public function delete(Request $request)
    {
        $employe = Employes::find($request->id);
        $employe->delete();
    }
}
