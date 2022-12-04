<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\customers;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Create a new flight instance.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index()
    {
        $customer = Customers::all();
        $array = array(
            'status' => 200,
            'msj' => 'consulta exitosa'
        );
        return [
            'data' => $customer,
            'response' => $array
        ];
    }

    public function select()
    {
        $customer = Customers::select('id', 'dniC')->get();
        return ['data' => $customer];
    }

    public function load(Request $request)
    {
        // Validate the request...

        $customer = new Customers;

        $customer->dniC = $request->ident;
        $customer->nameC = $request->name;
        $customer->surnameC = $request->surname;
        $customer->email = $request->mail;
        $customer->cellphone = $request->phone;
        $customer->address = $request->address;

        $customer->save();
    }

    public function update(Request $request)
    {
        // Validate the request...

        $customer = Customers::find($request->id);

        $customer->dniC = $request->ident;
        $customer->nameC = $request->name;
        $customer->surnameC = $request->surname;
        $customer->email = $request->mail;
        $customer->cellphone = $request->phone;
        $customer->address = $request->address;

        $customer->save();
    }

    public function delete(Request $request)
    {
        $customer = Customers::find($request->id);
        $customer->delete();
    }
}
