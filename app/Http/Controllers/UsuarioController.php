<?php

namespace Codered\Http\Controllers;

use Illuminate\Http\Request;
//Agregamos el modelo que vayamos a usar
use Codered\Usuario;

class UsuarioController extends Controller
{
    public function usuario() {
    	//Todos los datos
    	$datos = Usuario::all();
    	//Datos con un where
    	# $datos = Usuario::all()->where('id', 3);

    	/*SE USA COMPACT PARA MANDAR DATOS JUNTO AL RETURN*/
    	return view('index', compact('datos'));
    }
}
