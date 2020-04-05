<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Venda;
class VendaController extends Controller
{
    function telaCadastroVendas($id){
        $usuario = Usuario::find($id);

        return view("venda_cliente", [ "u" => $usuario ]);
    }

    function adicionar(Request $req, $id){
    	$descricao = $req->input('descricao');
    	$valor = $req->input('valor');
    	
    	$venda = new Venda();
    	$venda->id_cliente = $id;
    	$venda->descricao = $descricao;
    	$venda->valor = $valor;
    	
    	if ($venda->save()){
    		$msg = "Produto $descricao cadastrado com sucesso.";
    	}else{
    		$msg = "Produto não foi cadastrado.";
    	}

    	return view("retorno_venda", [ "mensagem" => $msg ]);
    }

    function listar($id){
    	$vendas = Venda::all();
    	$usuarios = Usuario::find($id)->vendas;

    	return view("lista_vendas", [ "vs" => $usuarios ]);
    }
}
