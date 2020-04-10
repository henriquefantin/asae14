<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Venda;

class VendaController extends Controller
{
    function telaCadastroVendas($id){
         if(session()->has("login")){
        $usuario = Usuario::find($id);

        return view("venda_cliente", [ "u" => $usuario ]);
         }
        return redirect()->route('tela_login');
    }

    function adicionar(Request $req, $id){
         if(session()->has("login")){
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
        return redirect()->route('tela_login');
    }

    function listar($id){
        if(session()->has("login")){
    	$vendas = Venda::all();
    	$usuarios = Usuario::find($id)->vendas;

    	return view("lista_vendas", [ "vs" => $usuarios ]);
        }
        return redirect()->route('tela_login');
    }
}
