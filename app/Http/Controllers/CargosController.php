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
    /*public function post($postId)
     {
        $post = Post::find($postId);
        return view('post', ['post' => $post]);
     }*/

    public function index()
    {
        $cargos = Cargos::all();
        return response()->json($cargos);
    }

    public function store(Request $request)
    {
        $request->validate([
            'cargo' => ['required'],
            'desc' => ['required']
        ]);

        $cargo = new Cargos;

        $cargo->cargo = $request->cargo;
        $cargo->descripcion = $request->desc;
        $cargo->save();
    }
    
    public function edit($id)
    {
        $cargo = Cargos::find($id);
        return view('editcarg', ['cargo' => $cargo]);
    }

    

    public function update(Request $request)
    {
        $request->validate([
            'cargo' => ['required'],
            'desc' => ['required']
        ]);

        $cargo = Cargos::find($request->id);
        $cargo->cargo = $request->cargo;
        $cargo->descripcion = $request->desc;
        $cargo->save();

        return response()->json(['message' => 'cargo update successfully']);
        /* return view('showcarg'); */
    }

    public function destroy(Request $request)
    {
        $cargo = Cargos::find($request->id);
        $cargo->delete();
        return ['message' => "Cargo deleted"];
        return view('showcarg');
    }

    public function select()
    {
        $cargo = Cargos::select()->get();
        return ['data' => $cargo];
    }

    public function show($id)
    {
        $cargo = Cargos::find($id);
        return response()->json([$cargo]);
    }

    
}


