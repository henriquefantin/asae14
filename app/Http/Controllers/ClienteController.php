<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class ClienteController extends Controller
{
     function telaCadastro(){
    	return view("cadastro_clientes");
    }

    function adicionar(Request $req){
    	$nome = $req->input('nome');
    	$endereco = $req->input('endereco');
    	$cep = $req->input('cep');
    	$cidade = $req->input('cidade');
    	$estado = $req->input('estado');
    
    	$usuario = new Usuario();
    	$usuario->nome = $nome;
    	$usuario->endereco = $endereco;
    	$usuario->cep = $cep;
    	$usuario->cidade = $cidade;
    	$usuario->estado = $estado;
    	
    	if ($usuario->save()){
    		$msg = "Usuário $nome cadastrado com sucesso.";
    	}else{
    		$msg = "Usuário não foi cadastrado.";
    	}

    	return view("retorno", [ "mensagem" => $msg ]);
    }

    function listar(){
    	$usuarios = Usuario::all();

    	return view("lista", [ "us" => $usuarios ]);
    }
}
 