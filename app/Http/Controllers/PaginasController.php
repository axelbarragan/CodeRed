<?php

namespace Codered\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function contacto() {
    	return 'contacto';
    }

    public function perfil() {
    	return 'perfil';
    }

    public function index() {
    	return view('index');
    }
}
