<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Venda;
use App\Produto;

class VendaController extends Controller
{
    function telaCadastroVendas(){
         if(session()->has("login")){
            $usuarios = Usuario::all();
            return view("venda_cliente", ["usuarios" => $usuarios]);
         }
        return redirect()->route('tela_login');
    }

    function adicionar(Request $req){
         if(session()->has("login")){
            $id_cliente = $req->input('id_cliente');
    	#$descricao = $req->input('descricao');
    	#$valor = $req->input('valor');
    	
    	$venda = new Venda();
        $venda->valor = 0;# $valor;
        $venda->id_cliente = $id_cliente;
    	
    	if ($venda->save()){
            $msg = "Venda adicionada com sucesso.";
        } else {
            $msg = "Venda não foi cadastrada.";
        }

        return redirect()->route('vendas_item_novo', ['id' => $venda->id]);
    	//return view("retorno_venda", [ "mensagem" => $msg ]);
         }
        return redirect()->route('tela_login');
    }

    function listar($id){
        if(session()->has("login")){
    	$vendas = Venda::all();
    	$usuarios = Usuario::find($id)->vendas;

    	return view("lista_vendas", [ "vendas" => $usuarios ]);
        }
        return redirect()->route('tela_login');
    }

    function listarG(){
        $vendas = Venda::all();
        return view('lista_vendas_geral', [ 'vendas' => $vendas ]);
    }

    function itensVenda($id){
        $venda = Venda::find($id);
        return view('lista_itens_venda', ['vendas' => $venda]);
    }

    function telaAdicionarItem($id){
        $venda = Venda::find($id);
        $produtos = Produto::all();
        return view('tela_cadastro_itens', ['vendas' => $venda, 'produtos' => $produtos]);
    }

    function adicionarItem(Request $req, $id){
        $id_produto = $req->input('id_produto');
        $id_produto = $req->input('quantidade');
        $produto = Produto::find($id_produto);
        $venda = Venda::find($id);
        $subtotal = $produto->preco * $quantidade;

        $colunas_pivot = [
            'quantidade' => $quantidade,
            'subtotal' => $subtotal
        ];
        $venda->produtos()->attach($produto->id, $colunas_pivot);
        $venda->valor += $subtotal;
        $venda->save();

        return redirect()->rout('vendas_item_novo', ['id' => $venda->id]);
    }

    function excluirItem($id, $idProduto){
        $venda = Vneda::find($id);
        $subtotal = 0;
        foreach ($venda->produtos as $vp) {
            if($vp->id == $idProduto){
                $subtotal = $vp->pivot->subtotal;
                break;
            }
        }
        $venda->valor = $venda->valor - $
        $venda->save();
        $venda->produtos()->datach($id_produto);

        return redirect()->rout('vendas_item_novo', ['id' => $id]);
    }
}
