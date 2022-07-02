<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class proveedorController extends Controller
{
    function insertar(Request $req){
        $proveedor=new Proveedor();

        $proveedor->nombre_prov=$req->nombre_prov;
        $proveedor->telefono=$req->telefono;
        $proveedor->estatus=1;

        $proveedor->save();
        return "Guardado!";

    }
}
