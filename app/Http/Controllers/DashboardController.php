<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\dashboard;
use App\Models\cargos;
use Illuminate\Http\Request;


class DashboardController extends Controller
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
     }
    }*/

    public function select()
    {
        $cargos = Cargos::select('id', 'cargo', 'descripcion')->get();
        return ['data' => $cargos];
    }

    public function delete(Request $request)
    {
        $cargo = cargos::find($request->id);
        $cargo->delete();
    }
   
   
}
