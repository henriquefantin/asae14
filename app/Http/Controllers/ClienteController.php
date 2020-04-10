<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class ClienteController extends Controller
{
     function telaCadastro(){
         if(session()->has("login")){
    	return view("cadastro_clientes");
        }
        return redirect()->route('tela_login');
    }

    function telaAlteracao($id){
         if(session()->has("login")){
        $usuario = Usuario::find($id);

        return view("tela_alterar_cliente", [ "u" => $usuario ]);
        }
        return redirect()->route('tela_login');
    }

    function alterar(Request $req, $id){
        if(session()->has("login")){
        $usuario = Usuario::find($id);

        $nome = $req->input('nome');
        $endereco = $req->input('endereco');
        $cep = $req->input('cep');
        $cidade = $req->input('cidade');
        $estado = $req->input('estado');
    
        $usuario->nome = $nome;
        $usuario->endereco = $endereco;
        $usuario->cep = $cep;
        $usuario->cidade = $cidade;
        $usuario->estado = $estado;

        if ($usuario->save()){
            $msg = "Cliente $nome alterado com sucesso.";
        } else {
            $msg = "Cliente não foi alterado.";
        }

        return view("retorno", [ "mensagem" => $msg]);
        }
        return redirect()->route('tela_login');
    }

    function excluir($id){
        if(session()->has("login")){
        $usuario = Usuario::find($id);

        if ($usuario->delete()){
            $msg = "Cliente $id excluído com sucesso.";
        } else {
            $msg = "Cliente não foi excluído.";
        }

        return view("retorno", [ "mensagem" => $msg]);
        }
        return redirect()->route('tela_login');
    }

    function adicionar(Request $req){
        if(session()->has("login")){
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
        return redirect()->route('tela_login');
    }

    function listar(){    	
        if(session()->has("login")){
            $usuarios = Usuario::all();

            return view("lista", [ "us" => $usuarios ]);
        }
        return redirect()->route('tela_login');
    }
}
 