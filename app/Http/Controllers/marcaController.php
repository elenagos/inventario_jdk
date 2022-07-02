<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;

class marcaController extends Controller
{
    function insertar(Request $req){
        $marca=new Marca();

        $marca->nombre_marca=$req->nombre_marca;
        $marca->estatus=1;

        $marca->save();
        return "Guardado!";

    }
}
