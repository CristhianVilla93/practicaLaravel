<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function create(Request $datos){
        $newuser = new Usuario();
        $newuser->nombre = $datos->nombre;
        $newuser->apellido = $datos->apellido;
        $newuser->correo = $datos->correo;
        $newuser->contra = $datos->contra;
        $newuser->save();

        return "Agregado exitosamente";

    }
}
