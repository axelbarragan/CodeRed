<?php

namespace Codered;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
	//Especificamos la tabla a la cual se debe conectar
	public $table = 'usuarios';
	//Declaramos la cancelación del timestamps
	public $timestamps = false;
	//Usamos protected $hidden para evitar mostrar un dato
	protected $hidden = [
		'clave',
	];

}
