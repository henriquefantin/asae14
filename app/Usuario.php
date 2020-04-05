<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
	protected $table = 'clientes';
	protected $primaryKey = 'id';

	function vendas(){
		return $this->hasMany('App\Venda', 'id_cliente', 'id');
	}
}
